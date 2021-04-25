<?php
// Registers theme support for a given feature. Must be called in the theme’s functions.php file to work. If attached to a hook, it must be ‘after_setup_theme’. The ‘init’ hook may be too late for some features.
// https://developer.wordpress.org/reference/functions/add_theme_support/
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
// https://developer.wordpress.org/reference/functions/add_theme_support/#post-formats
add_theme_support( 'post-formats',  ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
// https://developer.wordpress.org/themes/functionality/custom-headers/#add-custom-header-support-to-your-theme
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-background' );
// add_theme_support( 'widgets' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


// LOAD IN CSS
// Actions are the hooks that the WordPress core launches at specific points during execution, or when specific events occur. Plugins can specify that one or more of its PHP functions are executed at these points, using the Action API.
// https://developer.wordpress.org/reference/functions/add_action/
function wphierarchy_enqueue_styles(){
  // Registers the style if source provided (does NOT overwrite) and enqueues.
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
  wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap.min.css', array(), time(), 'all' );
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', array(), time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles');



// REGISTER MENU LOCATIONS
// Associative array of menu location identifiers (like a slug) and descriptive text.
// https://developer.wordpress.org/reference/functions/register_nav_menus/#parameters
register_nav_menus(
  array(
    'main-menu' => esc_html__( 'Main Menu',  'wpheirarchy' ),
    'footer-menu' => esc_html__( 'Footer Menu',  'wpheirarchy' )
  )
);





?>
<!--
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
-->
<?php


// SETUP WIDGET AREAS
// A sidebar is any widgetized area of your theme. Widget areas are places in your theme where users can add their own widgets.
// https://developer.wordpress.org/themes/functionality/sidebars/
function wphierarchy_widgets_init(){
  // WILL HAVE A OPTION FOR SIDEBAD IN APPEARANCE
  register_sidebar([
    'name'          =>  esc_html__( 'Main Sidebar', 'wphierarchy' ),
    'id'            =>  'main-sidebar',
    // 'description'   =>  esc_html__( 'Add widgets for main sidebar', 'wphierarchy' ),
    // 'before_widget' =>  '<div class="widget">',
    // 'after_widget'  =>  '</div>',
    'before_title'  =>  '<h2 class="widget-title" >',
    'after_title'  =>  '</h2>',
  ]);
}

add_action( 'widgets_init', 'wphierarchy_widgets_init');


 ?>
