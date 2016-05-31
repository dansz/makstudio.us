<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueu jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

//* Enqueu Scipts and Styles
function mak_studio_scripts() {
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js', array(), '', false );
	wp_enqueue_script( 'our-stuff', get_stylesheet_directory_uri() . '/js/jquery.ourstuff.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mak_studio_scripts' );

add_image_size( 'tile', 400, 400, true );
add_image_size( 'tile_lrg', 800, 800, true );
add_image_size( 'headshot', 300, 400, true );

//* Unregister secondary navigation menu
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );
//* Remove the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
//* Unregister primary sidebar
unregister_sidebar( 'sidebar' );
//* Unregister secondary sidebar
unregister_sidebar( 'sidebar-alt' );
//* Unregister content/sidebar layout setting
genesis_unregister_layout( 'content-sidebar' );
//* Unregister sidebar/content layout setting
genesis_unregister_layout( 'sidebar-content' );
//* Unregister content/sidebar/sidebar layout setting
genesis_unregister_layout( 'content-sidebar-sidebar' );
//* Unregister sidebar/sidebar/content layout setting
genesis_unregister_layout( 'sidebar-sidebar-content' );
//* Unregister sidebar/content/sidebar layout setting
genesis_unregister_layout( 'sidebar-content-sidebar' );
//* Unregister Genesis widgets
add_action( 'widgets_init', 'unregister_genesis_widgets', 20 );
function unregister_genesis_widgets() {
	unregister_widget( 'Genesis_eNews_Updates' );
	unregister_widget( 'Genesis_Featured_Page' );
	unregister_widget( 'Genesis_Featured_Post' );
	unregister_widget( 'Genesis_Latest_Tweets_Widget' );
	unregister_widget( 'Genesis_Menu_Pages_Widget' );
	unregister_widget( 'Genesis_User_Profile_Widget' );
	unregister_widget( 'Genesis_Widget_Menu_Categories' );
}

function register_my_menu() {
	register_nav_menus( array(
		'social_menu' => 'Social Media Menu',
	) );
}
add_action( 'init', 'register_my_menu' );

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Remove Edit Link
add_filter( 'edit_post_link', '__return_false' );

add_filter('show_admin_bar', '__return_false');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

function social_header_menu(){
	wp_nav_menu( array('theme_location' => 'social_menu' ));
}
add_action('genesis_header_right', 'social_header_menu');

remove_action( 'genesis_footer', 'genesis_do_footer' );

// INCLUDE STUFF
include_once('inc/metabox.php');

