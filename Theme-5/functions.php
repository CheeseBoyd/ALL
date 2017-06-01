<?php

/*
* Loads: bootstrap js, bootstrap css and custom css
*/

require_once( get_template_directory().'/functions/enqueue-script.php');
/*
* Creates two nav-bar options in wp-admin
*/
require_once(get_template_directory().'/functions/navbar-menu.php');
/*
* adds theme support functionality
*/
require_once(get_template_directory().'/functions/theme-support.php');
/*
* adds sidebar functionality 
*/
 require_once(get_template_directory().'/functions/sidebar-menu.php');
/*
* Loads navbar function and navwalker
*/
require_once(get_template_directory().'/functions/wp-bootstrap-navwalker.php');


/* ###################################################### */ 

/*
* Loads nav menu
*/ 
require_once(get_template_directory().'/template-parts/navigation/navigation-primary.php');
/* ###################################################### */ 

/*
* Site-utilities: bootstrap pagination
*/
require_once(get_template_directory().'/template-parts/navigation/Bootstrap-pagination.php');
/*
* Site utilities: custom logo
*/
require_once(get_template_directory().'/functions/custom-logo.php');
/*
* Site utilities: content and excerpt word limit
*/
require_once(get_template_directory().'/functions/limit-content.php');
/*
* Loads helper functions
*/
require_once(get_template_directory().'/functions/utilities.php');

/* ###################################################### */ 

/*
* Stops from throwing debugger error
*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


?>