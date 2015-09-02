		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center" style="margin-bottom:30px;">
			<div class="item-pub">
				<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php the_title(); ?>"></a>
				<div class="pub-nombre">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php if(is_page_template('search.php')) { ?>
						<p><?php echo get_post_type(74); ?></p>						
					<?php } ?>				
				</div>				
			</div>
			<a class="btn-green" href="<?php the_permalink(); ?>">ver mas</a>
		</div>