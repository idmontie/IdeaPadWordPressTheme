<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Idea Pad
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function idea_pad_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'idea_pad_jetpack_setup' );
