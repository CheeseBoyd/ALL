<?php 
/*
* Template if Settings->Reading-> 'A Static page'
* Used for both 'your latest posts' or 'a static page' 
* as set in the front page displays section of Settings → Reading.
*/

get_header(); 
?>
	<div class="holder">
		<div class="background-thumbnail">
			<?php the_custom_header_markup(); ?>
		</div>
	</div> <!--header image-->
<div class="container"> 
	<div class="col-md-12">
	<!--Contains the tagline-->
			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<h3 align="center"><?php echo $description; ?></h3>
			<?php endif; ?>
	</div>

		<div class="row">
				<div class="col-md-12 well custom-well-latest">
						<?php 
						// the query
						$the_query = new WP_Query('type=post&posts_per_page=1'); ?>
						<?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

						<!--Use get template part-->
						<?php get_template_part('template-parts/content', 'latest'); ?>

						<?php endwhile; 	wp_reset_postdata(); else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>							
				</div>
		</div>
</div> <!--Latest story container-->

<div class="container"> <!--contains the recent posts-->
	<div class="row recent-posts-container brick-posts">
		<?php 
		$agrs = array(
			'type' => 'post', 
			'posts_per_page' => 6,
			'offset'=> 1,
			);
		$the_query = new WP_Query($agrs); ?>
		<?php if( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<!--Use get template part for the row-->
				<?php get_template_part('template-parts/content', 'recent'); ?>				
			<?php endwhile; 	wp_reset_postdata(); else : ?>
				<h6><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h6>
			<?php endif; ?>			
	</div> <!--end of recent post loop-->
</div> <!--container-->

<div class="container" style="padding: 0px; background-color: white;">
	<div class="col-md-12 col-sm-12 col-xs-12 custom-well"> 
		<br>

		<div class="col-sm-12 custom-well">
		<h3>Featured in x-category</h3>
		<?php 
		$agrs = array(
			'type' => 'post', 
			'posts_per_page' => 1,
			'category_name' => 'featured'			
			);
		$the_query = new WP_Query($agrs); ?>
		<?php if( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!--template part-->
				<?php get_template_part('template-parts/content', 'featured'); ?>
			<?php endwhile; 	wp_reset_postdata(); else : ?>

			<?php endif; ?>	
		</div>

	</div>	

</div><!--end of container-->
	




<?php get_footer();?>