<?php get_header(); ?>
	
<!--Static front page -->
<div class="jumbotron img-responsive custom-fornt-page-jumbotron" style="
background-image: url('<?php header_image(); ?>');">
	<div class="container">
		<h2>Jumbotron can contain images</h2>
	</div>
</div>

<div class="container">
	<!--Lates posts-->
	<div class="row">

		<h3 class="heading-1"><span>Latest Posts</span></h3	>

		<?php  query_posts('showposts=3'); if (have_posts()): ?>
			<?php while(have_posts()) : the_post(); ?>	
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="thumbnail">
						<a class="thumbnail" href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('large', array('class' => 'img-responsive custom-front-page-img-responsive'));
								} else { ?>
									<img class="img-responsive custom-front-page-img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/stock.png" alt="<?php the_title(); ?>" />
							<?php } ?>							
						</a>
						<div class="caption">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
							<h5>posted on: <?php the_time('F j, Y'); ?></h5>
							<h6>By: <?php the_author(); ?></h6>
						</div>
					</div>
				</div>
			<?php endwhile; ?>	
		<?php endif; ?>	
	</div>



</div>
<?php get_footer(); ?>

