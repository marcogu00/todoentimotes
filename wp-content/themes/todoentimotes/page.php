<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 ">
			<h1 class="text-center" style="margin-bottom: 50px;"><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>

