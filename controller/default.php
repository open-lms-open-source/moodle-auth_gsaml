<?php
/**
 * Copyright (C) 2010  Moodlerooms Inc.
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
 * @copyright  Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
 */

/**
 * Default auth_saml controller
 *
 * @author Chris Stones
 * @package auth_gsaml
 */
defined('MOODLE_INTERNAL') or die('Direct access to this script is forbidden.');

class auth_gsaml_controller_default extends mr_controller_block {

    /**
     * We need to set the pagelayout early on in the initialize of this controller
     */
    function init() {
        global $PAGE;
        if ($ispopup = optional_param('ispopup',0,PARAM_INT)) {
            $PAGE->set_pagelayout('popup');
        }
    }


    /**
     * Require capability for viewing this controller
     */
    public function require_capability() {
        // Require admin for our admin action
        require_capability('moodle/site:config', $this->get_context());
    }

    /**
     * Define tabs for all controllers
     */
    public static function add_tabs($controller, &$tabs) {
        $tabs->toptab('status',   array('controller' => 'default','action' => 'view'))
             ->toptab('logs',     array('controller' => 'default','action' => 'logs'))
             //->toptab('ssotests', array('controller' => 'default','action' => 'ssotests')) // Place holder for future test code
             ->toptab('docs',     array('controller' => 'default','action' => 'docs'));
    }

    /**
     * Default view is status which in this case is the information regarding the
     * encryped keys.
     * 
     */
    public function view_action() {
        global $CFG, $COURSE, $OUTPUT, $PAGE, $USER;

        // Default view is just the status information
        $this->tabs->set('status');
        $this->print_header();

        print $OUTPUT->box_start('generalbox boxaligncenter');

        // Let's make sure we can see our config settings when checking
        // GSaml Authentication SSO Settings
        if(!$gsaml_conf = get_config('auth/gsaml')) {
            print $OUTPUT->notification(get_string('gsamlconfignotset','auth_gsaml'));
        } else {
            $this->helper->print->config_table(get_string('googlesamlconfigdata','auth_gsaml'),$gsaml_conf);
        }

        print $OUTPUT->box_end();
        $this->print_footer();       
    }

    /**
     * Simple Report Table for Viewing auth/gsaml specific logs.
     * Useful for seeing which user has caused a problem.
     *
     * @global object $OUTPUT
     * @global object $PAGE
     * @global object $CFG
     */
    public function logs_action() {
        global $OUTPUT,$PAGE,$CFG;
        $this->tabs->set('logs');
        
        require_once($CFG->dirroot.'/auth/gsaml/report/gsamllogs.php');
        $report = new auth_gsaml_report_gsamllogs($this->url);//, $COURSE->id);
        
        $this->print_header();
        print $this->mroutput->render($report);
        $this->print_footer();
    }

    /**
     * This is a place holder for future sso tests so that the process of logging in
     * as a user via the saml process can be automated and examined.
     *
     * @global object $OUTPUT
     */
    public function ssotests_action() {
        global $OUTPUT;
        $this->tabs->set('ssotests');
        $this->print_header();
        print $OUTPUT->notification("Specific SSO Test Running Code not yet Implemented");
        $this->print_footer();
    }

    /**
     * View this PHPDoc Generated Content.
     *
     * @global object $CFG
     * @global object $COURSE
     * @global object $OUTPUT
     */
    public function docs_action() {
        global $CFG,$COURSE,$OUTPUT;
        $this->tabs->set('docs');
        $this->print_header();

        print $this->output->heading("Google SAML Documentation");
        print $OUTPUT->box_start('generalbox boxaligncenter');
        print '<iframe src="'.$CFG->wwwroot.'/auth/gsaml/docs/notes.txt'.'" width="100%" height="600" align="center"> </iframe>';
        print $OUTPUT->box_end();
        $this->print_footer();
    }

    /**
     * Contains the popup code that admin_settings_upload class uses to ask the user
     * for the SSO keys.
     *
     * @global object $CFG
     * @global object $COURSE
     * @global object $OUTPUT
     * @global object $USER
     * @global object $DB
     * @global object $PAGE
     * @global object $OUTPUT
     */
    public function upload_action() {
        global $CFG,$COURSE,$OUTPUT;
        global $USER, $DB, $PAGE, $OUTPUT;
        
        $maxbytes = 1000000;
        $key       = required_param('key'   , PARAM_TEXT);

        // Setting Page Params
        $url = new moodle_url('/auth/gsaml/view.php');
        $url->param('action','upload');
        $url->param('controller','default');
        $url->param('key',$key);
        $url->param('ispopup',1); 

        $PAGE->set_url($url);

        $PAGE->set_title(strip_tags(get_string('uploadstr', 'auth_gsaml').' '.get_string($key.'str', 'auth_gsaml')));
        $PAGE->set_heading(''); // so popup does not show the heading

        // Form processing
        require_once($CFG->dirroot.'/auth/gsaml/form/uploads_form.php');

        $data = new stdClass();
        $mform = new auth_gsaml_uploads_form($url,array('data'=>$data,'key'=>"$key"),'post','');

        if ($mform->is_cancelled()) {
            //
        } else if ($formdata = $mform->get_data()) {
            $content = $mform->get_file_content($key);
            $fname = $mform->get_new_filename($key);

            // If dir doesn't exist make it
            if (!is_dir($CFG->dataroot.'/authgsaml')) {
                mkdir($CFG->dataroot.'/authgsaml'); // perms
            }
            file_put_contents($CFG->dataroot.'/authgsaml/'.$fname,$content);

            set_config($key,$CFG->dataroot.'/authgsaml/','auth/gsaml');
            set_config($key.'_basename',$fname,'auth/gsaml');
        }

        // If file exists already we should show a message with current file is filename.ext
        // though we can't set the k
        $path = get_config('auth/gsaml',$key);
        $fname = get_config('auth/gsaml',$key.'_basename');

        print $OUTPUT->header();
        print $OUTPUT->heading(get_string('uploadstr', 'auth_gsaml').' '.get_string($key.'str', 'auth_gsaml'));
        if (file_exists($path.$fname)) {
            print $OUTPUT->notification(get_string('currfileupload','auth_gsaml').' '.$fname,'notifysuccess');
        } 
        $mform->display();
        print '<div class="paging">'.$OUTPUT->close_window_button().'</div>';
        print $OUTPUT->footer();
    }

}
