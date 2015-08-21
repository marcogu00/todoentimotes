<?php get_header(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1 class="text-center"><?php single_cat_title(); ?></h1>
	<?php
	if(have_posts()):
		while (have_posts()) : the_post();{
		 }?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""></a>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<a href="single-publicacion.php"> ver mas</a>
		</div>

		<?php
		
	    endwhile;
	else:  ?>
		no hay publicaciones 
	<?php
	endif;
	?>
</div>
<?php get_footer(); ?>