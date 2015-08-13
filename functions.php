<?php
/**
 * tsr functions and definitions
 *
 * @package tsr
 */

if ( ! function_exists( 'tsr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tsr_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tsr, use a find and replace
	 * to change 'tsr' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tsr', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'tsr' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tsr_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


	// Set new image size.
	$name = 'post-image';
	$width = 640;
	$height = 300;
	$crop = false;
	add_image_size( $name, $width, $height, $crop );
}
endif; // tsr_setup
add_action( 'after_setup_theme', 'tsr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tsr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tsr_content_width', 640 );
}
add_action( 'after_setup_theme', 'tsr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tsr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tsr' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact', 'tsr' ),
		'id'            => 'contact-widget',
		'description'   => 'widget for the contact pluging',
		'before_widget' => '<div id="contact" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer right', 'tsr' ),
		'id'            => 'footer-left-widget',
		'description'   => 'widget for footer info',
		'before_widget' => '<div id="footer-left" class="widget col-xs-8">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer left', 'tsr' ),
		'id'            => 'footer-right-widget',
		'description'   => 'widget for social icons in the footer',
		'before_widget' => '<div id="footer-right" class="widget col-xs-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'tsr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tsr_scripts() {
	wp_enqueue_style( 'tsr-style', get_stylesheet_uri() );

	wp_enqueue_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, '4.3.0' );

	wp_enqueue_script( 'tsr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'tsr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'tsr-isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.js', true );

	wp_enqueue_script( 'tsr-theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'masonry'), '20150706', true );

	wp_enqueue_script( 'skype', 'http://download.skype.com/share/skypebuttons/js/skypeCheck.js', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tsr_scripts' );

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

/**
 * Custom posts-type file.
 */
require get_template_directory() . '/inc/custom-posts-type.php';

/**
 * meta-boxes for custom post-types.
 */
require get_template_directory() . '/inc/meta-boxes.php';
