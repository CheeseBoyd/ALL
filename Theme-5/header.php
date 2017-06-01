<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
<!--Proper head tag according to wordpress standards-->
	
<body>

<?php /* if(is_front_page()): ?>
	<div class="jumbotron img-responsive custom-header-image">
		<?php the_custom_header_markup(); ?>
	</div>
<?php endif; */ ?>

<nav class="navbar navbar-default navbar-static-top custom-header-navbar">
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
            <a class="navbar-brand col-xs-hidden" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a>
        </div><!--end of navbar header-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar" class="collapse navbar-collapse">
            <?php create_navbar('top'); ?>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!--forces the title length to be 70 characters long-->
<?php add_filter( 'the_title', 'max_title_length'); ?>
<!--
<div class="col-md-12">
	<h5 align="left"><strong><?php echo current_time( 'M d Y' ); ?></strong></h5>
</div>
-->

