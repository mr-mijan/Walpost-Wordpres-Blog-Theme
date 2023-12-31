<?php
// Theme Functions
function walpost_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on the_theme, use a find and replace
    * to change 'the_theme' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'the_theme', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_theme_support( "align-wide" );
    add_theme_support( "register_block_style" );
    add_theme_support( "register_block_pattern" );
    add_editor_style();
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page'));


    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Primary_Menu', __('Header', 'walpost'));

    //add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio'));

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

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
add_action( 'after_setup_theme', 'walpost_after_setup_theme' );

    // CSS JS Enqueue
    function walpost_theme_style(){

        // CSS Enqueue
        wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.0.2', 'all' );
        wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array(), '5.15.0', 'all' );
        wp_enqueue_style('line-awesome', get_template_directory_uri().'/assets/css/line-awesome.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), '11.0.5', 'all' );
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );

        // JS Enqueue
        wp_enqueue_script( 'jquery');
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '5.0.2', 'true' );
        wp_enqueue_script('swiper', get_template_directory_uri().'/assets/js/swiper.min.js', array(), '11.0.5', 'true' );
        wp_enqueue_script('masonry', get_template_directory_uri().'/assets/js/masonry.min.js', array(), '4.2.2', 'true' );
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri().'/assets/js/theia-sticky-sidebar.min.js', array(), '1.0.0', 'true' );
        wp_enqueue_script('switch', get_template_directory_uri().'/assets/js/switch.js', array(), '1.0.0', 'true' );
        wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', 'true' );
    }
    add_action('wp_enqueue_scripts', 'walpost_theme_style');

    // Post Excerpt
    function heer_custom_excerpt_length( $length ) {
        return 25;
    }
    add_filter( 'excerpt_length', 'heer_custom_excerpt_length', 999 );

    function herr_excerpt_more( $more ) {
        return ' ...';
    }
    add_filter( 'excerpt_more', 'herr_excerpt_more' );