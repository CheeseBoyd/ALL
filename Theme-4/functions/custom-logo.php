<?php
function create_logo() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 50,
		'flex-width' => true,
	) );

}

add_action( 'after_setup_theme', 'create_logo' );

function output_logo() {
	if (function_exists('create_logo')) {
		create_logo();
	} 
}


?>