<?php
/**
* More Custom Functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function gridview_pingback_header() {
    if ( is_singular() && pings_open() ) {
            echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'gridview_pingback_header' );

function gridview_read_more_text() {
   $readmoretext = esc_html__( 'read more', 'gridview' );
    if ( gridview_get_option('read_more_text') ) {
            $readmoretext = gridview_get_option('read_more_text');
    }
   return apply_filters( 'gridview_read_more_text', $readmoretext );
}

// Change excerpt length
function gridview_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 20;
    if ( gridview_get_option('read_more_length') ) {
        $read_more_length = gridview_get_option('read_more_length');
    }
    return apply_filters( 'gridview_excerpt_length', $read_more_length );
}
add_filter('excerpt_length', 'gridview_excerpt_length');

// Change excerpt more word
function gridview_excerpt_more($more) {
    if ( is_admin() ) {
     return $more;
    }
    global $post;
    if ( gridview_get_option('hide_read_more_button') ) {
        return '...';
    } else {
        return '... <span class="gridview-grid-post-read-more"><a href="'.esc_url( get_permalink() ).'">'.esc_html( gridview_read_more_text() ).'<span class="gridview-sr-only"> '.wp_kses_post( get_the_title() ).'</span></a></span>';
    }
}
add_filter('excerpt_more', 'gridview_excerpt_more');

function gridview_search_box_placeholder_text() {
    $placeholder_text = esc_html__( 'Search ...', 'gridview' );
    if ( gridview_get_option('search_box_placeholder_text') ) {
        $placeholder_text = gridview_get_option('search_box_placeholder_text');
    }
    return apply_filters( 'gridview_search_box_placeholder_text', $placeholder_text );
}

if ( !(gridview_get_option('enable_widgets_block_editor')) ) {
    // Disables the block editor from managing widgets in the Gutenberg plugin.
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

    // Disables the block editor from managing widgets.
    add_filter( 'use_widgets_block_editor', '__return_false' );
}