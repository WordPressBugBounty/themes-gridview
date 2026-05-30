<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php $gridview_grid_post_content = get_the_content(); ?>
<div id="post-<?php the_ID(); ?>" class="gridview-grid-post <?php echo esc_attr( gridview_post_grid_cols() ); ?>">
<div class="gridview-grid-post-inside">

    <?php gridview_media_content_grid(); ?>

    <div class="gridview-grid-post-details">
    <?php if ( !(gridview_get_option('hide_post_title_home')) ) { ?><?php the_title( sprintf( '<h3 class="gridview-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?><?php } ?>

    <?php if ( !(gridview_get_option('hide_post_snippet')) ) { ?><?php if ( !empty( $gridview_grid_post_content ) ) { ?><div class="gridview-grid-post-snippet"><div class="gridview-grid-post-snippet-inside"><?php the_excerpt(); ?></div></div><?php } ?><?php } ?>
    </div>

    <?php gridview_grid_postmeta(); ?>

</div>
</div>