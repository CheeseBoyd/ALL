<?php get_header(); ?>
	
<!-- For pages-->


<div class="container-fluid">
	<div class="row col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12 col-xs-offset-0">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-md-12 custom-single-page-col">
					<?php the_post_thumbnail('large',array('class' => 'img-responsive')); ?>
					<h2><?php the_title(); ?></h2>
					<hr>
					<div class="content-container img-responsive col-md-6"><?php the_content(); ?></div>
						<div class="more-info col-md-6">
							<h2>Tell us more</h2>
							<p>You can contact us by filling out the form. For a more personal approach you can always reach us by other means:</p>

						<p>You can send an email at: www.admin.com. Or by calling us by 09999999-local 223</p>
						<p>for more inquiries visit us at: 90210 SomeAdress palo ato california</p>
						</div>
			
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
