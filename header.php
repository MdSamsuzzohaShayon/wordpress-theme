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

    <?php get_template_part('template-parts/segment', 'headertopmenu'); ?>

    <!--    Start landing-->
    <div class="default-page-landing text-white">

        <div class="main-menu container-fluid">
            <div class="container">
                <!--        main navbar start -->
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 bg-transparent">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <?php

                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" class="main-menu-logo" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>

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
                        <form class="d-flex" id="search-menu-item">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
                <!--        main navbar end -->
            </div>
        </div>
