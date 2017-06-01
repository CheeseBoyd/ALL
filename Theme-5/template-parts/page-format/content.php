<!-- Generic page template -->

	<div class="col-md-12 custom-single-page-col">
		<?php the_post_thumbnail('large',array('class' => 'img-responsive')); ?>
			<h2><?php the_title(); ?></h2>
			<h4>This layout is for generic pages without a specific page format</h4>
				<div class="content-container video-container img-responsive col-md-12"><?php the_content(); ?></div>	
				
	</div>	
