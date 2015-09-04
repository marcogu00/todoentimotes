<?php /*Template Name: Contacto*/ ?>
<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<?php 
		if(isset($_POST['enviar'])) { 
			$headers = 'From:'.$_POST['nombre'].'<'.$_POST['correo'].'>';
			$to="contacto@todoentimotes.com.ve";
			$mensaje = $_POST['mensaje'];
			$asunto="Contacto TodoEnTimotes.com.ve";	
			mail( $to,$asunto,$mensaje, $headers );
			echo "Mensaje enviado";
		}
			?>
		<form class="contact-form" action="<?php bloginfo('url'); ?>/contacto/" method="post">
			<p class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<input type="text" name="nombre" class="fom-control" placeholder="Nombre" required>
			</p>
			<p class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<input type="mail" name="correo" class="fom-control" placeholder="Email" required>
			</p>
			<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<textarea name="mensaje" id="" cols="30" rows="10" class="fom-control" placeholder="Mensaje"></textarea>
			</p>
			<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<input type="submit" class="fom-control" name="enviar" value="enviar">		
			</p>
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

<div class="clearfix"></div>