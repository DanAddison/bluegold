<?php if( ! empty( get_field('hero_image', get_option('page_for_posts')) ) ) : ?>

<div class="hero">

	<div class="hero__image"></div>
	
	<?php if( get_field('hero_text', get_option('page_for_posts')) ) : ?>

	<div class="hero__text">

			<p><?php the_field('hero_text', get_option('page_for_posts')); ?></p>

			<?php if( get_field('hero_cite', get_option('page_for_posts')) ) : ?>

			<p class="hero__cite"><?php the_field('hero_cite', get_option('page_for_posts')); ?></p>

			<?php endif; ?>

	</div><!-- .hero__text -->

	<?php endif; ?>

</div><!-- /.hero -->

<?php endif; ?>
