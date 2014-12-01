</div>
	<div id="scroll-top-arrow" class="scroll-top-arrow--hidden">^</div>
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

		//smooth scroll
		smoothScroll.init();

		// lazylaoder
		jellyfish.init();

		// scrolltop arrow
		var arrow = document.getElementById("scroll-top-arrow");
		 
		onscroll = function() {
		  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		  if (scrollTop > 800) {
				arrow.className = arrow.className.replace(/\bscroll-top-arrow--hidden\b/,'scroll-top-arrow--show');
		  } else {
				arrow.className = arrow.className.replace(/\bscroll-top-arrow--show\b/,'scroll-top-arrow--hidden');

			};
		};

		// realizacje random hover overlay
		var itemsList = document.querySelector(".realizacje-list").getElementsByTagName("LI");

		function setOverlay(o) {
			if ( Math.random() > 0.6 ) {
				o.className = "realizacje-item realizacje-item--overlay";
			} else {
				o.className = "realizacje-item";				
			}
		};

		for (i = 0; i < itemsList.length; i++) {
			itemsList[i].onmouseenter = function() {
				setOverlay(this);
			}
		    setOverlay(itemsList[i]);
		}
	</script>

</body>
</html>