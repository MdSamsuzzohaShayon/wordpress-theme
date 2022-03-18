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

class TSW_Popular_Posts_Widgets extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('tsw_popular_posts', 'TSW Popular Posts', array(
            'classname' => 'tsw-popular-posts-widgets',
            'description' => 'Popular Posts Widgets',
        ));
    }

    /**
     * Display backend of the widget
     * @function Here form is a default function of WP_Widgets
     */
    public function form($instance)
    {
        $title = (!emptry($instance['title']) ? $instance['title'] : 'Popular Posts');
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
}


add_action( 'widgets_init', function() {
    register_widget( 'TSW_Popular_Posts_Widgets' );
});







?>