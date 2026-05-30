<?php
/**
* Recommended plugins options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'gridview_section_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 620 ));

    $wp_customize->add_setting( 'gridview_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'install_plugins', 'sanitize_callback' => '__return_false' ) );

    $wp_customize->add_control( new GridView_Customize_Recommended_Plugins( $wp_customize, 'gridview_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'gridview' ), 'section' => 'gridview_section_recommended_plugins', 'settings' => 'gridview_options[recommended_plugins]', 'type' => 'themesdna-recommended-wpplugins', 'capability' => 'install_plugins' ) ) );

}