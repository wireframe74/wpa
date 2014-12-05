<?php 
/* TEMPLATE NAME: VIDEO MODULE DETAIL */
get_header(); ?>

	<main role="main" class="inner-shadow ">
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>

			
					<div class="row-fluid padding-vertical">
							  
							 	<div class="col-xs-12 col-md-8 left-column">
									<h2><?php the_title(); ?></h2>

									<?php
										if ( is_user_logged_in() ) { ?>
										 <a href="<?php echo wp_logout_url('videos'); ?>" title="Logout">Logout</a>
								

								<?php // if ( is_user_logged_in() ) { ?>
								<?php  //if ( appthemes_check_user_role( 'video' )) { ?>

								<?php  the_content( ); ?>
								<?php edit_post_link('EDIT POST'); ?>
<div class="reversed">
	
<div class="enrollment-links">	
							<a class="btn enrolment-btn back btn-default pull-left" href="#">Back</a>
</div>	
</div>


									<?php }  ?>
									
								
								</div><!--/span-->
							   
							    <div class="col-xs-12 col-md-4 sidebar-menu">


							   




							   <?php
										if ( is_user_logged_in() ) { 

										dynamic_sidebar( 'video-nav' ); 
								}  ?>

							   
                          </div><!--/span-->
			
					
								
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
