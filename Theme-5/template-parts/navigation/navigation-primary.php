<?php
function create_navbar($location){
	if(strtoupper($location) == 'TOP'): {
	$args = array(
		'menu' => '',
		'menu_class' => '',
		'menu_id' => '',
		'container' => false,
		'container_class' => '',
		'container_id' => '',
		'fallback_cb' => false,
		'before' => '',
		'after' => '',
		'link_before' => '',
		'echo' => true,
		'depth' => 0,
		'theme_location' => 'primary', 
		'item_spacing' => 'preserve'
		);
	/*
	* Missing default parameters 'items-wrap' => [some ul and id]
	* 'waker' => 'walker object'
	*/

		$custom = array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => false,
            'menu_class'        => 'nav navbar-nav navbar-right',
            'menu_id'			=> 'collapsable',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
		);

	wp_nav_menu($custom);	
	} else: {
		wp_nav_menu();
	} endif;


}
?>