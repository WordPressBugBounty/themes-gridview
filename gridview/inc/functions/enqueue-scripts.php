<?php
/**
* Enqueue scripts and styles
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_scripts() {
    global $wp_query;
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('gridview-maincss', get_stylesheet_uri(), array(), $theme_version);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), $theme_version );
    wp_enqueue_style('gridview-webfont', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Domine:400,700|Oswald:400,700|Roboto+Condensed:400,400i,700,700i&amp;display=swap', array(), null);
    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), $theme_version, true);

    $gridview_primary_menu_active = false;
    if ( !gridview_get_option('disable_primary_menu') ) {
        $gridview_primary_menu_active = true;
    }
    $gridview_secondary_menu_active = false;
    if ( !gridview_get_option('disable_secondary_menu') ) {
        $gridview_secondary_menu_active = true;
    }

    $gridview_sticky_header_active = false;
    if ( gridview_get_option('enable_sticky_header') ) {
        $gridview_sticky_header_active = true;
    }
    $gridview_sticky_header_mobile_active = false;
    if ( gridview_get_option('enable_sticky_mobile_header') ) {
        $gridview_sticky_header_mobile_active = true;
    }

    $gridview_sticky_sidebar_active = true;
    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $gridview_sticky_sidebar_active = false;
    }
    if ( is_404() ) {
        $gridview_sticky_sidebar_active = false;
    }
    if ( $gridview_sticky_sidebar_active ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), $theme_version, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), $theme_version, true);
    }

    $gridview_columnwidth = '.'.gridview_post_grid_cols().'-sizer';
    $gridview_gutter = '.'.gridview_post_grid_cols().'-gutter';

    wp_enqueue_script('gridview-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_version, true );
    wp_enqueue_script('gridview-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), $theme_version, true );
    wp_enqueue_script('gridview-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery', 'imagesloaded', 'masonry' ), $theme_version, true);

    wp_localize_script( 'gridview-customjs', 'gridview_ajax_object',
        array(
            'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
            'primary_menu_active' => $gridview_primary_menu_active,
            'secondary_menu_active' => $gridview_secondary_menu_active,
            'sticky_header_active' => $gridview_sticky_header_active,
            'sticky_header_mobile_active' => $gridview_sticky_header_mobile_active,
            'sticky_sidebar_active' => $gridview_sticky_sidebar_active,
            'columnwidth' => $gridview_columnwidth,
            'gutter' => $gridview_gutter,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'gridview_scripts' );

/**
 * Enqueue customizer styles.
 */
function gridview_enqueue_customizer_styles() {
    wp_enqueue_style( 'gridview-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), $theme_version );
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), $theme_version );
}
add_action( 'customize_controls_enqueue_scripts', 'gridview_enqueue_customizer_styles' );