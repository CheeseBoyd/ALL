<?php
/*
*   applies: custom background
*   applies: use of thumbnails
*   applies: use of custom-headers
*   applies: use of post formats
*/

function theme_support_setup(){

    add_theme_support('custom-background');
    // Sets header image
    $defaults = array(
    'default-image' => get_template_directory_uri(). 'screenshot.png',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'video' => true,
    'video-active-callback' => 'is_front_page'
    ); 
    // Has a second parameter that is an array
    add_theme_support('custom-header', $defaults);
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery','image','video','audio','chat' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );   
    // activate html5 support, second parameter is where html5 is activated
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption')); 
    // Support for selective refresh. Don't know what this does
    add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('init','theme_support_setup');


// Controls the the_title length
function max_title_length( $title ) {
    $max = 75;
    if( strlen( $title ) > $max ) {
        return substr( $title, 0, $max ). " &hellip;";
    } else {
        return $title;
    }
}


?>