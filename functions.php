<?php
/**
 * Noru functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Noru
 */

include 'includes/CustomContent.php';
include 'includes/NewGeneralSetting.php';
include 'includes/My_Walker_Nav_Menu.php';

add_image_size('brand-full', 800, 429);// Used for brand listing in home page
add_image_size('detail-image', 256, 256);
add_image_size('product-image', 262, 262);
add_image_size('feature-square', 402, 365);

if ( ! function_exists( 'noru_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function noru_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Noru, use a find and replace
		 * to change 'noru' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'noru', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'noru' ),
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
		add_theme_support( 'custom-background', apply_filters( 'noru_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'noru_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function noru_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'noru_content_width', 640 );
}
add_action( 'after_setup_theme', 'noru_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function noru_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'noru' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'noru' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'noru_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function noru_scripts() {
//	wp_enqueue_style( 'noru-style', get_stylesheet_uri() );

	wp_enqueue_script( 'noru-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'noru-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'noru_scripts' );

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

// Enqueuing Javascript
wp_register_script('custom-script', get_template_directory_uri() . '/dist/js/app.js');

// Adding classes to the primary navigation menu

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'noru' ),
) );


$weight = 50;
$content_types = array(
		array(
				'machine_name' => 'articles',
				'single_name' => 'article',
				'dashicon' => 'dashicons-welcome-write-blog',
				'menu_position' => $weight,
		),
		array(
				'machine_name' => 'sliders',
				'single_name' => 'slider',
				'dashicon' => 'dashicons-images-alt2',
				'menu_position' => $weight++,
		),
		array(
				'machine_name' => 'regions',
				'single_name' => 'region',
				'dashicon' => 'dashicons-location',
				'menu_position' => $weight++,
		),
		array(
				'machine_name' => 'product-lines',
				'single_name' => 'product-line',
				'dashicon' => 'dashicons-networking',
				'menu_position' => $weight++,
		),
		array(
				'machine_name' => 'products',
				'single_name' => 'product',
				'dashicon' => 'dashicons-products',
				'menu_position' => $weight++,
		),
		array(
				'machine_name' => 'company-goals',
				'single_name' => 'company-goal',
				'dashicon' => 'dashicons-groups',
				'menu_position' => $weight++,
		),
		array(
				'machine_name' => 'landing-pages',
				'single_name' => 'landing-page',
				'dashicon' => 'dashicons-welcome-add-page',
				'menu_position' => $weight++,
		),
		array(
			'machine_name' => 'health-issues',
			'single_name' => 'health-issue',
			'dashicon' => 'dashicons-plus-alt',
			'menu_position' => $weight++,
		),
		array(
			'machine_name' => 'product-features',
			'single_name' => 'product-feature',
			'dashicon' => 'dashicons-yes',
			'menu_position' => $weight++,
		),


);
//adding custom post types
foreach ($content_types as $key => $content_type) {
	$contenttypeSetup = new CustomContent($content_type);
}

$fields = array(
			array(
				'name' => 'Google Map Api Key',
				'type' => 'text',
				'id' => 'google_map_api_key',
				'machine_name' => 'google_map_api_key',
				'machine_name_field' => 'google_map_api_key_field',
		),
		array(
				'name' => 'Facebook',
				'type' => 'text',
				'id' => 'facebook_url',
				'machine_name' => 'facebook_url',
				'machine_name_field' => 'facebook_url_field',
		),
		array(
				'name' => 'Vimeo',
				'type' => 'text',
				'id' => 'vimeo_url',
				'machine_name' => 'vimeo_url',
				'machine_name_field' => 'vimeo_url_field',
		),
		array(
				'name' => 'Youtube',
				'type' => 'text',
				'id' => 'youtube_url',
				'machine_name' => 'youtube_url',
				'machine_name_field' => 'youtube_url_field',
		),
);

foreach ($fields as $field) {
	$fieldSetup = new NewGeneralSetting($field);
}

function getPostByRelation($postType, $relationId) {
	return get_posts([
		'post_type' => $postType,
		'meta_query'	=> array(
		  'relation'		=> 'AND',
		  array(
			'key'		=> 'available_regions',
			'value'		=> '"' . $relationId . '"',
			'compare'	=> 'LIKE'
		  ),
		),
	  ]);
}

// Function to truncate string with respect to word
function text_truncate($string, $start, $length = NULL)
{
    $string_length = strlen($string);
    if ($length) {
        if ($string_length > $length) {
            $truncated_text = substr($string, $start, $length) . '...';
            return $truncated_text;
        } else {
            return $string;
        }
    } else {
        return $string;
    }
}

function get_menu($menuName, $ulclasses, $subulclasses, $append)
{
    $defaults = array(
        'theme_location' => '',
        'menu' => $menuName,
        'container' => 'div',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => 'menu',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul id="%1$s" class="%2$s ' . $ulclasses . ' ">%3$s' . $append . '</ul>',
        'depth' => 0,
        'walker' => new My_Walker_Nav_Menu(array('subulclasses' => $subulclasses)),
    );
	wp_nav_menu($defaults);
}

function getHeaderMenu($subulclasses) {
	$defaults = array(
		'theme_location' => 'primary',
		'menu' => 'Header menu',
		'container' => 'div',
		'container_class' => '',
		'container_id' => 'bs-example-navbar-collapse-1',
		'menu_class' => 'navbar-nav',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'depth' => 2,
		'walker' => new My_Walker_Nav_Menu(array('subulclasses' => $subulclasses)),
	);
	wp_nav_menu($defaults);
}

