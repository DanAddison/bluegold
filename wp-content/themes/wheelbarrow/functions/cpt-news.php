<?php

// Register Custom Post Type
function register_news_custom_post_type() {

	$labels = array(
		'name'                  => 'News',
		'singular_name'         => 'News',
		'menu_name'             => 'News',
		'name_admin_bar'        => 'News',
		'archives'              => 'News',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All News',
		'add_new_item'          => 'Add News Item',
		'add_new'               => 'Add Item',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View News',
		'search_items'          => 'Search News',
		'not_found'             => 'No news projects found',
		'not_found_in_trash'    => 'No news projects found in Trash',
	);
	$args = array(
		'label'                 => 'News',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt' ),
		'hierarchical'          => false,
    'public'                => true,
    'capability_type'       => 'post',
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'news',
		'show_in_rest'          => true,
		'rewrite' => array(
			'slug' => 'news',
			'with_front' => false,
		),
	);
	register_post_type( 'cpt_news', $args );

}
add_action( 'init', 'register_news_custom_post_type', 0 );

$news_categories_taxonomy_args = array(
	'label' => __( 'News Categories' ),
	'labels' => array(
		'singular_name' => __( 'News Category' ),
	),
	'public' => true,
	'hierarchical' => true,
	'show_in_nav_menus' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,		
	'rewrite' => array(
		'slug' => 'news-categories',
		'with_front' => false,
	),
);
register_taxonomy( 'ct_news_category', 'cpt_news', $news_categories_taxonomy_args );

// if single-{cpt_name}.php won't load even after visiting Permalinks in admin, this shuld do it:
// function theme_prefix_rewrite_flush() {
//   flush_rewrite_rules();
// }
// add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' ); 