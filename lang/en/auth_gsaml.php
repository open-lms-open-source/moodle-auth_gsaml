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

$string['pluginname'] = 'Google SAML Auth';
$string['blockname'] = 'Google SAML Authentication';
//$string['auth_gsamldescription']  = '';
$string['domainname']             = 'Domain';
$string['auth_gsamldescription'] = 'This auth plugin enables Moodle to Single Sign on with SAML SPS.';
$string['auth_gsamltitle']       = 'Google Authentication'; // needs a change of some sort
$string['cert']                   = 'Certificate';
$string['key']                    = 'RSA Key';

// for auth/gsaml/settings.php 
$string['domainnamestr'] = 'Domain Name';
$string['rsakeystr'] = 'RSA Key File';
$string['desckeystr'] = 'Upload the RSA key (pem) Note that the Moodle SAML service supports RSA signed keys only.';
$string['googauthconfstr'] = 'Google Authentication Configuration';
$string['ssl_str'] = 'SSL Signing Certificate';
$string['desc_certstr'] = 'Upload the X.509 Certificate. Note that this is the same file you will upload to Google as well.';
$string['setupinstrctstr'] = 'Set Up Instructions ';
$string['mgadgetstr'] = 'Moodle Gadget ';
$string['mgadgethelp'] = 'Moodle Gadget Help';
$string['googdiag'] = 'Google Integration Diagnostics';
$string['googdebugopts'] = 'Once you are done configuring you may login again and visit ';
$string['thediagnosticspage'] = 'The Diagnostics Page';

// upload_key
$string['notadminnopermin'] = 'You are not an administrator. You do not have permission to view these settings.';
$string['nokeyuploaded'] = 'No Key was uploaded';
$string['filesnotsaved'] = 'Files did not save.';
$string['keypathnotsaved'] = 'Key path not saved.';
$string['uploadkeystr'] = 'Upload the key';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Upload';
$string['uploadthekey'] = 'Upload Key';

$string['gadgetinfostr'] = 'Use the following URL to add the Moodle Gadget to your Google Start Page<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link to Google Settings';
$string['nodomainyet'] = 'No Domain Set Yet'; 
$string['gsamlsetuptableinfo'] = '<ol><li>Set the <b>Domain Name</b> to your Google service domain name then click <b>Save Changes</b><br/><br/></li>
<li>In a new window open Google Apps Control Panel page as admin (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Click the <b>Advanced tools</b> tab.<br/><br/></li>
<li>Click the <b>Set up single sign-on (SSO)</b> link next to Authentication.<br/><br/></li>
<li>First check the <b>Enable Single Sign-on</b> box.<br/><br/></li>
<li>Now insert this URL into the <b>Sign-in page URL</b> text field.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Insert this URL into the <b>Sign-out page URL</b> text field.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Insert this URL into the <b>Change password URL</b> text field.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Generate and upload a <b>Verification certificate to Google (X.509 certificate containing the public key)</b><br/><br/></li>
<li>Upload the privatekey and certificate to Moodle as well and then click <b>Save Changes</b></b><br/></li></ol>';

// Moodle Gadget
$string['tomoodle'] = 'To Moodle';


// errors
$string['errusernotloggedin'] = 'User could not be logged in';
$string['pwdnotvalid'] = 'Password not valid';
$string['samlcodefailed'] = 'SAML Code Failed turn debugging on to find out why';
$string['samlauthcodefailed'] = 'SAML Auth Code Failed turn debugging on for more information';
$string['sixcharmsg'] = 'User Password Must be longer than 6 characters for Google Integration. Tell your Admin to adjust the site policy settings';
$string['errordecodingsamlrequest'] = 'Problem decoding SAML Request or gzinflating (May be a HTTPS settings error check your Google SSO configuration): {$a}';
 
// diagnostics
$string['googsamldiag'] = 'Google SAML Diagnostics';
$string['notadminnoperm'] = 'You are not a Site Admin. You do not have permission to view this information';
$string['gdatanotconfig'] = 'GData configuration table not set.';
$string['googlesamlconfigdata'] = 'Google SAML Configuration Data';
$string['gsamlconfignotset'] = 'Google SAML configuration has not yet been set';
$string['gdataconfignotset'] = 'GData config table not set';
$string['gdataconfig'] = 'GData Configuration';
$string['gmailconfig'] = 'Gmail Configuration';
$string['componentinstallcheck'] = 'Component Install Precheck';
$string['gdatanotinstalled'] = 'GData block is not installed\n';
$string['gappsblockinstalled'] = 'GApps Block installed\n';
$string['gmailblocknotinstalled'] = 'Gmail block is not installed';
$string['gmailblockinstalled'] = 'Gmail Block installed\n';
$string['gdataapitestresults'] = 'GData API Test Results';
$string['trytoinitgdataconnection'] = 'Trying to init a GData to Google connection<br/>';
$string['gsamlsuccess'] = 'Success';
$string['gmailtestresults'] = 'Gmail Test Results';
$string['gmailtestwillnotrun'] = 'Gmail Test will not run unless Moodle is in DEBUG_DEVELOPER Mode';
$string['obtainemailfeed'] = 'Obtaining email feed for username: ';
$string['currfileupload'] = 'Current File:';
$string['nonestr'] = 'None';
$string['privatekeystr'] = 'Private Key';
$string['certificatestr'] = 'Certificate';

// Tabs
$string['statustab'] = 'Status';
$string['logstab'] = 'SAML Logs';
$string['ssoteststab'] = 'SSO Tests';
$string['docstab'] = 'Documentation';
$string['auth_gsaml_report_gsamllogs'] = '';

// auth/gsaml logs_action strings
$string['id']   = 'ID';
$string['time']   = 'Time';
$string['userid'] = 'UserID';
$string['ip']     = 'IP Address';
$string['course'] = 'Course';
$string['module'] = 'Module';
$string['cmid']   = 'cmid';
$string['action'] = 'Action';
$string['url']    = 'URL';
$string['info']   = 'Information';


// help files
$string['config_gsaml'] = 'Configuring Google SAML';
$string['config_gsaml_help'] = '<h2>Complete Set Up</h2>

<p>Setting up the full Google to Moodle integration requires a bit of configuration. This help file should
guide you through most of the process in getting the Google Authentication Plugin configured as well as the GData block and
the Gmail block ready.</p>

<h4>Table of contents:</h4>
<ul>
    <li><a href="#pre">Preconditions</a></li>
    <li><a href="#status">Steps</a></li>
    <li><a href="#expect">Expected Results</a></li>
    <li><a href="#consider">Considerations</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps Status</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Preconditions/assumptions</a></h4>
<p>
<ol>
    <li>GSAML, GAccess, Gmail, GData code have been installed</li>
    <ul>
    <li>auth/gsaml</li>
    <li>blocks/gmail</li>
    <li>blocks/gdata</li>
    <li>blocks/gaccess</li>
    <li>blocks/mgadget (optional as of beta)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Steps</a></h4>
<ol>
    <li>Login to Moodle as an Administrator</li>
    <li>Click <b>Notifications</b> to update block tables</li>
    <li>Enable the <b>Google Authentication</b> plugin from the Manage Plugins admin page</li>
    <li>Now Select Users Authentication go to <b>Google Authentication</b> there should be directions on the page to follow.</li>
    <li>Enter your Google partner page domain</li>
    <li>Upload Certificate (for more information on creating this <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google Documentation Regarding Key Generation</a> )</li>
    <li>Upload Private Key (for more information on creating this visit <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google Documentation Regarding Key Generation</a>)</li>
    <li>Click Save</li>
    <li>Follow the directions for adding the proper URLs to the Google SSO page</li>
    <li>Click the checkbox on the Google site to enable SSO</li>
    <li>On the Google Site be sure to enable the provisioning API or no users will be updated.</li>
    <li>On the Google Site make sure API Provisioning is Enabled</li>
    <li>On the Google side you may need to request more User accounts</li>
    <li>Return to Moodle\'s main page</li>
    <li>Click Edit</li>
    <li>Add GAccess, Gmail and the GData blocks to the page.</li>
    <li>Click <b>Settings</b> in the <b>Google Apps</b> block. Fill out the configuration information.</li>
    <li>Click the Status link to confirm that your Google Apps block is set up properly.</li>
    <li>Go to Site Administration &gt; Security &gt; Site policies</li>
    <li>Check Password Policy</li>
    <li>Set Password Length to 6 or greater (Required for Google\'s password policy)</li>
    <li>In the GData block you need to add users to sync. Do this by clicking the add users to sync link in the <b>Google Apps
    block</b>. It helps to see the result if you set          the GData block cron to 1 min.</li>
    <li>To Upload those Moodle Users into Google you may run the cron manually by visiting admin/cron.php Results for the sync should appear in the read out.
    <b>Beware, as of this beta syncing Moodle Users with Google may take a <em>LONG</em> time.</b></li>
</ol>

<h4><a name="pre" href="#expect">Expected Results</a></h4>
<ul class="alternate" type="square">
    <li>Clicking on any Google Service links or visiting services from the Google Partner page will
    Authenticate against Moodle.</li>
    <li>User should be logged into Moodle as well as Google Partner Services</li>
    <li>See the <b>Diagnostics Page</b> in the GSAML settings for more information on your set up.</li>
</ul>


<h4><a name="pre" href="#consider">Considerations (As of BETA Version)</a></h4>
<ul class="alternate" type="square">
    <li>The Gmail feed may not be found. This is probably because the user\'s password doesn\'t match Google\'s user password.
    In the future this won\'t be a problem. For now be sure to sync users with the Google Apps block. Email will update
    upon login. In the future unread messages should update in real time.</li>

    <li>The Location of the Google Authentication Plugin in the Authentication order is important.
    As of this moment it needs to override a user\'s auth type when a Moodle user changes passwords.
    This behavior may affect MNet users. A solution for this problem has not yet been found.</li>

</ul>

</div>';

$string['diagnostics'] = 'Diagnostics';
$string['diagnostics_help'] = '<h2>Google Integration Diagnostics</h2>
<p>The Diagnostics page will reveal information regarding the Gmail, GData and SAML connection status.
Only administrators have permission to view diagnostic information.</p>

<h3>Table of contents:</h3>
<ul>
    <li><a href="#setup">Set Up Table Information</a></li>
    <li><a href="#gdata">GData Connection Status</a></li>
    <li><a href="#gmail">Gmail Block Connection Test</a></li>
    <li><a href="#saml">SAML SSO Status Test</a></li>
</ul>

<h3><a name="setup" href="#setup">Configuration Table Info</a></h3>
<div class="indent">
    These tables represent the current configuration of the Moodle to Google Integration. Make sure the values are all set.
</div>

<h3><a name="gdata" href="#gdata">GData Connection </a></h3>
<div class="indent">
The GData block located in the blocks folder contains the libraries for a variety of Google Services. You must confirm
that it is able to connect to the Google Services. You may need to adjust values on the GData Block Settings page.
</div>

<h3><a name="gmail" href="#gmail">Gmail Block Connection Test</a></h3>
<div class="indent">
At the present moment the Gmail block will only refresh a users unread messages upon login. You will only
be able to run the test here if debugging is turned on.  Support for viewing unread messages in real time is coming.

</div>

<h3><a name="saml" href="#saml">SAML SSO Status Test</a></h3>
<div class="indent">
The SAML status test is an independent check of the SSO authorization process. It has not yet been implemented.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';

$string['keys'] = 'Keys';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO Keys</h3>
<p>Both Moodle and Google must be able to securely authorize access to important resources.
The admin must generate a <b>Verification Certificate</b> and upload to Google a X.509 formatted certificate with an embedded
 public key.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google Documentation Regarding Key Generation</a>
Note that the SAML Moodle SSO service only uses <b>RSA keys.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Google Apps Status</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificate</a></h4>
<div class="indent">
-->
</div>';

$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>Google to Moodle Gadget</h2>

<p>This help file provides brief overview of the Google gadget for your Moodle site</p>

<h3><a name="status" href="#status">The Moodle Gadget</a></h3>
<div class="indent">
    The <em>Moodle Gadget</em> is a gadget that you can embed on your Google Partner start page.

</div>


<p><b>Steps to install onto a Users Start Page</b></p>
<ol>
    <li>Login to Moodle</li>
    <li>Click on the <b>Google Partner Page</b> in the <b>Google Services Access</b> block</li>
    <li>Click on the <b>Add Stuff</b> link</li>
    <li>Click on <b>Add my url</b></li>
    <li>Enter the moodlegadget URL</li>
    <li>The URL is something like <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
    <li> It can be found in the <b>Google Authentication</b> Settings from the Admin block</li>
    <li>After you copy the url to the url field. Click <b>Add</b></li>
    <li>Click <b>Back to homepage</b></li>
    <li>You should now see a block containing a link to your Moodle site</li>
</ol>



<h3><a name="status" href="#status">Considerations (As of BETA release)</a></h3>
<div class="indent">
    This is the beta prototype for this Google Moodle Gadget. In the future it may be much much more useful.
    Currently there is a known bug regarding the Gadget not updating immediately upon install.
    Developers are looking into it.
</div>';
$string['event_user_authenticated'] = 'User authenticated';
