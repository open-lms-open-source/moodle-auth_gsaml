<?php
/**
 * Copyright (C) 2010  Open LMS
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
 *  Special Printing Methods
 *
 * @author Chris B Stones
 * @package auth_gsaml
 **/

defined('MOODLE_INTERNAL') or die('Direct access to this script is forbidden.');

class auth_gsaml_helper_print extends mr_helper_abstract {

    /**
     * Helper function used to print config tables.
     *
     * @global object $OUTPUT
     * @param string $heading
     * @param object $table_obj
     */
    public function config_table($heading,$table_obj) {
        global $OUTPUT;

        print $OUTPUT->heading($heading);
        $conf_table = new html_table();
        $conf_table->head  = array('Setting','Value');
        $conf_table->align = array('left','left');
        $conf_table->data  = array();

        foreach( $table_obj as $setting => $value ) {
            $conf_table->data[] = array($setting,$value);
        }
        print html_writer::table($conf_table);
    }
}
