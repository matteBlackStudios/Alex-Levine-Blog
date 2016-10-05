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
		<img src="<?= get_template_directory_uri().'/assets/images/global/left-hero-img.png' ?>" alt="left hero image" class="header-img" id="left-hero-img">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo" src="<?= get_template_directory_uri().'/assets/images/global/logo.png' ?>" alt="So Geeky So Glam Logo" /></a>
		<img src="<?= get_template_directory_uri().'/assets/images/global/right-hero-img.png'?>" alt="right hero image" class="header-img" id="right-hero-img">
	</header>

	<div id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<img id="menu-trigger" src="<?= get_template_directory_uri().'/assets/images/global/menu-hamburger.png' ?>" alt="Menu Hamburger" />
			<?php foundationpress_top_bar_r(); ?>
			<div id="social-media-top">
				<a href="<?= get_option('facebook-url') ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="<?= get_option('twitter-url') ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="<?= ( empty(get_option('rss-url'))) ? bloginfo('rss_url') : get_option('rss-url') ?>" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i> </a>
		</nav>
		<div id="mobile-navigation" style="opacity:0;position:absolute" class="">
			<?php foundationpress_mobile_nav() ?>
		</div>
	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
