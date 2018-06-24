<?php

/*	
	---------------
	Scripts
	---------------
*/
if ( !function_exists('theme_enqueue_scripts')) :

	function theme_enqueue_scripts() {
		//main script
        wp_register_script('vendor_js', get_stylesheet_directory_uri() . '/assets/js/vendors.js', false, filemtime( get_stylesheet_directory() . '/assets/js/app.js' ), true);
		wp_enqueue_script('vendor_js', get_stylesheet_directory_uri() . '/assets/js/vendors.js', false, filemtime( get_stylesheet_directory() . '/assets/js/app.js' ), true);

        //main script
        wp_register_script('main_js', get_stylesheet_directory_uri() . '/assets/js/app.js', false, filemtime( get_stylesheet_directory() . '/assets/js/app.js' ), true);
		wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/assets/js/app.js', false, filemtime( get_stylesheet_directory() . '/assets/js/app.js' ), true);

		if (!is_admin()) wp_enqueue_script('jquery');
		
		//bootstrap
		//wp_register_script('bootstrap_js', get_stylesheet_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', false, filemtime( get_stylesheet_directory() . '/lib/bootstrap/js/bootstrap.min.js' ), true);
		//wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', false, filemtime( get_stylesheet_directory() . '/lib/bootstrap/js/bootstrap.min.js' ), true);

		//for gallery module
		//wp_register_script('gallery_module_js', get_stylesheet_directory_uri() . '/assets/js/infinite-scroll-docs.min.js', false, filemtime( get_stylesheet_directory() . '/assets/js/infinite-scroll-docs.min.js' ), true);
		//wp_enqueue_script('gallery_module_js', get_stylesheet_directory_uri() . '/assets/js/infinite-scroll-docs.min.js', false, filemtime( get_stylesheet_directory() . '/assets/js/infinite-scroll-docs.min.js' ), true);

		//3rd party - owl-carousel
		//wp_register_script('cdc_owl_js', get_stylesheet_directory_uri() . '/lib/owl-carousel/owl.carousel.min.js', false, filemtime( get_stylesheet_directory() . '/lib/owl-carousel/owl.carousel.min.js' ), true);
		//wp_enqueue_script('cdc_owl_js', get_stylesheet_directory_uri() . '/lib/owl-carousel/owl.carousel.min.js', false, filemtime( get_stylesheet_directory() . '/lib/owl-carousel/owl.carousel.min.js' ), true);

		
		//3rd party - js-cookie
		//wp_register_script('cdc_js_cookie', get_stylesheet_directory_uri() . '/lib/js-cookie/js.cookie.js', false, filemtime( get_stylesheet_directory() . '/lib/js-cookie/js.cookie.js' ), true);
		//wp_enqueue_script('cdc_js_cookie', get_stylesheet_directory_uri() . '/lib/js-cookie/js.cookie.js', false, filemtime( get_stylesheet_directory() . '/lib/js-cookie/js.cookie.js' ), true);
		

	}

	add_action('init', 'theme_enqueue_scripts');

endif;


/*
	--------------------------------------------
	UNLOAD CHILD THEME STYLE, RELOAD, CACHE BUST
	--------------------------------------------
*/

if ( !function_exists('theme_style')) :
function theme_style() {	
	//3rd party - bootstrap
	//wp_register_style('cdc-bootstrap', get_stylesheet_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), false, 'all');
	//wp_enqueue_style('cdc-bootstrap', get_stylesheet_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), false, 'all');
	
	wp_register_style('main-style', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), filemtime( get_stylesheet_directory().'/assets/css/app.css' ), 'all');
	wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), filemtime( get_stylesheet_directory().'/assets/css/app.css' ), 'all');
	
	//3rd party owl-carousel
	//wp_register_style('cdc-owl', get_stylesheet_directory_uri() . '/lib/owl-carousel/assets/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory().'/lib/owl-carousel/assets/owl.carousel.min.css' ), 'all');
	//wp_enqueue_style('cdc-owl', get_stylesheet_directory_uri() . '/lib/owl-carousel/assets/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory().'/lib/owl-carousel/assets/owl.carousel.min.css' ), 'all');

} add_action( 'wp_enqueue_scripts', 'theme_style', 999);
endif;