<?php
function thesportworship_save_post_views($postID)
{
    $metaKey = 'tsw_post_views';
    $views = get_post_meta($postID, $metaKey, true);

    $count = (empty($views) ? 0 : $views);
    $count++;
    update_post_meta($postID, $metaKey, $count);

    echo $views;
}

//Removes a callback function from an action hook.
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/**
 * @sidebar Popular posts sidebar
 */
function thesportworship_popular_post_sidebar()
{
    register_sidebar(array(
        'name' => __('Popular sidebar', 'thesportworship'),
        'id' => 'sidebar-popular',
        'description' => __('Widgets in this area will be shown on all popular posts.', 'thesportworship'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'thesportworship_popular_post_sidebar');

/**
 * @widgets Popular posts widgets
 */
//class TSW_Popular_Posts_Widgets extends WP_Widget
//{
//
//
//
//    public function __construct()
//    {
//        parent::__construct('tsw_popular_posts', 'TSW Popular Posts', array(
//            'classname' => 'tsw-popular-posts-widgets',
//            'description' => 'Popular Posts Widgets',
//        ));
//    }
//
//    /**
//     * Display backend of the widget
//     * @function Here form is a default function of WP_Widgets
//     */
////    public function form($instance)
////    {
////        $title = (!empty($instance['title']) ? $instance['title'] : 'Popular Posts');
////        $tot = (!empty($instance['tot']) ? absint($instance['title']) : 4); // How many posts are going to display
////
////
////
////        $output = '<p>';
////        $output .= '<label> for="' . esc_attr($this->get_field_id('title')) . '">Title </label>';
////        $output .= '<input type="text" class="widefat" id="' . esc_attr($this->get_field_id('title')) . '" name="' . esc_attr($this->get_field_name('title')) . '" value="' . esc_attr($title) . '" />';
////        $output .= '</p>';
////
////        $output .= '<p>';
////        $output .= '<label> for="' . esc_attr($this->get_field_id('tot')) . '">Number of Posts </label>';
////        $output .= '<input type="number" class="widefat" id="' . esc_attr($this->get_field_id('tot')) . '" name="' . esc_attr($this->get_field_name('tot')) . '" value="' . esc_attr($tot) . '" />';
////        $output .= '</p>';
////
////        echo $output;
////
////    }
//}
//
//
//add_action('widgets_init', function () {
//    register_widget('TSW_Popular_Posts_Widgets');
//});


class My_Widget extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'tsw-popular-posts-widgets',
            'description' => 'Popular Posts Widgets',
        );
        parent::__construct('popular_posts', 'TSW Popular Posts', $widget_ops);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        $title = (!empty($instance['title']) ? $instance['title'] : 'Popular Posts');
        $tot = (!empty($instance['tot']) ? absint($instance['title']) : 4); // How many posts are going to display


        $output = '<p>';
        $output .= '<label> for="' . esc_attr($this->get_field_id('title')) . '">Title </label>';
        $output .= '<input type="text" class="widefat" id="' . esc_attr($this->get_field_id('title')) . '" name="' . esc_attr($this->get_field_name('title')) . '" value="' . esc_attr($title) . '" />';
        $output .= '</p>';

        $output .= '<p>';
        $output .= '<label> for="' . esc_attr($this->get_field_id('tot')) . '">Number of Posts </label>';
        $output .= '<input type="number" class="widefat" id="' . esc_attr($this->get_field_id('tot')) . '" name="' . esc_attr($this->get_field_name('tot')) . '" value="' . esc_attr($tot) . '" />';
        $output .= '</p>';

        echo $output;

    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
    }
}

add_action('widgets_init', function () {
    register_widget('My_Widget');
});


?>