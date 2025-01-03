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
 * Google SAML Authentication Plugin
 *
 * @author Chris Stones
 * @package auth_gsaml
 **/

defined('MOODLE_INTERNAL') || die;

$plugin->version      = 2024121800;
$plugin->requires     = 2024042200;
$plugin->component    = 'auth_gsaml';
$plugin->release      = '4.4.4';
$plugin->dependencies = array('local_mr' => 2024121800);
