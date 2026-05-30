<?php
/**
* The file for displaying the search form
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="gridview-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="gridview-sr-only"><?php echo esc_html_x( 'Search for:', 'label', 'gridview' ); ?></span>
    <input type="search" class="gridview-search-field" placeholder="<?php echo esc_attr( gridview_search_box_placeholder_text() ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="gridview-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'gridview' ); ?>" />
</form>