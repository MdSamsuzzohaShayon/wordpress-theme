<?php

// ACTION HOOKS
// https://codex.wordpress.org/Plugin_API/Action_Reference
// ENQUEUE THE THEME STYLESHEETS
function twenty_twentyone_child_theme_styles(){
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  // ENQUEUE MAIN STYLESHEET (MAKE DEPENDENT ON GOOGLE FONTS)
  wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css');
}

// ADD PHPFORWP_THEME_STYLES FUNCTION TO WP_ENQUEUE_SCRIPTS ACTION HOOKS WITH PRIORITY OF DEFAULT 10
add_action('wp_enqueue_scripts', 'twenty_twentyone_child_theme_styles');






 ?>
