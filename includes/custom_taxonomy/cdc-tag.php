<?php

/* CUSTOM TAXONOMY */
function cptui_register_my_taxes_cdc_tags() {

	/**
	 * Taxonomy: Tags.
	 */

	$labels = array(
		"name" => __( "Service Tags", "" ),
		"singular_name" => __( "Service Tag", "" ),
	);

	$args = array(
		"label" => __( "Service Tag", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Service Tags",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'cdc_tags', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "cdc_tags",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "cdc_tags", array( "cdc_services","cdc_projects","post" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_cdc_tags' );
