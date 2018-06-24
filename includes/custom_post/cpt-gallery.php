<?php

function cptui_register_my_cpts_cdc_gallery() {

/**
 * Post Type: Galleries.
 */


$labels = array(
    "name" => __( "Galleries", "" ),
    "singular_name" => __( "Gallery", "" ),
    "all_items" => __( "All Galleries", "" ),
    "add_new_item" => __( "Add New Gallery", "" ),
    "edit_item" => __( "Edit Gallery", "" ),
    "new_item" => __( "New Gallery", "" ),
    "view_item" => __( "View Gallery", "" ),
    "view_items" => __( "View Galleries", "" ),
    "search_items" => __( "Search Gallery", "" ),
    "set_featured_image" => __( "Set featured image for this gallery", "" ),
    "remove_featured_image" => __( "Remove featured image for this gallery", "" ),
    "use_featured_image" => __( "Use as featured image for this gallery", "" ),
    "archives" => __( "Gallery Archives", "" ),
    "insert_into_item" => __( "Insert into gallery", "" ),
    "uploaded_to_this_item" => __( "Uploaded to this gallery", "" ),
);

$args = array(
    "label" => __( "Galleries", "" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "cdc_gallery", "with_front" => true ),
    "query_var" => true,
    "menu_icon" => "dashicons-images-alt",
    "supports" => array( "title", "thumbnail","excerpt" ),
    "taxonomies" => array( "cdc_galler_category" ),
);

register_post_type( "cdc_gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cdc_gallery' );


/*
    CUSTOM TAXONOMY for GALLERY POST TYPE
*/
function cptui_register_my_taxes_cdc_galler_category() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = array(
		"name" => __( "Categories", "" ),
		"singular_name" => __( "Category", "" ),
	);

	$args = array(
		"label" => __( "Categories", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'cdc_galler_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "cdc_galler_category",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "cdc_galler_category", array( "cdc_gallery" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_cdc_galler_category' );
