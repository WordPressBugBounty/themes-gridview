<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="gridview-main-wrapper gridview-clearfix" id="gridview-main-wrapper" itemscope="itemscope" itemtype="https://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridview-main-wrapper-inside gridview-clearfix">

<?php gridview_before_main_content(); ?>

<div class="gridview-posts-wrapper" id="gridview-posts-wrapper">

<?php if ( !(gridview_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( gridview_get_option('posts_heading') ) : ?>
<div class="gridview-posts-header"><h2 class="gridview-posts-heading"><span class="gridview-posts-heading-inside"><?php echo esc_html( gridview_get_option('posts_heading') ); ?></span></h2></div>
<?php else : ?>
<div class="gridview-posts-header"><h2 class="gridview-posts-heading"><span class="gridview-posts-heading-inside"><?php esc_html_e( 'Recent Posts', 'gridview' ); ?></span></h2></div>
<?php endif; ?>
<?php } ?>
<?php } ?>

<div class="gridview-posts-content">

<?php if (have_posts()) : ?>

    <div class="gridview-posts gridview-posts-grid">
    <div class="<?php echo esc_attr( gridview_post_grid_cols() ); ?>-sizer"></div>
    <div class="<?php echo esc_attr( gridview_post_grid_cols() ); ?>-gutter"></div>
    <?php $gridview_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php dynamic_sidebar( 'gridview-grid-ads-widgets' ); ?>

        <?php get_template_part( 'template-parts/content-grid', get_post_format() ); ?>

    <?php $gridview_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php gridview_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div><!--/#gridview-posts-wrapper -->

<?php gridview_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridview-main-wrapper -->

<?php get_footer(); ?>