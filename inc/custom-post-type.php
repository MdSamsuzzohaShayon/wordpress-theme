<?php
/**
 * Add story post type for different players' life story and more
 */
function thesportworship_stories(){
    register_post_type('stories', array(
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

add_action('init', 'thesportworship_stories');


function thesportworship_texonomy(){
    register_taxonomy('story_type', array('stories'), array(
        'labels' => array(
            'name' => "StoriesType",
            'singular_name'=> "StoryType",
        ),
        'public' => true,
//        'hierarchical' => false
    ));
}
add_action('init', 'thesportworship_texonomy');







/**
 * Add tournament post type for different tournament update
 */
function thesportworship_tournaments(){
    register_post_type('tournaments', array(
        'labels' => array(
            'name' => __('Tournaments', 'thesportworship'),
            'singular_name' => __('Tournament', 'thesportworship'),
        ),
        'menu_icon' => 'dashicons-table-row-before',
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title',  'thumbnail', 'editor', )
    ));
}

add_action('init', 'thesportworship_tournaments');


function thesportworship_tournaments_type(){
    register_taxonomy('tournament_type', array('tournaments'), array(
        'labels' => array(
            'name' => "TournamentsType",
            'singular_name'=> "TournamentType",
        ),
        'public' => true,
//        'hierarchical' => false
    ));
}
add_action('init', 'thesportworship_tournaments_type');






/**
 * All transfer news of football
 * There are no post type for this type of post
 */
function thesportworship_transfer_news(){
    register_post_type('transfers', array(
        'labels' => array(
            'name' => __('Transfers', 'thesportworship'),
            'singular_name' => __('Transfer', 'thesportworship'),
        ),
        'menu_icon' => 'dashicons-controls-repeat',
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title',  'thumbnail', 'editor', )
    ));
}

add_action('init', 'thesportworship_transfer_news');
?>