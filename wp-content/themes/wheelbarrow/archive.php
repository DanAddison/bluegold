<?php
/**
 * this displays the Studio post category archives
 * 
 * 
 * @package wheelbarrow
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<div class="row row--pad">
			<header class="page__header">
				<h1 class="page__title"><?php single_cat_title(); ?></h1>
			</header>
		</div>

		<?php if( have_posts() ): ?>
		
		<div class="row row--pad row--studio">
			
			<ul class="studio-list column-container column-container--grid">

				<?php while( have_posts() ): the_post(); ?>

				<?php get_template_part( 'parts/post-preview' ); ?>

				<?php endwhile; ?>

			</ul>
			
		</div><!-- .row--studio -->

		<?php else: ?>
			
		<div class="row row--pad">
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>

		<?php endif; ?>

	</div><!-- #primary .content-area -->
</main>
<?php get_footer();
