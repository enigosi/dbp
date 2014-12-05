</div>
	<div id="scroll-top-arrow" class="scroll-top-arrow--hidden"><a data-scroll href="#header">^</a></div>
	<footer>
		<div class="g_contain">
			<a href="mailto:biuro@dobrebiuroprojektowe.pl" class="footer-link"><span>biuro@dobrebiuroprojektowe.pl<span></a>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<script type="text/javascript">
		// headroom
		var header = document.querySelector(".header");
		var headroom  = new Headroom(header, {

		    offset : 50,

		    tolerance : {
		        up : 15,
		        down : 50
		    },
		});
		headroom.init();

		//smooth scroll
		smoothScroll.init();

		// lazylaoder
		jellyfish.init({
			   icon: '<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg'
		});


</script>

</body>
</html>