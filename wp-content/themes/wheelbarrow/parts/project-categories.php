<?php 
$terms = get_the_terms( $post->ID , 'category' ); 

if ( $terms && !is_wp_error( $terms ) ) : ?>
<p class="project-categories">Categories: 
  <?php foreach ( $terms as $term ) { ?>
  <a href="<?php echo get_term_link( $term, 'category' ); ?>"><?php echo $term->name; ?></a>
  <?php } ?>					
</p><!-- .project-categories -->
<?php endif; ?>