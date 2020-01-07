<?php
/**
 * Main functions file for child theme TwentyTwenty.
 *
 * @package twentytwenty-child
 */

add_action( 'wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles', 100 );
/**
 * Dequeue PageNavi's styles and include our own.
 */
function twentytwenty_child_enqueue_styles() {
	// Dequeue PageNavi's styles.
	wp_deregister_style( 'wp-pagenavi' );

	// Enqueue our own.
	wp_enqueue_style(
		'wp-pagenavi',
		get_stylesheet_directory_uri() . '/pagenavi.css',
		array(),
		'1.0.0'
	);
}
