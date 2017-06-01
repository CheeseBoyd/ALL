<?php
/*
* Default content holder. Designed for generic use with text or images
*/
?>
	<div class="col-md-6 col-sm-6 col-xs-12 img-responsive">
	<!--image container-->
		<a class="" href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('large', array('class' => 'img-responsive custom-front-page-img'));
				} else { ?>
					<img class="img-responsive custom-front-page-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/	default.jpg" alt="<?php the_title(); ?>" />
		<?php } ?>
		</a> <!--featured image anchor-->	
	</div>
	
	<div class="col-md-6 col-sm-6 col-xs-12">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php if ( ! has_excerpt() ) { ?>
	      		<?php echo content(30); ?>
			<?php } else { 
	      		the_excerpt();
			} ?>
	</div>
