<?php
/**
* Getting started options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_getting_started($wp_customize) {

    $wp_customize->add_section( 'gridview_section_getting_started', array( 'title' => esc_html__( 'Getting Started', 'gridview' ), 'description' => esc_html__( 'Thanks for your interest in GridView! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'gridview_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridView_Customize_Button_Control( $wp_customize, 'gridview_documentation_control', array( 'label' => esc_html__( 'Documentation', 'gridview' ), 'section' => 'gridview_section_getting_started', 'settings' => 'gridview_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/gridview-wordpress-theme/' ), 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'gridview_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridView_Customize_Button_Control( $wp_customize, 'gridview_contact_control', array( 'label' => esc_html__( 'Contact Us', 'gridview' ), 'section' => 'gridview_section_getting_started', 'settings' => 'gridview_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/contact/' ), 'button_target' => '_blank', ) ) );

}