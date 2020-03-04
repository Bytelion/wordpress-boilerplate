<?php
	add_action('wp_enqueue_scripts', 'queue_scripts', 100);
	add_action('enqueue_block_editor_assets', 'queue_editor_scripts');
	add_filter('render_block', 'filter_blocks', 10, 2);
	add_action('after_setup_theme', 'bytetheme_setup');
	add_action('after_setup_theme', 'add_custom_logo');
	add_action('after_setup_theme', 'disable_block_settings');
?>