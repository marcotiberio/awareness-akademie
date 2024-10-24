<?php
/**
 * Awareness Akademie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Awareness_Akademie
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'awareness_akademie_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function awareness_akademie_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Awareness Akademie, use a find and replace
		 * to change 'awareness-akademie' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'awareness-akademie', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'awareness-akademie' ),
				'menu-2' => esc_html__( 'Footer', 'awareness-akademie' ),
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
				'awareness_akademie_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'awareness_akademie_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function awareness_akademie_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'awareness_akademie_content_width', 640 );
}
add_action( 'after_setup_theme', 'awareness_akademie_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function awareness_akademie_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'awareness-akademie' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'awareness-akademie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'awareness_akademie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function awareness_akademie_scripts() {
	wp_enqueue_style( 'awareness-akademie-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'hamburger-css', get_template_directory_uri() . '/assets/css/hamburger.css', 'all');
	wp_enqueue_style( 'swiper-css', get_stylesheet_uri().'/assets/css/swiper-bundle.css', 'all');
	wp_enqueue_style( 'swiper-min-css', get_stylesheet_uri().'/assets/css/swiper-bundle.min.css', 'all');
	wp_style_add_data( 'awareness-akademie-style', 'rtl', 'replace' );

//	wp_deregister_script( 'jquery' );
//	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true);
//	wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.3.2.min.js', array(), null, true);

	wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.js', array(), null, true);
	wp_enqueue_script('swiper-min', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), null, true);
	// wp_enqueue_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCiPuWhk93qaBfNd28DpJY_ZyGNEgtoiYw', array(), null, true);

	wp_enqueue_script( 'awareness-akademie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'awareness-akademie-blob', get_template_directory_uri() . '/js/blob.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'awareness-akademie-ressourcen-filters', get_template_directory_uri() . '/js/ressourcen-filters.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'awareness-akademie-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'googlemaps-js', get_template_directory_uri() . '/js/googlemaps.js', array(), _S_VERSION, false );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'awareness_akademie_scripts' );

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


// // Method 1: Filter.
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCiPuWhk93qaBfNd28DpJY_ZyGNEgtoiYw';
	
	return $api;
	
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
// function my_acf_init() {
//     acf_update_setting('google_api_key', 'AIzaSyCiPuWhk93qaBfNd28DpJY_ZyGNEgtoiYw');
// }
// add_action('acf/init', 'my_acf_init');

/*
* Creating a function to create our News
*/
 
function custom_post_type_news() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'News', 'Post Type General Name', 'awareness-akademie' ),
			'singular_name'       => _x( 'News', 'Post Type Singular Name', 'awareness-akademie' ),
			'menu_name'           => __( 'News', 'awareness-akademie' ),
			'parent_item_colon'   => __( 'Parent News', 'awareness-akademie' ),
			'all_items'           => __( 'All News', 'awareness-akademie' ),
			'view_item'           => __( 'View News', 'awareness-akademie' ),
			'add_new_item'        => __( 'Add New News', 'awareness-akademie' ),
			'add_new'             => __( 'Add New', 'awareness-akademie' ),
			'edit_item'           => __( 'Edit News', 'awareness-akademie' ),
			'update_item'         => __( 'Update News', 'awareness-akademie' ),
			'search_items'        => __( 'Search News', 'awareness-akademie' ),
			'not_found'           => __( 'Not Found', 'awareness-akademie' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'awareness-akademie' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'News', 'awareness-akademie' ),
			'description'         => __( 'News news and reviews', 'awareness-akademie' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'  => array( 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'News', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type_news', 0 );


/*
* Creating a function to create our Roundtables
*/
 
function custom_post_type_roundtables() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Roundtables', 'Post Type General Name', 'awareness-akademie' ),
			'singular_name'       => _x( 'Roundtable', 'Post Type Singular Name', 'awareness-akademie' ),
			'menu_name'           => __( 'Roundtables', 'awareness-akademie' ),
			'parent_item_colon'   => __( 'Parent Roundtable', 'awareness-akademie' ),
			'all_items'           => __( 'All Roundtables', 'awareness-akademie' ),
			'view_item'           => __( 'View Roundtable', 'awareness-akademie' ),
			'add_new_item'        => __( 'Add New Roundtable', 'awareness-akademie' ),
			'add_new'             => __( 'Add New', 'awareness-akademie' ),
			'edit_item'           => __( 'Edit Roundtable', 'awareness-akademie' ),
			'update_item'         => __( 'Update Roundtable', 'awareness-akademie' ),
			'search_items'        => __( 'Search Roundtable', 'awareness-akademie' ),
			'not_found'           => __( 'Not Found', 'awareness-akademie' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'awareness-akademie' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'Roundtables', 'awareness-akademie' ),
			'description'         => __( 'Roundtables news and reviews', 'awareness-akademie' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'  => array( 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'Roundtables', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type_roundtables', 0 );



/*
* Creating a function to create our Offers
*/
 
function custom_post_type_offers() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Offers', 'Post Type General Name', 'awareness-akademie' ),
			'singular_name'       => _x( 'Offer', 'Post Type Singular Name', 'awareness-akademie' ),
			'menu_name'           => __( 'Offers', 'awareness-akademie' ),
			'parent_item_colon'   => __( 'Parent Offer', 'awareness-akademie' ),
			'all_items'           => __( 'All Offers', 'awareness-akademie' ),
			'view_item'           => __( 'View Offer', 'awareness-akademie' ),
			'add_new_item'        => __( 'Add New Offer', 'awareness-akademie' ),
			'add_new'             => __( 'Add New', 'awareness-akademie' ),
			'edit_item'           => __( 'Edit Offer', 'awareness-akademie' ),
			'update_item'         => __( 'Update Offer', 'awareness-akademie' ),
			'search_items'        => __( 'Search Offer', 'awareness-akademie' ),
			'not_found'           => __( 'Not Found', 'awareness-akademie' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'awareness-akademie' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'Offers', 'awareness-akademie' ),
			'description'         => __( 'Offers news and reviews', 'awareness-akademie' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'  => array( 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'Angebote', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type_offers', 0 );


/*
* Creating a function to create our Ressourcen
*/
 
function custom_post_type_resources() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Ressourcen', 'Post Type General Name', 'awareness-akademie' ),
			'singular_name'       => _x( 'Ressource', 'Post Type Singular Name', 'awareness-akademie' ),
			'menu_name'           => __( 'Ressourcen', 'awareness-akademie' ),
			'parent_item_colon'   => __( 'Parent Item', 'awareness-akademie' ),
			'all_items'           => __( 'All Items', 'awareness-akademie' ),
			'view_item'           => __( 'View Item', 'awareness-akademie' ),
			'add_new_item'        => __( 'Add New Item', 'awareness-akademie' ),
			'add_new'             => __( 'Add New', 'awareness-akademie' ),
			'edit_item'           => __( 'Edit Item', 'awareness-akademie' ),
			'update_item'         => __( 'Update Item', 'awareness-akademie' ),
			'search_items'        => __( 'Search Item', 'awareness-akademie' ),
			'not_found'           => __( 'Not Found', 'awareness-akademie' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'awareness-akademie' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'Ressourcen', 'awareness-akademie' ),
			'description'         => __( 'Ressourcen news and reviews', 'awareness-akademie' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'  => array( 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 8,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'resource', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type_resources', 0 );
