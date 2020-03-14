<?php
	/*
		Edit the $blocks array below to add blocks within gutenberg.
		The string added to the array must match the file name within /blocks/src/.
	*/

	$blocks = array(
		'accordion',
		'call-to-action',
		'cards',
		'contact',
		'cover',
		'gallery',
		'link-group',
		'topic-row'
	);

	foreach ($blocks as $block) {
		add_action('carbon_fields_register_fields', str_replace('-', '_', $block));
		include_once dirname(__FILE__) . '/../blocks/' . $block . '.php';
	}
?>