<?php
/**
* Header options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'gridview_section_header', array( 'title' => esc_html__( 'Header Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 120 ) );

    $wp_customize->add_setting( 'gridview_options[hide_tagline]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_tagline_control', array( 'label' => esc_html__( 'Hide Tagline', 'gridview' ), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[hide_tagline]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[enable_sticky_header]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_enable_sticky_header_control', array( 'label' => esc_html__( 'Enable Sticky Header', 'gridview' ), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[enable_sticky_header]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[enable_sticky_mobile_header]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_enable_sticky_mobile_header_control', array( 'label' => esc_html__( 'Enable Sticky Header on Small Screen', 'gridview' ), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[enable_sticky_mobile_header]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'gridview' ), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[hide_header_content]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridview_options[hide_header_image]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_header_image_control', array( 'label' => esc_html__( 'Hide Header Image from Everywhere', 'gridview' ), 'section' => 'header_image', 'settings' => 'gridview_options[hide_header_image]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridview_options[hide_header_image_details]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_header_image_details_control', array( 'label' => esc_html__( 'Hide both Title and Description from Header Image', 'gridview' ), 'section' => 'header_image', 'settings' => 'gridview_options[hide_header_image_details]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_header_image_description]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_header_image_description_control', array( 'label' => esc_html__( 'Hide Description from Header Image', 'gridview' ), 'section' => 'header_image', 'settings' => 'gridview_options[hide_header_image_description]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social + Search + Login/Logout Buttons', 'gridview' ), 'description' => esc_html__('If you checked this option, all buttons will disappear from header. There is no any effect from below 2 options.', 'gridview'), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_header_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_header_search_button_control', array( 'label' => esc_html__( 'Hide Header Search Button', 'gridview' ), 'description' => esc_html__('This option has no effect if you checked the option: Hide Header Social + Search + Login/Logout Buttons', 'gridview'), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[hide_header_search_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[show_header_login_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_show_header_login_button_control', array( 'label' => esc_html__( 'Show Login/Logout Button in Header', 'gridview' ), 'description' => esc_html__('This option has no effect if you checked the option: Hide Header Social + Search + Login/Logout Buttons', 'gridview'), 'section' => 'gridview_section_header', 'settings' => 'gridview_options[show_header_login_button]', 'type' => 'checkbox', ) );

   $wp_customize->add_setting( 'gridview_options[header_image_alt_text]', array( 'default' => get_bloginfo( 'name' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridview_header_image_alt_text_control', array( 'label' => esc_html__( 'Header Image Alt Text', 'gridview' ), 'section' => 'header_image', 'settings' => 'gridview_options[header_image_alt_text]', 'type' => 'text', ) );

}