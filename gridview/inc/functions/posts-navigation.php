<?php
/**
* Posts navigation functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridview_wp_pagenavi' ) ) :
function gridview_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation gridview-clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;


if ( ! function_exists( 'gridview_posts_navigation' ) ) :
function gridview_posts_navigation() {
    if ( !(gridview_get_option('hide_posts_navigation')) ) {
        if ( function_exists( 'wp_pagenavi' ) ) {
            gridview_wp_pagenavi();
        } else {
            if ( gridview_get_option('posts_navigation_type') === 'normalnavi' ) {
                the_posts_navigation(array('prev_text' => esc_html__( 'Older posts', 'gridview' ), 'next_text' => esc_html__( 'Newer posts', 'gridview' )));
            } else {
                the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Newer posts', 'gridview' ), 'next_text' => esc_html__( 'Older posts &rarr;', 'gridview' )));
            }
        }
    }
}
endif;


if ( ! function_exists( 'gridview_post_navigation' ) ) :
function gridview_post_navigation() {
    global $post;
    if ( !(gridview_get_option('hide_post_navigation')) ) {
        the_post_navigation(array('prev_text' => esc_html__( '%title &rarr;', 'gridview' ), 'next_text' => esc_html__( '&larr; %title', 'gridview' )));
    }
}
endif;