<?php
	include_once dirname(__FILE__) . '/functions/setup.php';
	include_once dirname(__FILE__) . '/functions/editor.php';
	include_once dirname(__FILE__) . '/functions/blocks.php';
	include_once dirname(__FILE__) . '/functions/settings.php';
	include_once dirname(__FILE__) . '/functions/actions.php';

	add_action( 'after_setup_theme', 'crb_load' );
	function crb_load() {
		require_once( 'vendor/autoload.php' );
		\Carbon_Fields\Carbon_Fields::boot();
	}
?>