<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php if(is_page('solar-calculator')){ ?>ng-app="Calculator"<?php } ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	</head>
	<body>
	<header>
		<div class="wrapper">
			<h1></h1>
			<nav></nav>
		</div>
	</header>