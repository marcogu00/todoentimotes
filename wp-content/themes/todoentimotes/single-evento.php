<?php get_header(); ?>
<html>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
		<h1 class="text-center"><?php the_title(); ?></h1>
		<?php 
			while (have_posts()) : the_post();{
		 	}?>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
			<div>
				<div class="img-articulo-blog">
					<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""></a>
				</div>
				<span style="float:right;"><small><?php the_date(); ?></small></span>
			</div>
			<p style="margin-top:50px;"><?php the_content(); ?></p>
		</div>
		<?php 
		endwhile; ?>
	</div>
</html>
<?php get_footer(); ?>