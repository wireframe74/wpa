    <!-- Main component for a primary marketing message or call to action -->
		      <?php 

		      $this_category = get_category($cat); 
		      $catheading = $this_category->category_nicename; 


	$args = array('post_type' => 'post', 'posts_per_page'=> 1);
	$the_query = new WP_Query( $args );


	if (have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>	 



		


				<style>
					.slider-feature {
					height:485px;
					background:url(http://www.weddingplanningacademy.co.uk/aawep2014/wp-content/themes/wedding-academy-blog/assets/images/category-headers/home.jpg) top left no-repeat;
					background-size: cover;
					background-position: center center;
					}
					</style>



					  <div class="slider-feature container<?php echo $catheading; ?>">
				     
							<div class="medium-col-wrap"> 
							
									<section class="medium-col">
									<h1><?php the_title( ); ?></h1>

									<p><?php echo date('F jS, Y'); ?> by <?php the_author(); ?></p>
									<p>
									  <a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">View</a>
									</p>
								   </section>
							   
							</div><!--medium-col-wrap -->
					 </div>
			<?php endwhile;  ?>
			<?php  endif;  ?>
	