<?php 
/* Template Name: FAQS DETAIL PAGE */
get_header(); ?>

	<main role="main" class="reversed inner-shadow">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>

			
							<div class="row padding-vertical">
							  
							  
								<div class="col-md-12 left-column">
								<h2><?php the_title(); ?></h2>
							
								
									<?php the_content(); ?>
										
									<?php while(the_repeater_field('faq')): ?>
										
										<h3 class="question"><?php the_sub_field('question'); ?></h3>
										<div class="answer"><?php the_sub_field('answer'); ?></div>

									<?php endwhile; ?>

							 
						
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

							



							</div><!--/span-->
							   
							
										 <div class="enrollment-links col-md-12">	
								<a class="btn enrolment-btn back btn-default pull-left" href="#">Back</a>
								</div>
							 
								
								<?php edit_post_link(); ?>
								
							</div><!--/row-->
				  
			   </article>
			   
			   
			   	<?php endwhile; ?>
				<?php endif; ?>
		
		
			   
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
