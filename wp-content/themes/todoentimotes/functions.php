<?php 
register_nav_menus( array('menutop' => 'Menu Top'));
register_nav_menus( array('menuprincipal' => 'Categories Menu'));
register_nav_menus( array('menuresponsive' => 'Responsive Menu'));
add_theme_support('post-thumbnails');
add_theme_support('category-thumbnails');

function custom_search_form(){
  ?>
  <form role="search" method="get" class="custom-search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="custom-search-field" placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <input type="submit" class="custom-search-submit" value="<?php echo esc_attr_x( 'BUSCAR', 'submit button' ) ?>" />
    
  </form>
  <?php
}

add_action( 'init', 'create_publicacion_tax' );

function create_publicacion_tax() {
  register_taxonomy(
    'category_pub',
    'publicacion',
    array(
      'label' => __( 'Categorías' ),
      'rewrite' => array( 'slug' => 'categorias' ),
      'hierarchical' => true,
    )
  );
}

function create_post_type() {
    register_post_type( 'publicacion',
    array(
      'labels' => array(
        'name' => __( 'Publicaciones' ),
        'singular_name' => __( 'Publicacion' )
      ),
      'taxonomies' => array('category_pub'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'publicacion'),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    )
  );
}
add_action( 'init', 'create_post_type' );



function fixed_lenght_notags($content, $lenght) {

    $lenght_fixed = $lenght - 3;                
    $string = strip_tags($content);
    $string = (strlen($string) > $lenght) ? substr($string,0,$lenght_fixed).'...' : $string;
    
    echo $string;                        
}

function grid_categories($number, $post_type) {

  $cat_args = array(
    'number'                   => '4',
    'taxonomy'                 => 'category_pub',
  ); 

  $categories = get_categories($cat_args);
  foreach ($categories as $category) { ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="category-home-img">
      </div>
      <div class="category-home-info">
        <?php esc_url( $category_link ); ?>
        <p><?php echo $category->description; ?></p>          
      </div>
    </div>
  <?php
  }

}

function create_post_type_event() {
    register_post_type( 'evento',
    array(
      'labels' => array(
        'name' => __( 'Eventos' ),
        'singular_name' => __( 'Evento' )
      ),
        'public' => true,
        'rewrite' => array('slug' => 'evento'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'sticky-posts','comments'),
    )
  );
}
add_action( 'init', 'create_post_type_event' );

?>