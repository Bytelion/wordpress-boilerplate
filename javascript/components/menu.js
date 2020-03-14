var Menu = (function() {
	var init = function() {
		bindUI();
	};

	var bindUI = function() {
		document.querySelector('.menu_button').addEventListener('click', toggleMenu);
		document.querySelector('.menu_close').addEventListener('click', toggleMenu);
	};

	var toggleMenu = function() {
		document.querySelector('.menu').classList.toggle('visible');
	};

	return {
		init: init
	}
})();