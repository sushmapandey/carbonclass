<?php
/**
 * carbonclass functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package carbonclass
 */

if ( ! function_exists( 'carbonclass_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function carbonclass_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on carbonclass, use a find and replace
		 * to change 'carbonclass' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'carbonclass', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'carbonclass' ),
			'footer-menu' => esc_html__( 'Footer', 'carbonclass' ),
			'social-menu' => esc_html__( 'Social', 'carbonclass' ),
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
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
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

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom color scheme.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Strong Blue', 'carbonclass' ),
				'slug'  => 'strong-blue',
				'color' => '#0073aa',
			),
			array(
				'name'  => __( 'Lighter Blue', 'carbonclass' ),
				'slug'  => 'lighter-blue',
				'color' => '#229fd8',
			),
			array(
				'name'  => __( 'Very Light Gray', 'carbonclass' ),
				'slug'  => 'very-light-gray',
				'color' => '#eee',
			),
			array(
				'name'  => __( 'Very Dark Gray', 'carbonclass' ),
				'slug'  => 'very-dark-gray',
				'color' => '#444',
			),
		) );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'carbonclass_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function carbonclass_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'carbonclass_content_width', 640 );
}
add_action( 'after_setup_theme', 'carbonclass_content_width', 0 );

/**
 * Register Google Fonts
 */
function carbonclass_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$notoserif = esc_html_x( 'on', 'Noto Serif font: on or off', 'carbonclass' );

	if ( 'off' !== $notoserif ) {
		$font_families = array();
		$font_families[] = 'Noto Serif:400,400italic,700,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
function carbonclass_scripts() {

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900|Sarabun', true );

	wp_enqueue_style( 'carbonclassbase-style', get_stylesheet_uri() );

	wp_enqueue_style( 'carbonclassblocks-style', get_template_directory_uri() . '/css/blocks.css' );

	wp_enqueue_style( 'carbonclass-fonts', carbonclass_fonts_url() );

	wp_enqueue_script( 'carbonclass-vendor-jquery', get_template_directory_uri() . '/js/vendor/jquery-3.1.1.min.js', array(), '20151215', true );


	wp_enqueue_script( 'carbonclass-vendor-modern', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '20151215', true );

	wp_enqueue_script( 'carbonclass-vendor-owl-carousel', get_template_directory_uri() . '/js/vendor/owl.carousel.js', array(), '20151215', true );

	wp_enqueue_script( 'carbonclass-vendor-darkbox', get_template_directory_uri() . '/js/vendor/darkbox.js', array(), '20151215', true );

	wp_enqueue_script( 'carbonclass-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'carbonclass-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'carbonclass-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'carbonclass_scripts' );

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


/**
 * Gallery.
 */
// Register Custom Post Type
function gallery_post_type() {

	$labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Gallery Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Gallery', 'text_domain' ),
		'name_admin_bar'        => __( 'Gallery Type', 'text_domain' ),
		'archives'              => __( 'Gallery Archives', 'text_domain' ),
		'attributes'            => __( 'Gallery Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Gallery :', 'text_domain' ),
		'all_items'             => __( 'All Gallery', 'text_domain' ),
		'add_new_item'          => __( 'Add New Gallery', 'text_domain' ),
		'add_new'               => __( 'Add Gallery', 'text_domain' ),
		'new_item'              => __( 'New Gallery', 'text_domain' ),
		'edit_item'             => __( 'Edit Gallery', 'text_domain' ),
		'update_item'           => __( 'Update Gallery', 'text_domain' ),
		'view_item'             => __( 'View Gallery', 'text_domain' ),
		'view_items'            => __( 'View Galleryies', 'text_domain' ),
		'search_items'          => __( 'Search Gallery', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Gallery', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Gallery Type', 'text_domain' ),
		'description'           => __( 'gallery Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery_type', $args );

}
add_action( 'init', 'gallery_post_type', 0 );





// Register Custom Post Type
function blogs_post_type() {

	$labels = array(
		'name'                  => _x( 'Blogs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Blogs', 'text_domain' ),
		'name_admin_bar'        => __( 'Blog', 'text_domain' ),
		'archives'              => __( 'Blogs Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Blogs Item:', 'text_domain' ),
		'all_items'             => __( 'All Blogs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Blog', 'text_domain' ),
		'add_new'               => __( 'Add New Blog', 'text_domain' ),
		'new_item'              => __( 'New Blogs', 'text_domain' ),
		'edit_item'             => __( 'Edit Blog', 'text_domain' ),
		'update_item'           => __( 'Update Blog', 'text_domain' ),
		'view_item'             => __( 'View Blog', 'text_domain' ),
		'view_items'            => __( 'View Blogs', 'text_domain' ),
		'search_items'          => __( 'Search Blog', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Blog', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Blog', 'text_domain' ),
		'description'           => __( 'Add Blogs Post Type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ,'excerpt' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blogs', $args );

}
add_action( 'init', 'blogs_post_type', 0 );


