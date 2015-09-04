<?php /*Template Name: Blog*/ ?>
<?php get_header(); ?>
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 ">
		<h1 class="text-center" ><?php the_title(); ?></h1>
		<?php 
		$post_args = array(
		'posts_per_page'   => -1,
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'post_type'        => 'posts',
		'post_status'      => 'publish',
		'suppress_filters' => true );

		$posts = get_post($post_args);
		$posts_query =new WP_Query($posts);
		$col=0;
		if( $posts_query->have_posts()): while ($posts_query->have_posts()) : $posts_query->the_post();
			if ($col == 0){
				$tal=12;
			}elseif ($col==1 || $col==2 ){
				$tal=6;
			 }?>
				<div class="col-xs-12 col-sm-<?php echo $tal; ?> col-md-<?php echo $tal; ?>  col-lg-<?php echo $tal; ?>">
					<div class="blog-post">
						<div class="blog-post-img">
							<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""></a>
						</div>
							<div class="titulo-blog">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<small>
									<span>
										<iframe src="http://www.facebook.com/plugins/comments.php?href=<?php the_permalink(); ?>&permalink=1" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:16px;" allowTransparency="true"></iframe>
									</span>
									<?php the_date(); ?>
								</small>
							</div>
					</div>
					
				</div>
			<?php
				$col++;
				if($col>5){
					$col=0;
				}
			    endwhile;
			else:  ?>
				<h3 style="margin:25vh 0; text-align: center;">No hay publicaciones</h3>
		<?php
		endif;
		wp_reset_postdata();
		?>
	</div>

<?php get_footer(); ?>