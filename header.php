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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet">
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 0.5" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<header id="masthead" class="site-header" role="banner">

		<div id="headerBrush">

			<img id="" src="<?php bloginfo('template_directory') ?>/img/brush-header.png">
		</div>
		
		<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span id='siteLogo'></span></a></h1>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'elifbas' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
