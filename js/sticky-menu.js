var scrollSpeed = 5;
var previousScroll = 0;
jQuery(window).scroll(function() {
	var scroller = jQuery(this).scrollTop();
	if (scroller-scrollSpeed > previousScroll) {
		jQuery('header').addClass("sticky");
	} else if (scroller+scrollSpeed < previousScroll) {
		jQuery('header').removeClass("sticky");
	}
	previousScroll = scroller;
});