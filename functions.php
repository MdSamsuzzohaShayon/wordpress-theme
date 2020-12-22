<?php

function wpto_theme_support(){
//ADD DYNAMIC TITLE TAG SUPPORT
    add_theme_support("title-tag");
//    add_theme_suppot('custom-logo');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}


//https://developer.wordpress.org/reference/functions/add_action/
add_action("after_setup_theme", "wpto_theme_support");




//MENU OPTIONS
function wpto_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );


    register_nav_menus($locations);
}

add_action('init', 'wpto_menus');



//https://developer.wordpress.org/reference/functions/wp_enqueue_style/
function wp_main_style(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("wp-blog-style", get_template_directory_uri() . "/style.css", array("wp-bootstap-style"), $version, 'all');
    wp_enqueue_style("wp-bootstap-style", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style("wp-fontawesome-style", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');

}
//https://developer.wordpress.org/reference/functions/add_action/
add_action('wp_enqueue_scripts', 'wp_main_style');




//https://developer.wordpress.org/reference/functions/wp_enqueue_script/
function wp_main_scripts(){
    wp_enqueue_script("wp-jquery-script", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script("wp-popper-script", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script("wp-bootstrap-script", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script("wp-blog-script",  get_template_directory_uri() . "/assets/js/main.js" , array(), '1.0.0', true);
}
//https://developer.wordpress.org/reference/functions/add_action/
add_action('wp_enqueue_scripts', 'wp_main_scripts');














//THIS WILL TO CUSTOMIZE THEME USING WORDPRESS BY DRAG AND DROP
//WIDGET AREA START
function wpto_widget_areas(){
    register_sidebar(
        array(
            "before_title" => '',
            "after_title" => '',
            "before_widget" => '',
            "after_widget" => '',
            "name" => 'Sidebar Areas',
            "id" => 'sidebar-1',
            "description" => 'Sidebar Widget Areas'
        )
    );


    register_sidebar(
        array(
            "before_title" => '',
            "after_title" => '',
            "before_widget" => '',
            "after_widget" => '',
            "name" => 'Footer Areas',
            "id" => 'footer-1',
            "description" => 'Footer Widget Areas'
        )
    );
}


add_action('widgets_init', 'wpto_widget_areas');
//WIDGET AREA STOP