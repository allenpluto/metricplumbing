<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */


if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'footerlink'  => __( 'Footer Residential Plumbing Services', 'twentyfifteen' ),
		'footerlink2'  => __( 'Footer Find your local plumber', 'twentyfifteen' ),
		'footerlink3' => __( 'Footer Bathroom Renovations',      'twentyfifteen' ),
		'footerlink4' => __( 'Footer Fourth menu',      'twentyfifteen' ),
	) );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	
	
	add_image_size( 'trends_size', 263, 195, true );
	add_image_size( 'plumbing_category', 360, 304, true );
	add_image_size( 'project_isize', 700, 500, true );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Residential Plumbing Services', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'class' => '', 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Bathroom Renovations', 'twentyfifteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'class' => 'footer_menu', 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Find your local plumber', 'twentyfifteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'class' => 'footer_menu', 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		
	) );

	

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'twentyfifteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'class' => 'footer_menu', 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="f_menu_heading">',
		'after_title'   => '</h5>',
		
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'twentyfifteen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'class' => 'footer_menu', 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );
function custom_post_type() {
// Set UI labels for Custom Post Type
	$labels1 = array(
		'name'                => _x( 'Faq', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Faq', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Faq', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Faq', 'twentythirteen' ),
		'all_items'           => __( 'All Faq', 'twentythirteen' ),
		'view_item'           => __( 'View Faq', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Faq', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Faq', 'twentythirteen' ),
		'update_item'         => __( 'Update Faq', 'twentythirteen' ),
		'search_items'        => __( 'Search Faq', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args1 = array(
		'label'               => __( 'Faq', 'twentythirteen' ),
		'description'         => __( 'Faq news and reviews', 'twentythirteen' ),
		'labels'              => $labels1,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'faqs', $args1 );
	
	// Set UI labels for Custom Post Type
	$labels2 = array(
		'name'                => _x( 'Portfolios', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Portfolio', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Portfolio', 'twentythirteen' ),
		'all_items'           => __( 'All Portfolios', 'twentythirteen' ),
		'view_item'           => __( 'View Portfolio', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Portfolio', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Portfolio', 'twentythirteen' ),
		'update_item'         => __( 'Update Portfolio', 'twentythirteen' ),
		'search_items'        => __( 'Search Portfolio', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args2 = array(
		'label'               => __( 'Portfolios', 'twentythirteen' ),
		'description'         => __( 'Portfolio news and reviews', 'twentythirteen' ),
		'labels'              => $labels2,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'portfolios', $args2 );
	
	// CERTIFICATIONS
	$labels3 = array(
		'name'                => _x( 'Brand', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Brand', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Brand', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Brand', 'twentythirteen' ),
		'all_items'           => __( 'All Brand', 'twentythirteen' ),
		'view_item'           => __( 'View Brand', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Brand', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Brand', 'twentythirteen' ),
		'update_item'         => __( 'Update Brand', 'twentythirteen' ),
		'search_items'        => __( 'Search Brand', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// CERTIFICATIONS
	
	$args3 = array(
		'label'               => __( 'Brand', 'twentythirteen' ),
		'description'         => __( 'Brand news and reviews', 'twentythirteen' ),
		'labels'              => $labels3,
		// CERTIFICATIONS
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
		// CERTIFICATIONS 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// CERTIFICATIONS
	register_post_type( 'brands', $args3 );
	
	// process
	$labels4 = array(
		'name'                => _x( 'Process', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Process', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Process', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Process', 'twentythirteen' ),
		'all_items'           => __( 'All Process', 'twentythirteen' ),
		'view_item'           => __( 'View Process', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Process', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Process', 'twentythirteen' ),
		'update_item'         => __( 'Update Process', 'twentythirteen' ),
		'search_items'        => __( 'Search Process', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// process
	
	$args4 = array(
		'label'               => __( 'Process', 'twentythirteen' ),
		'description'         => __( 'Process news and reviews', 'twentythirteen' ),
		'labels'              => $labels4,
		// process
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
		// process 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// process
	register_post_type( 'process', $args4 );
	
	// Trends & Ideas
	$labels5 = array(
		'name'                => _x( 'Trends & Ideas', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Trends & Ideas', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Trends & Ideas', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Trends & Ideas', 'twentythirteen' ),
		'all_items'           => __( 'All Trends & Ideas', 'twentythirteen' ),
		'view_item'           => __( 'View Trends & Ideas', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Trends & Ideas', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Trends & Ideas', 'twentythirteen' ),
		'update_item'         => __( 'Update Trends & Ideas', 'twentythirteen' ),
		'search_items'        => __( 'Search Trends & Ideas', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Trends & Ideas
	
	$args5 = array(
		'label'               => __( 'Trends & Ideas', 'twentythirteen' ),
		'description'         => __( 'Trends & Ideas news and reviews', 'twentythirteen' ),
		'labels'              => $labels5,
		// Trends & Ideas
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',),
		// Trends & Ideas
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Trends & Ideas
	register_post_type( 'trends_ideas', $args5 );
	
	
	
	
	
	}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => __( 'Parent  Category' ),
    'parent_item_colon' => __( 'Parent  Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  ); 	

// Now register the taxonomy

  register_taxonomy('portfolio_category',array('portfolios'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio_category' ),
  ));

}



if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Image 2',
	'id' => 'image_2',
	'post_type' => 'process'
	 ) );

 }
if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Header Background',
	'id' => 'header_background',
	'post_type' => 'page'
	 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Header Background',
	'id' => 'header_background',
	'post_type' => 'portfolios'
	 ) );

 }
  if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Header Background',
	'id' => 'header_background',
	'post_type' => 'trends_ideas'
	 ) );

 }
if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Slider image 1',
	'id' => 'slider_img_1',
	'post_type' => 'portfolios'
	 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Slider image 2',
	'id' => 'slider_img_2',
	'post_type' => 'portfolios'
	 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Slider image 3',
	'id' => 'slider_img_3',
	'post_type' => 'portfolios'
	 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

	new MultiPostThumbnails(array(
	'label' => 'Slider image 4',
	'id' => 'slider_img_4',
	'post_type' => 'portfolios'
	 ) );

 }
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');




