<?php get_header(); ?>

	<main role="main" class="container">
	
	
		<div class="col-md-12">
			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
		</div>

	 <?php

	 	

			if (have_posts()): while ( have_posts()) : the_post(); ?>	  	  
			
			
				<article id="post-<?php the_ID(); ?>" class="listing group col-sm-6 col-md-4 col-lg-4">
		
					
			
				
				<?php $img=catch_that_image($post->ID); ?>
				
				<div class="wrap-img   <?php echo $catheading ?>">
					<div class="imgLiquidFill imgLiquid">
					
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('category_thumb'); // Fullsize image for the single post ?>
						</a>
							
						<?php elseif ( !has_post_thumbnail()) : // Check if Thumbnail does not exist ?>
						<?php $img=catch_that_image($post->ID); ?>
						<img src="<?php echo $img?>" title="" /> 
					
						<?php endif; ?>
					
					</div>
				</div>



				<div class="medium-col-wrap">
					<div class="meta medium-col">
						 <header class="entry-header">
						 <h1 class="entry-title"><a href="http://wp-bbosa.com/Llama/taylor-swifts-cat-couldve-destroyed-everything/" rel="bookmark"><?php the_title(); ?></a></h1>          
						 <div class="entry-meta">
						 <small><?php the_time('F j, Y'); ?> by <?php the_author(); ?></small>
						 <p> <a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">View</a></p>
						 </div>
						 </header>
					</div>
				</div>






				</article>


		


				
				<?php endwhile; ?>
				<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->


				<?php endif; ?>
				
 <div class="navigation pagination-links container">
 <div class="alignleft"><?php previous_posts_link('Previous') ?></div>
 <div class="alignright"><?php next_posts_link('Next','') ?></div>
 </div>
				
				</main><!--/container-fluid-->

			<?php get_footer(); ?>