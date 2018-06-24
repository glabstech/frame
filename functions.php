<?php
include_once	'config.php';
include_once 	'wp_bootstrap_navwalker.php';


//admin
//include_once	'admin/acf-conditional-logic.php';



//**remove paragraph on editor
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );
//**enable shortocde on widget area
add_filter( 'widget_text', 'do_shortcode' );

/* 
	Register Menu Area
*/
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'MAIN' ),
) );



//add_theme_support( 'post-thumbnails' ); 

/* ADD IMAGE THEME SUPPORT */
//add_image_size( '200x200', 200, 200, true );
//add_image_size( 'gallery_mid', 362, 494 ); // Hard crop left top
//add_image_size( 'cover_bg', 1440, 560 ); // Hard crop left top


