<?php 

// Clean up the WordPress head
add_action('init', 'head_cleanup');
function head_cleanup() {
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '', '', '', true);
    }
}
add_filter('the_generator', 'rss_version');
function rss_version() { return ''; }
