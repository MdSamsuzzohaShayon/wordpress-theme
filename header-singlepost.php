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

<!--site wrapper start -->
<div class="site-wrapper">

    <?php get_template_part('template-parts/segment', 'headertopmenu'); ?>


    <!--Single post landing image start-->
    <?php if (has_post_thumbnail()): ?>
    <div class="landing-main-menu text-white single-post"
         style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0), #030015FF), url(<?php the_post_thumbnail_url('sport-large'); ?>);">
        <?php else: ?>
    <div class="landing-main-menu text-white single-post"
         style="background-image: url(<?php echo get_template_directory_uri() . "/assets/img/default-bg.jpg"; ?>);">
        <?php endif; ?>


            <?php get_template_part('template-parts/segment', 'headermainmenu'); ?>
