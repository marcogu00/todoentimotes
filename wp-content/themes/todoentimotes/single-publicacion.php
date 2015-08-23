<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 galeria-imagenes">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img_principal">
				<img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
			</div>
			<ul class="img_galeria">
			<?php 
			$articulo_img= CFS()->get('fotos');
			foreach ($articulo_img as $ar ) {  ?>
				<li class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
					<img class="img-responsive" src="<?php echo $ar['imagen']; ?> " alt="">								
				</li>
			<?php } ?>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 pub-info">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p><br>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left:0;">
			<?php
			$direcciones= CFS()->get('direcciones');
				foreach($direcciones as $dir){?>
				<p><span class="glyphicon glyphicon-home"></span><?php echo $dir['direccion']; ?></p>	
			<?php }	?>
			<?php
			$telefonos= CFS()->get('telefonos');
				foreach($telefonos as $tel){?>
				<p><span class="glyphicon glyphicon-earphone"></span><?php echo $tel['telefono']; ?></p>	
			<?php }	?>
			<?php
			$correos= CFS()->get('correos');
				foreach($correos as $cor){?>
				<p><span class="glyphicon glyphicon-envelope"></span><?php echo $cor['correo']; ?></p>	
			<?php }	?>
			<?php
			$redes_sociales= CFS()->get('redes_sociales');
				foreach($redes_sociales as $red){?>
				<p><img src="<?php echo $red['imagen_red']; ?>" alt="" class="img_rs"><a href="<?php echo $red['enlace']; ?>"><?php echo $red['nombre']; ?></a></p>	
			<?php }	?>
			<p><span class="glyphicon glyphicon-globe"></span><a href="<?php echo CFS()->get('pagina_web'); ?>" target="_blanck"><?php echo CFS()->get('pagina_web'); ?></a></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?php $locator = CFS()->get('ubicacion'); ?>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
