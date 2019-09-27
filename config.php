<?php

/*
    Include Admin Resources 
*/

/*
    Include Admin Resources 
*/
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/admin/lib/acfpro';
    return $path;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/admin/lib/acfpro/';
    return $dir;
}

// include_once	'admin/lib/advanced-custom-fields-pro/acf.php';
include_once	'admin/lib/acfpro/acf.php';
include_once	'admin/lib/acf-options-page/acf-options-page.php';
include_once	'admin/lib/acf-repeater/acf-repeater.php';
include_once	'admin/lib/acf-field-column/acf-column.php';

/*
    Include custom post types
*/
//include_once	'includes/custom_post/cpt-gallery.php';
//include_once	'includes/custom_post/cpt-services.php';
//include_once	'includes/custom_post/cpt-projects.php';

/*
    Custom Taxonomy
*/
//include_once	'includes/custom_taxonomy/cdc-tag.php';

/*
    Shortcodes
*/
//include_once	'includes/shortcodes/sc-projects.php';
//include_once	'includes/shortcodes/sc-news-list.php';
//include_once	'includes/shortcodes/sc-social-links.php';
//include_once	'includes/shortcodes/sc-hashtags.php';
//include_once	'includes/shortcodes/sc-latest-news.php';

/*
    Widgets
*/
//include_once	'includes/widgets/hash-tags.php';

//load custom options page
include_once	'admin/options_theme-options.php';

//utility
include_once	'includes/util_functions.php';

/*
    Sidebar
*/
include_once    'includes/sidebar.php';
include_once    'includes/enqueue.php';


/*
    Bootstrap 4 Nav Walker
*/

if ( ! file_exists( get_template_directory() . '/wp_bootstrap_navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the wp_bootstrap_navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/wp_bootstrap_navwalker.php';
}