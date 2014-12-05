<?php 
/* TEMPLATE NAME: LOGIN  */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
	<div class="container">
		<div class="col-md-8 left-column padding-vertical">
		<h2><?php wp_title('' ); ?></h2>
		<?php dynamic_sidebar( 'login-widget' ); ?>

		<?php if ( is_user_logged_in() ) { ?>
		<a href="<?php echo wp_logout_url('videos'); ?>" title="Logout">Logout</a>
		<?php } ?>

		</div>
	</div>
	
	<div class="container-fluid">
		
		
				  	  
					<div class="row padding-vertical">
			
	
				
			<?php if ( is_user_logged_in() ) { ?>


														<style>
						.page-template-templateslogin-php main	,.page-template-templatesvideo-detail-php main
{
background: #fff;
}

.page-template-templateslogin-php main {
margin: 20px auto;
}

</style>






			 <aside class="group col-xs-12 col-sm-6 col-md-3	">
			 <a href="<?php bloginfo('url'); ?>/videos/master-class-with-alison-howard/" class="courses-cta  course-5 dark cta"> 
			 <h2>Masterclass with Alison Howard</h2>
			</a>
			</aside><!--/span-->
			
			
			<aside class="group col-xs-12 col-sm-6 col-md-3	">
			 <a href="<?php bloginfo('url'); ?>/videos/podcast-interviews/" class="courses-cta course-1 dark cta"> 
			 <h2>Podcast Interviews</h2>
			</a>
			</aside><!--/span-->

			<aside class="group col-xs-12 col-sm-6 col-md-3	">
			 <a href="<?php bloginfo('url'); ?>/videos/expert-interview-series/" class="courses-cta bg-cta cta"> 
			 <h2>Expert Interview Series</h2>
			</a>
			</aside><!--/span-->


			<aside class="group col-xs-12 col-sm-6 col-md-3	">
			 <a href="<?php bloginfo('url'); ?>/videos/wed-talks" class="courses-cta comparison-cta cta"> 
			 <h2>Wed Talks</h2>
			</a>
			</aside><!--/span-->



										
										<?php }  ?>





				

					
				
					
							
							
									   
									   
									   
									   
			
</div><!--/row-->
				  
			
		

		
			
			
			
		</div><!--/container-fluid-->
		</section>
		<!-- /section -->
	</main>
	
	
	
	


<?php get_footer(); ?>