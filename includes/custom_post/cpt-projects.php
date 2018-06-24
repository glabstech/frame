<?php

function cptui_register_my_cpts_cdc_projects() {

/**
 * Post Type: Projects.
 */

$labels = array(
    "name" => __( "Projects", "" ),
    "singular_name" => __( "Project", "" ),
);

$args = array(
    "label" => __( "Projects", "" ),
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
    "rewrite" => array( "slug" => "cdc_projects", "with_front" => true ),
    "query_var" => true,
    "menu_icon" => "dashicons-palmtree",
    "supports" => array( "title", "thumbnail","excerpt" ),
);

register_post_type( "cdc_projects", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cdc_projects' );

