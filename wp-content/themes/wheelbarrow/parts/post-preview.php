<?php 
/**
 * Studio post thumbnail preview 
 */
$image = get_field( 'custom_featured_image' );
$size = 'shop_catalog';

$categories_list = get_the_category_list( esc_html__( ', ', 'wheelbarrow' ) );
?>

<li class="studio-list-item column">

  <div class="post-preview">

    <div class="post-preview__overlay">
      <h2 class="post-preview__title"><?php the_title(); ?></h2>
    </div>
    
    <?php if( !empty( $image ) ): ?>
    <div class="post-preview__image">
      <?php echo wp_get_attachment_image( $image, $size ); ?>
    </div>
    <?php endif; ?>
      
    <a class="post-preview__link" href="<?php the_permalink(); ?>"></a>

  </div><!-- .post-preview -->

</li>