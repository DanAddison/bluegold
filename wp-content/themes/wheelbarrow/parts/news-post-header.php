<?php 
$event_date = get_field( 'event_date' );
$event_location = get_field( 'event_location' );
$link = get_field('event_link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

if( is_singular('event') ) {
	$permalink = the_permalink();
}
?>

<header class="news__header">

	<?php if (is_singular() ) : ?>
	<h1 class="news__title"><?php the_title(); ?></h1>
	
	<?php else : ?>

	<h1 class="news__title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
	<?php endif; ?>

	<div class="news__meta">
		
		<?php if( !empty( $event_date ) ): ?>
			<p class="event-date">
				Date: <?php echo date("l d M Y", strtotime($event_date)); ?>
			</p>
		<?php endif; ?>
			
		<?php if( !empty( $event_location ) ): ?>
			<p class="event-location">
				Location: <?php echo $event_location; ?>
			</p>
		<?php endif; ?>
			
		<?php if( !empty( $link ) ): ?>
			<p class="event-link">
				<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</p>
		<?php endif; ?>

	</div><!-- .news__meta -->

</header>
