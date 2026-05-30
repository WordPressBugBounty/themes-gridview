<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#gridview-content-wrapper -->
</div><!--/#gridview-wrapper -->

<?php gridview_before_footer(); ?>

<?php if ( !(gridview_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'gridview-footer-1' ) || is_active_sidebar( 'gridview-footer-2' ) || is_active_sidebar( 'gridview-footer-3' ) || is_active_sidebar( 'gridview-footer-4' ) || is_active_sidebar( 'gridview-footer-5' ) || is_active_sidebar( 'gridview-top-footer' ) || is_active_sidebar( 'gridview-bottom-footer' ) ) : ?>
<div class="gridview-outer-wrapper">
<div class='gridview-clearfix' id='gridview-footer-blocks' itemscope='itemscope' itemtype='https://schema.org/WPFooter' role='contentinfo'>
<div class='gridview-container gridview-clearfix'>

<?php if ( is_active_sidebar( 'gridview-top-footer' ) ) : ?>
<div class='gridview-clearfix'>
<div class='gridview-top-footer-block'>
<?php dynamic_sidebar( 'gridview-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridview-footer-1' ) || is_active_sidebar( 'gridview-footer-2' ) || is_active_sidebar( 'gridview-footer-3' ) || is_active_sidebar( 'gridview-footer-4' ) || is_active_sidebar( 'gridview-footer-5' ) ) : ?>
<div class='gridview-footer-block-cols gridview-clearfix'>

<div class="gridview-footer-block-col gridview-footer-5-col" id="gridview-footer-block-1">
<?php dynamic_sidebar( 'gridview-footer-1' ); ?>
</div>

<div class="gridview-footer-block-col gridview-footer-5-col" id="gridview-footer-block-2">
<?php dynamic_sidebar( 'gridview-footer-2' ); ?>
</div>

<div class="gridview-footer-block-col gridview-footer-5-col" id="gridview-footer-block-3">
<?php dynamic_sidebar( 'gridview-footer-3' ); ?>
</div>

<div class="gridview-footer-block-col gridview-footer-5-col" id="gridview-footer-block-4">
<?php dynamic_sidebar( 'gridview-footer-4' ); ?>
</div>

<div class="gridview-footer-block-col gridview-footer-5-col" id="gridview-footer-block-5">
<?php dynamic_sidebar( 'gridview-footer-5' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridview-bottom-footer' ) ) : ?>
<div class='gridview-clearfix'>
<div class='gridview-bottom-footer-block'>
<?php dynamic_sidebar( 'gridview-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div><!--/#gridview-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>

<div class="gridview-outer-wrapper">
<div class='gridview-clearfix' id='gridview-copyright-area'>
<div class='gridview-copyright-area-inside gridview-container'>

<?php if ( gridview_get_option('footer_text') ) : ?>
  <p class='gridview-copyright'><?php echo wp_kses_post( force_balance_tags( gridview_get_option('footer_text') ) ); ?></p>
<?php else : ?>
  <p class='gridview-copyright'><?php /* translators: %s: Year and site name. */ printf( wp_kses_post( __( 'Copyright &copy; %s', 'gridview' ) ), esc_html( wp_date( 'Y' ) ) . ' ' . esc_html( get_bloginfo( 'name' ) ) ); ?></p>
<?php endif; ?>
<p class='gridview-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'gridview' ), 'ThemesDNA.com' ); ?></a></p>

</div>
</div><!--/#gridview-copyright-area -->
</div>

<?php gridview_after_footer(); ?>

<button class="gridview-scroll-top" title="<?php esc_attr_e('Scroll to Top','gridview'); ?>"><i class="fas fa-arrow-up" aria-hidden="true"></i><span class="gridview-sr-only"><?php esc_html_e('Scroll to Top', 'gridview'); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>