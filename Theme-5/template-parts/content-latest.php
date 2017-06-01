<!--Content-latest will grab the latest post and display it on panel-->

<div class="col-md-6 col-sm-6 col-xs-12 img-responsive custom-latest-image">
<!--image container-->
	<a class="" href="<?php the_permalink(); ?>">
	<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('large', array('class' => 'img-responsive'));
			} else { ?>
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/default.jpg" alt="<?php the_title(); ?>" />
	<?php } ?>
	</a> <!--featured image anchor-->	
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		<?php if ( ! has_excerpt() ) { ?>
      			<?php if (get_post_format()=='video'): ?> <!--if video format go to ff condition-->
      				<div class="col-md-12 video-container">
      					<?php
			 			   if( strpos( $post->post_content, '<!--more-->' ) ) {
						        the_content();
						    }
						    else {
						        the_excerpt();
						    }
						?>
      				</div>
      			<!--probably need to put elseif for other post formats-->	
      			<? else: ?>
      				<div class="col-md-12 content-latest">
      					<?php
			 			   if( strpos( $post->post_content, '<!--more-->' ) ) {
						        the_content();
						    }
						    else {
						        the_excerpt();
						    }
						?>
      				</div>		
      			<?php endif; ?>
		<?php } else { ?>
			<div class="col-md-12">
			<!--if has excerpt and more tag is found get content else get excerpt-->
      		<?php
			    if( strpos( $post->post_content, '<!--more-->' ) ) {
			        the_content();
			    }
			    else {
			        the_excerpt();
			    }
			?>
      		</div>
		<?php } ?>
</div>

