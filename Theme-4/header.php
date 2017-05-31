<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
<!--Proper head tag according to wordpress standards-->
	
<body>

<!--ads space -->

    <div class="jumbotron custom-front-page-ads-jumbotron">
        <div class="container custom-ads-container">
            <h3 align="center">Custom ad space</h3>
        </div>
    </div>

<header>
<nav class="navbar navbar-inverse navbar-static-top custom-header-navbar">
    <div class="container">
        <div class="navbar-header"> <!--contains the responsive button -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <span class="navbar-brand custom-header-custom-logo"><?php 
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?></span>  
            <!-- <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a> -->
            <span class="navbar-brand"><?php echo current_time( 'M d Y' ); ?></span>
        </div><!--end of navbar header-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar" class="collapse navbar-collapse">
            <?php create_navbar('top'); ?>
        </div><!--/.nav-collapse -->
    </div>
</nav>
</header>

	