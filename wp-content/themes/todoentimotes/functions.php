<?php 
register_nav_menus(	array('menutop' => 'Menu Top'));
register_nav_menus( array('menuprincipal' => 'Categories Menu'));

function custom_search_form(){
	?>
	<form role="search" method="get" class="custom-search-form" action="<?php echo home_url( '/' ); ?>">
		<input type="search" class="custom-search-field" placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<input type="submit" class="custom-search-submit" value="<?php echo esc_attr_x( 'BUSCAR', 'submit button' ) ?>" />
	</form>
	<?php
}

add_action( 'init', 'create_post_type' );

function create_post_type() {
  	register_post_type( 'publicacion',
    array(
      'labels' => array(
        'name' => __( 'Publicaciones' ),
        'singular_name' => __( 'Publicacion' )
      ),
      'taxonomies' => array('category'),
      	'public' => true,
      	'has_archive' => true,
      	'rewrite' => array('slug' => 'publicacion'),
      	'supports' => array( 'title', 'editor', 'thumbnail', 'sticky-posts' ),
    )
  );
}

add_theme_support('category-thumbnails');

function fixed_lenght_notags($content, $lenght) {

    $lenght_fixed = $lenght - 3;                
    $string = strip_tags($content);
    $string = (strlen($string) > $lenght) ? substr($string,0,$lenght_fixed).'...' : $string;
    
    echo $string;                        
}

function grid_categories($number, $post_type) {

  $cat_args = array(
    'orderby' => 'count',
    'number' =>  $number,
    'post_type' => $post_type
    );
  $categories = get_categories($cat_args);
  foreach ($categories as $category) { ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="category-home-img">
      </div>
      <div class="category-home-info">
        <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        <p><?php echo $category->description; ?></p>          
      </div>
    </div>
  <?php
  }

}

?>