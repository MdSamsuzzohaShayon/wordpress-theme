<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php
    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );
    $category_list = '';
    foreach($categories as $category){
      $category_list .= $category->name . ',';
    }
    ?>

    <meta name="keywords" content="<?php echo $category_list ?>">
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




    <!--    Start landing-->
    <div class="landing-main-menu text-white" style="background-image: url(<?php header_image(); ?>);">


    <?php get_template_part('template-parts/segment', 'headermainmenu'); ?>
