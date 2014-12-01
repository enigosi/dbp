<?php get_header(); ?>

	<div class="fullscreen">
		<h1 class="fullscreen-text">Dobre Studio Projektowe Gdynia roby super projrkty tak.</h1>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-fullscreen.jpg" alt="Dobre Studio Projektowe" class="fullscreen-image"/>
		<a href="#realizacje" class="home-skip" data-scroll>Portfolio <span class="home-arrow">V</span></a>
	</div>
<div class="home-curtian" id="realizacje">
	<div class="g_content">
		<div class="g_shift">
			<?php get_template_part( '/partials/loop', 'realizacje' ) ?>	
		</div>
	</div>		
</div>
<?php get_footer(); ?>