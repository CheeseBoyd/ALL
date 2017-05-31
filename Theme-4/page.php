<?php get_header(); ?>
	
<!-- For pages-->


<div class="container-fluid">
	<div class="row col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part( 'template-parts/page-format/content', get_post_format()); ?>
			<?php endwhile; ?>	
		<?php endif; ?>
	</div> <!--end content col-->

	<div class="row col-md-3 col-sm-3 col-xs-12 col-xs-offset-0">
		<h2>Sidebar here</h2>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>