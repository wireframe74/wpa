<?php 
/* Template Name: SUCCESS STORIES
 */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		
		
		
		<div class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class('container dark-window'); ?>	>
		
					<?php 
					$parent = 59;
					query_posts('post_type=page&order=ASC&post_parent='.$parent);
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					<!-- START THE LIGHTBOX -->
					<div id="post-<?php the_ID(); ?>" <?php post_class('container-fluid reversed group lightbox-modal certificate-in-wedding-planning'); ?>	>
							
							<a class="close-btn text-hide">Close</a>
							
							
							
										<div class="container">
										
										<div class="row">
										
										<div class="profile-image-wrap col-md-4">
											<img class="image-repsonsive" src="<?php the_field('profile_picture'); ?>" alt="<?php the_title(); ?>" />
										</div>
										
										<div class="col-md-8 profile-detail">
										
										<h2><?php the_title(); ?></h2>
										<?php the_content(); ?>
										
											<ul id="social-links">
											
												<?php if( get_field('facebook_url') ): ?>
												<li id="fb"><a href="<?php the_field('facebook_url'); ?>" target="_blank">Facebook</a></li>
												<?php endif; ?>
											
												<?php if( get_field('twitter_url') ): ?>
												<li id="twitter"><a href="<?php the_field('twitter_url'); ?>" target="_blank">Twitter</a></li>
												<?php endif; ?>
											  
											  
												<?php if( get_field('pinterest_url') ): ?>
												<li id="pinterest"><a href="<?php the_field('pinterest_url'); ?>" target="_blank">Pinterest</a></li>
												<?php endif; ?>
												
												
												<?php if( get_field('linkedin_url') ): ?>
												<li id="youtube"><a href="<?php the_field('linkedin_url'); ?>" target="_blank">Linkedin</a></li>
												<?php endif; ?>
												
												
												<?php if( get_field('google+_url') ): ?>
												<li id="google-plus"><a href="<?php the_field('google+_url'); ?>" target="_blank">Google Plus</a></li>
												<?php endif; ?>
												
												
											</ul>
											
										
										</div>
										 
										</div>
										
										
								</div><!--container-->
							</div><!--lightbox-modal-->
						
							
					<?php endwhile; ?>
					<?php endif; ?>			
				<?php wp_reset_query(); ?>
		
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container content">
				<div class="row padding-vertical">
								  
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
		
		
		<?php 
					$parent = 59;
					query_posts('post_type=page&order=ASC&posts_per_page=999&post_parent='.$parent);
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					
					<aside class="group col-xs-12 col-sm-6 col-md-4 ">
							
								<a class="launch-window cta cta-white parnter-widget" href="<?php the_ID(); ?>" target="_blank">
								
								
								<div class="img-wrap">
								<img class="image-repsonsive" src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>" />
								</div>

								<h3><?php the_title(); ?></h3>
								
								
								</a>
								
					</aside><!--/span-->
					
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
