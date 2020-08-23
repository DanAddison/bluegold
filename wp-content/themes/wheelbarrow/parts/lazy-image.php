<?php
    
    if( $image = get_field( 'lazy_image' ) ) {

		$full_size_image = $image['sizes'][ 'cover_m' ];
		$placeholder_image = $image['sizes'][ 'cover_placeholder' ];

	?>

	<?php // Give the image a data attribute with the full size URL ?>
	<div id="lazy-image" data-image-src="<?php echo $full_size_image; ?>">

		<?php // Insert the low quality placeholder ?>
		<span id="placeholder-overlay" style="background-image: url(<?php echo $placeholder_image; ?>);"></span>

  </div><!-- #lazy-image -->
  
  <?php } ?>