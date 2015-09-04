<?php get_header(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1 class="text-center" style="text-transform:capitalize"><?php single_cat_title(); ?></h1>
	<?php
	if(have_posts()): while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'publication'); ?>
	<?php
	    endwhile;
	else:  ?>
		<h3 style="margin:25vh 0; text-align: center;">No hay publicaciones</h3>
	<?php
	endif;
	?>
</div>
<?php get_footer(); ?>