<?php

/**
 * Custom gutenberg functions
 */

function shayon_gurenberg_default_colors()
{
//    https://codex.wordpress.org/Theme_Features
//    Registers theme support for a given feature. Add some extra function or feature to wordpress
//    Must be called in the theme’s functions.php file to work. If attached to a hook, it must be ‘after_setup_theme’. The ‘init’ hook may be too late for some features.
    add_theme_support(
//        https://developer.wordpress.org/block-editor/developers/themes/theme-support/
//        Editor Color Palette – A default set of colors is provided, but themes can register their own and optionally lock users into picking from the defined palette.
        'editor-color-palette',
        array(
            array(
                'name' => 'Light white',
                'slug' => 'white',
                'color' => '#ffffff'
            ),
            array(
                'name' => 'Light Pink',
                'slug' => 'white',
                'color' => '#ffffff'
            ),
            array(
                'name' => 'Light Pink',
                'slug' => 'pink',
                'color' => '#ff4444'
            ),
        )
    );


    add_theme_support(
//        Editor Text Size Palette – A default set of sizes is provided, but themes can register their own and optionally lock users into picking from preselected sizes.
        'editor-font-sizes',
        array(
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16,
            ),
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 24,
            ),
        )
    );
}


add_action('init', 'shayon_gurenberg_default_colors');

?>
