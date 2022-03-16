
<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails', array( 'carousel' ) );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
    add_theme_support( 'custom-logo', array(
        'height' => 40,
        'width' => 100,
        'flex-height'          => true,
        'flex-width'           => true,
    ));





    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
    add_theme_support('custom-header', array(      "default-image" => get_template_directory_uri() . '/assets/img/default-bg.jpg'  ));
}





// ENQUEUE
function thesportworship_enqueue_style(){
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri());
    wp_enqueue_style( 'custom-bootstrap-and-main', get_theme_file_uri("/assets/css/style.css"), array(), '1.0.0' );
    wp_enqueue_style( 'bellefier-font', get_theme_file_uri("/assets/fonts/Bellefair-Regular.ttf"), array(), '1.0.0' );
    wp_enqueue_style( 'bebas-neue-font', get_theme_file_uri("/assets/fonts/BebasNeue-Regular.ttf"), array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap-icons', get_theme_file_uri("/assets/icon/bootstrap-icons/bootstrap-icons.css"), array(), '1.0.0' );
}
add_action("wp_enqueue_scripts", "thesportworship_enqueue_style");



function thesportworship_enqueue_script(){
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri("/assets/js/bootstrap.bundle.min.js"), array(), '5.0.0' );
    wp_enqueue_script( 'main-js', get_theme_file_uri("/assets/js/main.js"), array(), '1.0.0' );
}
add_action("wp_enqueue_scripts", "thesportworship_enqueue_script");



function thesportworship_register_menus(){
    register_nav_menus( array(
        'top_menu' => __( 'Top Menu', 'thesportworship' ),
        'primary_menu'  => __( 'Main Menu', 'thesportworship' ),
        'footer_menu'  => __( 'Footer Menu', 'thesportworship' ),
    ) );
}
add_action( 'after_setup_theme', 'thesportworship_register_menus', 0 );


// require_once(get_template_directory() . "/inc/customize-author-detail.php");
// new TheSportWorship_Author_Customizer();




require_once(get_template_directory() . "/inc/top-menu-walker-class.php");

// MAIN MENU WITH FILTERS - main-menu-filter-register
require_once(get_template_directory() . "/inc/main-menu-filter-register.php");


require_once(get_template_directory() . "/inc/customize-menu-position.php");

require_once(get_template_directory() . "/inc/customize-header-caption.php");


















?>
