<?php
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
 *
 * @package    auth_gsaml
 * @copyright  Copyright (c) 2022 Open LMS (https://www.openlms.net)
 * @author     Diego Monroy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace auth_gsaml\event;

defined('MOODLE_INTERNAL') || die();

class samlrequest_processed extends \core\event\base {
    protected function init() {
        $this->data['crud'] = 'r'; // c(reate), r(ead), u(pdate), d(elete)
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    public static function get_name() {
        return 'process samlrequest';
    }

    public function get_description() {
        $description = '';
        if (!empty($this->info)) {
            $description = get_string($this->info, 'auth_gsaml');
        }
        return $description;
    }

    public function get_url() {
        return '';
    }

    public function get_legacy_logdata() {
        // Override when migrating an add_to_log() call.
        $legacydata = [
            SITEID,
            'auth_gsaml',
            self::get_name(),
            $this->get_url(),
            $this->get_description(),
            0,
            0
        ];
        return $legacydata;
    }
}
