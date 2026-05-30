<?php
/**
* Post meta functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridview_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function gridview_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gridview' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="gridview-tags-links"><i class="fas fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'gridview' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridview_grid_cats' ) ) :
function gridview_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'gridview' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridview-grid-post-categories">' . __( '<span class="gridview-sr-only">Posted in </span>%1$s', 'gridview' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridview_grid_postmeta' ) ) :
function gridview_grid_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridview_get_option('hide_post_author_home')) || !(gridview_get_option('hide_posted_date_home')) || !(gridview_get_option('hide_comments_link_home')) ) { ?>
    <div class="gridview-grid-post-footer">
    <div class="gridview-grid-post-footer-inside">
    <?php if ( !(gridview_get_option('hide_post_author_home')) ) { ?><span class="gridview-grid-post-author gridview-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(gridview_get_option('hide_posted_date_home')) ) { ?><span class="gridview-grid-post-date gridview-grid-post-meta"><?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridview_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridview-grid-post-comment gridview-grid-post-meta"><?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0 Comment<span class="gridview-sr-only"> on %s</span>', 'gridview' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridview_single_cats' ) ) :
function gridview_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'gridview' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridview-entry-meta-single gridview-entry-meta-single-top"><span class="gridview-entry-meta-single-cats"><i class="far fa-folder-open" aria-hidden="true"></i>&nbsp;' . __( '<span class="gridview-sr-only">Posted in </span>%1$s', 'gridview' ) . '</span></div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridview_single_postmeta' ) ) :
function gridview_single_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridview_get_option('hide_post_author')) || !(gridview_get_option('hide_posted_date')) || !(gridview_get_option('hide_comments_link')) || !(gridview_get_option('hide_post_likes')) || !(gridview_get_option('hide_post_views')) || !(gridview_get_option('hide_post_edit')) ) { ?>
    <div class="gridview-entry-meta-single">
    <?php if ( !(gridview_get_option('hide_post_author')) ) { ?><span class="gridview-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="https://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridview_get_option('hide_posted_date')) ) { ?><span class="gridview-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridview_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridview-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridview-sr-only"> on %s</span>', 'gridview' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridview_get_option('hide_post_edit')) ) { ?><?php edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit<span class="gridview-sr-only"> %s</span>', 'gridview' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), '<span class="edit-link">&nbsp;&nbsp;<i class="far fa-edit" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridview_page_postmeta' ) ) :
function gridview_page_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridview_get_option('hide_page_author')) || !(gridview_get_option('hide_page_date')) || !(gridview_get_option('hide_page_comments')) || !(gridview_get_option('hide_page_edit')) ) { ?>
    <?php if ( !((is_front_page()) && (gridview_get_option('hide_static_page_meta'))) ) { ?>
    <div class="gridview-entry-meta-single">
    <?php if ( !(gridview_get_option('hide_page_author')) ) { ?><span class="gridview-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="https://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridview_get_option('hide_page_date')) ) { ?><span class="gridview-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridview_get_option('hide_page_comments')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridview-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridview-sr-only"> on %s</span>', 'gridview' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
    <?php } ?>
<?php }
endif;