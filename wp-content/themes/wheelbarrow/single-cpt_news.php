<?php
/**
 * The template for displaying single News posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package signal
 */

$image = get_field( 'custom_featured_image' );
$size = 'large';
$terms = wp_get_post_terms( get_the_ID(), 'ct_news_category');

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>
		
		<div class="row row--pad row--bp-xxl">
			
			<p class="breadcrumb"><a href="/news">News</a> > <?php foreach ($terms as $t) {
				echo $t->name, ' ';
			} ?> > <?php the_title(); ?></p>
			
			<article class="post post--news">
	
				<?php if( !empty( $image ) ): ?>
				<div class="news__image">
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				</div>
				<?php endif; ?>

				<?php get_template_part('parts/news-post-header'); ?>
				
				<div class="news__entry">
				
					<?php the_content(); ?>
				
				</div>
		
			</article>

			<?php // get_template_part('comments'); ?>

			<?php // get_sidebar(); ?>

		</div>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
