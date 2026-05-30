<?php
/**
* GridView Theme Customizer.
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! class_exists( 'WP_Customize_Control' ) ) {return null;}

require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-static-text-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-button-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-recommended-plugins.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */

require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/getting-started.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/menu-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/header-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/posts-grid-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/singular-post-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/navigation-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/singular-page-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/social-profiles.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/footer-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/search-404-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/other-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/recommended-plugins.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/upgrade-to-pro.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/sanitize-callbacks.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */

function gridview_register_theme_customizer( $wp_customize ) {

    if(method_exists('WP_Customize_Manager', 'add_panel')):
    $wp_customize->add_panel('gridview_main_options_panel', array( 'title' => esc_html__('Theme Options', 'gridview'), 'priority' => 10, ));
    endif;

    $wp_customize->get_section( 'title_tagline' )->panel = 'gridview_main_options_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = 20;
    $wp_customize->get_section( 'header_image' )->panel = 'gridview_main_options_panel';
    $wp_customize->get_section( 'header_image' )->priority = 26;
    $wp_customize->get_section( 'background_image' )->panel = 'gridview_main_options_panel';
    $wp_customize->get_section( 'background_image' )->priority = 27;
    $wp_customize->get_section( 'colors' )->panel = 'gridview_main_options_panel';
    $wp_customize->get_section( 'colors' )->priority = 40;
      
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    $wp_customize->get_control( 'background_color' )->description = esc_html__('To change Background Color, need to remove background image first:- go to Appearance : Customize : Header Image', 'gridview');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.gridview-site-title a',
            'render_callback' => 'gridview_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.gridview-site-description',
            'render_callback' => 'gridview_customize_partial_blogdescription',
        ) );
    }

    gridview_getting_started($wp_customize);
    gridview_menu_options($wp_customize);
    gridview_header_options($wp_customize);
    gridview_posts_grid_options($wp_customize);
    gridview_post_options($wp_customize);
    gridview_navigation_options($wp_customize);
    gridview_page_options($wp_customize);
    gridview_social_profiles($wp_customize);
    gridview_footer_options($wp_customize);
    gridview_search_404_options($wp_customize);
    gridview_other_options($wp_customize);
    gridview_recomm_plugin_options($wp_customize);
    gridview_upgrade_to_pro($wp_customize);

}

add_action( 'customize_register', 'gridview_register_theme_customizer' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gridview_customize_partial_blogname() {
    bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gridview_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

function gridview_customizer_js_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_script('gridview-theme-customizer-js', get_template_directory_uri() . '/inc/admin/js/customizer.js', array( 'jquery', 'customize-preview' ), $theme_version, true);
}
add_action( 'customize_preview_init', 'gridview_customizer_js_scripts' );