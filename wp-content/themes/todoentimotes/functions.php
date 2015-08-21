<?php 
register_nav_menus(	array('menutop' => 'Menu Top'));
register_nav_menus( array('menuprincipal' => 'Categories Menu'));
register_nav_menus( array('menuresponsive' => 'Responsive Menu'));
add_theme_support('post-thumbnails');
function custom_search_form(){
	?>
	<form role="search" method="get" class="custom-search-form" action="<?php echo home_url( '/' ); ?>">
		<input type="search" class="custom-search-field" placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<input type="submit" class="custom-search-submit" value="<?php echo esc_attr_x( 'BUSCAR', 'submit button' ) ?>" />
	</form>
	<?php
}

<<<<<<< HEAD
add_action( 'init', 'create_publicacion_tax' );

function create_publicacion_tax() {
  register_taxonomy(
    'category_pub',
    'publicacion',
    array(
      'label' => __( 'Categorías(Publicaciones)' ),
      'rewrite' => array( 'slug' => 'categorias' ),
      'hierarchical' => true,
    )
  );
}

add_action( 'init', 'create_post_type' );
=======
>>>>>>> d4deea8df20e49c06abc024213387f941459e484

function create_post_type() {
    register_post_type( 'publicacion',
    array(
      'labels' => array(
        'name' => __( 'Publicaciones' ),
        'singular_name' => __( 'Publicacion' )
      ),
<<<<<<< HEAD
      'taxonomies' => array('category_pub'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'publicacion'),
=======
      'taxonomies' => array('category'),
        'public' => true,
        'has_archive' => true,
>>>>>>> d4deea8df20e49c06abc024213387f941459e484
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    )
  );
}
add_action( 'init', 'create_post_type' );


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

function contact_email(){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  
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