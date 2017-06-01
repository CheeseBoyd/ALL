<?php
/*
* Contains the recent posts for the front-page

<div class="col-md-2 col-sm-3 col-xs-12 well custom-recent-posts"> <!--spans the langth of its parent container-->
	<div class="recent-image-container">
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
				} else { ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/default.jpg" alt="<?php the_title(); ?>" />
		<?php } ?> <!--has no img-responsive tag-->
		</a> <!--featured image anchor-->
	</div> <!--image container-->
	<div class="col-md-12">
	<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
	</div>
</div>



*/
?>

<div class="col-md-4 col-sm-12 col-xs-12 custom-recent-posts">
<a href="<?php the_permalink(); ?>">
	<div class="col-md-12 col-xs-4 recent-image-container">
		<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
				} else { ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/default.jpg" alt="<?php the_title(); ?>" />
		<?php } ?> <!--has no img-responsive tag-->
		</a> <!--featured image anchor-->		
	</div>

	<div class="col-md-12 col-xs-8">
		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
	</div>
</a>	
</div>

