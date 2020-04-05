<!doctype html>
<html lang="en">

    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/wild_things_logo.png">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <title><?php echo get_bloginfo('title'); ?></title>
</head>


<body id="body-sitewide" class="container-fluid">
    <div class="container-fluid">
        <nav id="top_nav" class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wild_things_logo.png" height = "35" alt="logo">&nbsp;&nbsp;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_home_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_home_url(); ?>#third_row">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_home_url(); ?>#feature_photo">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_permalink($post = 1341); ?>">Adventures</a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_permalink($post = 1416); ?>">Privacy</a>
                    </li>
                </ul>
                <form class="searchform form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                    <input class="searchform clearit form-control mr-sm-2" type="text" name="s" id="search-header" placeholder="Search" value="<?php echo the_search_query()?>" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <header id="header_two" onscroll="">
        <div class="header_row row">
            <div class="col">
            
            
            
        </div>
        <div class="col">
            
            <div class="header_jumbo jumbotron">
                <h1 class="display-4"><?php bloginfo('name'); ?></h1>
                <p class="lead"><?php bloginfo('description'); ?></p>
                <hr class="my-4">
                <p>A WordPress website built by <a href="http://bdo-tech.com">BDO Web Technologies</a></p><br>
                
            </div>
            
        </div>
        
        
    </div>
            
        </header>
    </div>
