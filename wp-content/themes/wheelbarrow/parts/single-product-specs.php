<?php
$dimensions = get_field( 'dimensions' );
$weight = get_field( 'weight' );
$materials = get_field( 'materials' );
$shipping = get_field( 'shipping' );
?>

<div class="single-product-specs">

  <?php if ( $dimensions ): ?>
		<h2>Dimensions</h2>
		<p><?php echo $dimensions; ?></p>
  <?php endif; ?>

  <?php if ( $weight ): ?>
		<h2>Weight</h2>
		<p><?php echo $weight; ?></p>
  <?php endif; ?>

  <?php if ( $materials ): ?>
		<h2>Materials</h2>
		<p><?php echo $materials; ?></p>
  <?php endif; ?>

  <?php if ( $shipping ): ?>
		<h2>Shipping</h2>
		<p><?php echo $shipping; ?></p>
  <?php endif; ?>

</div>