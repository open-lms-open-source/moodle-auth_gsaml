<?php

/**
* Copyright (C) 2009  Moodlerooms Inc.
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
* @copyright  Copyright (c) 2010 Moodlerooms Inc. (http://www.moodlerooms.com)
* @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
* @author Chris Stones
* @package auth_saml
**/


// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Manage files in folder in private area - to be replaced by something better hopefully....
 *
 * @package   block_private_files
 * @copyright 2010 Petr Skoda (http://skodak.org)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
global $CFG,$DB,$PAGE;

require_once("$CFG->dirroot/blocks/private_files/edit_form.php");
require_once("$CFG->dirroot/repository/lib.php");
require_once($CFG->dirroot.'/auth/gsaml/samllib.php');
require_once($CFG->dirroot.'/auth/gsaml/uploads_form.php');

require_login();

if (isguestuser()) {
    die();
}

$maxbytes = 1000000;
$key       = required_param('key'   , PARAM_TEXT);
$returnlnk = required_param('return', PARAM_URL);

// The system as admin
$context = get_context_instance(CONTEXT_USER, $USER->id);
$PAGE->set_context($context);
$pageurl = '/auth/gsaml/uploads.php';
$PAGE->set_url('/auth/gsaml/uploads.php');


$data = new object();
$mform = new auth_gsaml_uploads_form(new moodle_url($CFG->wwwroot.$pageurl,array('key'=> $key,'return' =>$returnlnk)),
                                     array('data'=>$data,'return'=>$returnlnk,'key'=>"$key"), 
                                     'post',
                                     '');

$formdata = '';
$privatekey = '';
if ($mform->is_cancelled()) {
    redirect(new moodle_url(urldecode($returnlnk)));
} else if ($formdata = $mform->get_data()) {
    
    $contextid = get_context_instance(CONTEXT_SYSTEM)->id;
    $itemid = $formdata->{$key};

    file_save_draft_area_files($itemid,
                               $contextid,
                               'auth_gsaml',
                               'gsamlkeys',
                               $itemid, // the key you are resaving
                               array('subdirs' => 0,
                                     'maxbytes' => $maxbytes,
                                     'maxfiles' => 1));

   $realpath = gsaml_file_return_real_path($itemid);
   set_config($key,$realpath,'auth/gsaml');
   
   // obtain and store basename for gsaml libs
   $fs = get_file_storage();
   $files = $fs->get_area_files($contextid, 'auth_gsaml', 'gsamlkeys', $itemid);

   // '.' denote directories $f->is_directory()
   $file = null;
   if (is_array($files)){
       foreach($files as $f) {
           if ( $f->get_filename() != '.' ) {
                $file = $f;
           }
       }
   } else {
       $file = $files;
   }

   // need the base name for the interface
   $fname = $file->get_filename();
   set_config($key.'_basename',$fname,'auth/gsaml');

   $pathnamehash = $file->get_pathnamehash();
   set_config($key.'_pathnamehash',$pathnamehash,'auth/gsaml');

   redirect(new moodle_url(urldecode($returnlnk)));
}

// if this file exists it's in our configs so check then set
$realpath = get_config('auth/gsaml',$key); // itemid is storedhere
if (file_exists($realpath)) {
    // pull the itemid from the realpath
    $pathnamehash = get_config('auth/gsaml',$key.'_pathnamehash');
    $itemid = gsaml_realpath_to_itemid($pathnamehash);
    $toform = array( $key => $itemid);
    $mform->set_data($toform);
}

echo $OUTPUT->header();
echo $OUTPUT->box_start('generalbox');
$mform->display();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();
