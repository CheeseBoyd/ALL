<?php 
// Non bootstrap pagination

// defaut agruments

function create_pagination() {
	$args = array(
    'mid_size' => 2,
    'prev_text' => __( 'Previous', 'textdomain' ),
    'next_text' => __( 'Next', 'textdomain' ),
	); 
	
	the_posts_pagination($args); 
}



?>