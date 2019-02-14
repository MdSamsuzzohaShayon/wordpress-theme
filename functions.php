<?php 

// REGISTER NAV WALKER CLASS ALIAS



if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	// FEATURE IMAGE
	add_theme_support('post-thumbnails');

}

//THEME SUPPORT
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
// add_action is for create shomething



// EXCERPT LENGTH CONTROL
function set_excerpt_length(){
	return 20;
}
// THIS FUNCTION IS FOR EDIT SOMETHING
add_filter('excerpt_length', 'set_excerpt_length');



// WIDGET LOCATIONS
function wpb_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '<h4>',
		'after_title' => '</h4>'
	));
}


add_action('widgets_init', 'wpb_init_widgets');

?>