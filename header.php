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
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => "top_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                            'menu_class' => "navbar-nav me-auto mb-2 mb-lg-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'container' => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            'walker' => new Thesportworship_Top_Menu_Walker(), // (object) Instance of a custom walker class.
                        ));
                        ?>
                        <span class="navbar-text text-white">Login / Register </span>
                    </div>
                </nav>


            </div>

            <!--top navbar end -->
        </div>
    </header>

    <!--    Start landing-->
    <div class="landing-main-menu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/default-bg.jpg);">
        <div class="main-menu container-fluid">
            <div class="container">
                <!--        main navbar start -->
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 bg-transparent">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <?php

                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>



                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-white text-uppercase">Features</a></li>
                        <li><a href="#" class="nav-link px-2 text-white text-uppercase">Pricing</a></li>
                        <li><a href="#" class="nav-link px-2 text-white text-uppercase">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white text-uppercase">About</a></li>
                    </ul>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main_menu',
                        'container' => 'ul',
                        'menu_class'=> 'nav col-12 col-md-auto mb-2 justify-content-center mb-md-0',
                        'add_li_class'  => '',
                        'add_a_class'  => 'nav-link px-2 text-white text-uppercase',
                    ) );
                    ?>

                    <div class="col-md-3 text-end">
                        <button type="button" class="btn btn-outline-primary me-2">Login</button>
                        <button type="button" class="btn btn-primary">Sign-up</button>
                    </div>
                </div>
                <!--        main navbar end -->
            </div>
        </div>
        <div class="landing">Caption goes</div>
