---
to: "<%=locals.js ? 'javascript/components/' + name + '.js' : null %>"
---
var <%=Name%> = (function() {
	var items;

	var init = function() {
		setup();
		bindUI();
	};

	var setup = function() {};

	var bindUI = function() {};

	return {
		init: init
	}
})();