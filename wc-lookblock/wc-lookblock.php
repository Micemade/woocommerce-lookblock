<?php
/**
 * Plugin Name:       Wc Lookblock
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wc-lookblock
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function create_block_wc_lookblock_block_init() {
	register_block_type_from_metadata( __DIR__ );
}
add_action( 'init', 'create_block_wc_lookblock_block_init' );

// Local development / limit to admin by adding is_admin inside condition.
if ( defined( 'ENABLE_HOT_RELOADING_FOR_DEV' ) && ENABLE_HOT_RELOADING_FOR_DEV ) {
	/**
	 * Local dev live reload.
	 *
	 * @return void
	 */
	function livereload_scripts() {
		wp_register_script( 'livereload', 'http://localhost:35729/livereload.js' );
		wp_enqueue_script( 'livereload' );
	}
	add_action( 'wp_enqueue_scripts', 'livereload_scripts' );
	add_action( 'admin_enqueue_scripts', 'livereload_scripts' );
}
