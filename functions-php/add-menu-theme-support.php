<?php 

// add menu support
add_theme_support( 'menus' );

if ( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus(
  	array(
  		'main-nav' => 'Main Nav',
  		'footer-links' => 'Footer Links'
  	)
  );
}
