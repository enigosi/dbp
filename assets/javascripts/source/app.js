
// scrolltop arrow
var arrow = document.getElementById("scroll-top-arrow");
/*
var body = document.body,
    html = document.documentElement;

var documentHeight = Math.max( body.scrollHeight, body.offsetHeight,
                       html.clientHeight, html.scrollHeight, html.offsetHeight );

var viewportHeight = window.innerHeight;
var footerHeight = document.getElementsByTagName("FOOTER")[0].offsetHeight;
*/

window.onscroll = function() {

  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

/*
  var bottomDistance = documentHeight - scrollTop - viewportHeight;
  console.log("document: " + documentHeight);
console.log("viewport: " + viewportHeight);
console.log("footer: " + footerHeight);
  console.log("bottom: " + bottomDistance);
console.log("scrollTop: " + scrollTop);
*/
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