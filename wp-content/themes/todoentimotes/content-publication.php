		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center" style="margin-bottom:30px;">
			<div class="item-pub">
				<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""></a>
				<div class="pub-nombre">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>				
				</div>				
			</div>
			<a class="btn-green" href="single-publicacion.php"> ver mas</a>
		</div>