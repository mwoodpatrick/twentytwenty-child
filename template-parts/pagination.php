<?php
/**
 * Override TwentyTwenty's pagination and use WP PageNavi
 *
 * @package twentytwenty-child
 */

if ( function_exists( 'wp_pagenavi' ) ) {
	wp_pagenavi();
}

