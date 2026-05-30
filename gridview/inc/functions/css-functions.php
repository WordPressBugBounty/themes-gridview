<?php
/**
* Css Classes Functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Category ids in post class
function gridview_category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
        $classes[] = 'wpcat-' . $category->cat_ID . '-id';
    }
    return apply_filters( 'gridview_category_id_class', $classes );
}
add_filter('post_class', 'gridview_category_id_class');


// Adds custom classes to the array of body classes.
function gridview_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'gridview-group-blog';
    }

    if ( !(gridview_get_option('disable_loading_animation')) ) {
        $classes[] = 'gridview-animated gridview-fadein';
    }

    if ( get_header_image() ) {
        $classes[] = 'gridview-header-image-active';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'gridview-custom-logo-active';
    }

    if( is_singular() ) {

        global $post;

        if( is_single() ) {
            if ( gridview_get_option('featured_media_under_post_title') ) {
                $classes[] = 'gridview-single-media-under-title';
            }
        }
        if( is_page() ) {
            if ( gridview_get_option('featured_media_under_page_title') ) {
                $classes[] = 'gridview-single-media-under-title';
            }
        }

        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
           $classes[] = 'gridview-layout-full-width';
        } else {
            $classes[] = 'gridview-layout-s1-c-s2';
        }

    } else {

        $classes[] = 'gridview-layout-full-width';

    }

    $classes[] = 'gridview-header-menu-social-active';

    if ( gridview_get_option('hide_tagline') ) {
        $classes[] = 'gridview-tagline-inactive';
    }

    if ( !(gridview_get_option('disable_primary_menu')) ) {
        $classes[] = 'gridview-primary-menu-active';
    }

    $classes[] = 'gridview-primary-mobile-menu-active';

    if ( !(gridview_get_option('disable_secondary_menu')) ) {
        $classes[] = 'gridview-secondary-menu-active';
    }

    $classes[] = 'gridview-secondary-mobile-menu-active';

    $classes[] = 'gridview-secondary-menu-centered';

    if ( gridview_get_option('no_underline_content_links') ) {
        $classes[] = 'gridview-nouc-links';
    } else {
        $classes[] = 'gridview-uc-links';
    }

    return apply_filters( 'gridview_body_classes', $classes );
}
add_filter( 'body_class', 'gridview_body_classes' );