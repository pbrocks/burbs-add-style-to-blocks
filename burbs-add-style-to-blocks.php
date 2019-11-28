<?php
/**
 * Plugin Name: 'burbs Add Style to Blocks
 * Plugin URI: https://github.com/pbrocks/burbs-blocks-style
 * Description: Keep your site healthy, secure, and performing well!
 * Version: 0.1.1
 * Author: Cross Check SEO
 * Author URI: https://github.com/pbrocks
 * Domain Path: /languages
 * Text Domain: burbs-blocks-style
 *
 * @author pbrocks
 * @version 0.1.1
 * @package burbs-blocks-style
 */

// Exits if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'plugins_loaded', 'load_burbs_blocks_style_init' );

add_action( 'plugins_loaded', 'burbs_blocks_style_load_textdomain' );
/**
 * load_cross_check_init
 *
 * Acticvate php files found in folders
 *
 * @return null
 */
function load_burbs_blocks_style_init() {
	if ( file_exists( __DIR__ . '/inc' ) && is_dir( __DIR__ . '/inc' ) ) {
		foreach ( glob( __DIR__ . '/inc/*.php' ) as $filename ) {
			require $filename;
		}
	}
}

/**
 * Setup WordPress localization support
 *
 * @since 4.0
 */
function burbs_blocks_style_load_textdomain() {
	load_plugin_textdomain( 'burbs-blocks-style', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
