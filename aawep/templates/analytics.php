<?php 
/* Template Name: GOOGLE ANALYTICS */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		
		<div class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>
		
					<div class="container content">
					
							<div class="row padding-vertical">
											  
									<div class="col-md-10 offset-3">
									<h2><?php the_title(); ?></h2>
									<?php if(is_page('enrolment-form-submission-received')): ?>
												<!-- Google Code for Course Signups Conversion Page -->
												<script type="text/javascript">
												/* <![CDATA[ */
												var google_conversion_id = 983535651;
												var google_conversion_language = "en";
												var google_conversion_format = "3";
												var google_conversion_color = "ffffff";
												var google_conversion_label = "sIQ9CJXO5AwQo6D-1AM";
												var google_remarketing_only = false;
												/* ]]> */
												</script>
												<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
												</script>
												<noscript>
												<div style="display:inline;">
												<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/983535651/?label=sIQ9CJXO5AwQo6D-1AM&amp;guid=ON&amp;script=0"/>
												</div>
												</noscript>

									<?php endif; ?>







									</div>
									<!--span-->
								<?php edit_post_link(); ?>
							</div><!--/row-->
					</div><!--/container content-->

		

		 </div><!--/container-fluid-->
		
		<?php endwhile; ?>
		<?php endif; ?>
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
