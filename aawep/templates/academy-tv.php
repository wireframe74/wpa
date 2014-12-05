<?php 
/* Template Name: ACADEMY TV */
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
									<?php the_content(); ?>
									</div>
									<!--span-->
								<?php edit_post_link(); ?>
							</div><!--/row-->
					</div><!--/container content-->

		

						<div class="row">
												  
								
										
													
													
													
								<?php while(the_repeater_field('video')): ?>					
								<aside class="group col-xs-12  col-sm-6 col-md-6 col-lg-4">
								
									<a class="cta cta-white video no-padding href="#">
									<div class="video-container">
									
									<?php 
									
									$embed_code = wp_oembed_get(get_sub_field('video_url') );
									
									echo $embed_code;
									
									?>
									
									</div>

								
									
									<div class="video-caption">
									<h3><?php the_sub_field('title'); ?></h3>
									
									<?php 
				 
									$date = get_sub_field('date');
									// $date = 19881123 (23/11/1988)
									 
									// extract Y,M,D
									$y = substr($date, 0, 4);
									$m = substr($date, 4, 2);
									$d = substr($date, 6, 2);
									 
									// create UNIX
									$time = strtotime("{$d}-{$m}-{$y}");
									 
									// format date (23/11/1988)
									// echo date('d/m/Y', $time);
									 
									// format date (November 11th 1988)
									// echo date('F n Y', $time);
				 
									?>
									
									<date>Published on <?php echo date('d/m/Y', $time); ?></date>
									</div>
									
									</a>
									
								</aside><!--/span-->
								<?php endwhile; ?>
								
								
								
						</div><!--/row-->






		 </div><!--/container-fluid-->
		
		<?php endwhile; ?>
		<?php endif; ?>
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
