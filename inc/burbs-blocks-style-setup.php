<?php

add_action( 'enqueue_block_assets', 'enqueue_burbs_blocks_style_scripts_styles' );
function enqueue_burbs_blocks_style_scripts_styles() {
	wp_register_style( 'burbs-blocks-style', plugins_url( 'css/burbs-blocks-style.css', __FILE__ ), [], time() );
	wp_register_script( 'burbs-blocks-style', plugins_url( 'js/burbs-blocks-style.js', __FILE__ ), [], time(), true );

	wp_enqueue_style( 'burbs-blocks-style' );
	wp_enqueue_script( 'burbs-blocks-style' );
}
