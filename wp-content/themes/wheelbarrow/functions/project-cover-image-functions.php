<?php
/**
 * Portfolio project image functions
 *
 */

function get_project_image_id( $post_id = 0 ) {
	
	// get project image from a CPT taxonomy (set via ACF field on the category admin screen) for displaying on that category's archive page
	if ( is_tax( array('ct_example_one', 'ct_example_two') ) ) {
		$term = get_queried_object();
		return get_field( 'project_image', $term );
	} 

	// get project image from posts page
	elseif ( is_home() ) {
		return get_field('project_image', get_option('page_for_posts'));
	}
	
	else {	
		return get_field( 'project_image', get_the_ID() );
	}
}

function get_project_image_url( $size = 'thumbnail' ) {
	$attachment_id = get_project_image_id( );
	if( ! $attachment_id )
		return false;
	return wp_get_attachment_image_url( $attachment_id, $size );
}


function signal_scripts_add_project_image_style() {

	$project_attachment_id = get_project_image_id( );

	if( ! $project_attachment_id )
		return false;

	$project_small = get_project_image_url( 'cover_s' );
	$project_style =
		'.project__image {' .
			"background-image: url('$project_small');" .
		'}';

	$project_medium = get_project_image_url( 'cover_m' );
	if( $project_medium !== $project_small ) {
		$project_style .=
			'@media screen and (min-width: 800px) {' .
				'.project__image {' .
					"background-image: url('$project_medium');" .
				'}' .
			'}';
	}

	$project_large = get_project_image_url( 'cover_l' );
	if( $project_large !== $project_medium ) {
		$project_style .=
			'@media screen and (min-width: 1200px) {' .
				'.project__image {' .
					"background-image: url('$project_large');" .
				'}' .
			'}';
	}

	$project_xlarge = get_project_image_url( 'cover_xl' );
	if( $project_xlarge !== $project_medium ) {
		$project_style .=
			'@media screen and (min-width: 1700px) {' .
				'.project__image {' .
					"background-image: url('$project_xlarge');" .
				'}' .
			'}';
	}

	wp_add_inline_style( 'main-style', $project_style );
}
add_action( 'wp_enqueue_scripts', 'signal_scripts_add_project_image_style', 11 );