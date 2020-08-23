<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="span4-4 span12-4">

	<aside id="secondary" class="widget-area">

		<div class="sidebar-wrapper">

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

		</div><!-- .sidebar-wrapper -->	

	</aside><!-- #secondary -->

</div><!--span -->
