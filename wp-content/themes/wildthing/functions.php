<?php
/*
 * File: functions.php
 * Function: Added functionality for the WildThing WordPress theme
 * Theme Name: Wild Thing
 * Author: BDO Web Technologies
 * Author URI: https://bdo-tech.com/
 * License: GNU General Public License v2
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * This theme, like WordPress, is licensed under the GPL.
 * Use it to make something cool, have fun, and share what you've learned.
 * 
 * This program is free softare; you can redistribute it and/or modify it under the 
 * terms of the GNU General Public License, version 2, as published by the Free 
 * Software Foundation.  
 * 
 * This program is diestributed in hope that it will be useful, but WITHOUT ANY 
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
 * PARTICULAR PURPOSE.  See the GNU General Public License for more details. 
 * 
 * You should have received a copy of the GNU General Public License along with 
 * this program; if not, write to the Free Software Foundation, Inc., 
 * 51 Franklin St., Fifth Floor, Boston, MA 02110-1301 USA
 */

function wildthing_files() {
    /*
    wp_enqueue_style('bootstrap-styles',"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
    wp_enqueue_style('jquery-ui-styles',"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css");
    wp_enqueue_style('wildthing_main_styles', get_stylesheet_uri());
    */
    
    wp_enqueue_script('jquery',"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
    
    wp_enqueue_script('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js");
    wp_enqueue_script('jquery-ui',"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js");
    wp_enqueue_script('jquery-validate',"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js");
    wp_enqueue_script('wildthing_main_script',get_theme_file_uri('/site.js'), NULL, '1.0', true);
  
}

add_action('wp_enqueue_scripts', 'wildthing_files');


/*  The following script adds support for post featured images  */
add_theme_support('post-thumbnails');




?>