<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wheelbarrow
 */

get_header(); ?>
<main id="main" class="site-main">
	<div id="primary" class="content-area">

		<?php the_post(); ?>
		<article class="page">

		<?php // get_template_part( 'parts/hero' ); ?>

		<?php get_template_part( 'parts/page-header' ); ?>

		<?php get_template_part( 'parts/page-entry' ); ?>

		</article>

	</div><!-- #primary .content-area -->
</main><!-- #main .site-main-->
<?php
get_footer();
