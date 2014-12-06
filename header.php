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

	<header id="header" class="header">
		<div class="g_contain">
			<h1>
				<a href="<?php echo home_url(); ?>" class="logo-link">

					<svg version="1.1" id="logo" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 309.3 138.7" enable-background="new 0 0 309.3 138.7" xml:space="preserve">
					<g class="logo-text">
						<path fill="#2300FF" d="M156,34.1V18h5c3.8,0,7.5,2.4,7.5,8s-3.7,8-7.5,8H156z M159,31.4h1.1c1.4,0,2.6-0.3,3.6-1
							c1.1-0.7,1.8-2.2,1.8-4.3c0-2-0.7-3.5-1.8-4.3c-1.1-0.7-2.2-1-3.6-1H159V31.4z"/>
						<path fill="#2300FF" d="M178.6,17.9c2.8,0,5.1,1.1,6.5,3.6c0.7,1.3,1.1,2.8,1.1,4.6c0,3.6-1.6,6.2-3.8,7.4
							c-1.1,0.6-2.4,0.9-3.8,0.9c-2.8,0-5.1-1.1-6.5-3.6c-0.7-1.3-1.1-2.8-1.1-4.6c0-3.6,1.6-6.2,3.8-7.4C176,18.2,177.2,17.9,178.6,17.9
							z M178.6,20.6c-1.3,0-2.4,0.5-3.3,1.4c-0.9,0.9-1.3,2.3-1.3,4.1c0,1.8,0.4,3.2,1.3,4.1c0.9,0.9,2,1.4,3.3,1.4s2.4-0.5,3.2-1.4
							c0.9-0.9,1.3-2.3,1.3-4.1c0-1.8-0.4-3.2-1.3-4.1C181,21.1,180,20.6,178.6,20.6z"/>
						<path fill="#2300FF" d="M188.9,18h5.9c2.8,0,4.6,1.5,4.6,4.3c0,1.3-0.6,2.4-1.6,3c1.6,0.7,2.4,2,2.4,3.9c0,3.1-2,4.9-5.3,4.9h-6V18
							z M191.9,20.8v3.5h2.7c1.3,0,1.9-0.5,1.9-1.7s-0.6-1.7-2-1.7H191.9z M191.9,27.1v4.3h2.7c1.7,0,2.6-0.7,2.6-2.2s-0.9-2.2-2.6-2.2
							H191.9z"/>
						<path fill="#2300FF" d="M210.6,26.9l4.5,7.2h-3.3l-4.3-6.9h-1.6v6.9h-3V18h5.9c3.1,0,4.9,1.8,4.9,4.6
							C213.6,24.8,212.5,26.4,210.6,26.9z M208.7,24.4c1.3,0,1.9-0.6,1.9-1.8s-0.6-1.8-1.9-1.8h-2.9v3.6H208.7z"/>
						<path fill="#2300FF" d="M217.2,18h10v2.8h-7v3.4h5.6v2.8h-5.6v4.4h7.2v2.8h-10.2V18z"/>
						<path fill="#2300FF" d="M156,46h5.9c2.8,0,4.6,1.5,4.6,4.3c0,1.3-0.6,2.4-1.6,3c1.6,0.7,2.4,2,2.4,3.9c0,3.1-2,4.9-5.3,4.9h-6V46z
							 M159,48.8v3.5h2.7c1.3,0,1.9-0.5,1.9-1.7s-0.6-1.7-2-1.7H159z M159,55.1v4.3h2.7c1.7,0,2.6-0.7,2.6-2.2s-0.9-2.2-2.6-2.2H159z"/>
						<path fill="#2300FF" d="M174.6,46v16.1h-3V46H174.6z"/>
						<path fill="#2300FF" d="M191.7,46v10c0,4.2-2.3,6.3-6,6.3c-3.7,0-6-2.1-6-6.3V46h3v10c0,2.3,1,3.5,3,3.5c2,0,3-1.2,3-3.5V46H191.7z
							"/>
						<path fill="#2300FF" d="M203.9,54.9l4.5,7.2H205l-4.3-6.9h-1.6v6.9h-3V46h5.9c3.1,0,4.9,1.8,4.9,4.6
							C206.9,52.8,205.8,54.4,203.9,54.9z M202,52.4c1.3,0,1.9-0.6,1.9-1.8s-0.6-1.8-1.9-1.8h-2.9v3.6H202z"/>
						<path fill="#2300FF" d="M218.5,45.9c2.8,0,5.1,1.1,6.5,3.6c0.7,1.3,1.1,2.8,1.1,4.6c0,3.6-1.6,6.2-3.8,7.4
							c-1.1,0.6-2.4,0.9-3.8,0.9c-2.8,0-5.1-1.1-6.5-3.6c-0.7-1.3-1.1-2.8-1.1-4.6c0-3.6,1.6-6.2,3.8-7.4
							C215.9,46.2,217.1,45.9,218.5,45.9z M218.5,48.6c-1.3,0-2.4,0.5-3.3,1.4c-0.9,0.9-1.3,2.3-1.3,4.1c0,1.8,0.4,3.2,1.3,4.1
							c0.9,0.9,2,1.4,3.3,1.4s2.4-0.5,3.2-1.4c0.9-0.9,1.3-2.3,1.3-4.1c0-1.8-0.4-3.2-1.3-4.1C220.9,49.1,219.8,48.6,218.5,48.6z"/>
						<path fill="#2300FF" d="M159,83.8v6.3h-3V74h6.1c3.3,0,5,2,5,4.9s-1.7,4.9-5,4.9H159z M162,81.1c1.4,0,2.1-0.7,2.1-2.1
							c0-1.4-0.7-2.1-2.1-2.1h-3v4.3H162z"/>
						<path fill="#2300FF" d="M177.6,82.9l4.5,7.2h-3.3l-4.3-6.9h-1.6v6.9h-3V74h5.9c3.1,0,4.9,1.8,4.9,4.6
							C180.6,80.8,179.6,82.4,177.6,82.9z M175.8,80.4c1.3,0,1.9-0.6,1.9-1.8s-0.6-1.8-1.9-1.8h-2.9v3.6H175.8z"/>
						<path fill="#2300FF" d="M190.6,73.9c2.8,0,5.1,1.1,6.5,3.6c0.7,1.3,1.1,2.8,1.1,4.6c0,3.6-1.6,6.2-3.8,7.4
							c-1.1,0.6-2.4,0.9-3.8,0.9c-2.8,0-5.1-1.1-6.5-3.6c-0.7-1.3-1.1-2.8-1.1-4.6c0-3.6,1.6-6.2,3.8-7.4C188,74.2,189.2,73.9,190.6,73.9
							z M190.6,76.6c-1.3,0-2.4,0.5-3.3,1.4c-0.9,0.9-1.3,2.3-1.3,4.1c0,1.8,0.4,3.2,1.3,4.1c0.9,0.9,2,1.4,3.3,1.4s2.4-0.5,3.2-1.4
							c0.9-0.9,1.3-2.3,1.3-4.1c0-1.8-0.4-3.2-1.3-4.1C193,77.1,192,76.6,190.6,76.6z"/>
						<path fill="#2300FF" d="M202.3,85.5c0.3,1.4,0.9,2,2,2c1.4,0,2.1-0.7,2.1-2.8V74h3v10.4c0,4.2-1.8,5.8-5.1,5.8
							c-2.8,0-4.6-1.6-5-4.2L202.3,85.5z"/>
						<path fill="#2300FF" d="M212.6,74h10v2.8h-7v3.4h5.6v2.8h-5.6v4.4h7.2v2.8h-10.2V74z"/>
						<path fill="#2300FF" d="M225.6,74h3v6l5.5-6h3.7l-6.5,7.2l7,8.9h-3.8l-5.8-7.7v7.7h-3V74z"/>
						<path fill="#2300FF" d="M238.8,76.8V74h11.9v2.8h-4.5v13.3h-3V76.8H238.8z"/>
						<path fill="#2300FF" d="M259.5,73.9c2.8,0,5.1,1.1,6.5,3.6c0.7,1.3,1.1,2.8,1.1,4.6c0,3.6-1.6,6.2-3.8,7.4
							c-1.1,0.6-2.4,0.9-3.8,0.9c-2.8,0-5.1-1.1-6.5-3.6c-0.7-1.3-1.1-2.8-1.1-4.6c0-3.6,1.6-6.2,3.8-7.4
							C256.8,74.2,258.1,73.9,259.5,73.9z M259.5,76.6c-1.3,0-2.4,0.5-3.3,1.4c-0.9,0.9-1.3,2.3-1.3,4.1c0,1.8,0.4,3.2,1.3,4.1
							c0.9,0.9,2,1.4,3.3,1.4s2.4-0.5,3.2-1.4c0.9-0.9,1.3-2.3,1.3-4.1c0-1.8-0.4-3.2-1.3-4.1C261.9,77.1,260.8,76.6,259.5,76.6z"/>
						<path fill="#2300FF" d="M285.4,74h3.2l-4.2,16.1h-3l-2.9-9.5l-2.9,9.5h-3L268.3,74h3.2l2.7,11.8l3-10.1h2.6l3,10.1L285.4,74z"/>
						<path fill="#2300FF" d="M290.7,74h10v2.8h-7v3.4h5.6v2.8h-5.6v4.4h7.2v2.8h-10.2V74z"/>
					</g>
					<g class="logo-logo">
						<path fill="#2D00FF" d="M110.6,128.1c-0.5,0-1-0.1-1.5-0.3c-1.5-0.6-2.5-2.1-2.5-3.7V46.8L44.5,93.6c-1.2,0.9-2.8,1.1-4.2,0.4
							c-1.4-0.7-2.2-2.1-2.2-3.6V20.8H14.7v103.4c0,2.2-1.8,4-4,4s-4-1.8-4-4V16.8c0-2.2,1.8-4,4-4h99.9c2.2,0,4,1.8,4,4v14l25-18.8
							c1.2-0.9,2.8-1.1,4.2-0.4c1.4,0.7,2.2,2.1,2.2,3.6v75.2c0,1-0.4,2-1.1,2.7l-31.4,33.7C112.7,127.7,111.7,128.1,110.6,128.1z
							 M114.6,40.8V114L138,88.8V23.2L114.6,40.8z"/>
					</g>
					</svg>

				</a>
			</h1>

			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false )); ?>
			</nav>
		</div>
	</header>