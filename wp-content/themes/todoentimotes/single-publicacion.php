<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 galeria-imagenes">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img_principal">
				<a class="galeria" href="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" rel="group1">
					<img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php the_title(); ?>">
				</a>
			</div>
			<ul class="img_galeria">
			<?php 
			$articulo_img= CFS()->get('fotos');
			foreach ($articulo_img as $ar ) {  ?>
				<li class="col-xs-3 col-sm-3 col-md-3 col-lg-3">	
					<a href="<?php echo $ar['imagen']; ?>" class="galeria" rel="group1">
						<img class="img-responsive" src="<?php echo $ar['imagen']; ?>" alt="<?php the_title(); ?>">								
					</a>
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
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mapa">
			<?php $cfs->get('ubicacion'); ?>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
			<script>
			function initialize() {
				//var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				var mapCanvas = document.getElementById('map-canvas');

				var myLatlng = new google.maps.LatLng(<?php echo $cfs->get('ubicacion'); ?>);

				var mapOptions = {
				    center: myLatlng,
				    zoom: 16,
				    mapTypeId: google.maps.MapTypeId.ROADMAP
				   	}

				 var map = new google.maps.Map(mapCanvas,mapOptions);
				
			    var marker = new google.maps.Marker({
			        position: myLatlng,
			        map: map
			    });
			}
			google.maps.event.addDomListener(window, 'load', initialize);

			</script>
				
				 <div id="map-canvas" style="margin:0px;padding:0px"></div>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
