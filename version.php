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
 *  local_barebones
 *  This plug-in provides a simple form builder and page-bulider
 *  which can be used as the basis of other plugins
 *
 * @author      Peter Beare
 * @copyright   Peter Beare
 * @license     GNU General Public License version 3
 * @package     local_barebones
 */

defined('MOODLE_INTERNAL') || die();


$plugin             = new stdClass();

$plugin->version    = 2021040701;
$plugin->requires   = 2018051700; // arbitrarily chosen Moodle 3.5
$plugin->release    = "release";
$plugin->component  = 'local_barebones';
$plugin->cron       = 0;
$plugin->maturity   = MATURITY_ALPHA;
