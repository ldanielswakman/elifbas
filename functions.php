<?php
/**
 * elifbas functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package elifbas
 */

if ( ! function_exists( 'elifbas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function elifbas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on elifbas, use a find and replace
	 * to change 'elifbas' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'elifbas', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'elifbas' ),
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
	add_theme_support( 'custom-background', apply_filters( 'elifbas_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'elifbas_setup' );

/**
 * Enqueue scripts and styles.
 */
function elifbas_scripts() {

  // load assets locally or from CDN
  if (in_array( $_SERVER['HTTP_HOST'], array( 'localhost', '127.0.0.1' ))) {
    $flexboxgrid_url = get_template_directory_uri() . '/css/flexboxgrid.min.css';
  } else {
    // Flexbox Grid
    $flexboxgrid_url = 'https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css';
    // Google Fonts
    wp_enqueue_script( 'google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700|Work+Sans:400,500,700' );
  }

  // Sticky Kit
  wp_enqueue_script( 'sticky-kit', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js', array(), '1.1.2' );
  // Flexbox Grid
  wp_enqueue_style( 'flexbox-grid', $flexboxgrid_url );
  // Elif Baş Style
  wp_enqueue_style( 'elifbas-style', get_stylesheet_uri() );
  // Elif Baş Script
  // wp_enqueue_script( 'elifbas-js', get_template_directory_uri() . '/js/elifbas.js' );

}
add_action( 'wp_enqueue_scripts', 'elifbas_scripts' );

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

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );




// Convert numeric to roman number
function romanic_number($integer, $upcase = true) { 
    $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1);
    $return = ''; 
    while($integer > 0) 
    { 
        foreach($table as $rom=>$arb) 
        { 
            if($integer >= $arb) 
            { 
                $integer -= $arb; 
                $return .= $rom; 
                break; 
            } 
        } 
    } 

    return $return; 
} 


// Translation strings
pll_register_string('Detail open button', 'detail_open');
pll_register_string('Detail close button', 'detail_close');
pll_register_string('Next', 'next');
pll_register_string('Page can\'t be found!', 'page_not_found');
pll_register_string('Return to the homepage', 'return_home');
