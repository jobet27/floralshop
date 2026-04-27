<?php
/**
 * FloralShop functions and definitions
 *
 * @package FloralShop
 */

if ( ! function_exists( 'floralshop_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function floralshop_setup() {
        /*
         * Let WordPress manage the document title.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support( 'post-thumbnails' );

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

        // Add support for core custom logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'floralshop_setup' );

/**
 * Enqueue scripts and styles.
 */
function floralshop_scripts() {
    // Theme Info CSS
    wp_enqueue_style( 'floralshop-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Main Design CSS
    wp_enqueue_style( 'floralshop-main-design', get_template_directory_uri() . '/assets/css/main.css', array('floralshop-style'), '1.0.0' );
    
    // Google Fonts
    wp_enqueue_style( 'floralshop-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap', array(), null );

    // Main JS
    wp_enqueue_script( 'floralshop-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'floralshop_scripts' );

/**
 * Customizing excerpt length
 */
function floralshop_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'floralshop_custom_excerpt_length', 999 );
