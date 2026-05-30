<?php
/**
* Author bio box
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="gridview-author-bio">
            <div class="gridview-author-bio-inside">
            <div class="gridview-author-bio-top">
            <span class="gridview-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </span>
            <div class="gridview-author-bio-text">
                <div class="gridview-author-bio-name">'.esc_html__( 'Author: ', 'gridview' ).'<span>'. get_the_author_link() .'</span></div><div class="gridview-author-bio-text-description">'. get_the_author_meta('description',get_query_var('author') ) .'</div>
            </div>
            </div>
            </div>
            </div>
        ';
    }
    return apply_filters( 'gridview_add_author_bio_box', $content );
}