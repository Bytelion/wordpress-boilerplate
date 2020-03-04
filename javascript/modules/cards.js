var CardGroup = (function() {
	var init = function() {
		setup();
	};

	var setup = function() {
		jQuery('.cards').slick({
			dots: true,
			infinite: false,
			slidesToShow: 4,
			responsive: [
				{
					breakpoint: 1220,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 740,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 500,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});
	};

	return {
		init: init
	}
})();