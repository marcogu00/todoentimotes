<?php /*Template Name: Eventos*/ ?>
<?php get_header(); ?>
	<?php 
	$events_args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'evento',
	'post_status'      => 'publish',
	'suppress_filters' => true );

	$eventos = get_post($events_args);
	$evento_query =new WP_Query($eventos);

	if( $evento_query->have_posts()):
		while ($evento_query->have_posts()) : $evento_query->the_post(); ?>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 evento">
				<img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
				<h2><?php the_title(); ?><small><?php echo CFS()->get('fecha'); ?> - <?php echo CFS()->get('hora'); ?></small></h2>
				<?php the_content(); ?>
			</div>
	<?php
	    endwhile;
	else:  ?>
		no hay eventos 
	<?php
	endif;
	wp_reset_postdata();
	?>
<?php get_footer(); ?>