<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wheelbarrow_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wheelbarrow' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wheelbarrow' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'wheelbarrow' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer widgets here.', 'wheelbarrow' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'wheelbarrow_widgets_init' );

/**
 * Unregister some default widgets.
 */
function unregister_default_wp_widgets() { 
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Media_Audio');
	unregister_widget('WP_Widget_Media_Gallery');
	unregister_widget('WP_Widget_Media_Image');
	unregister_widget('WP_Widget_Media_Video');
	
	// unregister_widget('WP_Nav_Menu_Widget');
	// unregister_widget('WP_Widget_Custom_HTML');
	// unregister_widget('WP_Widget_Text');
	// unregister_widget('WP_Widget_Search');
	// unregister_widget('WP_Widget_Archives');
	// unregister_widget('WP_Widget_Categories');
	// unregister_widget('WP_Widget_Recent_Posts');
}
add_action('widgets_init', 'unregister_default_wp_widgets' );
