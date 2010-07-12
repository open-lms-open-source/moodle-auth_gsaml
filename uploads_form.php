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
        $mform = $this->_form;

        $data    = $this->_customdata['data'];
        $options = $this->_customdata['options'];

        //http://docs.moodle.org/en/Development:Using_the_File_API_in_Moodle_forms#filepicker
        //$mform->addElement('filemanager', 'attachments', get_string('attachment', 'moodle'), null,
        //                    array('subdirs' => 0, 'maxbytes' => $maxbytes, 'maxfiles' => 50, 'accepted_types' => array('document') ));
        //$options = array('subdirs' => 0, 'maxfiles' => 2,);// 'accepted_types' => array('document'));
        //$mform->addElement('filemanager', 'files_filemanager', get_string('files'), null, $options);

        //$maxbytes = 10000;
        //$mform->addElement('filepicker', 'privatekey', 'Private Key', null, array('maxbytes' => $maxbytes, 'accepted_types' => '*'));


        $maxbytes = 10000;
        $mform->addElement('filepicker', 'privatekey', 'Private Key', null, array('maxbytes' => $maxbytes, 'accepted_types' => '*'));


        $maxbytes = 10000;
        $mform->addElement('filepicker', 'certificate', 'certificate ', null, array('maxbytes' => $maxbytes, 'accepted_types' => '*'));

        $this->add_action_buttons(true, get_string('submit'));

        $this->set_data($data);
    }
}
