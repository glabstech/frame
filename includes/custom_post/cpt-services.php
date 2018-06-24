<?php

function cptui_register_my_cpts_cdc_services() {

	/**
	 * Post Type: Services.
	 */

	$labels = array(
		"name" => __( "Services", "" ),
		"singular_name" => __( "Service", "" ),
		"all_items" => __( "All Services", "" ),
		"add_new_item" => __( "Add New Service", "" ),
		"edit_item" => __( "Edit Service", "" ),
		"new_item" => __( "New Service", "" ),
		"view_item" => __( "View Service", "" ),
		"view_items" => __( "View Services", "" ),
		"search_items" => __( "Search Gallery", "" ),
		"set_featured_image" => __( "Set featured image for this service", "" ),
		"remove_featured_image" => __( "Remove featured image for this service", "" ),
		"use_featured_image" => __( "Use as featured image for this service", "" ),
		"archives" => __( "Service Archives", "" ),
		"insert_into_item" => __( "Insert into service", "" ),
		"uploaded_to_this_item" => __( "Uploaded to this service", "" ),
	);

	$args = array(
		"label" => __( "Services", "" ),
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
		"rewrite" => array( "slug" => "cdc_services", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-hammer",
		"supports" => array( "title", "thumbnail","excerpt" ),
	);

	register_post_type( "cdc_services", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cdc_services' );


/* CUSTOM TAXONOMY */
function cptui_register_my_taxes_cdc_service_tags() {

	/**
	 * Taxonomy: Tags.
	 */

	$labels = array(
		"name" => __( "Tags", "" ),
		"singular_name" => __( "Tag", "" ),
	);

	$args = array(
		"label" => __( "Tags", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Tags",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'cdc_service_tags', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "cdc_service_tags",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "cdc_service_tags", array( "cdc_services" ), $args );
}

//add_action( 'init', 'cptui_register_my_taxes_cdc_service_tags' );

