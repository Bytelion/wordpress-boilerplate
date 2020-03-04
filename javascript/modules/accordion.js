var Accordion = (function() {
	var items;

	var init = function() {
		setup();
		bindUI();
	};

	var setup = function() {
		items = document.querySelectorAll('.accordion_trigger');
	};

	var bindUI = function() {
		for (var x = 0; x < items.length; x++) {
			items[x].addEventListener('click', toggleAccordion);
		}
	};

	var toggleAccordion = function() {
		this.classList.toggle('active');
		this.nextElementSibling.classList.toggle('active');
	};

	return {
		init: init
	}
})();