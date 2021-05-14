<?php

/**
 * Registers the `lookblock` post type.
 */
function lookblock_init() {
	register_post_type( 'lookblock', array(
		'labels'                => array(
			'name'                  => __( 'Lookblocks', 'woocommerce-lookblock' ),
			'singular_name'         => __( 'Lookblock', 'woocommerce-lookblock' ),
			'all_items'             => __( 'All Lookblocks', 'woocommerce-lookblock' ),
			'archives'              => __( 'Lookblock Archives', 'woocommerce-lookblock' ),
			'attributes'            => __( 'Lookblock Attributes', 'woocommerce-lookblock' ),
			'insert_into_item'      => __( 'Insert into lookblock', 'woocommerce-lookblock' ),
			'uploaded_to_this_item' => __( 'Uploaded to this lookblock', 'woocommerce-lookblock' ),
			'featured_image'        => _x( 'Featured Image', 'lookblock', 'woocommerce-lookblock' ),
			'set_featured_image'    => _x( 'Set featured image', 'lookblock', 'woocommerce-lookblock' ),
			'remove_featured_image' => _x( 'Remove featured image', 'lookblock', 'woocommerce-lookblock' ),
			'use_featured_image'    => _x( 'Use as featured image', 'lookblock', 'woocommerce-lookblock' ),
			'filter_items_list'     => __( 'Filter lookblocks list', 'woocommerce-lookblock' ),
			'items_list_navigation' => __( 'Lookblocks list navigation', 'woocommerce-lookblock' ),
			'items_list'            => __( 'Lookblocks list', 'woocommerce-lookblock' ),
			'new_item'              => __( 'New Lookblock', 'woocommerce-lookblock' ),
			'add_new'               => __( 'Add New', 'woocommerce-lookblock' ),
			'add_new_item'          => __( 'Add New Lookblock', 'woocommerce-lookblock' ),
			'edit_item'             => __( 'Edit Lookblock', 'woocommerce-lookblock' ),
			'view_item'             => __( 'View Lookblock', 'woocommerce-lookblock' ),
			'view_items'            => __( 'View Lookblocks', 'woocommerce-lookblock' ),
			'search_items'          => __( 'Search lookblocks', 'woocommerce-lookblock' ),
			'not_found'             => __( 'No lookblocks found', 'woocommerce-lookblock' ),
			'not_found_in_trash'    => __( 'No lookblocks found in trash', 'woocommerce-lookblock' ),
			'parent_item_colon'     => __( 'Parent Lookblock:', 'woocommerce-lookblock' ),
			'menu_name'             => __( 'Lookblocks', 'woocommerce-lookblock' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-products',
		'show_in_rest'          => true,
		'rest_base'             => 'lookblock',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'lookblock_init' );

/**
 * Sets the post updated messages for the `lookblock` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `lookblock` post type.
 */
function lookblock_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['lookblock'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Lookblock updated. <a target="_blank" href="%s">View lookblock</a>', 'woocommerce-lookblock' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'woocommerce-lookblock' ),
		3  => __( 'Custom field deleted.', 'woocommerce-lookblock' ),
		4  => __( 'Lookblock updated.', 'woocommerce-lookblock' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Lookblock restored to revision from %s', 'woocommerce-lookblock' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Lookblock published. <a href="%s">View lookblock</a>', 'woocommerce-lookblock' ), esc_url( $permalink ) ),
		7  => __( 'Lookblock saved.', 'woocommerce-lookblock' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Lookblock submitted. <a target="_blank" href="%s">Preview lookblock</a>', 'woocommerce-lookblock' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Lookblock scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview lookblock</a>', 'woocommerce-lookblock' ),
		date_i18n( __( 'M j, Y @ G:i', 'woocommerce-lookblock' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Lookblock draft updated. <a target="_blank" href="%s">Preview lookblock</a>', 'woocommerce-lookblock' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'lookblock_updated_messages' );
