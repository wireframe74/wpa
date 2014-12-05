<?php 
/* Template Name: SINGLE COLUMN */
get_header(); ?>



	<main role="main" class="inner-shadow">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>

			
							<div class="row padding-vertical">
							  
							  
								<div class="col-md-12 left-column">
									
										<h2><?php the_title(); ?></h2>
								
									
										<?php the_content(); ?>
								
							 
								</div><!--/span-->
							   
							
									
								
								<?php edit_post_link(); ?>
								
							</div><!--/row-->
				  
						

								</article>
			   
			   
			   	<?php endwhile; ?>
				<?php endif; ?>
		
		
			   
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
