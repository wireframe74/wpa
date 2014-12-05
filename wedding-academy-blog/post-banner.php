    <!-- Main component for a primary marketing message or call to action -->
		 
		 <?php if (is_category()) : 
		      
			  $this_category = get_category($cat); 
		      $catheading = $this_category->category_nicename;
		      query_posts( "posts_per_page=1&category_name=$catheading" );

		  endif; ?>

		 

		     <?php  if (have_posts()): while (have_posts()) : the_post(); ?>	  
					  <div class="slider-feature <?php echo $catheading; ?>" >


					<?php 
					$lrgImg = wp_get_attachment_image_src(get_field('header_image'), 'lrg-hdr' );
					$medImg = wp_get_attachment_image_src(get_field('header_image'), 'med-hdr' ); 
					$smlImg = wp_get_attachment_image_src(get_field('header_image'), 'sml-hdr' );  
					?>


					<style>
					 @media only screen and (min-width:320px) {

					.slider-feature {
					height:325px;
					background:url(<?=$smlImg[0];?>) top left no-repeat;
					}

					}
					@media only screen and (min-width:480px) {
					.slider-feature {
					height: 337px;
					background:url(<?=$medImg[0];?>) top left no-repeat;
					}
					 }


					@media only screen and (min-width:768px)  {
					.slider-feature {
					height:485px;
					background:url(<?=$lrgImg[0];?>) top left no-repeat;
					}
					</style>






							<div class="medium-col-wrap"> 
							
									<section class="medium-col">
									<h1><?php the_title(); ?></h1>
									<p><?php echo date('F jS, Y'); ?> by <?php the_author(); ?></p>
									 <?php wp_count_comments(); ?> 
									
									<?php if(!is_single())  : ?>
										<p>
										  <a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">View</a>
										</p>
										<?php endif; ?>

										




								   </section>
							   
							</div><!--medium-col-wrap -->
					 </div>
			<?php endwhile;  ?>
			<?php  endif;  ?>
			<?php  wp_reset_query(); ?>


			</div> <!-- /container -->