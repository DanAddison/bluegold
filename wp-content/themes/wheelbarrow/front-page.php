<?php
/**
 * this displays the Studio page
 * 
 * 
 * @package wheelbarrow
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="row row--pad">
			<header class="page__header">
				<h1 class="page__title">Studio</h1>
			</header>
		</div>

		<?php if( have_posts() ): ?>
		
		<div class="row row--pad row--studio">
			
			<?php 
			$posts = get_field('select_posts');

				if( $posts ): ?>
					<ul class="studio-list column-container column-container--grid">
					<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>

							<?php get_template_part( 'parts/post-preview' ); ?>

					<?php endforeach; ?>
					</ul>

					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<?php endif; ?>
			
			<?php get_sidebar(); ?>
			
		</div><!-- .row--studio -->

		<?php else: ?>
			
		<div class="row row--pad">
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>

		<?php endif; ?>

	</div><!-- #primary .content-area -->
</main>
<?php get_footer();
