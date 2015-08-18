<?php /*Template Name: Evento*/ ?>
<?php get_header(); ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
		<h1 class="text-center" ><?php the_title(); ?></h1>
		<?php 
	if( have_posts()):
		while (have_posts()) : the_post();{
		 }?>
			<div class="col-xs-12 col-sm-<?php echo $tal; ?> col-md-<?php echo $tal; ?>  col-lg-<?php echo $tal; ?>">
				<div class="blog-post">
					<div class="blog-post-img">
						<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""></a>
					</div>
						<div class="titulo-blog">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<small><span><?php comments_number('0','1','%'); ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/comments.png"></span><?php the_date(); ?></small>
						</div>
				</div>
				
			</div>
	<?php
		
	    endwhile;
	else:  ?>
		no hay publicaciones 
	<?php
	endif;
	wp_reset_postdata();
	?>
	</div>

<?php get_footer(); ?>