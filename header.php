<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mywptemplate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<header>
	<nav>
		<ul class="navbuttons">
			<li><a href="#top">
					<i class="fa fa-stop"></i>
					<p class="nav-item">Top</p>
				</a></li>
			<li><a href="#main-portfolio">
					<i class="fa fa-stop"></i>
					<p class="nav-item">Portfolio</p>
				</a></li>
			<li><a href="#aboutme">
					<i class="fa fa-stop"></i>
					<p class="nav-item">About Me</p>
				</a></li>
			<li><a href="#contact">
					<i class="fa fa-stop"></i>
					<p class="nav-item">Contact</p>
				</a></li>
		</ul>
	</nav>
</header>