<!-- Generic post template -->
		<div class="col-md-12 well">
				<!--Post thumbnail -->
						<div class="col-md-12">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('full', array('class' => 'img-responsive custom-single-featured-img'));
								} else { ?>
									<img class="img-responsive custom-single-featured-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/res/img/stock.png" style="width: 100%; height: auto;" alt="<?php the_title(); ?>" />
						<?php } ?>	
						</div>	
					<h2><?php the_title(); ?></h2>
					<span>Posted on: <?php the_time(); ?></span>
					<span>By: <?php the_author(); ?></span>
					<hr>
					<div class="content-container video-container img-responsive"><?php the_content(); ?></div>
						<div class="more-info">
						<h5><strong>Category:</strong> <?php the_category(', '); ?></h5>
							
						<h5><strong>Tags:</strong> 
							<?php 

							if(has_tag()) {
								the_tags( '', ', ', '<br />' ); 
							} else {
								echo "Untagged";
							}

							?>
						</h5>	
						 	 							
						</div>
							<div class="col-md-12">
								<div class="col-md-6">
								<strong>Previous </strong> <?php previous_post_link(); ?>
								</div>
								<div class="col-md-6 col-offset-6">
								<strong>Next </strong> <?php next_post_link(); ?>
								</div>
							</div> <!-- end navigation -->

						<!--comments section-->
						<?php if(comments_open()): ?>
							<?php comments_template(); ?>	

						<?php endif; ?>								
		</div> <!--content-container-->		


