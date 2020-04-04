<?php

// Register Custom Post Type Serves
function create_serves_cpt() {

	$labels = array(
		'name' => _x( 'Serveses', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Serves', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Serveses', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Serves', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Serves Archives', 'textdomain' ),
		'attributes' => __( 'Serves Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Serves:', 'textdomain' ),
		'all_items' => __( 'All Serveses', 'textdomain' ),
		'add_new_item' => __( 'Add New Serves', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Serves', 'textdomain' ),
		'edit_item' => __( 'Edit Serves', 'textdomain' ),
		'update_item' => __( 'Update Serves', 'textdomain' ),
		'view_item' => __( 'View Serves', 'textdomain' ),
		'view_items' => __( 'View Serveses', 'textdomain' ),
		'search_items' => __( 'Search Serves', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Serves', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Serves', 'textdomain' ),
		'items_list' => __( 'Serveses list', 'textdomain' ),
		'items_list_navigation' => __( 'Serveses list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Serveses list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Serves', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array('categories', 'tags'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'serves', $args );

}
add_action( 'init', 'create_serves_cpt', 0 );