<?php
/**
 * volunteer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/volunteers/theme-functions/
 *
 * @package volunteer
 */

if ( ! function_exists( 'volunteer_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function volunteer_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on volunteer, use a find and replace
	 * to change 'volunteer' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'volunteer', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'volunteer' ),
		'footer-menu' => __( 'Footer Menu', 'volunteer' ),
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
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'volunteer_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'volunteer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function volunteer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'volunteer_content_width', 640 );
}
add_action( 'after_setup_theme', 'volunteer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function volunteer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'volunteer' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'volunteer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'volunteer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function volunteer_scripts() {
	wp_enqueue_style( 'volunteer-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fancybox-style', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css' );

	wp_enqueue_script( 'volunteer-jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'fancybox-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array(), '20151215', true );

	wp_enqueue_script( 'volunteer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'volunteer-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'volunteer-mainjs', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'volunteer_scripts' );

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

// Register Custom Post Type
function dreamteams_cpt() {

	$labels = array(
		'name'                  => _x( 'Dream Teams', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Dream Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Dream Teams', 'text_domain' ),
		'name_admin_bar'        => __( 'Dream Team', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Dream Team:', 'text_domain' ),
		'all_items'             => __( 'All Dream Teams', 'text_domain' ),
		'add_new_item'          => __( 'Add New Dream Team', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Dream Team', 'text_domain' ),
		'edit_item'             => __( 'Edit Dream Team', 'text_domain' ),
		'update_item'           => __( 'Update Dream Team', 'text_domain' ),
		'view_item'             => __( 'View Dream Team', 'text_domain' ),
		'view_items'            => __( 'View Dream Teams', 'text_domain' ),
		'search_items'          => __( 'Search Dream Team', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Dream Team', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Dream Team', 'text_domain' ),
		'items_list'            => __( 'Dream Teams list', 'text_domain' ),
		'items_list_navigation' => __( 'Dream Teams list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Dream Teams list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Dream Team', 'text_domain' ),
		'description'           => __( 'Custom Post Type for Dream Teams', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'taxonomies'            => array(''),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dreamteams', $args );

}
add_action( 'init', 'dreamteams_cpt', 0 );