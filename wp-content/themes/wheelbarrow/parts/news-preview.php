<?php 
/**
 * News post preview 
 */
$image = get_field( 'custom_featured_image' );
$size = 'thumbnail';
$event_date = get_field( 'event_date' );
$event_location = get_field( 'event_location' );
?>

<article class="news-preview">

  <?php if( !empty( $image ) ): ?>
	<div class="news-preview__image">
		<a href="<?php the_permalink(); ?>">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</a>
	</div>
  <?php endif; ?>
	
	<div class="news-preview__content">

		<?php get_template_part('parts/news-post-header'); ?>

		<div class="post__excerpt">
			<?php the_excerpt(); ?>		
		</div><!-- .post__excerpt -->

	</div><!-- .news-preview__content -->

</article>