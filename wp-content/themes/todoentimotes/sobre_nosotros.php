<?php /*Template Name: Sobre Nosotros*/ ?>
<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 ">
		<h1 class="text-center"><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<?php 
		$sobre_nosotros = CFS()->get('nosotros');
		foreach ($sobre_nosotros as $sn) { ?>
			<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s" style="margin-bottom:50px;">
				<img class="img-responsive" src="<?php echo $sn['icono']; ?>" alt="">
			</div>
			<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10" style="margin-bottom:50px;">
				<h2 class="wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s"><?php echo $sn['titulo']; ?></h2>
				<p><?php echo $sn['descripcion']; ?></p>
			</div>
		<?php		
			}
		?>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>