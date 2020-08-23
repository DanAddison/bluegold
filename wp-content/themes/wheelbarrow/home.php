<?php
/**
 * this displays the posts page 
 * ie. the blog home page 
 * 
 * 
 * @package wheelbarrow
 */

get_header(); ?>
<div id="primary" class="content-area">

	<?php if( have_posts() ): ?>
	
	<div class="row row--pad row--studio">
		
		<?php while( have_posts() ): the_post(); ?>
			<?php get_template_part( 'parts/post-preview' ); ?>
		<?php endwhile; ?>
	
		<?php get_template_part( 'parts/pagination' ); ?>
		
		<?php get_sidebar(); ?>
		
	</div><!-- .row--studio -->

	<?php get_template_part( 'parts/testimonial' ); ?>

	<?php else: ?>
		
	<div class="row row--pad">
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	</div>

	<?php endif; ?>

</div><!-- #primary .content-area -->
<?php get_footer();
