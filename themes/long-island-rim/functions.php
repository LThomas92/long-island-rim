<?php
/**
 * Long Island Rim functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Long_Island_Rim
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function long_island_rim_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Long Island Rim, use a find and replace
		* to change 'long-island-rim' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'long-island-rim', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'long-island-rim' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'long_island_rim_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'long_island_rim_setup' );

add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	)
);

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'Long Island Rim' ),
				'menu-2' => esc_html__( 'Secondary', 'Long Island Rim' ),
			)
		);


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function long_island_rim_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'long_island_rim_content_width', 640 );
}
add_action( 'after_setup_theme', 'long_island_rim_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function long_island_rim_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'long-island-rim' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'long-island-rim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'long_island_rim_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function long_island_rim_scripts() {
	$manifest = json_decode(file_get_contents('dist/assets.json', true));
	$main = $manifest->main;
   $js_dependencies = ['jquery', 'slick'];

	wp_enqueue_style( 'that-hair-grow-style', get_template_directory_uri() . $main->css, false, null );


	wp_enqueue_script('that-hair-grow-style', get_template_directory_uri() . $main->js, ['jquery'], null, true);
	wp_style_add_data( 'that-hair-glow-style', 'rtl', 'replace' );

   wp_enqueue_style( 'slick-style',"//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css");
   wp_register_script( 'slick', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js");
   wp_enqueue_script("slick");

   wp_enqueue_style( 'slick-style',"//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css");

   wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js", ['jquery'], null, true);

	wp_enqueue_script( 'that-hair-glow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'long_island_rim_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
