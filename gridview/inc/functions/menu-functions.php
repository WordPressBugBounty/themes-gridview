<?php
/**
* Menu Functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function gridview_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'gridview_page_menu_args' );

function gridview_primary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'gridview' );
    if ( gridview_get_option('primary_menu_text') ) {
        $menu_text = gridview_get_option('primary_menu_text');
    }
    return apply_filters( 'gridview_primary_menu_text', $menu_text );
}

function gridview_secondary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'gridview' );
    if ( gridview_get_option('secondary_menu_text') ) {
        $menu_text = gridview_get_option('secondary_menu_text');
    }
    return apply_filters( 'gridview_secondary_menu_text', $menu_text );
}

function gridview_top_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'gridview-menu-secondary-navigation',
        'menu_class'   => 'gridview-secondary-nav-menu gridview-menu-secondary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function gridview_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'gridview-menu-primary-navigation',
        'menu_class'   => 'gridview-primary-nav-menu gridview-menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function gridview_secondary_menu_area() {
if ( !(gridview_get_option('disable_secondary_menu')) ) { ?>
<div class="gridview-outer-wrapper">
<div class="gridview-container gridview-secondary-menu-container gridview-clearfix">
<div class="gridview-secondary-menu-container-inside gridview-clearfix">
<nav class="gridview-nav-secondary" id="gridview-secondary-navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'gridview' ); ?>">
<button class="gridview-secondary-responsive-menu-icon" aria-controls="gridview-menu-secondary-navigation" aria-expanded="false"><?php echo esc_html( gridview_secondary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'gridview-menu-secondary-navigation', 'menu_class' => 'gridview-secondary-nav-menu gridview-menu-secondary gridview-clearfix', 'fallback_cb' => 'gridview_top_fallback_menu', 'container' => '', ) ); ?>
</nav>
</div>
</div>
</div>
<?php }
}