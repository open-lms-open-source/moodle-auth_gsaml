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
* @version $Id$
* @package auth_saml
**/

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
        $key     = $this->_customdata['key']; 

        $maxbytes = 1000000;
        $mform->addElement('filepicker', $key,
                           get_string($key.'str','auth_gsaml'), null,
                           array('maxbytes' => $maxbytes,
                                'accepted_types' => '*'));

        $this->add_action_buttons(true, get_string('submit'));
    }
}
