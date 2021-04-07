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
 
 /* barebones.php is the page displayed when we click the link in the menu */


require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php'); //retrieve the plug-in class properties and navigation extension

global $DB;

//require_sesskey();//check session spoofing
$course_id = required_param('id', PARAM_INT); // Fetch the course id from query string/url
require_login($course_id); //check log into this course
$PAGE->set_cacheable(false); //want to have a fresh page each 


//require_capability('moodle/course:managegroups', $PAGE->context); //// set a capability

// Want these for subsequent print_error() calls - the links to realted pages
$course_url = new moodle_url("{$CFG->wwwroot}/course/view.php", array('id' => $COURSE->id));
$groups_url = new moodle_url("{$CFG->wwwroot}/group/index.php", array('id' => $COURSE->id));
$enrol_url  = new moodle_url("{$CFG->wwwroot}/user/index.php",  array('id' => $COURSE->id));


//Set page properties:
$PAGE->set_url(new moodle_url("{$CFG->wwwroot}/local/barebones/barebones.php", array('id' => $COURSE->id)));
$page_head_title = get_string('LBL_PAGE_TITLE', local_barebones_plugin::PLUGIN_NAME) . ' : ' . $COURSE->shortname;
$PAGE->set_title($page_head_title);
//$PAGE->set_title("page title");
$PAGE->set_pagelayout('incourse');
$PAGE->set_heading($page_head_title);

echo $OUTPUT->header();
$page_content="hello world";

echo $OUTPUT->box(nl2br($page_content));

echo $OUTPUT->footer();


