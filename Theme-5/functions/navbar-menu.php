<?php
/*
* Creates two nav-bar options in wp-admin
*/

function menu_setup() {
    /*
    * Top and bottom navigation menus
    */
    register_nav_menu('primary', 'Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    
}


add_action('init', 'menu_setup'); 

?>