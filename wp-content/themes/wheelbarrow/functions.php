<?php
/**
 * wheelbarrow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wheelbarrow
 */

if ( ! function_exists( 'wheelbarrow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wheelbarrow_setup() {

		// Woocommere support
		add_theme_support( 'woocommerce' );

		// add_theme_support( 'wc-product-gallery-zoom' );
		// add_theme_support( 'wc-product-gallery-lightbox' );
		// add_theme_support( 'wc-product-gallery-slider' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		// add_theme_support( 'post-thumbnails' );

		// Register Menus.
		register_nav_menus( array(
			'main' => 'Main Menu',
			'secondary' => 'Secondary Menu',
		) );

		// remove standard thumbnail metabox everywhere
		// remove_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/**
			 * Declare support for selective refreshing of widgets.
			 */
			add_theme_support( 'customize-selective-refresh-widgets' );

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
			 * Remove support for default featured image.
			 */
			remove_theme_support( 'post-thumbnails' );

			/**
			 * Add support for responsive embedded content.
			 */
			add_theme_support( 'responsive-embeds' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 225,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wheelbarrow_setup' );

/**
 * Enqueue scripts and styles.
 */
function wheelbarrow_scripts() {
	// styles
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/compiled/style.css', array(), '1.0.0', 'all' );
	// enqueue google fonts
	wp_enqueue_style( 'wheelbarrow-fonts', 'https://fonts.googleapis.com/css?family=Nunito:300,400&display=swap' );

	// scripts
	wp_enqueue_script( 'footer-scripts', get_template_directory_uri() . '/assets/compiled/footer.js', array('jquery'), '1.0.0', true );
	
	// cookie consent scripts provided by https://www.osano.com/cookieconsent/download/
	wp_enqueue_script( 'cookies-scripts', 'https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js' );
	// there is also a JS partial required for this

	// only load comments script if needed
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wheelbarrow_scripts' );


/**
 * Utility functions - eg. ppr()
 */
require get_template_directory() . '/functions/utility-functions.php';

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/functions/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/functions/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/functions/template-functions.php';

/**
 * Woocommerce functions.
 */
require get_template_directory() . '/functions/woocommerce-functions.php';

/**
 * ACF functions.
 */
require get_template_directory() . '/functions/acf.php';

/**
 * Programmatically add pages on theme activation
 */
require get_template_directory() . '/functions/programatically-create-pages.php';

/**
 * Register custom image sizes
 */
require get_template_directory() . '/functions/register-images.php';

/**
 * Cover image functions
 */
require get_template_directory() . '/functions/project-cover-image-functions.php';

/**
 * Hero image functions
 */
// require get_template_directory() . '/functions/hero-image-functions.php';

/**
 * Register widget areas
 */
require get_template_directory() . '/functions/register-widgets.php';

/**
 * Register Portfolio custom post type
 */
require get_template_directory() . '/functions/cpt-news.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/functions/customizer.php';

/**
 * Gutenberg settings
 */
require get_template_directory() . '/functions/gutenberg-settings.php';

/**
 * Custom ACF Gutenberg blocks
 */
require get_template_directory() . '/functions/gutenberg-acf-blocks.php';


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

