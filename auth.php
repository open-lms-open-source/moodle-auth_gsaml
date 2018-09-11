<?php
/**
* Copyright (C) 2009  Blackboard Inc.
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
* 
* @copyright  Copyright (c) 2009 Blackboard Inc. (http://www.blackboard.com)
* @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
* @author Chris Stones
*/
 
if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->libdir.'/authlib.php');
require_once($CFG->libdir.'/weblib.php');

// include SAML for gsaml_send_auth_response
require_once($CFG->dirroot.'/auth/gsaml/samllib.php');


/**
 * SAML Authentication Plugin
 *
 * 
 * NOTE MOODLE must enforce Google's minium 6 char passwords!
 * http://www.google.com/support/a/bin/answer.py?answer=33386
 */
class auth_plugin_gsaml extends auth_plugin_base {
    
     
    /**
     * Constructor.
     */
    function __construct() {
         $this->authtype = 'gsaml';
         $this->loggedin = false;
         $this->config   = get_config('auth/gsaml');
    }

    /**
     * Post authentication hook.
     * This method is called from authenticate_user_login() for all enabled auth plugins.
     *
     * @param object $user user object, later used for $USER
     * @param string $username (with system magic quotes)
     * @param string $password plain text password (with system magic quotes)
     */
    function user_authenticated_hook(&$user, $username, $password) {
        global $SESSION, $CFG, $_REQUEST, $DB, $PAGE, $OUTPUT;

        // The Google SSO module will create a Google Apps account
        // if an account exists in Moodle but not Google Apps.
        // Hence, verify that user has a google account. If not create one for them.
        // NOTE: that this may take some time for google to process new users
        $this->trigger_gsaml_user_auth_event($user, $username, $password);


        // We are Succesfully logged in and we have a SAML Request
        // So we want to process the rest of the log in and redirect
        // to the Service that the SAML Request is asking for.
        //
        // All this code essentialy makes up for the fact that
        // we have to exit the login page prematurely.
        if (!empty($SESSION->samlrequestdata) and !empty($SESSION->samlrequest) and $SESSION->samlrequest === true) {
            $SESSION->samlrequest = false;

            add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','User has accessed gservice first', 0,0);

            if (!$user = $DB->get_record('user', array('username'=> $username, 'mnethostid'=> $CFG->mnet_localhost_id))) {
               // User could not be logged in
               print_error('errusernotloggedin', 'auth_gsaml');
            }

            if (!validate_internal_user_password($user, $password)) {
                // Password not valid
                print_error('pwdnotvalid', 'auth_gsaml');
            }
		        
            // Since we don't have another auth plugin hook to redirect a gsaml request in the case
            // that the user as tried to access Ex. Gmail before logging in to moodle we must complete
            // the users login procedures and then redirect them out. So we pull in the code from
            // login/index.php Line 116 (and on) add our redirect.

            // We can't Intercept 'restored' users to provide them with info & reset password
            // because we can't pass in the $frm object. But this shouldn't be a problem because
            // the only time we have to process this code is in the case the user accessed the google service
            // before being logged in.
            global $frm;
		        
            if ($user) {

                // language setup
                if (isguestuser($user)) {
                    // no predefined language for guests - use existing session or default site lang
                    unset($user->lang);

                } else if (!empty($user->lang)) {
                    // unset previous session language - use user preference instead
                    unset($SESSION->lang);
                }

                if (empty($user->confirmed)) {       // This account was never confirmed
                    $PAGE->set_title(get_string("mustconfirm"));
                    $PAGE->set_heading($site->fullname);
                    echo $OUTPUT->header();
                    echo $OUTPUT->heading(get_string("mustconfirm"));
                    echo $OUTPUT->box(get_string("emailconfirmsent", "", $user->email), "generalbox boxaligncenter");
                    echo $OUTPUT->footer();
                    die;
                }

                if ($frm->password == 'changeme') {
                    //force the change
                    set_user_preference('auth_forcepasswordchange', true, $user->id);
                }

            /// Let's get them all set up.
                add_to_log(SITEID, 'user', 'login', "view.php?id=$user->id&course=".SITEID,
                           $user->id, 0, $user->id);
                $USER = complete_user_login($user);

            /// Prepare redirection
                if (user_not_fully_set_up($USER)) {
                    $urltogo = $CFG->wwwroot.'/user/edit.php';
                    // We don't delete $SESSION->wantsurl yet, so we get there later

                } else if (isset($SESSION->wantsurl) and (strpos($SESSION->wantsurl, $CFG->wwwroot) === 0)) {
                    $urltogo = $SESSION->wantsurl;    /// Because it's an address in this site
                    unset($SESSION->wantsurl);

                } else {
                    // no wantsurl stored or external - go to homepage
                    $urltogo = $CFG->wwwroot.'/';
                    unset($SESSION->wantsurl);
                }

            /// Go to my-moodle page instead of site homepage if defaulthomepage set to homepage_my
                if (!empty($CFG->defaulthomepage) && $CFG->defaulthomepage == HOMEPAGE_MY && !is_siteadmin() && !isguestuser()) {
                    if ($urltogo == $CFG->wwwroot or $urltogo == $CFG->wwwroot.'/' or $urltogo == $CFG->wwwroot.'/index.php') {
                        $urltogo = $CFG->wwwroot.'/my/';
                    }
                } // diff


            /// check if user password has expired
            /// Currently supported only for ldap-authentication module
                $userauth = get_auth_plugin($USER->auth);
                if (!empty($userauth->config->expiration) and $userauth->config->expiration == 1) {
                    if ($userauth->can_change_password()) {
                        $passwordchangeurl = $userauth->change_password_url();
                        if (!$passwordchangeurl) {
                            $passwordchangeurl = $CFG->httpswwwroot.'/login/change_password.php';
                        }
                    } else {
                        $passwordchangeurl = $CFG->httpswwwroot.'/login/change_password.php';
                    }
                    $days2expire = $userauth->password_expire($USER->username);
                    $PAGE->set_title("$site->fullname: $loginsite");
                    $PAGE->set_heading("$site->fullname");
                    if (intval($days2expire) > 0 && intval($days2expire) < intval($userauth->config->expiration_warning)) {
                        echo $OUTPUT->header();
                        echo $OUTPUT->confirm(get_string('auth_passwordwillexpire', 'auth', $days2expire), $passwordchangeurl, $urltogo);
                        echo $OUTPUT->footer();
                        exit;
                    } elseif (intval($days2expire) < 0 ) {
                        echo $OUTPUT->header();
                        echo $OUTPUT->confirm(get_string('auth_passwordisexpired', 'auth'), $passwordchangeurl, $urltogo);
                        echo $OUTPUT->footer();
                        exit;
                    }
                }

               // Added to the regular moodle login procedures
               // Process the SAML Request and redirect to the Service
               // it is asking for.
               // This function should never return unless there's an error.
               if (!gsaml_send_auth_response($SESSION->samlrequestdata)) { // Handles what the Ex. Gmail sercie is asking that the user be authentiated
                    // SAML code failed turn debugging on
                    print_error('samlcodefailed','auth_gsaml');
               }
	
		        
            } else {
                if (empty($errormsg)) {
                    $errormsg = get_string("invalidlogin");
                    $errorcode = 3;
                }
            }

        } // else if NO SAML request is made we don't do anything but log in normally
    }

    
    /**
     * Perform a Google SAML Logout by visiting a page on logout
     */
    function logoutpage_hook() {
        if (empty($this->config->domainname)) {
            return;
        }
        require_logout();
        // Google doesn't have an SSO logout procedure
        // So we visit this and it logs us out of all of the google's services
        redirect('https://mail.google.com/a/'.$this->config->domainname.'/?logout');
    }
    
    
    /**
     * Check for a SAML Request if you find one and you are logged in
     * send a SAML Reply. Else continue with the login
     */
    function loginpage_hook() {
        global $frm,$user,$SESSION,$CFG;  

        // Do we have a SAMLRequest that needs processing?
        // Must common case is that user has already logged into Moodle
        // and has clicked a Gmail link for example.
        if (!array_key_exists('SAMLRequest', $_REQUEST) and empty($SESSION->samlrequestdata) ) {
            $SESSION->samlrequest = false;
        } else {
            // Store SAMLRequest for processing upon user auth
            if ( !empty($_REQUEST['SAMLRequest']) ) {
                // Case 2: if we aren't logged in we need this SAMl request for later
                // store it in session and invoke upon auth hook
                $SESSION->samlrequestdata = $_REQUEST['SAMLRequest'];
                $SESSION->samlrelaystate  = $_REQUEST['RelayState'];
                $SESSION->samlrequest     = true;
                add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','User has saml request but needs login/redirect', 0,0);
            }

            // Case 1: if your logged in already and the SAML request just needs to
            // be processed go ahead and redirect with authentication.
            if ( isloggedin() and !empty($_REQUEST['SAMLRequest']) ) {

                add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','User islogged in and samlrequest', 0,0);

                $SESSION->samlrequestdata = $_REQUEST['SAMLRequest'];
                $SESSION->samlrelaystate  = $_REQUEST['RelayState'];

                if (!gsaml_send_auth_response($_REQUEST['SAMLRequest'])) {
                    // Saml auth code failed
                    notice(get_string('samlauthcodefailed','auth_gsaml'),$CFG->wwwroot);
                }
	    }
        }
    }

