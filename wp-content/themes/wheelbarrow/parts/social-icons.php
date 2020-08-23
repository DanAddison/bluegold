<?php
/**
 * These social icons are set in the customizer
 *
 *
 * @package wheelbarrow
 */
?>

<div class="social-icons">

<?php if(get_theme_mod('wheelbarrow_email') != ''): ?>
  <a target="_blank" href="mailto:<?php echo get_theme_mod('wheelbarrow_email'); ?>?&body=[direct mail from bluegold.com]">
    <i class="icon-mail"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_telephone') != ''): ?>
  <a itemprop="telephone" href="tel:<?php echo get_theme_mod('wheelbarrow_telephone'); ?>">
    <i class="icon-phone"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_facebook') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_facebook'); ?>">
    <i class="icon-facebook"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_instagram') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_instagram'); ?>">
    <i class="icon-instagram"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_linkedin') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_linkedin'); ?>">
    <i class="icon-linkedin"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_twitter') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_twitter'); ?>">
    <i class="icon-twitter"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_vimeo') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_vimeo'); ?>">
    <i class="icon-vimeo"></i>
  </a>
<?php endif; ?>

<?php if(get_theme_mod('wheelbarrow_youtube') != ''): ?>
  <a target="_blank" href="<?php echo get_theme_mod('wheelbarrow_youtube'); ?>">
    <i class="icon-youtube"></i>
  </a>
<?php endif; ?>

</div>