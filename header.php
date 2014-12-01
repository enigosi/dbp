<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>

	<body>

	<header class="header">
		<div class="g_contain">
			<h1>
				<a href="<?php echo home_url(); ?>" class="logo-link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Dobre Studio Projektowe" class="logo" />
				</a>
			</h1>

			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false )); ?>
			</nav>
		</div>
	</header>
	<div id="ajax">