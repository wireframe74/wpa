<?php 
get_header(); ?>

	<main role="main" class="inner-shadow">
		<!-- section -->
		<section>

			<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>

			
							<div class="row-fluid padding-vertical">
							  
							<div class="container">
							<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'WPA' ); ?></h2>
							<h4><?php _e( 'It looks like nothing was found at this location.  Can you try this again or maybe visit our <a 
title="Our Site" href="http://www.weddingplanningacademy.co.uk/">Home 
Page</a> to start fresh.  We\'ll do better next time.', 'WPA' ); ?></h4>

							
									
							</div><!--/span-->	
							
								
								
							</div><!--/row-->
				  
			   </article>
			   
		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
