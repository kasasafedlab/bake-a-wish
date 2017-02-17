<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bake_A_Wish
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	
	<script src="js/site.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="col-md-3 site-branding">
				<div class="logo">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/bakeawish/image/logo-2x.png" alt="Bake A Wish" />
				</div>
				
				<div id="mobileMenu"><span class="close">Close <i class="fa fa-times"></i></span></div>
			</div>

			<nav id="site-navigation" class="col-md-9 main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				
				<button href="/how-to-help/" class="give-button">Give</button>
			</nav>
			
			
		</div>
	</header>

	<div id="content" class="site-content">
