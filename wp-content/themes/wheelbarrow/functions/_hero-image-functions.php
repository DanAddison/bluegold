<?php
/**
 * Hero Image functions
 *
 */

function get_hero_image_id( $post_id = 0 ) {
	
	// get hero image from a CPT taxonomy (set via ACF field on the category admin screen) for displaying on that category's archive page
	if ( is_tax( array('ct_example_one', 'ct_example_two') ) ) {
		$term = get_queried_object();
		return get_field( 'hero_image', $term );
	} 

	// get hero image from posts page
	elseif ( is_home() ) {
		return get_field('hero_image', get_option('page_for_posts'));
	}
	
	else {	
		return get_field( 'hero_image', get_the_ID() );
	}
}

function get_hero_image_url( $size = 'thumbnail' ) {
	$attachment_id = get_hero_image_id( );
	if( ! $attachment_id )
		return false;
	if( $size !== 'thumbnail' && strpos( $size, 'hero_' ) !== 0 ) {
		$size = "hero_{$size}";
	}
	return wp_get_attachment_image_url( $attachment_id, $size );
}


function nebuloshell_scripts_add_hero_image_style() {

	$hero_attachment_id = get_hero_image_id( );

	if( ! $hero_attachment_id )
		return false;

	$hero_small = get_hero_image_url( 'small' );
	$hero_style =
		'.hero__image {' .
			"background-image: url('$hero_small');" .
		'}';

	$hero_medium = get_hero_image_url( 'medium' );
	if( $hero_medium !== $hero_small ) {
		$hero_style .=
			'@media screen and (min-width: 600px) {' .
				'.hero__image {' .
					"background-image: url('$hero_medium');" .
				'}' .
			'}';
	}

	$hero_large = get_hero_image_url( 'large' );
	if( $hero_large !== $hero_medium ) {
		$hero_style .=
			'@media screen and (min-width: 900px) {' .
				'.hero__image {' .
					"background-image: url('$hero_large');" .
				'}' .
			'}';
	}

	$hero_xlarge = get_hero_image_url( 'xlarge' );
	if( $hero_xlarge !== $hero_large ) {
		$hero_style .=
			'@media screen and (min-width: 1500px) {' .
				'.hero__image {' .
					"background-image: url('$hero_xlarge');" .
				'}' .
			'}';
	}

	wp_add_inline_style( 'main-style', $hero_style );
}
add_action( 'wp_enqueue_scripts', 'nebuloshell_scripts_add_hero_image_style', 11 );