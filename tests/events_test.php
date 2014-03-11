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
 * Auth Gsaml events test class.
 *
 * @package    auth_gsaml
 * @author     Sam Chaffee
 * @copyright  2014 Moodlerooms, Inc.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace auth_gsaml\tests;
use auth_gsaml\event\user_authenticated;


class events_test extends \advanced_testcase {

    public function setUp() {
        $this->resetAfterTest();
    }

    public function test_trigger_user_authenticated_event() {
        $eventsink = $this->redirectEvents();

        $user = $this->getDataGenerator()->create_user(array(
            'username' => 'username',
            'password' => 'password1234',
        ));
        $event = user_authenticated::create(array(
            'userid' => $user->id,
            'objectid' => $user->id,
            'context' => \context_user::instance($user->id),
            'other' => array(
                'username' => $user->username,
                'plainpassword' => 'password1234',
                'id' => $user->id,
            ),
        ));

        $event->trigger();

        $triggeredevents = $eventsink->get_events();
        $this->assertCount(1, $triggeredevents);

        $triggeredevent = array_shift($triggeredevents);
        $this->assertInstanceOf('auth_gsaml\event\user_authenticated', $triggeredevent);
    }
} 