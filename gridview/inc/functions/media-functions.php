<?php
/**
* Media functions
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_media_content_grid() {
    global $post; ?>
    <?php if ( !(gridview_get_option('hide_thumbnail_home')) ) { ?>
    <?php if ( has_post_thumbnail($post->ID) ) { ?>
    <div class="gridview-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridview-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('gridview-480w-autoh-image', array('class' => 'gridview-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?></a>
        <?php if ( (!(gridview_get_option('hide_post_categories_home')) && has_category()) ) { gridview_grid_cats(); } ?>
    </div>
    <?php } else { ?>
    <?php if ( !(gridview_get_option('hide_default_thumbnail')) ) { ?>
    <div class="gridview-grid-post-thumbnail gridview-grid-post-thumbnail-default">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridview-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( gridview_grid_no_thumb_url() ); ?>" class="gridview-grid-post-thumbnail-img"/></a>
        <?php if ( (!(gridview_get_option('hide_post_categories_home')) && has_category()) ) { gridview_grid_cats(); } ?>
    </div>
    <?php } ?>
    <?php } ?>
    <?php } ?>
<?php }


function gridview_media_content_single() {
    global $post; ?>

    <?php
    if ( has_post_thumbnail() ) {
        if ( !(gridview_get_option('hide_thumbnail')) ) {
            if ( gridview_get_option('thumbnail_link') == 'no' ) { ?>
                <div class="gridview-post-thumbnail-single">
                <?php
                if ( is_page_template() ) {
                    if ( is_page_template( array( 'template-full-width-post.php', 'template-full-width-page.php' ) ) ) {
                        the_post_thumbnail('gridview-1246w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                    } else {
                        the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                    }
                } else {
                    the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridview-post-thumbnail-single">
                <?php if ( is_page_template() ) { ?>
                    <?php if ( is_page_template( array( 'template-full-width-post.php', 'template-full-width-page.php' ) ) ) { ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridview-post-thumbnail-single-link"><?php the_post_thumbnail('gridview-1246w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                    <?php } else { ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridview-post-thumbnail-single-link"><?php the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                    <?php } ?>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridview-post-thumbnail-single-link"><?php the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
    ?>

<?php }


function gridview_post_format_media_single() {
    global $post;
    gridview_media_content_single();
}


function gridview_post_format_media_single_location() {
    global $post;
    if( gridview_get_option('featured_media_under_post_title') ) {
        add_action('gridview_after_single_post_title', 'gridview_post_format_media_single', 10 );
    } else {
        add_action('gridview_before_single_post_title', 'gridview_post_format_media_single', 10 );
    }
}
add_action('template_redirect', 'gridview_post_format_media_single_location', 100 );


function gridview_media_content_page() {
    global $post; ?>
    <?php
    if ( has_post_thumbnail() ) {
        if ( !(gridview_get_option('hide_page_thumbnail')) ) {
            if ( gridview_get_option('thumbnail_link_page') == 'no' ) { ?>
                <div class="gridview-post-thumbnail-single">
                <?php
                if ( is_page_template() ) {
                    if ( is_page_template( array( 'template-full-width-post.php', 'template-full-width-page.php' ) ) ) {
                        the_post_thumbnail('gridview-1246w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                    } else {
                        the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                    }
                } else {
                    the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridview-post-thumbnail-single">
                <?php if ( is_page_template() ) { ?>
                    <?php if ( is_page_template( array( 'template-full-width-post.php', 'template-full-width-page.php' ) ) ) { ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridview-post-thumbnail-single-link"><?php the_post_thumbnail('gridview-1246w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                    <?php } else { ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridview-post-thumbnail-single-link"><?php the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                    <?php } ?>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridview' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridview-post-thumbnail-single-link"><?php the_post_thumbnail('gridview-675w-autoh-image', array('class' => 'gridview-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
    ?>
<?php }

function gridview_media_page_location() {
    global $post;
    if( gridview_get_option('featured_media_under_page_title') ) {
        add_action('gridview_after_single_page_title', 'gridview_media_content_page', 10 );
    } else {
        add_action('gridview_before_single_page_title', 'gridview_media_content_page', 10 );
    }
}
add_action('template_redirect', 'gridview_media_page_location', 110 );