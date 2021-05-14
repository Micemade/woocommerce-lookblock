<?php

/**
 * Registers the `lookblock_category` taxonomy,
 * for use with 'lookblock'.
 */
function lookblock_category_init() {
	register_taxonomy( 'lookblock-category', array( 'lookblock' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'Lookblock categories', 'woocommerce-lookblock' ),
			'singular_name'              => _x( 'Lookblock category', 'taxonomy general name', 'woocommerce-lookblock' ),
			'search_items'               => __( 'Search Lookblock categories', 'woocommerce-lookblock' ),
			'popular_items'              => __( 'Popular Lookblock categories', 'woocommerce-lookblock' ),
			'all_items'                  => __( 'All Lookblock categories', 'woocommerce-lookblock' ),
			'parent_item'                => __( 'Parent Lookblock category', 'woocommerce-lookblock' ),
			'parent_item_colon'          => __( 'Parent Lookblock category:', 'woocommerce-lookblock' ),
			'edit_item'                  => __( 'Edit Lookblock category', 'woocommerce-lookblock' ),
			'update_item'                => __( 'Update Lookblock category', 'woocommerce-lookblock' ),
			'view_item'                  => __( 'View Lookblock category', 'woocommerce-lookblock' ),
			'add_new_item'               => __( 'Add New Lookblock category', 'woocommerce-lookblock' ),
			'new_item_name'              => __( 'New Lookblock category', 'woocommerce-lookblock' ),
			'separate_items_with_commas' => __( 'Separate lookblock categories with commas', 'woocommerce-lookblock' ),
			'add_or_remove_items'        => __( 'Add or remove lookblock categories', 'woocommerce-lookblock' ),
			'choose_from_most_used'      => __( 'Choose from the most used lookblock categories', 'woocommerce-lookblock' ),
			'not_found'                  => __( 'No lookblock categories found.', 'woocommerce-lookblock' ),
			'no_terms'                   => __( 'No lookblock categories', 'woocommerce-lookblock' ),
			'menu_name'                  => __( 'Lookblock categories', 'woocommerce-lookblock' ),
			'items_list_navigation'      => __( 'Lookblock categories list navigation', 'woocommerce-lookblock' ),
			'items_list'                 => __( 'Lookblock categories list', 'woocommerce-lookblock' ),
			'most_used'                  => _x( 'Most Used', 'lookblock-category', 'woocommerce-lookblock' ),
			'back_to_items'              => __( '&larr; Back to Lookblock categories', 'woocommerce-lookblock' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'lookblock-category',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'lookblock_category_init' );

/**
 * Sets the post updated messages for the `lookblock_category` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `lookblock_category` taxonomy.
 */
function lookblock_category_updated_messages( $messages ) {

	$messages['lookblock-category'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Lookblock category added.', 'woocommerce-lookblock' ),
		2 => __( 'Lookblock category deleted.', 'woocommerce-lookblock' ),
		3 => __( 'Lookblock category updated.', 'woocommerce-lookblock' ),
		4 => __( 'Lookblock category not added.', 'woocommerce-lookblock' ),
		5 => __( 'Lookblock category not updated.', 'woocommerce-lookblock' ),
		6 => __( 'Lookblock categories deleted.', 'woocommerce-lookblock' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'lookblock_category_updated_messages' );
