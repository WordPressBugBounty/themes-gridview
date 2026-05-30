<?php
/**
* Upgrade to pro options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'gridview_section_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'gridview' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'gridview_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new GridView_Customize_Static_Text_Control( $wp_customize, 'gridview_upgrade_text_control', array(
        'label'       => esc_html__( 'GridView Pro', 'gridview' ),
        'section'     => 'gridview_section_upgrade',
        'settings' => 'gridview_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy GridView? Upgrade to GridView Pro now and get:', 'gridview' ).
            '<ul class="gridview-customizer-pro-features">' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Color Options', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Font Options', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Formats Support (aside, image, video, quote, link, gallery, status, audio, chat)', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '1/2/3/4/5/6/7/8/9/10 Columns Options for Posts Grids', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10 Thumbnail Sizes Options for Posts Grids', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Switch between Masonry Grid (JavaScript based) and CSS only Grid', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Display Ads/Custom Contents between Posts in the Grid', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Switch between Boxed or Full Layout Type', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Layout Styles for Posts/Pages', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Layout Styles for Non-Singular Pages', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Width Change Options for Full Website/Main Content/Left Sidebar/Right Sidebar', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Custom Page Templates', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Custom Post Templates', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Header Layouts with Width options - (Logo + Primary Menu + Social Buttons) / (Logo + Header Banner) / (Full Width Header)', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Footer with Layout Options (1/2/3/4/5 columns)', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Change Website Width/Layout Type/Layout Style/Header Style/Footer Style of any Post/Page', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Capability to Add Different Header Images for Each Post/Page with Unique Link, Title and Description', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Grid Featured Posts Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'List Featured Posts Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Tabbed Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options.', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'About and Social Widget - 60+ Social Buttons', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'News Ticker (Recent/Categories/Tags/PostIDs based) - It can display posts according to Likes/Views/Comments/Dates/... and there are many options.', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Settings Panel to Control Options in Each Post', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Settings Panel to Control Options in Each Page', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Posts Views Counter', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Posts Likes System', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Infinite Scroll and Load More Button', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Post Share Buttons Styles with Options - 25+ Social Networks are Supported', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Related Posts (Categories/Tags/Author/PostIDs based) with Many Options - For both single posts and post summaries', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Author Bio Box with Social Buttons - 60+ Social Buttons', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Enable/Disable Mobile View from Primary and Secondary Menus', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Navigation with Thumbnails', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to add Ads under Post Title and under Post Content', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Disable Google Fonts - for faster loading', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Disable Post Format Views - for faster loading', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Widget Areas', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Contact Form', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'WooCommerce Compatible', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Yoast SEO Breadcrumbs Support', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Full RTL Language Support', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Search Engine Optimized', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Random Posts Button in Header', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Many Useful Customizer Theme options', 'gridview' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Features...', 'gridview' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.GRIDVIEW_PROURL.'" class="button button-primary" target="_blank"><i class="fas fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__( 'Upgrade To GridView PRO', 'gridview' ) . '</a></strong>'
    ) ) );

}