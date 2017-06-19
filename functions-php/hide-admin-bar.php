<?php 


// disable for all except admin user
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}


// disable admin bar for all users
add_filter('show_admin_bar', '__return_false');