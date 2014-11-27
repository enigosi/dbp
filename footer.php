	<footer>
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
	</script>

</body>
</html>