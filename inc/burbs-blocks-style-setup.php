<?php

add_action( 'enqueue_block_assets', 'enqueue_burbs_blocks_style_scripts_styles' );
/**
 * Register style and script.
 *
 * @since 0.1.1
 */
function enqueue_burbs_blocks_style_scripts_styles() {
	wp_register_style( 'burbs-blocks-style', plugins_url( 'css/burbs-blocks-style.css', __FILE__ ), [], time() );
	wp_register_script( 'burbs-blocks-style', plugins_url( 'js/burbs-blocks-style.js', __FILE__ ), [], time(), true );
}


add_filter( 'render_block', 'burbs_blocks_style_show_block_type', 10, 2 );

/**
 * Restrict enqueueing to paragraph block.
 *
 * @since 0.1.1
 */
function burbs_blocks_style_show_block_type( $block_content, $block ) {
	if ( 'core/paragraph' === $block['blockName'] ) {
		wp_enqueue_style( 'burbs-blocks-style' );
		wp_enqueue_script( 'burbs-blocks-style' );
	}
	return $block_content;
}
