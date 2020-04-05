<?php
/*
 * File: footer.php
 * Function: To provide footer framework for WordPress theme
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
?>
<div class="container-fluid">
    <footer>
        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <!-- First footer column begins here -->
                    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                        <!-- Address with description entered here  -->
                        <p class="mb10">Wild Things Nature Photography operates as a division of BDO Web Technologies, producing digital content for website development.</p>
                        <p><i class="fa fa-location-arrow"></i><a href="http://bdo-tech.com">BDO Web Technologies</a><br>Czech Village Location<br>168 16th Ave SW<br>Cedar Rapids, Iowa 52404</p>
                    </div>

                    <!-- Second footer column begins here -->
                    <div class=" col-sm-4 col-md  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Top Locations</h5>
                        <!-- The following code provides a list of top post categories -->
                        <ul class="footer_ul_amrc">
                            <?php
                            $categories = get_categories();
                            $cats_stuff = array();
                            foreach ($categories as $cat) {
                                $val = $cat->category_nicename;
                                $name = $cat->cat_name;
                                $cat_id = get_cat_ID($name);
                                $link = get_category_link(($cat_id));
                                $count = $cat->category_count;
                                $cat_stuff = [$count, $link, $name];
                                array_push($cats_stuff, $cat_stuff);
                            }
                            array_multisort($cats_stuff, SORT_DESC);
                            for ($i = 0; $i <= 6; $i++) {
                                echo '<li><a href="' . $cats_stuff[$i][1] . '">' . $cats_stuff[$i][2] . ' (' . $cats_stuff[$i][0] . ')</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    
                    <!-- Third footer column begins here -->
                    <div class=" col-sm-4 col-md  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Top Attractions</h5>
                        <!-- The following code generates a  list of top WordPress post tags -->
                        <ul class="footer_ul_amrc">
                                <?php
                                $tags = get_tags();
                                $tags_stuff = array();
                                foreach ($tags as $tag) {
                                    $val = $tag->slug;
                                    $name = $tag->name;
                                    $tag_id = $tag->term_id;
                                    $link = get_category_link(($tag_id));
                                    $count = $tag->count;
                                    $tag_stuff = [$count, $link, $name];
                                    array_push($tags_stuff, $tag_stuff);
                                }

                                array_multisort($tags_stuff, SORT_DESC);
                                for ($i = 0; $i <= 6; $i++) {
                                    echo '<li><a href="' . $tags_stuff[$i][1] . '">' . $tags_stuff[$i][2] . ' (' . $tags_stuff[$i][0] . ')</a></li>';
                                }
                                ?>

                        </ul>

                    </div>


                    <div class=" col-sm-4 col-md  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--Social media icons with links appear below -->

                        <div class="row">
                            <div class="col social-media-icon">
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_media/twitter.png" alt="twitter logo"></a>
                            </div>
                            <div class="col social-media-icon">
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_media/facebook.png" alt="facebook logo"></a>
                            </div>
                            <div class="col social-media-icon">
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_media/instagram.png" alt="Instagram logo"></a>
                            </div>
                            <div class="col social-media-icon">
                                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_media/linkedin.png" alt="Linkedin logo"></a>
                            </div>



                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- The following section contains the menu and copyright appearing at the bottom of the screen -->
            <div class="container">
                <ul class="foote_bottom_ul_amrc">
                    <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#third_row">About</a></li>
                    <li><a href="<?php echo get_home_url(); ?>#feature_photo">Contact</a></li>
                    <li><a href="<?php echo get_permalink($post = 1341); ?>">Adventures</a></li>
                    <li><a href="<?php echo get_permalink($post = 1416); ?>">Privacy</a></li>
                </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">Copyright &copy;2018 | <a href="http:bdo-tech.com">BDO Web Technologies</a></p>

            </div>

<?php wp_footer(); ?>

            <!-- Optional JavaScript -->

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>


            <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/site.js"></script>
        </footer>
</div>
</body>

</html>
