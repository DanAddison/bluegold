<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package wheelbarrow
 */

 
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wheelbarrow_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
		$classes[] = 'archive-view';
	}
	
	// Add a class telling us if the sidebar is in use.
	// Adapt conditions to exclude certain pages (which do not call for the sidebar template part) from getting unwanted sidebar css rules:
		if ( is_active_sidebar( 'sidebar-1' ) && ! is_page( ['home', 'contact'] ) ) {
		$classes[] = 'has-sidebar';
	} else {
		$classes[] = 'no-sidebar';
	}

	// Add a class telling us if the footer widget area is in use.
	if ( is_active_sidebar( 'footer-2' ) ) {
		$classes[] = 'has-footer-sidebar';
	}
	
	return $classes;
}
add_filter( 'body_class', 'wheelbarrow_body_classes' );


/**
 * Post summary excerpts
 */
// Change excerpt length
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// change automatic 'read more' link
function new_excerpt_more($more) {
	global $post;
	return '.. <a class="moretag" 
	href="'. get_permalink($post->ID) . '">Read more</a>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');

//  add 'read more' link to excerpts added manually via the Excerpt metafield
 add_filter( 'wp_trim_excerpt', 'nebuloshell_excerpt_metabox_more' );
function nebuloshell_excerpt_metabox_more( $excerpt ) {
	$output = $excerpt;
	
	if ( has_excerpt() ) {
		$output = sprintf( '%1$s <a href="%2$s"> ...Read more</a>',
			$excerpt,
			get_permalink()
		);
	}
	
	return $output;
}	
