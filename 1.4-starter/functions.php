<?php

// ACTION HOOKS
// https://codex.wordpress.org/Plugin_API/Action_Reference
// ENQUEUE THE THEME STYLESHEETS
function phpforwp_theme_styles(){
  wp_enqueue_style('font-css', 'https://fonts.googleapis.com/css2?family=Cormorant:wght@300&display=swap');
  // ENQUEUE MAIN STYLESHEET (MAKE DEPENDENT ON GOOGLE FONTS)
  wp_enqueue_style('main-css', get_stylesheet_uri(), ['font-css'], get_the_time());
}

// ADD PHPFORWP_THEME_STYLES FUNCTION TO WP_ENQUEUE_SCRIPTS ACTION HOOKS WITH PRIORITY OF DEFAULT 10
add_action('wp_enqueue_scripts', 'phpforwp_theme_styles', 10);





// FILTER HOOKS
// ADD READ MORE TEXT TO POST EXERPT
// @PARAM STRING $EXCERPT THE POST EXCERPT
// @RETURN STRING $EXTENDED_EXCERPT POST EXCERPT
function phpforwp_read_more_link($excerpt){
  // CREATE A NEW VARIALE CALLED $EXTENDED_EXCERPT AND ASSIGN IT THE VALUE OF $EXCERPT
  $extended_excerpt = $excerpt ;

  // APPENT A READ MORE LINK USING GET_PERMALINK() AS THE URL
  $extended_excerpt .= ' <a href="' . get_permalink() . '">';
  $extended_excerpt .= 'Read more &raquo;';
  $extended_excerpt .= '</a>';

  return $extended_excerpt;
}

// ADD PHPFORWP_REAM_MORE_LINK FUNCTION TO GET_THE_EXCERPT ACTION HOOKS WITH PRIORITY OF DEFAULT 10
add_filter('get_the_excerpt', 'phpforwp_read_more_link', 10);
 ?>
