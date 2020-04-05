<?php
  require('header-site.php');
?>
<main class="container">
    <div class="row">
        <div class="site-body col-lg-9">
            <?php
                require('wt_get_single_post.php');
            ?>
        </div>
        <div class="site-sidebar col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php
  get_footer();
?>