    /**
     * Returns true if the username and password work and false if they are
     * wrong or don't exist.
     *
     * @param string $username The username (with system magic quotes)
     * @param string $password The password (with system magic quotes)
     *
     * @return bool Authentication success or failure.
     */
    function user_login($username, $password) { 
        global $CFG,$DB;
        if ($user = $DB->get_record('user', array('username' => $username, 'mnethostid' => $CFG->mnet_localhost_id))) {
            return validate_internal_user_password($user, $password);
        }
        return false;
    }

    /**
     * Updates the user's password.
     *
     * called when the user password is updated.
     *
     * @param  object  $user        User table object  (with system magic quotes)
     * @param  string  $newpassword Plaintext password (with system magic quotes)
     * @return boolean result
     *
     */
    function user_update_password($user, $newpassword) {
        global $CFG,$FULLME;
        
    	// Enforce 6 char min google password rules.
        // error where page jumps to some random other page
        // Site Administration > Security > Site policies 
        if( strlen($newpassword) < 6 ) {
            $sixchar_msg = get_string('sixcharmsg','auth_gsaml');
            $link = $FULLME;
            notice($sixchar_msg,$link);
        }
        
    	// Check and update on the moodle side
        // If the user is in gsync then when the cron runs
        // their password should be synced up
    	$user = get_complete_user_data('id', $user->id);
    	if (!update_internal_user_password($user, $newpassword) ) {
            return false;
    	}
        return true;
    }

