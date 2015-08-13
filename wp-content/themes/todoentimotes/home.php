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

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php grid_categories( 4, 'publicacion'); ?>			
		</div>


		<div class="clearfix"></div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h2>Nuevas Publicaciones</h2>			
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<?php
			$posts_args = array(
			    'post_type' => 'publicacion',
			    'post_per_page' => 8
			    );

			$posts = get_post($posts_args);

			$posts_query = new WP_Query( $posts );

			if ( $posts_query->have_posts() ) :
				while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>

					<?php get_template_part( 'content', 'publication' ); ?>
			    
			<?php
			    endwhile;
			else:

			endif;

			wp_reset_postdata();
			?>

		</div>

<?php get_footer(); ?>