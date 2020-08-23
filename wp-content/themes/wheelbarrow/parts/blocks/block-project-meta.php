<?php
/**
 * Block Name: Project Meta - used for displaying data about a portfolio item
 */
?>

<?php if( have_rows('project_meta') ): ?>

<section class="block block-project-meta">

	<?php while( have_rows('project_meta') ): the_row(); 
		// vars
		$title = get_sub_field('meta_title');
		$text = get_sub_field('meta_text');
    $link = get_sub_field('meta_link');
    $link_url = $link['url'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    $link_text = $link['title'];
    $terms = get_sub_field('meta_category');
		?>

		<div class="meta-data">

      <?php if( $title ): ?>
      <p class="meta-data__title"><?php echo $title; ?></p>
			<?php endif; ?>

			<?php if( $text ): ?>
      <p class="meta-data__text"><?php echo $text; ?></p>
			<?php endif; ?>

      <?php if( $link ): ?>
      <p class="meta-data__link">
        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_text; ?></a>
      </p>
      <?php endif; ?>

      <?php 
      if( $terms ): ?>
          <p class="meta-data__categories">
          <?php foreach( $terms as $term ): ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
          <?php endforeach; ?>
          </p>
      <?php endif; ?>

    </div><!-- .meta-data -->

	<?php endwhile; ?>

</section><!-- .block-project-meta -->

<?php endif; ?>