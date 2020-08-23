<?php
	
// register Gutenberg block category

function wheelbarrow_block_categories( $categories, $post ) {

    $categories =  array_merge(
        array(
            array(
                'slug' => 'wheelbarrow-blocks',
                'title' => 'Wheelbarrow Blocks',
								'icon'  => 'marker',
            ),
        ),
        $categories        
    );
    
   return $categories;
}
add_filter( 'block_categories', 'wheelbarrow_block_categories', 10, 2 );	
	
// register custom Gutenburg blocks
function wheelbarrow_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {


		// register blocks
		acf_register_block(array(
			'name'				 => 'spacing',
			'title'	 		   	 => __('Spacing'),
			'description'		 => __('A custom block for inserting whitespace'),
			'render_callback'    => 'wheelbarrow_acf_block_render_callback',
			'category'			 => 'wheelbarrow-blocks',
			'mode'						=> 'edit', // ensures the block doesn't load into the editor in 'preview' mode, which in this block's case makes it invisible
			'icon'         	 	 => array( 'background' => '#e0edee', 'src' => 'sort' ),
			'keywords'			 => array( 'spacing', 'whitespace' ),
			'supports'      	 => array( 'align' => false ),
		));

		// acf_register_block_type(array(
		// 	'name'			  	  => 'hero-image',
		// 	'title'				    => __('Hero Image'),
		// 	'description'		  => __('A custom block for adding a responsive fullscreen background image.'),
		// 	'render_callback'	=> 'wheelbarrow_acf_block_render_callback',
		// 	'category'			  => 'wheelbarrow-blocks',
		// 	'mode'						=> 'edit',
		// 	'icon'            => array( 'background' => '#e0edee', 'src' => 'format-image' ),
		// 	'keywords'			  => array( 'image', 'full-width', 'hero' ),
		// 	'supports'        => array( 'align' => false ),
		// ));

		acf_register_block_type(array(
			'name'			  	  => 'project-meta',
			'title'				    => __('Project Meta'),
			'description'		  => __('A custom block for adding meta data about a project.'),
			'render_callback'	=> 'wheelbarrow_acf_block_render_callback',
			'category'			  => 'wheelbarrow-blocks',
			'mode'						=> 'edit',
			'icon'            => array( 'background' => '#e0edee', 'src' => 'list-view' ),
			'keywords'			  => array( 'meta', 'data', 'project' ),
			'supports'        => array( 'align' => false ),
		));

		// acf_register_block_type(array(
		// 	'name'			  	  => 'link-card',
		// 	'title'				    => __('Link Card'),
		// 	'description'		  => __('A custom block for adding an image which links anywhere.'),
		// 	'render_callback'	=> 'wheelbarrow_acf_block_render_callback',
		// 	'category'			  => 'wheelbarrow-blocks',
		// 	'mode'						=> 'edit',
		// 	'icon'            => array( 'background' => '#e0edee', 'src' => 'external' ),
		// 	'keywords'			  => array( 'image', 'card', 'link' ),
		// 	'supports'        => array( 'align' => false ),
		// ));
		
	}
}

add_action('acf/init', 'wheelbarrow_acf_init');


function wheelbarrow_acf_block_render_callback( $block ) {
	
	// convert name ("acf/form") into path friendly slug ("form")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "parts/blocks" folder
	if( file_exists(STYLESHEETPATH . "/parts/blocks/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/parts/blocks/block-{$slug}.php" );
	}
}