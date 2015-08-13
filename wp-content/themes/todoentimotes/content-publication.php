	<div class="col-xs-12 div col-sm-3 col-md-3 col-lg-3 text-center	">
        <a href="<?php the_permalink(); ?>">
          	<img class="img-responsive" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
        </a>
        <a href="<?php the_permalink(); ?>">
          	<?php the_title(); ?>
        </a>
    </div>