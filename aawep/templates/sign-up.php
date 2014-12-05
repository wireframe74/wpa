<?php 
/* Template Name: NEWSLETTER SIGN UP */
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
											
										<div id="mc_embed_signup">
											<form action="http://aawep.us5.list-manage.com/subscribe/post?u=0406d9beb5d84b16eb3b6d454&amp;id=9dabc3624c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
											<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Join Mailing List" required="">
											<input type="submit" value="subscribe" class="form-control">
											</form>
										</div>
							 
							 
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
