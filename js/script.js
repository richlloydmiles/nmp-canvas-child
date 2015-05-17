jQuery(document).ready(function($) {
	// simple as this!
// NOTE: init() is implicitly called with the plugin
jQuery(".navbar-fixed-top").headroom({
	"tolerance": {
		"up": 500,
		"down": 0
	},
});
});


jQuery(document).ready(function($) {
	jQuery('.nmp_cart_button').toggle(function() {
		jQuery(this).css('background-color' , jQuery('.nmp_cart').css('background-color') );
			jQuery(this).css('content' , '\f00d' );
		jQuery('.nmp_cart').slideDown();
	}, function() {
		jQuery(this).css('background-color' , jQuery('.navbar-default').css('background-color') );
		jQuery(this).css('content' , '\f07a' );
		jQuery('.nmp_cart').slideUp();
	});
});