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
 
 /* lib.php should be as short as possible as it loads on every page */
 

    defined('MOODLE_INTERNAL') || die();

//    require_once("{$CFG->dirroot}/lib/accesslib.php");
//    require_once("{$CFG->dirroot}/lib/navigationlib.php");




/**
 * The local plugin class
 */
class local_barebones_plugin
{
const PLUGIN_NAME          = 'local_barebones';
//methods can all be declared here too

} // class



// Hook to insert a link in settings navigation menu block 

function local_barebones_extend_settings_navigation(settings_navigation $navigation, $context)
{
    global $CFG; //invoke the global $CFG variable
    if ($context == null || $context->contextlevel != CONTEXT_COURSE) {
        return;// escapes function if we are not in course context
    }
    if (null == ($courseadmin_node = $navigation->get('courseadmin'))) {
        return; //escapes function if there is no course admin menu  (keeps us off front page?)
    }
    /*if (null == ($useradmin_node = $courseadmin_node->get('users'))) {
        return; //escapes function if there is no course admin/users menu
    }
    
    // Add our link
    //$useradmin_node->add( */ //adds ti user sub menu
    $courseadmin_node->add( //adds to course settings menu
        get_string('IMPORT_MENU_LONG', local_barebones_plugin::PLUGIN_NAME), // the long menu name as defined in the lang/en
        new moodle_url("{$CFG->wwwroot}/local/barebones/barebones.php", array('id' => $context->instanceid)),//...and the target page...
        navigation_node::TYPE_SETTING, //and 
        get_string('IMPORT_MENU_SHORT', local_barebones_plugin::PLUGIN_NAME), // the long menu name as defined in the lang/en
        null, new pix_icon('i/import', 'import'));

}

