<?php
/**
* Custom Hooks
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_before_header() {
    do_action('gridview_before_header');
}

function gridview_after_header() {
    do_action('gridview_after_header');
}

function gridview_before_main_content() {
    do_action('gridview_before_main_content');
}
add_action('gridview_before_main_content', 'gridview_top_widgets', 20 );

function gridview_after_main_content() {
    do_action('gridview_after_main_content');
}
add_action('gridview_after_main_content', 'gridview_bottom_widgets', 10 );

function gridview_sidebar_one() {
    do_action('gridview_sidebar_one');
}
add_action('gridview_sidebar_one', 'gridview_sidebar_one_widgets', 10 );

function gridview_sidebar_two() {
    do_action('gridview_sidebar_two');
}
add_action('gridview_sidebar_two', 'gridview_sidebar_two_widgets', 10 );

function gridview_before_single_post() {
    do_action('gridview_before_single_post');
}

function gridview_before_single_post_title() {
    do_action('gridview_before_single_post_title');
}

function gridview_after_single_post_title() {
    do_action('gridview_after_single_post_title');
}

function gridview_top_single_post_content() {
    do_action('gridview_top_single_post_content');
}

function gridview_bottom_single_post_content() {
    do_action('gridview_bottom_single_post_content');
}

function gridview_after_single_post_content() {
    do_action('gridview_after_single_post_content');
}

function gridview_after_single_post() {
    do_action('gridview_after_single_post');
}

function gridview_before_single_page() {
    do_action('gridview_before_single_page');
}

function gridview_before_single_page_title() {
    do_action('gridview_before_single_page_title');
}

function gridview_after_single_page_title() {
    do_action('gridview_after_single_page_title');
}

function gridview_after_single_page_content() {
    do_action('gridview_after_single_page_content');
}

function gridview_after_single_page() {
    do_action('gridview_after_single_page');
}

function gridview_before_comments() {
    do_action('gridview_before_comments');
}

function gridview_after_comments() {
    do_action('gridview_after_comments');
}

function gridview_before_footer() {
    do_action('gridview_before_footer');
}
add_action('gridview_before_footer', 'gridview_secondary_menu_area', 50 );

function gridview_after_footer() {
    do_action('gridview_after_footer');
}