<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">

<div class="site-wrapper">

    <header>
        <div class="top-menu bg-secondary">
            <!--top navbar start -->
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-transparent top-navbar">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
<!--                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link text-white active" aria-current="page" href="#">Home</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link text-white" href="#">Features</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link text-white" href="#">Pricing</a>-->
<!--                            </li>-->
<!--                        </ul>-->
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => "top_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                            'menu_class'        => "navbar-nav me-auto mb-2 mb-lg-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
//                    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                    'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
//                    'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
//                    'container_id'      => "", // (string) The ID that is applied to the container.
                            'walker'            => new Thesportworship_Top_Menu_Walker(), // (object) Instance of a custom walker class.
                        ) );
                        ?>
                        <span class="navbar-text text-white">
        Navbar text with an inline element
      </span>
                    </div>
                </nav>


            </div>

            <!--top navbar end -->
        </div>
        <div class="main-menu">
            <!--        main navbar start -->
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button>
                </div>
            </div>
            <!--        main navbar end -->
        </div>
    </header>