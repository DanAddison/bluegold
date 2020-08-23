<div class="row row--pad">

	<header class="page__header">

		<h1 class="page__title">

			<?php if( is_singular() ): ?>

			<?php the_title(); ?>

			<?php else: ?>

				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<?php endif; ?>

		</h1>

	</header>

</div>