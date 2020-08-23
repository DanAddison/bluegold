<?php
/**
 * this displays the News posts archive 
 * 
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="row row--pad">
			<header class="page__header">
				<h1 class="page__title">News</h1>
			</header>
		</div>

		<?php if( have_posts() ): ?>
		
		<div class="row row--pad row--blog">
			
			<div class="archive archive--news">
			
				<?php while( have_posts() ): the_post(); ?>

					<?php get_template_part( 'parts/news-preview' ); ?>
					
				<?php endwhile; ?>
			
				<?php get_template_part( 'parts/pagination' ); ?>

				
			</div>
			
			<?php get_sidebar(); ?>
			
		</div><!-- .row--blog -->

		<?php get_template_part( 'parts/testimonial' ); ?>

		<?php else: ?>
			
		<div class="row row--pad">
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>

		<?php endif; ?>

	</div><!-- #primary .content-area -->
</main>
<?php get_footer();
