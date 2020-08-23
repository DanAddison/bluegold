<?php
/*
*
* programmatically create some basic pages on theme activation, and then set Home and Blog
*
*/

function the_slug_exists($post_name) {
	global $wpdb;
	if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
		return true;
	} else {
		return false;
	}
}

// create the News blog page
if (isset($_GET['activated']) && is_admin()){
	$blog_page_title = 'News';
	$blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
	$blog_page_check = get_page_by_title($blog_page_title);
	$blog_page = array(
		'post_type' => 'page',
		'post_title' => $blog_page_title,
		'post_content' => $blog_page_content,
		'post_status' => 'publish',
		'post_author' => 1,
		'post_slug' => 'news'
	);
	if(!isset($blog_page_check->ID) && !the_slug_exists('updates')){
			$blog_page_id = wp_insert_post($blog_page);
	}
}

// change the Sample page to the Welcome page
if (isset($_GET['activated']) && is_admin()){
	$welcome_page_title = 'Welcome';
	$welcome_page_check = get_page_by_title($welcome_page_title);
	$welcome_page = array(
		'post_type' => 'page',
		'post_title' => $welcome_page_title,
		'post_status' => 'publish',
		'post_author' => 1,
		'ID' => 2,
		'post_slug' => 'welcome'
	);
	if(!isset($welcome_page_check->ID) && !the_slug_exists('welcome')){
			$welcome_page_id = wp_insert_post($welcome_page);
	}
}
if (isset($_GET['activated']) && is_admin()){

// Set the blog page
$blog = get_page_by_title( 'News' );
update_option( 'page_for_posts', $blog->ID );

// Use a static front page
$front_page = 2; // this is the default page created by WordPress which we changed to Welcome
update_option( 'page_on_front', $front_page );
update_option( 'show_on_front', 'page' );
}