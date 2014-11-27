<?php 
/////////////////////////
// define navigation menu

function nav_menu() {

	register_nav_menus( array(
        'primary'   => 'Primary Header Menu',
	) );

}
add_action( 'after_setup_theme', 'nav_menu' );


//////////////////////////////////
// This theme uses post thumbnails

add_theme_support( 'post-thumbnails' );


/////////////////////////////
// Realizacje Custom Post Type

function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Realizacje', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Realizacja', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Realizacja', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'realizacje', 'text_domain' ),
		'description'         => __( 'Realizacja', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'realizacje', $args );

}

add_action( 'init', 'custom_post_type', 0 );


//////////////////////////////
// register scripts and styles

function base_scripts() {

	wp_enqueue_script( 'jquery' );

	wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900|Noto+Sans|Lato:100,300,400,700,900|Arimo:400,700|Ubuntu:400,700|Archivo+Narrow:400,700|Oxygen:400,700,300|Montserrat:400,700|Hind:400,700,500,300,600|Roboto+Condensed:700,700,300|Open+Sans:400,300,600,700,800|Roboto:400,100,300,500,700,900&subset=latin,latin-ext');

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/styles/build/style.css' );

	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/javascripts/build/plugins.min.js', array(), false, false );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/javascripts/build/app.min.js', array(), false, false );

}
add_action( 'wp_enqueue_scripts', 'base_scripts' );


///////
// junk

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}


// hide admin bar

add_filter('show_admin_bar', '__return_false');


//disable default links on images

function wpb_imagelink_setup() {

    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


// Remove wordpress feeds

remove_action( 'wp_head', 'feed_links');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link');
remove_action( 'wp_head', 'parent_post_rel_link');
remove_action( 'wp_head', 'start_post_rel_link');
remove_action( 'wp_head', 'adjacent_posts_rel_link');
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'feed_links_extra', 3);


//get rid of menu classes

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}


///////////////////////////////////////////////////
// get the first image attached to the current post

function first_post_image($size = 'thumbnail') {
	global $post;

	$photos = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
	
	if ($photos) {
		$photo = array_shift($photos);
		return wp_get_attachment_image($photo->ID, $size);
	}
	
	return false;
}