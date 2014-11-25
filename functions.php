<?php 
/////////////////////////
// define navigation menu

function nav_menu() {

	register_nav_menus( array(
        'primary'   => 'Primary Header Menu',
	) );

}
add_action( 'after_setup_theme', 'nav_menu' );


//////////////////////////////
// register scripts and styles

function base_scripts() {

	wp_enqueue_script( 'jquery' );

	wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Rambla:400,700|Source+Sans+Pro:400,600,700,900|Noto+Sans|Lato:100,300,400,700,900|Arimo:400,700|Ubuntu:400,700|Archivo+Narrow:400,700|Oxygen:400,700,300|Montserrat:400,700|Hind:400,700,500,300,600|Roboto+Condensed:700,700,300|Open+Sans:400,300,600,700,800|Roboto:400,100,300,500,700,900&subset=latin,latin-ext');

	wp_enqueue_script( 'teams', get_template_directory_uri() . '/assets/javascripts/plugins.min.js', array(), false, false );

	wp_enqueue_script( 'global', get_template_directory_uri() . '/assets/javascripts/app.min.js', array(), false, false );

}
add_action( 'wp_enqueue_scripts', 'base_scripts' );


////////////////////////////////
// change default style location

add_filter('stylesheet_directory_uri','wpi_stylesheet_dir_uri',10,2);
function wpi_stylesheet_dir_uri($stylesheet_dir_uri, $theme_name){

	$subdir = '/assets/build';
	return $stylesheet_dir_uri.$subdir;

}


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