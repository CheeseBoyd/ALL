<?php
/*
* File contains bootstrap and custom scripting
*/

/* ############################################################### */

/*
* Loads twitter bootstrap.css and bootstrap.js
*/
function enqueue_script() {
	wp_enqueue_style('bootstrapcss',  get_template_directory_uri() . '/res/css/bootstrap.min.css', array(),'1.0.0', 'all');
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/res/js/bootstrap.js', array( 'jquery' ),'1.0.0', true);
	wp_enqueue_style('custom-css', get_template_directory_uri().'/res/css/custom.css', array(),'1.0.0', 'all');
	wp_enqueue_script('custom-js', get_template_directory_uri().'/res/js/custom.js',array(), '1.0.0', true);

	// Custom Bootstrap grid for xxsm and xxxsm
	wp_enqueue_style('custom-bootstrap-css', get_template_directory_uri().'/res/css/custom-bootstrap.css', array(),'1.0.0', 'all');
	wp_enqueue_script( 'custom-bootstrap-js', get_template_directory_uri() . '/res/js/custom-bootstrap.js', array( 'jquery' ),'1.0.0', true);


}
add_action('wp_enqueue_scripts', 'enqueue_script');


?>