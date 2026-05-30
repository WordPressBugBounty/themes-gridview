<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content-single', get_post_format() );

    gridview_post_navigation();

    if ( !(gridview_get_option('hide_comment_form')) ) {

        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || get_comments_number() ) :
                comments_template();
        endif;

    }

endwhile; ?>

<div class="clear"></div>
</div><!--/#gridview-posts-wrapper -->

<?php gridview_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridview-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>