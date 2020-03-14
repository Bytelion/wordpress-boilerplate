var Gallery = (function() {
	var init = function() {
		setup();
	};

	var setup = function() {
		jQuery('.gallery_items').slick({
			dots: true,
			infinite: false
		});
	};

	return {
		init: init
	}
})();