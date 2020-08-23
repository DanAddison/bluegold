<?php
/**
 * The footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<section id="footer-widget-area" class="widget-area footer-widgets">
	<div class="row row--pad row--limit-bottom-pad">
	<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
</section>