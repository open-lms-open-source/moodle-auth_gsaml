<?php
/**
* Copyright (C) 2009  Open LMS
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
* @copyright  Copyright (c) 2009 Open LMS (https://www.openlms.net)
* @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
*/

/**
 * auth_saml Settings
 *
 * @author Chris Stones
 * @package auth_saml
 **/
defined('MOODLE_INTERNAL') or die('Direct access to this script is forbidden.');

global $OUTPUT,$CFG;

if (!$ADMIN->fulltree) {
    return;
}

require_once($CFG->dirroot.'/lib/adminlib.php');
require_once($CFG->dirroot.'/auth/gsaml/admin_upload.php');
require_once($CFG->libdir.'/uploadlib.php');

$samlvars = get_config('auth/gsaml');

$configs = array();
$domainnamestr = get_string('domainnamestr','auth_gsaml');
$configs[] = new admin_setting_configtext('domainname', $domainnamestr, "", '', PARAM_RAW, 30);


// Private Key Upload Option
$rsa_str   = get_string('rsakeystr','auth_gsaml');
$desc_key  = get_string('desckeystr','auth_gsaml');
$privatekey_filename = !empty($samlvars->privatekey_basename) ? $samlvars->privatekey_basename : '';


// Private Key Upload Option
$hbutton = $OUTPUT->help_icon('keys','auth_gsaml');
$configs[] = new admin_setting_upload('privatekey',$rsa_str.' '.$hbutton, $desc_key,null, PARAM_RAW, null,
                                      'privatekey',$CFG->wwwroot.'/admin/settings.php?section=authsettinggsaml');

// Certificate Upload Option
$ssl_str   = get_string('ssl_str','auth_gsaml');
$desc_cert = get_string('desc_certstr','auth_gsaml');
$hbutton = $OUTPUT->help_icon('keys','auth_gsaml');
$configs[] = new admin_setting_upload('certificate',$ssl_str.' '.$hbutton, $desc_cert, null, PARAM_RAW, null,
                                      'sslcertfile',$CFG->wwwroot.'/admin/settings.php?section=authsettinggsaml');
// Provide a Link to Google Settings
$googsettings = get_string('lnktogoogsettings','auth_gsaml');
if (empty($samlvars->domainname)) {
    $samlvars->domainname = '';
    $googsettings = get_string('nodomainyet','auth_gsaml');
}

// Table of Steps String
$a = new stdClass();
$a->domainname = $samlvars->domainname;
$a->googsettings = $googsettings;
$a->wwwroot = $CFG->wwwroot;
$info = get_string('gsamlsetuptableinfo','auth_gsaml',$a);


// Main Instructional Table
$hbutton = $OUTPUT->help_icon('config_gsaml','auth_gsaml');
$setupinstrctstr = get_string('setupinstrctstr','auth_gsaml');
$configs[] = new admin_setting_heading('info', $setupinstrctstr.$hbutton, $info);


// Moodle Gadget Info and Set Up
$mgadgethelp = get_string('mgadgethelp','auth_gsaml');
$hbutton = $OUTPUT->help_icon('mgadget','auth_gsaml');
$a = new stdClass();
$a->wwwroot = $CFG->wwwroot;
$gadgetinfo = get_string('gadgetinfostr','auth_gsaml',$a);
$mgadgetstr = get_string('mgadgetstr','auth_gsaml');
$configs[] = new admin_setting_heading('moodlegadget', $mgadgetstr.$hbutton, $gadgetinfo);


// Diagnostics Info and Options
$googdiag   = get_string('googdiag','auth_gsaml');
$hbutton = '';
$debugopts  = get_string('googdebugopts','auth_gsaml');
$debugopts .= '<a href="'.$CFG->wwwroot.'/auth/gsaml/view.php?controller=default'.'">'.get_string('thediagnosticspage','auth_gsaml').'</a> for confirmation.';
$configs[]  = new admin_setting_heading('diagnostics', "Diagnostics ".$hbutton, $debugopts);


//$settings = $configs;
foreach ($configs as $config) {
    $config->plugin = 'auth/gsaml';
    $settings->add($config);
}
