<?php


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
function lokalise_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on lokalise, use a find and replace
		* to change 'lokalise' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lokalise', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'lokalise' ),
			'main-menu' => esc_html__( 'Main menu', 'lokalise'),
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
			'lokalise_custom_background_args',
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
add_action( 'after_setup_theme', 'lokalise_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lokalise_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lokalise_content_width', 640 );
}
add_action( 'after_setup_theme', 'lokalise_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lokalise_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lokalise' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lokalise' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//custom sidebars for footer
	register_sidebar( array(
		'name'          => 'Footer column 1',
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer column 2',
		'id'            => 'footer-2',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer column 3',
		'id'            => 'footer-3',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'name'          => 'Footer column 4',
		'id'            => 'footer-4',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'name'          => 'Footer column 5',
		'id'            => 'footer-5',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
	) );



}
add_action( 'widgets_init', 'lokalise_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lokalise_scripts() {
	//styles
	wp_enqueue_style( 'lokalise-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lokalise-style', 'rtl', 'replace' );
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css');
	//fonts
	wp_enqueue_style('preconnect-google-fonts', 'https://fonts.googleapis.com', false);
	wp_enqueue_style('preconnect-crossorigin-google-fonts', 'https://fonts.gstatic.com', false);
	wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Roboto:ital@0;1&display=swap', false);

	//jQuery
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), _S_VERSION, true );

	//scripts
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lokalise-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lokalise-custom-script', get_template_directory_uri() . 'assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lokalise_scripts' );

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
 * Bootstrap 5 WordPress navbar walker menu
 * https://github.com/AlexWebLab/bootstrap-5-wordpress-navbar-walker/tree/main?tab=readme-ov-file
 */
 require get_template_directory() . '/inc/class-bootstrap5-walker.php';

/**
 * Header Customizer
 */
require get_template_directory() . '/inc/customizer-header.php';

/**
 * Footer Customizer
 */
require get_template_directory() . '/inc/customizer-footer.php';

/**
 * Section Preferred Customizer
 */
require get_template_directory() . '/inc/customizer-preferred.php';

/**
 * Custom Post (section)
 */
require get_template_directory() . '/inc/custom-section-post.php';

/**
 * Section What Can Customizer
 */
require get_template_directory() . '/inc/customizer-what-can.php';

/**
 * Section What Can Posts
 */
require get_template_directory() . '/inc/what-can-card-post.php';


/**
 * Section Boost Customizer
 */
require get_template_directory() . '/inc/customizer-boost.php';

/**
 * Section Boost Posts
 */
require get_template_directory() . '/inc/boost-post.php';

/**
 * Section most-loved
 */
require get_template_directory() . '/inc/customizer-most-loved.php';

/**
 * Section integrate
 */
require get_template_directory() . '/inc/customizer-integrate.php';

/**
 * Section easy
 */
require get_template_directory() . '/inc/customizer-easy.php';





