<?php
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
	function crb_attach_theme_options() {
		Container::make( 'theme_options', 'Theme Options' )
			->add_fields( array(
				Field::make( 'text', 'google_maps_url', 'Google Maps Url' ),
				Field::make( 'text', 'street', 'Street' ),
				Field::make( 'text', 'city', 'City' ),
				Field::make( 'text', 'state', 'State' ),
				Field::make( 'text', 'zip', 'Zip' ),
				Field::make( 'text', 'email', 'Email' ),
				Field::make( 'text', 'phone', 'Phone' ),
			) );
	}
?>