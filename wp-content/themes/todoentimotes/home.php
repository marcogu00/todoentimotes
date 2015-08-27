<?php /*Template Name: Inicio*/ ?>
<?php get_header(); ?>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-slide-home">
			<ul class="home-slider">
				<?php
				$imagenesSlide = CFS()->get('imagenes');
				if ($imagenesSlide) {
					foreach ($imagenesSlide as $slide) { ?>
						<li>
							<img src="echo $slide['imagen'];" alt="" title="<?php $slide['texto']; ?>">
						</li>
				<?php
					}
				}
				?>
			</ul>
		</div>
		
		<div class="clearfix"></div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h2>Nuevas Publicaciones</h2><br>			
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<?php 
			$publicaciones= array(
				'post_page'=>4,
				'offset' => 0,
				'orderby'=>'date',
				'order'=>'DESC',
				'post_type'=>'publicacion',
				'post_status'=>'publish'
				);
			$publicaciones_array=new WP_Query($publicaciones);
			if( $publicaciones_array->have_posts()):
				while ($publicaciones_array->have_posts()) : $publicaciones_array->the_post();{
				 }?>

					<?php get_template_part( 'content', 'publication' ); ?>
			    
			<?php
			    endwhile;
			else:

			endif;

			wp_reset_postdata();
			?>

		</div>

<?php get_footer(); ?>