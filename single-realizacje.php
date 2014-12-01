<?php get_header(); ?>
	<div class="g_content">
		<div class="g_shift realizacje-single">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 	?>	
				<h1 class="g_h1"><?php the_title(); ?></h1>
				<div class="g_spacer"></div>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>		
<?php get_footer(); ?>