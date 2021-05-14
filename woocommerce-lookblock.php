<?php
/**
 * Plugin Name:     WooCommerce LookBlock
 * Plugin URI:      https://github.com/Micemade/woocommerce-lookblock
 * Description:     Group WooCommerce products in lookbooks or showroom using WordPress editor block called WC Micemade LookBlock
 * Author:          Micemade
 * Author URI:      https://micemade.com
 * Text Domain:     woocommerce-lookblock
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Woocommerce_Lookblock
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WC_LOOKBLOCK_DIR', plugin_dir_path( __FILE__ ) );
define( 'WC_LOOKBLOCK_URL', plugin_dir_url( __FILE__ ) );
define( 'WC_LOOKBLOCK_VERSION', '1.0.0' );

/**
 * Initialize CPT, CP Taxonomy, WC Micemade Lookblock block.
 */
require_once plugin_dir_path( __FILE__ ) . 'post-types/lookblock.php';
require_once plugin_dir_path( __FILE__ ) . 'taxonomies/lookblock-category.php';
require_once plugin_dir_path( __FILE__ ) . 'wc-lookblock/wc-lookblock.php';

