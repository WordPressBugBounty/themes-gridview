<?php
/**
* 404 options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_search_404_options($wp_customize) {

    $wp_customize->add_section( 'gridview_section_search_404', array( 'title' => esc_html__( 'Search and 404 Pages Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 340 ) );

    $wp_customize->add_setting( 'gridview_options[no_search_heading]', array( 'default' => esc_html__( 'Nothing Found', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_html', ) );

    $wp_customize->add_control( 'gridview_no_search_heading_control', array( 'label' => esc_html__( 'No Search Results Heading', 'gridview' ), 'description' => esc_html__( 'Enter a heading to display when no search results are found.', 'gridview' ), 'section' => 'gridview_section_search_404', 'settings' => 'gridview_options[no_search_heading]', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'gridview_options[no_search_results]', array( 'default' => esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_html', ) );

    $wp_customize->add_control( 'gridview_no_search_results_control', array( 'label' => esc_html__( 'No Search Results Message', 'gridview' ), 'description' => esc_html__( 'Enter a message to display when no search results are found.', 'gridview' ), 'section' => 'gridview_section_search_404', 'settings' => 'gridview_options[no_search_results]', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'gridview_options[error_404_heading]', array( 'default' => esc_html__( 'Oops! That page can not be found.', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_html', ) );

    $wp_customize->add_control( 'gridview_error_404_heading_control', array( 'label' => esc_html__( '404 Error Page Heading', 'gridview' ), 'description' => esc_html__( 'Enter the heading for the 404 error page.', 'gridview' ), 'section' => 'gridview_section_search_404', 'settings' => 'gridview_options[error_404_heading]', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'gridview_options[error_404_message]', array( 'default' => esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gridview' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_html', ) );

    $wp_customize->add_control( 'gridview_error_404_message_control', array( 'label' => esc_html__( 'Error 404 Message', 'gridview' ), 'description' => esc_html__( 'Enter a message to display on the 404 error page.', 'gridview' ), 'section' => 'gridview_section_search_404', 'settings' => 'gridview_options[error_404_message]', 'type' => 'textarea', ) );

}