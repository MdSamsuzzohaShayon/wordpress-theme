<?php
function thesportworship_story_post(){
    register_post_type('story_post', array(
        'labels' => array(
            'name' => __('Stories', 'thesportworship'),
            'singular_name' => __('Story', 'thesportworship'),
        ),
        'menu_icon' => 'dashicons-media-document',
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title',  'thumbnail', 'editor', )
    ));
}

add_action('init', 'thesportworship_story_post');


function thesportworship_texonomy(){
    register_taxonomy('story_type', array('story_post'), array(
        'labels' => array(
            'name' => "StoriesType",
            'singular_name'=> "StoryType",
        ),
        'public' => true,
//        'hierarchical' => false
    ));
}
add_action('init', 'thesportworship_texonomy');
?>