<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<?php	get_template_part( 'template-parts/head' ); ?>

<body <?php body_class(); ?>>

	<!-- for screen readers to not have to tab through all nav items etc -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wheelbarrow' ); ?></a>

	<?php do_action( 'wheelbarrow_before_site_header' ); ?>

	<header class="site-header" id="masthead">

		<div class="row row--pad">

			<div class="site-branding">
				
				<?php // the_custom_logo(); ?>

				<div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a></div>
									
				<h1 class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			</div><!-- .site-branding -->

			<button class="menu-button hamburger hamburger--squeeze" type="button" id="js-menu-button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button><!-- .hamburger -->

			<?php if( has_nav_menu( 'main' ) ) : ?>	

			<?php get_template_part( 'template-parts/header-navigation' ); ?>

			<?php endif; ?>

		</div><!-- .row -->

	</header><!-- #site-header -->

	<?php do_action( 'wheelbarrow_after_site_header' ); ?>