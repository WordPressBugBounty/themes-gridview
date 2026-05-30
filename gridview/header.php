<?php
/**
* The header for GridView theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="gridview-site-body" itemscope="itemscope" itemtype="https://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#gridview-content-wrapper"><?php esc_html_e( 'Skip to content', 'gridview' ); ?></a>

<?php gridview_before_header(); ?>

<?php gridview_header_image(); ?>

<div class="gridview-site-header gridview-container" id="gridview-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader" role="banner">
<div class="gridview-head-content gridview-clearfix" id="gridview-head-content">

<?php if ( !(gridview_get_option('hide_header_content')) ) { ?>
<div class="gridview-outer-wrapper">
<div class="gridview-header-inside gridview-clearfix">
<div class="gridview-header-inside-content gridview-clearfix">
<div class="gridview-header-inside-container">

<div class="gridview-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridview-logo-img-link">
        <img src="<?php echo esc_url( gridview_custom_logo() ); ?>" alt="" class="gridview-logo-img"/>
    </a>
    <div class="gridview-custom-logo-info"><?php gridview_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php gridview_site_title(); ?>
    </div>
<?php endif; ?>
</div>

<?php if ( !(gridview_get_option('disable_primary_menu')) ) { ?>
<div class="gridview-header-menu">
<div class="gridview-container gridview-primary-menu-container gridview-clearfix">
<div class="gridview-primary-menu-container-inside gridview-clearfix">
<nav class="gridview-nav-primary" id="gridview-primary-navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gridview' ); ?>">
<button class="gridview-primary-responsive-menu-icon" aria-controls="gridview-menu-primary-navigation" aria-expanded="false"><?php echo esc_html( gridview_primary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'gridview-menu-primary-navigation', 'menu_class' => 'gridview-primary-nav-menu gridview-menu-primary gridview-clearfix', 'fallback_cb' => 'gridview_fallback_menu', 'container' => '', ) ); ?>
</nav>
</div>
</div>
</div>
<?php } ?>

<?php if ( !(gridview_get_option('hide_header_social_buttons')) ) { ?>
<div class="gridview-header-social">
<?php gridview_sticky_social_buttons(); ?>
</div>
<?php } ?>

</div>
</div>
</div>
</div>
<?php } else { ?>
<div class="gridview-no-header-content">
  <?php gridview_site_title(); ?>
</div>
<?php } ?>

</div><!--/#gridview-head-content -->
</div><!--/#gridview-header -->

<div id="gridview-search-overlay-wrap" class="gridview-search-overlay">
  <div class="gridview-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
  <button class="gridview-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'gridview' ); ?>" title="<?php esc_attr_e('Close Search','gridview'); ?>">&#xD7;</button>
</div>

<?php gridview_after_header(); ?>

<div id="gridview-header-end"></div>

<div class="gridview-outer-wrapper">
<?php gridview_top_wide_widgets(); ?>
</div>

<div class="gridview-outer-wrapper" id="gridview-wrapper-outside">

<div class="gridview-container gridview-clearfix" id="gridview-wrapper">
<div class="gridview-content-wrapper gridview-clearfix" id="gridview-content-wrapper">