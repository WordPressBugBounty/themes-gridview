<?php
/**
* Layout Functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_post_grid_cols() {
   $post_column = 'gridview-4-col';
   return apply_filters( 'gridview_post_grid_cols', $post_column );
}

function gridview_grid_no_thumb_url() {
    $no_thumb_url = get_template_directory_uri() . '/assets/images/no-image-480-360.jpg';
    return apply_filters( 'gridview_grid_no_thumb_url', $no_thumb_url );
}