<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php gridview_before_single_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gridview-post-singular gridview-box'); ?>>
<div class="gridview-box-inside">

    <?php gridview_before_single_post_title(); ?>

    <?php if ( !(gridview_get_option('hide_post_title')) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside">
        <?php if ( (!(gridview_get_option('hide_post_categories')) && has_category()) ) { ?><?php gridview_single_cats(); ?><?php } ?>

        <?php if ( gridview_get_option('remove_post_title_link') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php gridview_single_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>

    <?php gridview_after_single_post_title(); ?>

    <div class="entry-content gridview-clearfix">
            <?php
            gridview_top_single_post_content();

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

            gridview_bottom_single_post_content();
            ?>
    </div><!-- .entry-content -->

    <?php gridview_after_single_post_content(); ?>

    <?php if ( !(gridview_get_option('hide_author_bio_box')) ) { echo wp_kses_post( force_balance_tags( gridview_add_author_bio_box() ) ); } ?>

    <?php if ( (!(gridview_get_option('hide_post_tags')) && has_tag()) ) { ?>
    <footer class="entry-footer gridview-entry-footer">
    <div class="gridview-entry-footer-inside">
        <?php gridview_post_tags(); ?>
    </div>
    </footer><!-- .entry-footer -->
    <?php } ?>

</div>
</article>

<?php gridview_after_single_post(); ?>