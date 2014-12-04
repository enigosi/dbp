</div>
	<div id="scroll-top-arrow" class="scroll-top-arrow--hidden">^</div>
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
			callbackBeforeIcons: function ( wrappers ) {


/*
			var getAttributes = JSON.parse(wrappers.getAttribute( 'data-load-attributes' ));
				console.log(getAttributes)
				wrapper.style.height = getAttributes.height;
				console.log( wrappers );
			}
			*/
		});


</script>

</body>
</html>