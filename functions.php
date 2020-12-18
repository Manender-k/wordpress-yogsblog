<?php
/**
 * yogsblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yogsblog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'yogsblog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yogsblog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yogsblog, use a find and replace
		 * to change 'yogsblog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yogsblog', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'yogsblog' ),
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
				'yogsblog_custom_background_args',
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
add_action( 'after_setup_theme', 'yogsblog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yogsblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yogsblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'yogsblog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yogsblog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'yogsblog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'yogsblog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'yogsblog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yogsblog_scripts() {
	wp_enqueue_style( 'fontawesome-4.7-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), 4.7 );
	wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );
	wp_enqueue_style( 'google-font-Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', array(), null );
	wp_enqueue_style( 'animation-effect-style', get_template_directory_uri() . '/css/animation-effect.css', array(), null );
	wp_enqueue_style( 'boostrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.3' );
	wp_enqueue_style( 'yogsblog-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	/* wp_style_add_data( 'yogsblog-style', 'rtl', 'replace' );

	wp_enqueue_script( 'yogsblog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true ); */

	/* if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} */

	/*
		wp_enqueue_style( 'google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap', array(), null );
	wp_enqueue_style( 'google-font-caveat', 'https://fonts.googleapis.com/css2?family=Caveat&display=swap', array(), null );
	wp_enqueue_style( 'fontawesome-4.7-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), 4.7 );
	wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );
	wp_enqueue_style( 'de-rise-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'animation-style', get_template_directory_uri() . '/css/animation.css', array(), null );
	wp_enqueue_style( 'boostrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.3' );

	

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
		wp_enqueue_script('jquery');
	}

	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '4.5.3', true);
	wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);
	*/

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", false, null);
		wp_enqueue_script('jquery');
	}
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '4.5.3', true);
	wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'yogsblog_scripts' );


/**
* Filter function used to remove the tinymce emoji plugin.
* 
* @param array $plugins 
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
 
/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
 
 		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
 
	return $urls;
}
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
 

/**
 * Remove Rest Links from header
 */
function remove_rest_links() {
	remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
	remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
	remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
	remove_action( 'wp_head', 'index_rel_link' ); // index link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
	remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
}
add_action('init', 'remove_rest_links');

function remove_json_api () {

	// Remove the REST API lines from the HTML Header
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

	// Remove the REST API endpoint.
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );

	// Turn off oEmbed auto discovery.
	add_filter( 'embed_oembed_discover', '__return_false' );

	// Don't filter oEmbed results.
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

	// Remove oEmbed discovery links.
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );

 // Remove all embeds rewrite rules.
 // add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

}
add_action( 'after_setup_theme', 'remove_json_api' );


function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');


/**
 * Generate shortcode feature for html pages
 */

function yogsblogGetPageContent($atts = [], $content = null, $tag = '') {
	$atts = array_change_key_case( (array) $atts, CASE_LOWER );
	ob_start();
		include('pages/' . $atts['page']);
	$content = ob_get_clean();
	return $content;
}
add_shortcode('yogsblog_get_page', 'yogsblogGetPageContent');

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

