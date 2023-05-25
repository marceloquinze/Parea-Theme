<?php 
/**
 * Functions and definitions
 *
  * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

/**
 * Import Theme Settings and Data
 */
require get_template_directory() . '/import-data/import.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * New Walker Class additions.
 */
require_once get_template_directory() . '/inc/new_Walker.php'; 

/**
 * Removing WP Version for security reaons
 */
remove_action('wp_head','wp_generator');


/**
 * Hook these functions to after_setup_theme
 */

function parea_config(){

	/**
	 * This theme is available for translations.
	 * The translation files are in the /languages/ directory.
	 * Translations are pulled from the WordPress default language folder
	 * then from the child theme and then lastly from the parent theme.
	 * @see http://codex.wordpress.org/Function_Reference/load_theme_textdomain
	 */

	$domain = 'parea';

	load_theme_textdomain( $domain, WP_LANG_DIR . '/responsive/' );
	load_theme_textdomain( $domain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $domain, get_template_directory() . '/languages/' );


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Parea Custom Image Sizes
	add_image_size( 'flexslider', 1920, 650, true );

	// Add custom support for background, headers, post formats, html5 elements, custom logo etc
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );	
	add_theme_support( 'post-formats' , array( 'video', 'image' ) );
	add_theme_support( 'html5' , array( 'search-form' ) );
	add_theme_support( 'custom-logo' , array(
		'height'	=> 50,
		'width'		=> 238
	) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

	 
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) ) $content_width = 900;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'parea_main_menu' => 'Parea Main Menu',
			'parea_footer_menu'		=>	'Parea Footer Menu'
		)
	);
}

add_action( 'after_setup_theme', 'parea_config', 0 );


/**
 * Enqueue scripts and styles.
 */
function parea_load_scripts(){
	// Load our main stylesheet.
	wp_enqueue_style( 'parea-style', get_stylesheet_uri() );
	// Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
	// Custom and other stylesheet/script files
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), null, 'all');
	wp_enqueue_script( 'flexsliderjqmin', get_template_directory_uri(). '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), null, false);  
	wp_enqueue_script( 'flexslider', get_template_directory_uri(). '/inc/flexslider/flexslider.js', array('jquery'), null, false); 
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	// Add Comments reply, but not everywhere
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'parea_load_scripts' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

add_action( 'widgets_init', 'parea_sidebars' );
function parea_sidebars(){
	register_sidebar(
		array(
			'name'			=> __( 'Blog Sidebar', 'parea' ),
			'id'			=> 'sidebar-2',
			'description'	=> __( 'Sidebar to be displayed on inner pages', 'parea' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>',			
		)
	);
	register_sidebar(
		array(
			'name'			=> __( 'Social Sidebar', 'parea' ),
			'id'			=> 'parea-social',
			'description'	=> __( 'Include your social links here', 'parea' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'			=> __( 'Footer Sidebar' , 'parea' ),
			'id'			=> 'footer-sidebar',
			'description'	=> __( 'Include your footer widgets here' , 'parea' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s col-md-4">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-title">',
			'after_title'	=> '</h2>',			
		)
	);	
}