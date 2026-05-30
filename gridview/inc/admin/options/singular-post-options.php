<?php
/**
* Post options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_post_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_post', array( 'title' => esc_html__( 'Post Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 180 ) );

    $wp_customize->add_setting( 'gridview_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'gridview_thumbnail_link_control', array( 'label' => esc_html__( 'Featured Image Link', 'gridview' ), 'description' => esc_html__('Do you want the featured image in a single post to be linked to its post?', 'gridview'), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridview'), 'no' => esc_html__('No', 'gridview') ) ) );

    $wp_customize->add_setting( 'gridview_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Featured Image from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[featured_media_under_post_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_featured_media_under_post_title_control', array( 'label' => esc_html__( 'Move Featured Media to Bottom of Full Post Title', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[featured_media_under_post_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_title_control', array( 'label' => esc_html__( 'Hide Post Header from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_post_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[remove_post_title_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_remove_post_title_link_control', array( 'label' => esc_html__( 'Remove Link from Full Post Title', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[remove_post_title_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_comment_form]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_comment_form_control', array( 'label' => esc_html__( 'Hide Comments/Comment Form from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_comment_form]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags from Full Post', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[no_underline_content_links]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_no_underline_content_links_control', array( 'label' => esc_html__( 'Do not Underline the Links within the Content', 'gridview' ), 'section' => 'gridview_section_post', 'settings' => 'gridview_options[no_underline_content_links]', 'type' => 'checkbox', ) );

}