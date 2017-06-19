<?php

// theme image/thumbnail sizes
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true );

add_image_size( 'custom-size', 220, 180 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
add_image_size( 'custom-size', 600, 9999 ); // 600 pixels wide with flexible height, soft proportional crop mode
add_image_size( 'custom-size', 220, 180, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top