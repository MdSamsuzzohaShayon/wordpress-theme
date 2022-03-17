<?php
function thesportworship_customize_register($wp_customize){

    $wp_customize->add_section('thosportworship_caption_section', array(
        'title'    => __('Caption homepage', 'thesportworship'),
        'description' => '',
        'priority' => 120,
    ));

    /**
     * This is title
     */
    $wp_customize->add_setting('thesportworship_caption_title_setting', array(
        'default'        => 'SPORTS MAKE LIFE EASIER',
        'capability'     => 'edit_theme_options',
        ));

    $wp_customize->add_control('thesportworship_caption_title_control', array(
        'label'      => __('Caption title', 'thesportworship'),
        'section'    => 'thosportworship_caption_section',
        'settings'   => 'thesportworship_caption_title_setting',
        'type'           => 'textarea',
    ));


    /**
     * This is description
     */
    $wp_customize->add_setting('thesportworship_caption_description_setting', array(
        'default'        => 'We help to be involved in sports events and stories across the globe, make yourself healthier and mentally strong, and that is just the start of it. ',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('thesportworship_caption_description_control', array(
        'label'      => __('Caption description', 'thesportworship'),
        'section'    => 'thosportworship_caption_section',
        'settings'   => 'thesportworship_caption_description_setting',
        'type'           => 'textarea',
    ));


}

add_action('customize_register', 'thesportworship_customize_register');

?>