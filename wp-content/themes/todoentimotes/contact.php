<?php /*Template Name: Contacto*/ ?>
<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<form class="contact-form" action="" method="post">
			<?php echo do_shortcode('[contact-form-7 id="137" title="Formulario de contacto 1"]'); ?>
		</form>
		<ul class="redes_sociales text-center">
			<?php 
			$redes_sociales = CFS()->get('redes_sociales');
			$efect = 0;
			foreach ($redes_sociales as $rs) { ?>
				<li class="col-xs-5 col-sm-3 col-md-3 col-lg-3 wow <?php if ( $efect == 0) echo 'bounceInLeft'; else echo 'bounceInRight'; ?>">
					<a href="<?php echo $rs['enlace']; ?>" target="_blanck">
						<img class="img-responsive" src="<?php echo $rs['imagen']; ?>" alt="">
					</a>
				</li>
			<?php
			$efect++;
				}
			?>			
		</ul>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>