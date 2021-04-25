<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  </head>
  <!-- Displays the class names for the body element. -->
  <!-- https://developer.wordpress.org/reference/functions/body_class/ -->
  <body <?php body_class(); ?>>

    <!-- <nav class="navbar navbar-light bg-light">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </div>
    </nav> -->

    <div id="page">

      <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e( 'Skip to content', 'wphierarchy' ); ?>
      </a>

      <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
          <p class="site-title">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"></a>
            <?php bloginfo('name'); ?>
          </p>
          <div class="site-description">
            <?php bloginfo('description'); ?>
          </div>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php
          $args = array(
            'menu'              => "<nav>", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            'menu_class'        => "container-fluid", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            // 'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
            'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
            'container_class'   => " navbar navbar-light bg-light", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
            // 'container_id'      => "", // (string) The ID that is applied to the container.
            'fallback_cb'       => false, // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
            // 'before'            => '<li>', // (string) Text before the link markup.
            // 'after'             => '<div>', // (string) Text after the link markup.
            // 'link_before'       => '<div class="navbar-nav">', // (string) Text before the link text.
            // 'link_after'        => '</div>', // (string) Text after the link text.
            // 'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
            // 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
            // 'walker'            => "", // (object) Instance of a custom walker class.
            'theme_location'    => "main-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            // 'items_wrap'        => '<ul id="primary-menu-list navbar-nav" class="%2$s"><a class="nav-link" href="#">%3$s</a></ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
            // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
          );
          wp_nav_menu( $args );
          ?>
        </nav>
      </header>
      <!-- SITE CONTENT START  -->
      <div class="site-content mt-4" id="content">
