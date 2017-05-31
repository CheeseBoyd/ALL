<?php get_header(); ?>
	
<!-- The template for displaying all single posts and attachments-->
<div class="container">
	<div class="row col-md-8 col-sm-8 col-xs-12 col-xs-offset-0">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part( 'template-parts/post-format/content', get_post_format()); ?>
			<?php endwhile; ?>	
		<?php endif; ?>
	</div> <!--end content col-->

	<div class="row col-md-4 col-sm-4 col-xs-12 col-xs-offset-0">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>