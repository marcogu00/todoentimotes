<?php get_header(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1 class="text-center" style="text-transform:capitalize"><?php single_cat_title(); ?></h1>
	<?php
	if(have_posts()): ?>
		<h3 style="margin-bottom:50px; text-align: center;">Resultados de búsqueda para: <strong><?php  echo get_search_query(); ?></strong> </h3>
		<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'publication'); ?>
	<?php
	    endwhile;
	else:  ?>
		<h3 style="margin:25vh 0; text-align: center;">Disculpe, no hay resultados para: <strong><?php  echo get_search_query(); ?></strong> </h3>
	<?php
	endif;
	?>
</div>
<?php get_footer(); ?>