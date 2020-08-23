<?php

// Allow only certain core Gutenberg blocks and add our own custom blocks
function wheelbarrow_allowed_block_types() {

	return array(
		'core/heading',
		'core/paragraph',
		'core/list',
		'core/table',
		'core/columns',
		'core/file',
		'core/verse',
		'core/quote',
		'core/image',
		// 'core/cover',
		'core/gallery',
		'core/media-text',
		'core/separator',
		'core/shortcode',
		'core-embed/twitter',
		'core-embed/instagram',
		'core-embed/youtube',
		'core-embed/vimeo',

		// third party
		'wpforms/form-selector',
		
		// our own custom blocks
		'acf/spacing',
		'acf/project-meta',
		);
}
add_filter( 'allowed_block_types', 'wheelbarrow_allowed_block_types', 10, 2 );

/**
 * Add support for Block Styles.
 */
add_theme_support( 'wp-block-styles' );

/**
 * Add support for full and wide align images.
 */
add_theme_support( 'align-wide' );

/**
 * Add support for editor styles.
 */
add_theme_support( 'editor-styles' );

/**
 * Add support for responsive embedded content.
 */
add_theme_support( 'responsive-embeds' );

/**
 * Enqueue my own block editor styles
 */
function wheelbarrow_block_editor_styles() {
	wp_enqueue_style( 'wheelbarrow-editor-styles', get_stylesheet_directory_uri() . '/assets/compiled/editor-styles.css', array(), '1.0.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'wheelbarrow_block_editor_styles' );

/**
 * Custom font sizing
 *
 */
function signal_gutenberg_custom_font_sizes() {
	// -- Disable custom font sizes (where user could set any font size number)
	add_theme_support( 'disable-custom-font-sizes' );

	// -- Editor Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => __( 'small', 'signal' ),
			'shortName' => __( 'S', 'signal' ),
			'size'      => 14,
			'slug'      => 'small'
		),
		array(
			'name'      => __( 'regular', 'signal' ),
			'shortName' => __( 'M', 'signal' ),
			'size'      => 16,
			'slug'      => 'regular'
		),
		array(
			'name'      => __( 'large', 'signal' ),
			'shortName' => __( 'L', 'signal' ),
			'size'      => 20,
			'slug'      => 'large'
		),
	) );
}
add_action( 'after_setup_theme', 'signal_gutenberg_custom_font_sizes' );

/**
 * Custom colour palette
 *
 */
function signal_custom_editor_colour_palette() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'White', 'signal' ),
			'slug'  => 'white',
			'color'	=> '#FFFFFF',
		),
		array(
			'name'  => __( 'Black', 'signal' ),
			'slug'  => 'black',
			'color'	=> '#000000',
		),
		array(
			'name'  => __( 'Grey', 'signal' ),
			'slug'  => 'grey',
			'color'	=> '#616161',
		),
		array(
			'name'  => __( 'Primary', 'signal' ),
			'slug'  => 'primary',
			'color' => '#932c00'
		),
	) );
}
add_action( 'after_setup_theme', 'signal_custom_editor_colour_palette' );