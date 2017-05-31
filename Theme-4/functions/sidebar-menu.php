<?php
/*
*   Create: sidebar
*   List of unavailable id names: https://wordpress.stackexchange.com/questions/59973/what-is-allowed-as-an-id-argument-in-register-sidebar-args/59985#59985
*/

function create_sidebar(){
    // Applies sidebar to backend

    // default custom sidebar
    $args = array(
    'name'          => __( 'Sidebar', 'theme-slug' ),
    'id'            => 'custom-id',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<aside id="%1$s" class="custom-widget %2$s">',
    'after_widget'  => '</aside><hr>',
    'before_title'  => '<h3><span class="label label-primary">',
    'after_title'   => '</span></h3>' );

    register_sidebar($args);

    // for new sidebars

    $newSidebar = array(
    'name'          => __( 'Sidebar', 'theme-slug' ),
    'id'            => 'search-only-sidebar',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '<aside id="%1$s" class="custom-widget %2$s">',
    'after_widget'  => '</aside><hr>',
    'before_title'  => '<h3><span class="label label-primary">',
    'after_title'   => '</span></h3>' );

    register_sidebar($newSidebar);
}

add_action('widgets_init', 'create_sidebar');
?>