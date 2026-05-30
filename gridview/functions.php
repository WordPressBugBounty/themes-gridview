<?php
/**
* GridView functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

define( 'GRIDVIEW_PROURL', 'https://themesdna.com/gridview-pro-wordpress-theme/' );
define( 'GRIDVIEW_CONTACTURL', 'https://themesdna.com/contact/' );
define( 'GRIDVIEW_THEMEOPTIONSDIR', get_template_directory() . '/inc/admin' );

// Add new constant that returns true if WooCommerce is active
define( 'GRIDVIEW_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

require_once( GRIDVIEW_THEMEOPTIONSDIR . '/customizer.php' );

/**
 * This function return a value of given theme option name from database.
 *
 * @since 1.0.0
 *
 * @param string $option Theme option to return.
 * @return mixed The value of theme option.
 */
function gridview_get_option($option) {
    $gridview_options = get_option('gridview_options');
    if ((is_array($gridview_options)) && (array_key_exists($option, $gridview_options))) {
        return $gridview_options[$option];
    }
    else {
        return '';
    }
}

if ( ! function_exists( 'gridview_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gridview_setup() {
    
    global $wp_version;

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on GridView, use a find and replace
     * to change 'gridview' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'gridview', get_template_directory() . '/languages' );

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
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'gridview-1246w-autoh-image', 1246, 9999, false );
        add_image_size( 'gridview-675w-autoh-image', 675, 9999, false );
        add_image_size( 'gridview-480w-autoh-image', 480, 9999, false );
    }

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => esc_html__('Primary Menu', 'gridview'),
    'secondary' => esc_html__('Secondary Menu', 'gridview')
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'navigation-widgets' );
    add_theme_support( 'html5', $markup );

    add_theme_support( 'custom-logo', array(
        'height'      => 37,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Support for Custom Header
    add_theme_support( 'custom-header', apply_filters( 'gridview_custom_header_args', array(
    'default-image'          => '',
    'default-text-color'     => 'ffffff',
    'width'                  => 1920,
    'height'                 => 400,
    'flex-width'            => true,
    'flex-height'            => true,
    'wp-head-callback'       => 'gridview_header_style',
    'uploads'                => true,
    ) ) );

    // Set up the WordPress core custom background feature.
    $background_args = array(
            'default-color'          => 'e6e6e6',
            'default-image'          => get_template_directory_uri() .'/assets/images/background.png',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'     => 'auto',
            'default-attachment'     => 'fixed',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-background', apply_filters( 'gridview_custom_background_args', $background_args) );
    
    // Support for Custom Editor Style
    add_editor_style( 'assets/css/editor-style.css' );

    if ( !(gridview_get_option('enable_widgets_block_editor')) ) {
        remove_theme_support( 'widgets-block-editor' );
    }

}
endif;
add_action( 'after_setup_theme', 'gridview_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gridview_content_width() {
    $content_width = 1246;

    $GLOBALS['content_width'] = apply_filters( 'gridview_content_width', $content_width ); /* phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound */
}
add_action( 'template_redirect', 'gridview_content_width', 0 );

require_once( trailingslashit( get_template_directory() ) . 'inc/functions/widgets-init.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/social-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/post-author-box-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/postmeta-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/posts-navigation.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/menu-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/layout-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/header-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/css-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/other-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/action-hooks.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/media-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/enqueue-scripts.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/custom.php' );