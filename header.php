<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elifbas
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<?php wp_head(); ?>

  <script>
    // inserted directly in header because of tiny amount of JS
    $(document).ready(function() {

      // set body class for starting interactions
      $('body').addClass('isLoaded');

      // invoke sticky kit on elements
      $('.u-sticky').stick_in_parent();

    });
  </script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <nav class="row"><!-- Nav start -->
    <div class="col-xs-5 col-sm-2 u-aligncenter u-leftshadow u-dogear u-pb2">

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo u-sticky"></a>

    </div>
    <div class="col-xs-7 col-sm-3 u-leftshadow u-p-content u-pb2">

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => false ) ); ?>

      <ul class="menu menu--lang">
        <?php pll_the_languages(array('display_names_as' => 'slug')) ?>
      </ul>

    </div>
    <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content u-flex-align-end u-pb2">
      <?php if(strlen(get_field('big_text')) > 0) : ?>
        <h2 class="u-inlineblock h2--curl<?php echo rand(1, 4); ?>"><?php echo get_field('big_text'); ?></h2>
      <?php endif ?>
    </div>
  </nav>

  <div id="content" class="site-content">
