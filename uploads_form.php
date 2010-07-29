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
* @copyright  Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
* @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
* @author Chris Stones
* @version $Id$
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

 
defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

class auth_gsaml_uploads_form extends moodleform {
    function definition() {
        global $DB;
        $mform = $this->_form;
        
        $data    = $this->_customdata['data'];
        $return  = $this->_customdata['return']; // return to settings page link
        $key     = $this->_customdata['key'];    // return to settings page link


        $maxbytes = 1000000;

        // does are file exist?
        $pathnamehash = get_config('auth/gsaml',$key.'_pathnamehash');
        $entry = $DB->get_record('files',array('pathnamehash' => $pathnamehash));

        // if an file id doesn't exit in the db we know it's a new file
        if (empty($entry->id)) {
            $entry = new object();
            $entry->id = null;
        }
        $contextid = get_context_instance(CONTEXT_SYSTEM)->id;
        $draftitemid = file_get_submitted_draft_itemid($key);
        file_prepare_draft_area($draftitemid, $contextid, 'auth_gsaml', 'gsamlkeys', $entry->id, 
                                array('subdirs' => 0, 'maxbytes' => $maxbytes, 'maxfiles' => 1));

        $formdata = null;
        $formdata->{$key} = $draftitemid;

        $this->set_data($formdata);


        $mform->addElement('filemanager', $key, get_string($key.'str','auth_gsaml'), null,
                    array('subdirs'  => false,
                          'maxbytes' => $maxbytes,
                          'maxfiles' => 1,
                          'accepted_types' => array('*') ));

        $this->add_action_buttons(true, get_string('submit'));

        //$this->set_data($data);
    }
}
