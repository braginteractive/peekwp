<?php
/**
 * PeekWP functions and definitions
 *
 * @package PeekWP
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'peekwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function peekwp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PeekWP, use a find and replace
	 * to change 'peekwp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'peekwp', get_template_directory() . '/languages' );

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
	//add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

}
endif; // peekwp_setup
add_action( 'after_setup_theme', 'peekwp_setup' );


/**
 * Enqueue scripts and styles.
 */
function peekwp_scripts() {

	wp_enqueue_style( 'peekwp-css', get_template_directory_uri() . '/css/reset.css', array(), '0.0.1', 'all' );

	wp_enqueue_style( 'peekwp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'peekwp-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '0.0.1', true );

	wp_enqueue_script( 'peekwp-modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '0.0.1', false );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peekwp_scripts' );

/**
 * Google Font
 */
if ( !function_exists('peekwp_google_font') ) {
	add_action('wp_head', 'peekwp_google_font');
	function peekwp_google_font() {
			echo '<link href="//fonts.googleapis.com/css?family=Vollkorn|Open+Sans:400,700" rel="stylesheet" type="text/css">';
	} // End function
} // End if

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
 * Plugin Activation.
 */
require get_template_directory() . '/inc/plugin-activation.php';

/**
 * Meta Box.
 */
require get_template_directory() . '/inc/meta-box.php';

/**
 * Redux Theme Options.
 */
require get_template_directory() . '/inc/redux-options.php';

/**
 * Theme Options - Custom CSS.
 */
require get_template_directory() . '/inc/custom-css.php';
