<article class="post-summary">

	<p class="post-date"><?php the_time('l d M Y'); ?></p>

	<div class="post-summary__content">

	<header class="post__header">
	
		<h2 class="post__title">

		<?php if( is_singular() ): ?>

		<?php the_title(); ?>

		<?php else: ?>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

		<?php endif; ?>

		</h2>

	</header>

		<div class="post__entry">

			<?php the_excerpt(); ?>

			<p class="read-more"><a href="<?php the_permalink(); ?>">Read more ></a></p>
			
		</div>

	</div><!-- .post-summary__content -->

	
</article>