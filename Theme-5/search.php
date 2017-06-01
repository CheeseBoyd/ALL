<?php get_header(); ?>

<div class="container-fluid">
	<!--Checks if result is found -->	
	<div class="row col-md-8 col-sm-8 col-xs-12">
		<div class="well col-md-12 custom-search-page-result">
			<?php if (have_posts()) : ?>
				<h3><?php printf( __( 'Search Results for: %s', '' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				<?php while(have_posts()): the_post(); ?>
					<!--Highlights the search results-->
					<?php $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title); ?>					

					<h2><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h2>
					<?php the_excerpt(); ?>		
				<?php endwhile; ?>	
				<?php else:  ?>
					<h3><?php printf( __( 'Oops nothing found for: %s', '' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				
			<?php endif ?>

		</div>	<!--end of results well -->

	</div> <!--end of main col-->

	<div class="row col-md-4 col-sm-4 col-xs-12">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>