    /**
     * Returns true if this authentication plugin can change the user's
     * password.
     *
     * @return bool
     */
    function can_change_password() {
        return true;
    }

    /**
     * Returns true if plugin allows resetting of internal password.
     *
     * @return bool
     */
    function can_reset_password() {
        return true;
    }

   /**
     * Confirm the new user as registered. This should normally not be used,
     * but it may be necessary if the user auth_method is changed to manual 
     * before the user is confirmed.
     */
    function user_confirm($username, $confirmsecret = null) { 
    	   
        $user = get_complete_user_data('username', $username);

        if (!empty($user)) {
            if ($user->confirmed) {
                return AUTH_CONFIRM_ALREADY;
            } else { 
                if (!set_field("user", "confirmed", 1, "id", $user->id)) {
                    return AUTH_CONFIRM_FAIL;
                }
                if (!set_field("user", "firstaccess", time(), "id", $user->id)) {
                    return AUTH_CONFIRM_FAIL;
                }
                return AUTH_CONFIRM_OK;
            }
        } else  {
            return AUTH_CONFIRM_ERROR;
        }
    }

    /**
     * Package up the data and fire an event so the model/gsync will handle
     * the user creation logic.
     *
     * @param object $user
     * @param string $username
     * @param string $password
     */
    function trigger_gsaml_user_auth_event($user, $username, $password) {
        if (core_component::get_component_directory('tool_googleadmin') !== null) {
            \tool_googleadmin\user_authenticated::handle($user, $password);
        }
    }
}
