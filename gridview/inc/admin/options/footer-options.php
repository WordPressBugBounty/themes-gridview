<?php
/**
* Footer options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_footer_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_footer', array( 'title' => esc_html__( 'Footer Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 280 ) );

    $wp_customize->add_setting( 'gridview_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_html', ) );

    $wp_customize->add_control( 'gridview_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'gridview' ), 'section' => 'gridview_section_footer', 'settings' => 'gridview_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridview_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridview_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'gridview' ), 'section' => 'gridview_section_footer', 'settings' => 'gridview_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}