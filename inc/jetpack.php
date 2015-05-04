<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package PeekWP
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function peekwp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'peekwp_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function peekwp_jetpack_setup
add_action( 'after_setup_theme', 'peekwp_jetpack_setup' );

function peekwp_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function peekwp_infinite_scroll_render