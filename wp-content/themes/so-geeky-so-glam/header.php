<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$classes = (is_single()) ? types_render_field( "post-type", array("output"=>"raw")).'-post' : '';

?>
<!doctype html>
<html class="no-js " <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	</head>
	<body <?php body_class($classes); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="hero" role="banner">
<!--		<img src="--><?//= get_template_directory_uri().'/assets/images/global/left-hero-img.jpg' ?><!--" alt="left hero image" class="header-img" id="left-hero-img">-->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo" src="<?= get_template_directory_uri().'/assets/images/global/logo.png' ?>" alt="So Geeky So Glam Logo" width="439" height="167"/></a>
<!--		<img src="--><?//= get_template_directory_uri().'/assets/images/global/right-hero-img.jpg'?><!--" alt="right hero image" class="header-img" id="right-hero-img">-->
	</header>

	<div id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<img id="menu-trigger" src="<?= get_template_directory_uri().'/assets/images/global/menu-hamburger.png' ?>" alt="Menu Hamburger" />
			<ul class="hide-for-small-only hide-for-medium-only desktop">
				<li><a href="">About</a></li>
				<li><a href="">House</a></li>
				<li><a href="">Beauty</a></li>
				<li><a href="">City</a></li>
				<li><a href="">lorem Ipsum</a></li>
				<li class="search-trigger"><a href=""><i id="search-trigger" class="fa fa-search" aria-hidden="true"></i></a></li>
			</ul>
			<div id="social-media-top">
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-rss" aria-hidden="true"></i> </a>
<!--				<a href=""><img src="--><?//= get_template_directory_uri().'/assets/images/global/fb-icon.jpg' ?><!--" class="social-icon" /></a>-->
<!--				<a href=""><img src="--><?//= get_template_directory_uri().'/assets/images/global/tw-icon.jpg' ?><!--" class="social-icon" /></a>-->
<!--				<a href=""><img src="--><?//= get_template_directory_uri().'/assets/images/global/rss-icon.jpg' ?><!--" class="social-icon" /></a>-->
			</div>
		</nav>
		<div id="mobile-navigation" style="height: 0px" class="">
			<ul>
				<li><a href="">About</a></li>
				<li><a href="">House</a></li>
				<li><a href="">Beauty</a></li>
				<li><a href="">City</a></li>
				<li><a href="">lorem Ipsum</a></li>
			</ul>
		</div>
	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
