<?php get_header(); ?>
	
<!-- For default page template -->


<div class="container-fluid">
	<div class="row col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-md-12 custom-single-page-col">
					<?php the_post_thumbnail('large',array('class' => 'img-responsive')); ?>
					<h2><?php the_title(); ?></h2>
					<hr>
					<div class="content-container video-container img-responsive col-md-12"><?php the_content(); ?></div>
				</div>
			<?php endwhile; ?>	
		<?php endif; ?>
	</div> <!--end content col-->

	<div class="row col-md-3 col-sm-3 col-xs-12 col-xs-offset-0">
		<h2>Sidebar here</h2>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
