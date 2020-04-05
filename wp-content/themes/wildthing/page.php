<?php  require('header-site.php');?>
<div class="container">
    <div class="row">
        <div class="site-body col-lg-9">
            <?php require('wt_list_all_posts.php'); ?>
        </div>
        <div class="site-sidebar col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
