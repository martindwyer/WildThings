<?php
/*
 * File: category.php
 * Function: To list WordPress posts for categories selected, including summary post information
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
  
/* Calling sitewide header element */
require('header-site.php');
?>
<main class="container">
    <div class="row">
        <!-- Setting container for main content element -->
        <div class="site-body col-lg-9">
            <!-- Page content including title, description, and post content preview listing -->
            <h2>Location -> 
                <?php echo single_cat_title(); ?>
            </h2>
            <h3>
                <?php echo category_description() ?>
            </h3><br>
                <!-- Calling theme template for post lists with feature photo and excerpt -->
                <?php require('wt_list_posts.php'); ?>
        </div>
        <!-- Setting container and content for sidebar -->
        <div class="site-sidebar col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php
/* Calling sitewide footer element */
get_footer();
?>