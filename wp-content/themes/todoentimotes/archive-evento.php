<?php /*Template Name: Evento*/ ?>
<?php get_header(); ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
		<h1 class="text-center" ><?php the_title(); ?></h1>
		<?php 
	$evento= array ('post_page'=>4,'offset=>0','orderby'=>'date','order'=>'DESC','post_type'=>'evento','post_status'=>'publish');
	$evento_array=new WP_Query($evento);

	if( $evento_array->have_posts()):
		while ($evento_array->have_posts()) : $evento_array->the_post();{
		 }?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
		
	    endwhile;
	else:  ?>
		no hay publicaciones 
	<?php
	endif;
	wp_reset_postdata();
	?>
	</div>

<?php get_footer(); ?>