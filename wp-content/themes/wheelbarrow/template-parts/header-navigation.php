<?php
/**
 * Displays main site header navigation
 *
 * @package Shift
 * @version 1.0
 */
?>
<nav class="main-nav" id="site-main-navigation">

	<h1 class="screen-reader-text">Main Menu</h1>

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main',
				'container' => false,
				'menu_class' => 'menu menu--main'
			)
		);
	?>

	<ul class="menu menu--icons">

		<!-- <li class="list-item--search">
			<?php // get_template_part( 'searchform' ); ?>
		</li> -->
		
		<li>
			<a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>" title="<?php _e( 'View your account' ); ?>">
				<i class="icon-user"></i>
			</a>
		</li>
		<li>
			<a href="<?php echo wc_get_page_permalink( 'cart' ); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
				<i class="icon-cart"><span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></i>
				
			</a>
		</li>

	</ul>

</nav><!-- #site-main-navigation -->