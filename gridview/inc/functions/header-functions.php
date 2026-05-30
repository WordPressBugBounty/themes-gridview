<?php
/**
* Header Functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function gridview_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $gridview_custom_logo_id = get_theme_mod( 'custom_logo' );
    $gridview_logo = wp_get_attachment_image_src( $gridview_custom_logo_id , 'full' );
    $gridview_logo_src = $gridview_logo[0];
    return apply_filters( 'gridview_custom_logo', $gridview_logo_src );
}

// Site Title
function gridview_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_singular() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_category() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_tag() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_author() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_search() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_404() ) { ?>
            <p class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } else { ?>
            <h1 class="gridview-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridview_get_option('hide_tagline')) ) { ?><p class="gridview-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php }
}

function gridview_header_image_alt_text() {
    global $post;

    $header_image_alt_text = get_bloginfo( 'name' );
    if ( gridview_get_option('header_image_alt_text') ) {
        $header_image_alt_text = gridview_get_option('header_image_alt_text');
    }

    return apply_filters( 'gridview_header_image_alt_text', $header_image_alt_text );
}

function gridview_header_image_markup() {
    if ( get_header_image() ) { ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridview-header-img-link"><?php the_header_image_tag( array( 'class' => 'gridview-header-img', 'alt' => esc_attr( gridview_header_image_alt_text() ) ) ); ?></a>
    <?php }
}

function gridview_header_image_details() {
    if ( !(gridview_get_option('hide_header_image_details')) ) { ?>
        <div class="gridview-header-image-info">
        <div class="gridview-header-image-info-inside">
            <p class="gridview-header-image-site-title gridview-header-image-block"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridview_get_option('hide_header_image_description')) ) { ?><p class="gridview-header-image-site-description gridview-header-image-block"><?php bloginfo( 'description' ); ?></p><?php } ?>
        </div>
        </div>
    <?php }
}

function gridview_header_image_wrapper() {
    ?>
    <div class="gridview-outer-wrapper">
    <div class="gridview-header-image gridview-clearfix">
    <?php gridview_header_image_markup(); ?>
    <?php gridview_header_image_details(); ?>
    </div>
    </div>
    <?php
}

function gridview_header_image() {
    if ( gridview_get_option('hide_header_image') ) { return; }
    if ( get_header_image() ) {
        gridview_header_image_wrapper();
    }
}