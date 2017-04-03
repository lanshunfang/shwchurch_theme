<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since 北京守望教会 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'shwchurch' ), max( $paged, $page ) );

  ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ie-6-8.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
  ?>

</head>

<body onunload=""  <?php body_class(); ?>>
  <div class="body-bg"></div>
  <div id="loading_icon"><span class="icon">正在载入...</span></div>
  <div id="page" class="hfeed">
    <header id="branding_sw" role="banner" class="opacity-header">
      <div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.png"></a></div>
      <div id="top_quicklink">
        <a id="nav_group" href="javascript:void(0)" class="nav item_11">寻找小组</a>
<!--        | <a id="nav_choir" href="/%E8%AF%97%E7%8F%AD%E8%AF%97%E6%AD%8Cmp3/" class="nav item_12">诗班诗歌</a> -->
      </div>
      <div id="weibo">
      </div>
      <div id="rss">
      <a href="<?php bloginfo('atom_url'); ?>"><span id="header_rss"></span></a>
      </div>
      <div id="top_search" class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
        <?php get_search_form(); ?>
      </div>
      </header><!-- #branding -->
      <img id="header_banner" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/header_banner.jpg" />
      <nav id="access_sw" role="navigation"  class="opacity-header border-bottom-radius">
        <div class="padding-wrapper">
          <?php $k = 1;?>
          <a id="nav_home" href="/" class="nav-home item_<?php echo $k++;?>">首页</a>
          <a id="nav_ev" href="javascript:void(0)"  class="nav item_<?php echo $k++;?>">了解信仰</a>
     	  <a id="nav_sermon" href="/#/hashEventClick/selector/ID_main_sermon"  class="nav link item_<?php echo $k++;?>">讲道</a>
     	  <a id="nav_ej" href="/#/hashEventClick/selector/ID_main_ejournal"  class="nav link item_<?php echo $k++;?>">网络期刊</a>
          <a id="nav_all_cat" href="javascript:void(0)"  class="nav item_<?php echo $k++;?>">所有分类</a>

        </div>
      </nav><!-- #access -->

      <span id="hover_layer_up_arrow" class="sw-icon-up-arrow sw-icon opacity-default" style="position:absolute"></span>
      <span id="hover_layer_left_arrow" class="sw-icon-left-arrow sw-icon opacity-default" style="position:absolute"></span>
      <div id="main">
