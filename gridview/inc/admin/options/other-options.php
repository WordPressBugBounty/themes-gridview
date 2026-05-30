<?php
/**
* Other options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_other_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_other_options', array( 'title' => esc_html__( 'Other Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 600 ) );

    $wp_customize->add_setting( 'gridview_options[enable_widgets_block_editor]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_enable_widgets_block_editor_control', array( 'label' => esc_html__( 'Enable Gutenberg Widget Block Editor', 'gridview' ), 'section' => 'gridview_section_other_options', 'settings' => 'gridview_options[enable_widgets_block_editor]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[disable_loading_animation]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_disable_loading_animation_control', array( 'label' => esc_html__( 'Disable Site Loading Animation', 'gridview' ), 'section' => 'gridview_section_other_options', 'settings' => 'gridview_options[disable_loading_animation]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[search_box_placeholder_text]', array( 'default' => esc_html__( 'Search ...', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridview_search_box_placeholder_text_control', array( 'label' => esc_html__( 'Search Box Placeholder Text', 'gridview' ), 'section' => 'gridview_section_other_options', 'settings' => 'gridview_options[search_box_placeholder_text]', 'type' => 'text', ) );

}