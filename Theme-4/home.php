<?php get_header(); ?>
	
<!--Posts page -->
<div class="container">
	<div class="row col-md-8 col-sm-8 col-xs-12">
	<?php  /* query_posts('showposts=7'); */ if (have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="col-md-12 thumbnail custom-home-page-thumbnail">
				<div class="col-md-4">
					<a href="<?php the_permalink(); ?>">
					<?php //the_post_thumbnail('large' , array('class' => 'img-responsive custom-home-page-img-responsive')); ?>
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('large', array('class' => 'img-responsive custom-home-page-img-responsive'));
								} else { ?>
									<img class="img-responsive custom-home-page-img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/stock.png" alt="<?php the_title(); ?>" />
						<?php } ?>						

					</a>
				</div>
				<div class="col-md-8">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>	
			<!--links to the next post page-->
		<?php  wp_bs_pagination(); ?>
	</div> <!--one row-->
	<div class="col-md-4 col-sm-4 hidden-xs">
		<h4>Side bar side</h4>
		<?php get_sidebar(); ?>
	</div>
</div><!--main container-->
<?php get_footer(); ?>

