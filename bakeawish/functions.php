<?php
/**
 * Bake A Wish functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bake_A_Wish
 */

if ( ! function_exists( 'bakeawish_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bakeawish_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bake A Wish, use a find and replace
	 * to change 'bakeawish' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bakeawish', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'bakeawish' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bakeawish_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'bakeawish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bakeawish_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bakeawish_content_width', 640 );
}
add_action( 'after_setup_theme', 'bakeawish_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bakeawish_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bakeawish' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bakeawish' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bakeawish_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bakeawish_scripts() {
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-3.3.7-dist/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap-3.3.7-dist/css/bootstrap.min.css', array(), '3.0.1', 'all' );

	wp_enqueue_script( 'bootstrap-js' );

	wp_enqueue_style( 'bootstrap-css' );
	
	wp_enqueue_style( 'bakeawish-style', get_template_directory_uri() . '/css/all-styles.css',false,'1.1','all');

	//wp_enqueue_script( 'bakeawish-script', get_template_directory_uri() . '/js/site.js', array( 'jquery' ), '1.1', true);
	
	wp_enqueue_script( 'bakeawish-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bakeawish-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bakeawish_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Change Excerpt length */

function my_excerpt_length( $length ) {
        return 36;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );

/**
 * Load Gallery compatibility file.
 */
function my_custom_post_types() {
	$labels = array(
		'name'               => 'Gallery',
		'singular_name'      => 'Gallery Image',
		'menu_name'          => 'Gallery',
		'name_admin_bar'     => 'Gallery',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Image',
		'new_item'           => 'New Image',
		'edit_item'          => 'Edit Image',
		'view_item'          => 'View Image',
		'all_items'          => 'All Gallery Images',
		'search_items'       => 'Search Images',
		'parent_item_colon'  => 'Parent Images:',
		'not_found'          => 'No images found.',
		'not_found_in_trash' => 'No images found in Trash.'
	);

	$args = array( 
		'public'      => true, 
		'labels'      => $labels,
		'description' => 'Your beautiful cakes will be published using this post type',
		'menu_icon'   => 'dashicons-images-alt2',
		'taxonomies'  => array('category'),
		'supports' 	  => array('title','')
	);
    	register_post_type( 'gallery', $args );
}
add_action( 'init', 'my_custom_post_types' );

/**
* Gallery Image Sizes
*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'gallery-thumb', 340, 9999 );
add_image_size( 'gallery-popup', 1540, 600 );

@ini_set( 'upload_max_size' , '2M' );
@ini_set( 'post_max_size', '2M');
@ini_set( 'max_execution_time', '100' );
