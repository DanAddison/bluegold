<?php 
$categories_list = get_the_category_list( esc_html__( ', ', 'wheelbarrow' ) );
// $post_date = get_the_date( 'l F j, Y' );
?>

<header class="post__header">
					
	<h1 class="post__title">
		<?php the_title(); ?>
	</h1>
	
	<?php if ( $categories_list ) {
	printf( '<p class="cat-links">' . esc_html__( '%1$s', 'wheelbarrow' ) . '</p>', $categories_list );
	} ?>
		
</header>
