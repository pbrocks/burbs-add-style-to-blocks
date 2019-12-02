<?php

add_action( 'enqueue_block_assets', 'enqueue_burbs_block_script' );
function enqueue_burbs_block_script() {
	wp_register_script( 'burbs-blocks-style', plugins_url( 'js/burbs-blocks-style.js', __FILE__ ), [], time(), true );
	wp_enqueue_script( 'burbs-blocks-style' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_burbs_block_style' );
function enqueue_burbs_block_style() {
	wp_register_style( 'burbs-blocks-style', plugins_url( 'css/burbs-blocks-style.css', __FILE__ ), [], time() );
	wp_enqueue_style( 'burbs-blocks-style' );
}

