<?php 
/* Template Name: THE IMAGES */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
				
		
		<div class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class('container dark-window'); ?>	>
		 
		 
					<?php 
					$parent = 584;
					query_posts('post_type=page&posts_per_page=999&order=ASC&post_parent='.$parent);
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					<!-- START THE LIGHTBOX -->
					<div id="post-<?php the_ID(); ?>" <?php post_class('container-fluid reversed group lightbox-modal certificate-in-wedding-planning'); ?>	>
							
							<a class="close-btn text-hide">Close</a>
							
							
							
										<div class="container">
										
										<div class="row">
										
										<div class="profile-image-wrap col-md-12">
											<img class="image-repsonsive" src="<?php the_field('large-image'); ?>" alt="<?php the_title(); ?>" />
										</div>
										
									
										 
										</div>
										
										
								</div><!--container-->
							</div><!--lightbox-modal-->
						
							
					<?php endwhile; ?>
					<?php endif; ?>			
				<?php wp_reset_query(); ?>
		
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container content">
				<div class="row">
								  
						<div class="col-md-10 offset-3">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						</div>
						<!--span-->
					<?php edit_post_link(); ?>
				</div><!--/row-->

		<?php endwhile; ?>
		<?php endif; ?>			
		<?php wp_reset_query(); ?>
		
		</div>
		
		<div class="container-fluid content">
		<?php 
					$parent = 584;
					query_posts('post_type=page&order=ASC&posts_per_page=999&post_parent='.$parent);
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					
				
					
					
					<div class="col-lg-2 col-md-2 col-sm-3  col-xs-6 thumb">	
					
					<a class="launch-window" href="<?php the_ID(); ?>" target="_blank" href="#">
			<!-- <div class="more-white"></div> -->
			
			
			   <img class="img-responsive" src="<?php the_field('small-image'); ?>" alt="<?php the_title(); ?>">
                  
                </a>
            </div>
			
			
					
		<?php endwhile; ?>
		<?php endif; ?>
	<?php wp_reset_query(); ?>
	
		<div class="enrollment-links col-md-12">	
								<a class="btn enrolment-btn back btn-default pull-left" href="#">Back</a>
								</div>
		</div><!--container -->
			
	</div><!--container-fluid -->

		

		
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
