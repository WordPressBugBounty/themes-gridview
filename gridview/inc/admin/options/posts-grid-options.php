<?php
/**
* Posts Grid options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_posts_grid_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_posts_grid', array( 'title' => esc_html__( 'Posts Grid Options', 'gridview' ), 'description' => esc_html__('To display your latest posts as a grid on your homepage, please set the "Your homepage displays" option to "Your latest posts." You can find this setting in your WordPress Dashboard by navigating to "Settings" -> "Reading" -> "Your homepage displays."', 'gridview'), 'panel' => 'gridview_main_options_panel', 'priority' => 160 ) );

    $wp_customize->add_setting( 'gridview_options[hide_posts_heading]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_posts_heading_control', array( 'label' => esc_html__( 'Hide HomePage Posts Heading', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_posts_heading]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridview_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'posts_per_page', array( 'default' => get_option('posts_per_page'), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_positive_integer' ) );

    $wp_customize->add_control( 'gridview_posts_per_page_control', array( 'label' => esc_html__( 'Number of Posts per Page', 'gridview' ), 'description' => esc_html__('Set the maximum number of posts displayed on each blog page.', 'gridview'), 'section' => 'gridview_section_posts_grid', 'settings' => 'posts_per_page', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[read_more_length]', array( 'default' => 20, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_read_more_length' ) );

    $wp_customize->add_control( 'gridview_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'gridview' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 20 words.', 'gridview'), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[read_more_text]', array( 'default' => esc_html__( 'read more', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridview_read_more_text_control', array( 'label' => esc_html__( 'Read More Text', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[read_more_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_title_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_title_home_control', array( 'label' => esc_html__( 'Hide Post Titles from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_post_title_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_posted_date_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_posted_date_home_control', array( 'label' => esc_html__( 'Hide Posted Dates from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_posted_date_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_author_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_author_home_control', array( 'label' => esc_html__( 'Hide Post Authors from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_post_author_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_categories_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_categories_home_control', array( 'label' => esc_html__( 'Hide Post Categories from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_post_categories_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_comments_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_comments_link_home_control', array( 'label' => esc_html__( 'Hide Comment Links from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_comments_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_thumbnail_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_thumbnail_home_control', array( 'label' => esc_html__( 'Hide Featured Images from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_thumbnail_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_default_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_default_thumbnail_control', array( 'label' => esc_html__( 'Hide Default Image', 'gridview' ), 'description' => esc_html__( 'The default image is shown when there is no featured image.', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_default_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippets from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[hide_read_more_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_read_more_button_control', array( 'label' => esc_html__( 'Hide Read More Buttons from Posts Grid', 'gridview' ), 'section' => 'gridview_section_posts_grid', 'settings' => 'gridview_options[hide_read_more_button]', 'type' => 'checkbox', ) );

}