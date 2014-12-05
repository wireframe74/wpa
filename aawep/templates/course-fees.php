<?php 
/* Template Name: COURSES FEES 2*/
get_header(); ?>


		
		
		
		
		<div class="container-fluid lightbox-window">
		
			
			
			
					<?php 
					$parent = 107;
					
					query_posts(array('showposts' => 100, 'post_parent' => $parent, 'post_type' => 'page', 'orderby'=>menu_order,'order'=>ASC));
					
				
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					<!-- START THE LIGHTBOX -->
					<div id="post-<?php the_ID(); ?>" <?php post_class('container-fluid reversed group lightbox-modal certificate-in-wedding-planning'); ?>	>
							
							<a class="close-btn text-hide">Close</a>
							
							
							
										<div class="container">
										
										<div class="row">
										<h2><?php the_title(); ?></h2>
										<h3>Choose from one of the payment plans listed below:</h3>
										</div>
										
										<div class="row">
										
												<?php while(the_repeater_field('payment_plan')): ?>		
												<aside class="group col-md-4">
												<div class="payment-ctas">
													<h3><?php the_sub_field('payment_plan_title'); ?></h3>
													<?php the_sub_field('payment_plan_description'); ?>
												</div><!--payment-ctas-->
											</aside><!--span-->
										<?php endwhile; ?>
										</div><!--row-->
										

										<div class="row"><a href="<?php bloginfo('url'); ?>/products/<?php the_slug();?>" class="large-button center-block">ENROL ONLINE</a></div>
										
										
										</div><!--container-->
							</div><!--lightbox-modal-->
					
							
					<?php endwhile; ?>
					<?php endif; ?>			
					<?php wp_reset_query; ?>	
		
		</div><!--container-fluid -->
				
			
			
			
				<div class="container-fluid">
				  
				  
				<div class="row padding-vertical">
							  
							  
					<?php 
					$parent = 107;
					query_posts(array('showposts' => 100, 'post_parent' => $parent, 'post_type' => 'page', 'orderby'=>menu_order,'order'=>ASC));
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					<aside class="group col-sm-6 col-lg-4 course-fees-cta">
					
						<h3 class="course-fees-widget"><?php the_title(); ?></h3>
					
						<section class="course-fees">
						
						<?php the_content(); ?>
						
						<button href="<?php the_ID(); ?>" class="launch-window large-button payment-plans certificate-in-wedding-planning">PAYMENT PLANS</button>
						
						
						
						</section>
					</aside><!--/span-->
												
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query; ?>	
					
					
			<div class="enrollment-links col-md-12">	
								<a class="btn enrolment-btn back btn-default pull-left" href="#">Back</a>
								</div>
				</div><!--/row-->
				  
			   </div><!--/container-->
		  
		  
</div><!--/container-fluid-->
</div><!--/container-fluid-->

	
	
	
		

	
	
		
	


<?php get_footer(); ?>
