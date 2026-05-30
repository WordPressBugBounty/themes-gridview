<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='gridview-main-wrapper gridview-clearfix' id='gridview-main-wrapper' itemscope='itemscope' itemtype='https://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="gridview-main-wrapper-inside gridview-clearfix">

<div class='gridview-posts-wrapper' id='gridview-posts-wrapper'>

<div class='gridview-posts gridview-box'>
<div class="gridview-box-inside">

<div class="gridview-page-header-outside">
<header class="gridview-page-header">
<div class="gridview-page-header-inside">
    <?php if ( gridview_get_option('error_404_heading') ) : ?>
    <h1 class="page-title"><?php echo esc_html( gridview_get_option('error_404_heading') ); ?></h1>
    <?php else : ?>
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'gridview' ); ?></h1>
    <?php endif; ?>
</div>
</header><!-- .gridview-page-header -->
</div>

<div class='gridview-posts-content'>

    <?php if ( gridview_get_option('error_404_message') ) : ?>
    <p><?php echo wp_kses_post( force_balance_tags( gridview_get_option('error_404_message') ) ); ?></p>
    <?php else : ?>
    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gridview' ); ?></p>
    <?php endif; ?>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

    <div>
        <h2><?php esc_html_e( 'Most Used Categories', 'gridview' ); ?></h2>
        <ul>
        <?php
                wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                ) );
        ?>
        </ul>
    </div>

    <?php
        /* translators: %1$s: smiley */
        $gridview_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'gridview' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$gridview_archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>

</div>
</div>

</div><!--/#gridview-posts-wrapper -->

</div>
</div>
</div><!-- /#gridview-main-wrapper -->

<?php get_footer(); ?>