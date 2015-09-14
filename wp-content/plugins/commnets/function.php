<?php

/**
 * Plugin Name: Comment
 * Plugin URI:
 * Description: A brief description about your plugin.
 * Version: 1.0 or whatever version of the plugin (pretty self explanatory)
 * Author: Plugin
 * Author URI:
 * License: A "Slug" license name e.g. GPL12
 */
// Creating the widget
// Creating the widget

function alx_styles()
{
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', get_site_url().'/wp-content/plugins/commnets/style.css' );
}
add_action( 'wp_enqueue_scripts', 'alx_styles' );

class i_comment extends WP_Widget {

    function __construct() {
        parent::__construct(

            'wpb_widget',

            __('Most Commented People','wpb_widget_domain'),
            array( 'description' => __( 'Most Comments', 'wpb_widget_domain' ), )
        );
    }

    public function widget( $args, $instance ) {
        global $wpdb;
        $amount = 5;
        $results = $wpdb->get_results('
            SELECT
            COUNT(comment_author_email) AS comments_count, comment_author_email, comment_author, comment_author_url
            FROM '.$wpdb->comments.'
            WHERE comment_author_email != "" AND comment_type = "" AND comment_approved = 1
            GROUP BY comment_author_email
            ORDER BY comments_count DESC, comment_author ASC
            LIMIT '.$amount
        );
        $output = "<ol>";

        foreach($results as $result) {
            $output .= "<li>".$result->comment_author." - (". $result->comments_count .") "."</li>";
        }
        $output .= "</ol>";
        ?>
        <aside id="aside">
        <h3><?php _e('Most Commented People'); ?></h3>
<?php
        echo $output;
        ?>
</aside>
<?php
    }

    public function form()
    {

    }

    public function update() {
    }
}
function register_i_comment() {
    register_widget( 'i_comment' );
}
add_action( 'widgets_init', 'register_i_comment' );
