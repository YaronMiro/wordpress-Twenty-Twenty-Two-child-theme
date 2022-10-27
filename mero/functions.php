<?php

// enqueue parent styles
// function ns_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// }

// add_action( 'wp_enqueue_scripts', 'ns_enqueue_styles' );



add_action( 'wp_enqueue_scripts', 'mero_enqueue_assets' );

function mero_enqueue_assets() {
	wp_enqueue_style( 'mero-style', get_stylesheet_uri(), '', '1.5' );
}


add_action( 'admin_init', 'mero_editor_styles' );

function mero_editor_styles() {
	add_editor_style( [
		get_stylesheet_uri()
	] );
}