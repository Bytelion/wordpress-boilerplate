<?php
	function import($path) {
		include(get_template_directory() . $path);
	}

	function icon($name) {
		include(get_template_directory() . '/icons/' . $name . '.svg');
	}

	function tel($number) {
		return sprintf("(%s)-%s-%s",
				substr($number, 2, 3),
              	substr($number, 5, 3),
              	substr($number, 6));
	}
?>