<?php
/**
 * Bogaty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bogaty
 */

if ( ! function_exists( 'bogaty_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bogaty_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bogaty, use a find and replace
		 * to change 'bogaty-lite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bogaty-lite', get_template_directory() . '/languages' );

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
		add_image_size( 'bogaty-recent', 140, 90, true );
		add_image_size( 'bogaty-post', 448, 233, true );

		set_post_thumbnail_size( 1024, 510, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'bogaty-lite' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Post format.
		add_theme_support(
			'post-formats',
			array(
				'video',
				'audio',
				'quote',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add theme support for custom logo.
		add_theme_support(
			'custom-logo', array(
				'height'      => 50,
				'width'       => 50,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'bogaty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bogaty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bogaty_content_width', 1024 );
}
add_action( 'after_setup_theme', 'bogaty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bogaty_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bogaty-lite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Main sidebar that appears on the right.', 'bogaty-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'bogaty-lite' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Appears in the footer section of the site.', 'bogaty-lite' ),
			'before_widget' => '<div><section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	require_once get_template_directory() . '/inc/widgets/class-bogaty-recent-posts-widget.php';
	register_widget( 'bogaty_Recent_Posts_Widget' );
}
add_action( 'widgets_init', 'bogaty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bogaty_scripts() {
	wp_enqueue_style( 'bogaty-fonts', bogaty_fonts_url() );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons.css', '', '4.3.0' );

	wp_enqueue_style( 'bogaty-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bogat-navigation-js', get_template_directory_uri() . '/js/navigation.js', array(), '', true );

	wp_enqueue_script( 'bogaty-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'bogaty-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bogaty_scripts' );

/**
 * Get Google fonts URL for the theme.
 *
 * @return string Google fonts URL for the theme.
 */
function bogaty_fonts_url() {
	$fonts   = array();
	$subsets = 'latin,latin-ext';

	if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'bogaty-lite' ) ) {
		$fonts[] = 'Raleway:300,300i,400,400i,600,600i,700,700i';
	}
	$fonts_url = add_query_arg(
		array(
			'family' => rawurlencode( implode( '|', $fonts ) ),
			'subset' => rawurlencode( $subsets ),
		), 'https://fonts.googleapis.com/css'
	);

	return $fonts_url;
}

/**
 * Add editor style.
 */
function bogaty_add_editor_styles() {
	add_editor_style(
		array(
			'css/editor-style.css',
			bogaty_fonts_url(),
			get_template_directory_uri() . '/css/genericons.css',
		)
	);
}
add_action( 'init', 'bogaty_add_editor_styles' );

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
 * Breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Load dashboard
 */
require get_template_directory() . '/inc/dashboard/class-bogaty-lite-dashboard.php';
$dashboard = new Bogaty_Lite_Dashboard();

require get_template_directory() . '/inc/customizer-pro/class-bogaty-lite-customizer-pro.php';
$customizer_pro = new Bogaty_Lite_Customizer_Pro();
$customizer_pro->init();


/**
 * Load plugin
 */
if ( is_admin() ) {
	require_once get_template_directory() . '/inc/admin/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/inc/admin/plugins.php';
}

/**
 * Style gutenberg
 */
function bogaty_style_editor_gutenberg() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'bogaty-fonts', bogaty_fonts_url() );
	wp_enqueue_style( 'style-editor', get_theme_file_uri( '/style-editor.css' ), false );
}
add_action( 'enqueue_block_editor_assets', 'bogaty_style_editor_gutenberg' );

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
