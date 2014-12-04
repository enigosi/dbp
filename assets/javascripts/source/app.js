
// scrolltop arrow

var arrow = document.getElementById("scroll-top-arrow");

window.onscroll = function() {

  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  if (scrollTop > 800) {
		arrow.className = arrow.className.replace(/\bscroll-top-arrow--hidden\b/,'scroll-top-arrow--show');
  } else {
		arrow.className = arrow.className.replace(/\bscroll-top-arrow--show\b/,'scroll-top-arrow--hidden');

	}
};

// realizacje random hover overlay

function setOverlay() {
	if ( Math.random() > 0.6 ) {
		this.className = "realizacje-item realizacje-item--overlay";
	} else {
		this.className = "realizacje-item";
	}
}

var realizacjeContainer = document.querySelector(".realizacje-list");

if (realizacjeContainer != null) { // if portfolio page

	var itemsList = realizacjeContainer.getElementsByTagName("LI");
	var i;

	for (i = 0; i < itemsList.length; i++) {
		itemsList[i].onmouseenter = setOverlay;
	}
}