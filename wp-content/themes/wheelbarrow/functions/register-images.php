<?php  
// Add a new image size and chose to crop (you can also pass parameters for where to crop from)
function wheelbarrow_register_image_sizes() {

  // add_image_size( 'hero_small', 600, 150, true );
  // add_image_size( 'hero_medium', 1000, 250, true );
  // add_image_size( 'hero_large', 1600, 400, true );
  // add_image_size( 'hero_xlarge', 2200, 550, true );

  // add_image_size( 'cover_placeholder', 100, 60, true );
  // add_image_size( 'cover_s', 800, 480, true );
  // add_image_size( 'cover_m', 1200, 720, true );
 }

 add_action( 'after_setup_theme', 'wheelbarrow_register_image_sizes' );