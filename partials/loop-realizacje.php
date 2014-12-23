<?php
	$args = array(
	'posts_per_page' => -1,
	'post_type' => 'realizacje'
	);

$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) {	?>

	<ul class="realizacje-list">

	<?php
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				if ( has_post_thumbnail() ) { ?>

					<li class="realizacje-item">
						<a class="realizacje-link" href="<?php the_permalink(); ?>" rel="bookmark">
							<div class="realizacje-text">
								<h2 class="realizacje-title"><?php the_title(); ?></h2>
							</div>
							<?php the_post_thumbnail(); ?>
						</a>
					</li>

				<?php } ?>
			<?php } ?>
	</ul>

<?php } ?>

<?php wp_reset_postdata(); ?>