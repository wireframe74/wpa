<?php 
/* TEMPLATE NAME: STANDARD PAGE */
get_header(); ?>


	<main role="main" class="inner-shadow">
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>

			
							<div class="row-fluid padding-vertical">
							  
							  
								<div class="col-md-6 left-column">
								<h2><?php the_title(); ?></h2>
								<?php the_field('left_column'); ?>
								</div><!--/span-->
							   
							    <div class="col-md-6 padding-top">
								<?php the_field('right_column'); ?>
								</div><!--/span-->
									
								<div class="enrollment-links col-md-12">

					<?php if ( $post->post_parent == '836' || is_page(952)) { ?>
						
				<a class="btn large-button btn-lg btn-primary" href="<?php bloginfo('url'); ?>/products/<?php the_slug();?>?hideDescription=true">Enroll Online</a>
				
	                <?php } ?>

								<a class="btn enrolment-btn back btn-default pull-right" href="#">Back</a>
								</div>
								
								<?php edit_post_link(); ?>
								
							</div><!--/row-->


	

				  
			   </article>
			   
			   
		<?php endwhile; ?>
		<?php else: ?>
		
		<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

		<?php endif; ?>
		<?php wp_reset_query(); ?>
		
		
		
		
			   
		</section>
	</main>

<?php get_footer(); ?>
