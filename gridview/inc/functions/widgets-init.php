<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_widgets_init() {

register_sidebar(array(
    'id' => 'gridview-sidebar-one',
    'name' => esc_html__( 'Sidebar 1 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is located on the left-hand side of your web page.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-side-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-sidebar-two',
    'name' => esc_html__( 'Sidebar 2 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is located on the right-hand side of your web page.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-side-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-home-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Default HomePage)', 'gridview' ),
    'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-main-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Everywhere)', 'gridview' ),
    'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on every page of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-main-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Default HomePage)', 'gridview' ),
    'description' => esc_html__( 'This widget area is located at the top of the main content of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-main-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-top-widgets',
    'name' => esc_html__( 'Top Widgets (Everywhere)', 'gridview' ),
    'description' => esc_html__( 'This widget area is located at the top of the main content of your website. Widgets of this widget area are displayed on every page of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-main-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Default HomePage)', 'gridview' ),
    'description' => esc_html__( 'This widget area is located at the bottom of the main content of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-main-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Everywhere)', 'gridview' ),
    'description' => esc_html__( 'This widget area is located at the bottom of the main content of your website. Widgets of this widget area are displayed on every page of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-main-widget widget gridview-box %2$s"><div class="gridview-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridview-widget-header"><h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridview-top-footer',
    'name' => esc_html__( 'Footer Top Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is located on the top of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridview-footer-1',
    'name' => esc_html__( 'Footer 1 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is the column 1 of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridview-footer-2',
    'name' => esc_html__( 'Footer 2 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is the column 2 of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridview-footer-3',
    'name' => esc_html__( 'Footer 3 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is the column 3 of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridview-footer-4',
    'name' => esc_html__( 'Footer 4 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is the column 4 of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridview-footer-5',
    'name' => esc_html__( 'Footer 5 Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is the column 5 of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridview-bottom-footer',
    'name' => esc_html__( 'Footer Bottom Widgets', 'gridview' ),
    'description' => esc_html__( 'This widget area is located on the bottom of the footer of your website.', 'gridview' ),
    'before_widget' => '<div id="%1$s" class="gridview-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridview-widget-title"><span class="gridview-widget-title-inside">',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'gridview_widgets_init' );


function gridview_sidebar_one_widgets() {
    dynamic_sidebar( 'gridview-sidebar-one' );
}

function gridview_sidebar_two_widgets() {
    dynamic_sidebar( 'gridview-sidebar-two' );
}

function gridview_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridview-home-fullwidth-widgets' ) || is_active_sidebar( 'gridview-fullwidth-widgets' ) ) : ?>
<div class="gridview-top-wrapper-outer gridview-clearfix">
<div class="gridview-featured-posts-area gridview-top-wrapper gridview-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridview-home-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridview-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function gridview_top_widgets() { ?>

<?php if ( is_active_sidebar( 'gridview-home-top-widgets' ) || is_active_sidebar( 'gridview-top-widgets' ) ) : ?>
<div class="gridview-featured-posts-area gridview-featured-posts-area-top gridview-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridview-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridview-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridview_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'gridview-home-bottom-widgets' ) || is_active_sidebar( 'gridview-bottom-widgets' ) ) : ?>
<div class='gridview-featured-posts-area gridview-featured-posts-area-bottom gridview-clearfix'>
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridview-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridview-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }