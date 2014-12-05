<?php 
/* Template Name: FOXYSHOP CART 2 */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container content">
				<div class="row padding-vertical">
								  
						<div class="col-md-10 offset-3">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						
						
						 ^^cart^^
						 
						 
						</div>
						<!--span-->
					<?php edit_post_link(); ?>
				</div><!--/row-->

		<?php endwhile; ?>
		<?php endif; ?>			
		<?php wp_reset_query(); ?>
		
		
		
			
		
				
					<div class="row">
								  
			
		<?php 
					$parent = 21;
					query_posts('post_type=page&order=ASC&posts_per_page=999&post_parent='.$parent);
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					
					
					<aside class="group col-xs-12 col-sm-6 col-md-3 col-lg-3">
							
								<a class="launch-window cta cta-white parnter-widget" href="<?php the_ID(); ?>" target="_blank">
								
								<div class="partner-logo">
								<img src="<?php the_field('logo'); ?>" class="img-responsive" />
								<h3><?php the_title(); ?></h3>
								</div>
								
								</a>
								
					</aside><!--/span-->
					
		<?php endwhile; ?>
		<?php endif; ?>
	<?php wp_reset_query(); ?>
	
			<aside class="group col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="twitter-cta cta"> <h2>@UKAWEP</h2>
				<?php if ( function_exists( "display_tweets" ) ) { display_tweets(); } ?>
				</div>
			</aside><!--/span-->
			
			
					</div><!--/row-->





			</div><!--/container-->
		 </div><!--/container-fluid-->
		

		
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
