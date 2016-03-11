<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _pshktheme
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="top-bar">
		<div class="top-bar-left">
			<img style="height: 40px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/pshk-logo-transparent-800w.png">
			<!-- <strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong>
			<?php bloginfo( 'description' ); ?> -->
		</div>
		<div class="top-bar-right">
			<?php wp_nav_menu( array( 
				'menu' => 'Top Nav',
				'items_wrap' => '<ul class="vertical medium-horizontal menu">%3$s</ul>'
			) ); ?>
		</div>
	</div>

	<div class="row">
		<div id="content" class="large-12 columns">
