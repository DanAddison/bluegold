<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package signal
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>

		<?php 
		$image = get_field( 'custom_featured_image' );
		$size = 'thumbnail';
		?>
		
		<div class="row row--pad">

			<article class="post post--studio">
	
				<?php get_template_part('parts/post-header'); ?>
				
				<div class="post__entry">	
					
					<?php the_content(); ?>	
					
				</div><!-- .post__entry -->
				
				<?php if( !empty( $image ) ): ?>
				<div class="post__image">
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				</div>
				<?php endif; ?>
		
			</article><!-- .post--studio -->

			<?php // get_template_part('comments'); ?>

			<?php // get_sidebar(); ?>

		</div>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
