<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wheelbarrow
 */

?>

	
	<!-- get widget area for cart -->
	<?php get_template_part( 'sidebar-footer' ); ?>


	<?php do_action( 'wheelbarrow_before_site_footer' ); ?>
	
	<footer class="site-footer" id="site-footer">

		<div class="row row--pad">

			<div class="column-container">

				<div class="column">

					<?php if( has_nav_menu( 'secondary' ) ): ?>
					<?php get_template_part( 'template-parts/secondary-navigation' ); ?>
					<?php endif; ?>

				</div>

				<div class="column column--align-right">

					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form id="mc-embedded-subscribe-form" class="validate" action="https://danaddison.us14.list-manage.com/subscribe/post?u=11b487215c32e9b3699ee7619&amp;id=756bd2fbf3" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
							<div id="mc_embed_signup_scroll">
								<input id="mce-EMAIL" class="email" name="EMAIL" required="" type="email" value="" placeholder="Your email address..." />
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true">
									<input tabindex="-1" name="b_11b487215c32e9b3699ee7619_756bd2fbf3" type="text" value="" />
								</div>
								<div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Newsletter signup" />
							</div>
							</div>
						</form>
					</div>
					<!--End mc_embed_signup-->

				</div>

			</div><!-- .column-container -->


			<div class="sub-footer">
				<div class="column-container">

					<div class="column column--align-center">
						<?php get_template_part( 'parts/social-icons' ); ?>
					</div>

					<div class="column column--copyright">
						<?php if( get_theme_mod( 'wheelbarrow_footer_company_copyright' )): ?>
						<p class="legal__copyright">&copy; <?php echo date('Y'); ?> <?php echo get_theme_mod( 'wheelbarrow_footer_company_copyright' ); ?></p>
						<?php endif; ?>
					</div>

					<div class="column column--align-right">
						<p class="credit">website: <a href="https://danaddison.uk">Dan Addison</a></p>
					</div>

				</div><!-- .column-container -->
			</div>		
	
		</div><!-- .row -->

	</footer><!-- #site-footer -->

	<?php do_action( 'wheelbarrow_after_site_footer' ); ?>


<?php wp_footer(); ?>

</body>
</html>
