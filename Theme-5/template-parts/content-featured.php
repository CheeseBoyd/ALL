<?php 
/*
* Template for featured image
*/
?>

<div class="row col-md-12 custom-well">
	<div class="col-md-12 content-featured-image custom-well">
	<?php /* if ( has_post_thumbnail() ) {
			the_post_thumbnail('large', array('class' => 'img-responsive'));
			} else { ?>
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/default.jpg" alt="<?php the_title(); ?>" />
	<?php } */ ?>
	</div> <!--img container-->
	<div class="col-md-12 adaptive-content">
	<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
</div>