<?php
/**
 * Child functions.php
 *
 * @package Brixel Child
 */

/**
 * Enqueue child theme css.
 */
function brixel_child_enqueue_styles() {
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
	   if ( is_rtl() ) {

         wp_enqueue_style( 'muqda-style-rtl',  get_theme_file_uri() . '/rtl-style.css');	
    }
}
add_action( 'wp_enqueue_scripts', 'brixel_child_enqueue_styles' );