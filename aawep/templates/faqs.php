<?php 
/* Template Name: FAQS */
get_header(); ?>






	<main role="main">
		<!-- section -->
					<section>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
									<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>	>				
									<?php endwhile; ?>
									<?php endif; ?>

									
										<div class="row padding-vertical">
														  
														  
														
														

												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/faqs2/" class="courses-cta faq-cta course-2 cta"> 
												<h2>Frequently<br>Asked <br>Questions</h2>
												</a>
												</aside><!--/span-->
												
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												 <a href="<?php bloginfo('url'); ?>/faqs/e-learning/" class="about-cta course-2 cta"> 
												 <h2>E Learning</h2>
												</a>
												</aside><!--/span-->
												
												<aside class="group  col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/course-comparison/" class="courses-cta support comparison-cta cta"> 
												<h2>Course<br>Comparison</h2>
												</a>
												</aside><!--/span-->
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/course-payment-types/" class="courses-cta fees-cta partners course-2 cta"> 
												<h2>Course Fees</h2>
												</a>
												</aside><!--/span-->
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/accreditation/" class="courses-cta accreditation-cta  course-2 cta"> 
												<h2>Accreditation</h2>
												</a>
												</aside><!--/span-->
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/students/" class="courses-cta students-cta  course-2 cta"> 
												<h2>Student Praise</h2>
												</a>
												</aside><!--/span-->
										
										
														
									
															
										</div><!--/row-->
									</article>
									
					
					
					
						   
					</section>
					<!-- /section -->
	</main>



<?php get_footer(); ?>
