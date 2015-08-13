<?php 

if ( ! function_exists('tsr_custom_post_type') ) {


function tsr_custom_post_type() {
	// Register Custom Post Type - skills
	$labels = array(
		'name'                => _x( 'Skills', 'Post Type General Name', 'tsr' ),
		'singular_name'       => _x( 'Skill', 'Post Type Singular Name', 'tsr' ),
		'menu_name'           => __( 'Skills', 'tsr' ),
		'name_admin_bar'      => __( 'Skills', 'tsr' ),
		'parent_item_colon'   => __( 'Parent Item:', 'tsr' ),
		'all_items'           => __( 'All Items', 'tsr' ),
		'add_new_item'        => __( 'Add New Item', 'tsr' ),
		'add_new'             => __( 'Add New', 'tsr' ),
		'new_item'            => __( 'New Item', 'tsr' ),
		'edit_item'           => __( 'Edit Item', 'tsr' ),
		'update_item'         => __( 'Update Item', 'tsr' ),
		'view_item'           => __( 'View Item', 'tsr' ),
		'search_items'        => __( 'Search Item', 'tsr' ),
		'not_found'           => __( 'Not found', 'tsr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsr' ),
	);
	$args = array(
		'label'               => __( 'skills', 'tsr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'skills', $args );


	// Register Custom Post Type - works
	$labels = array(
		'name'                => _x( 'Works', 'Post Type General Name', 'tsr' ),
		'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'tsr' ),
		'menu_name'           => __( 'Works', 'tsr' ),
		'name_admin_bar'      => __( 'Works', 'tsr' ),
		'parent_item_colon'   => __( 'Parent Item:', 'tsr' ),
		'all_items'           => __( 'All Items', 'tsr' ),
		'add_new_item'        => __( 'Add New Item', 'tsr' ),
		'add_new'             => __( 'Add New', 'tsr' ),
		'new_item'            => __( 'New Item', 'tsr' ),
		'edit_item'           => __( 'Edit Item', 'tsr' ),
		'update_item'         => __( 'Update Item', 'tsr' ),
		'view_item'           => __( 'View Item', 'tsr' ),
		'search_items'        => __( 'Search Item', 'tsr' ),
		'not_found'           => __( 'Not found', 'tsr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'tsr' ),
	);
	$args = array(
		'label'               => __( 'works', 'tsr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-tools',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'works', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tsr_custom_post_type', 0 );

}


 ?>