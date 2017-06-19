<?php 

// custom login styles
function custom_login() { 
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/css/login-custom.css" />'; 
} 
add_action('login_head', 'custom_login');