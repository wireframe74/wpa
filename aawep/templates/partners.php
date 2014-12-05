<?php 
/* Template Name: PARTNERS */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
	<?php 
	

	
	if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<div class="container content">
				<div class="row">
								  
						<div class="col-md-10 offset-3">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						</div><!--span-->
					<?php edit_post_link(); ?>
				</div><!--/row-->
		</div> <!--/container-->


		
<div class="container-fluid">	
	<div class="row">
		
		<?php $count = 0; ?>
		
		
		<?php while(the_repeater_field('partners')): ?>
		<?php  $count++; ?>
			
			

			<aside class="group col-sm-6 col-md-4 col-lg-3">
			
				<a class="cta cta-white parnter-widget" target="_blank" href="<?php the_sub_field('link'); ?>">
				
				<div class="partner-logo">
				<img src="<?php the_sub_field('logo'); ?>" class="img-responsive" />
				<h3>VISIT THE WEBSITE</h3>
				</div>
				
				</a>
				
			</aside><!--/span-->
			
			
		<?php if ($count==3): ?>
				
			<aside class="group col-sm-6 col-md-4 col-lg-3">
				<div class="twitter-cta cta"> <h2>@UKAWEP</h2>
				<?php if ( function_exists( "display_tweets" ) ) { display_tweets(); } ?>
				</div>
			</aside><!--/span-->
			
		<?php endif; ?>
			
			
				<?php if ($count==6): ?>
				
			<aside class="group experts col-sm-6 col-md-4 col-lg-3">
			
				<a class="cta" target="_blank" href="#">
					<div class="partner-logo">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/experts.gif" class="img-responsive">
					</div>
				</a>

			</aside><!--/span-->
			
		<?php endif; ?>
		<?php endwhile; ?>


		<div class="enrollment-links col-md-12">	
								<a class="btn enrolment-btn back btn-default pull-left" href="#">Back</a>
								</div>

			</div><!--/row-->
		 </div><!--/container-fluid-->
		
<?php endwhile; ?>	
<?php endif; ?>

		
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
