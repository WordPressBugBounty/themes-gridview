<?php
/**
* Page options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_page_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_page', array( 'title' => esc_html__( 'Page Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 190 ) );

    $wp_customize->add_setting( 'gridview_options[thumbnail_link_page]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'gridview_thumbnail_link_page_control', array( 'label' => esc_html__( 'Featured Image Link', 'gridview' ), 'description' => esc_html__('Do you want the featured image in a page to be linked to its page?', 'gridview'), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[thumbnail_link_page]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridview'), 'no' => esc_html__('No', 'gridview') ) ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_thumbnail_control', array( 'label' => esc_html__( 'Hide Featured Image from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[featured_media_under_page_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_featured_media_under_page_title_control', array( 'label' => esc_html__( 'Move Featured Image to Bottom of Page Title', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[featured_media_under_page_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_title_control', array( 'label' => esc_html__( 'Hide Page Header from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[remove_page_title_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_remove_page_title_link_control', array( 'label' => esc_html__( 'Remove Link from Single Page Title', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[remove_page_title_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_author_control', array( 'label' => esc_html__( 'Hide Page Author from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_comments]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_comments_control', array( 'label' => esc_html__( 'Hide Comment Link from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_comments]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_comment_form]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_comment_form_control', array( 'label' => esc_html__( 'Hide Comments/Comment Form from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_comment_form]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_page_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_page_edit_control', array( 'label' => esc_html__( 'Hide Edit Link from Single Page', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_page_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_static_page_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_static_page_title_control', array( 'label' => esc_html__( 'Hide Page Header from Static Homepage', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_static_page_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_static_page_meta]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_static_page_meta_control', array( 'label' => esc_html__( 'Hide Page Meta Data (Page Date, Page Author, Comment Link) from Static Homepage', 'gridview' ), 'section' => 'gridview_section_page', 'settings' => 'gridview_options[hide_static_page_meta]', 'type' => 'checkbox', ) );

}