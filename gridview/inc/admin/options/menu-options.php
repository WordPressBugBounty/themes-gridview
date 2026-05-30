<?php
/**
* Menu options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_menu_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_menu_options', array( 'title' => esc_html__( 'Menu Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 100 ) );

    $wp_customize->add_setting( 'gridview_options[primary_menu_text]', array( 'default' => esc_html__( 'Menu', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridview_primary_menu_text_control', array( 'label' => esc_html__( 'Primary Menu Mobile Text', 'gridview' ), 'section' => 'gridview_section_menu_options', 'settings' => 'gridview_options[primary_menu_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridview_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'gridview' ), 'section' => 'gridview_section_menu_options', 'settings' => 'gridview_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridview_options[secondary_menu_text]', array( 'default' => esc_html__( 'Menu', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridview_secondary_menu_text_control', array( 'label' => esc_html__( 'Secondary Menu Mobile Text', 'gridview' ), 'section' => 'gridview_section_menu_options', 'settings' => 'gridview_options[secondary_menu_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridview_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'gridview' ), 'section' => 'gridview_section_menu_options', 'settings' => 'gridview_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

}