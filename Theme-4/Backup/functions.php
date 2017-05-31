<?php

/*
* Loads: bootstrap js, bootstrap css and custom css
*/

require_once('/functions/enqueue-script.php');
/*
* Creates two nav-bar options in wp-admin
*/
require_once('/functions/navbar-menu.php');
/*
* adds theme support functionality
*/
require_once('/functions/theme-support.php');
/*
* adds sidebar functionality 
*/
 require_once('/functions/sidebar-menu.php');
/*
* Loads navbar function and navwalker
*/
require_once('/functions/wp-bootstrap-navwalker.php');


/* ###################################################### */ 

/*
* Loads nav menu
*/ 
require_once('/template-parts/navigation/navigation-primary.php');
/* ###################################################### */ 

/*
* Site-utilities: bootstrap pagination
*/
require_once('/template-parts/navigation/Bootstrap-pagination.php');
/*
* Site utilities: custom logo
*/
require_once('/functions/custom-logo.php');

/* ###################################################### */ 

/*
* Stops from throwing debugger error
*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


?>