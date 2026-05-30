<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php gridview_before_single_page(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gridview-post-singular gridview-box'); ?>>
<div class="gridview-box-inside">

    <?php gridview_before_single_page_title(); ?>

    <?php if ( !(gridview_get_option('hide_page_title')) ) { ?>
    <?php if ( !((is_front_page()) && (gridview_get_option('hide_static_page_title'))) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside">

        <?php if ( gridview_get_option('remove_page_title_link') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php gridview_page_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>
    <?php } ?>

    <?php gridview_after_single_page_title(); ?>

    <div class="entry-content gridview-clearfix">
            <?php
            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="gridview-sr-only"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'gridview' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ) );

            wp_link_pages( array(
             'before'      => '<div class="gridview-clearfix"></div><div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'gridview' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <?php gridview_after_single_page_content(); ?>

    <?php if ( !(gridview_get_option('hide_page_edit')) ) {
            edit_post_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Edit <span class="gridview-sr-only">%s</span>', 'gridview' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                ),
                '<footer class="entry-footer gridview-entry-footer"><div class="gridview-entry-footer-inside"><span class="edit-link">',
                '</span></div></footer>'
            );
        } ?>

</div>
</article>

<?php gridview_after_single_page(); ?>