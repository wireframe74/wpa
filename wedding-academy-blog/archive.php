<?php get_header(); ?>

	<main role="main" class="container-fluid">

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
			
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>	  	  
			
			
				<article id="post-<?php the_ID(); ?>" class="listing group col-sm-6 col-md-4 col-lg-4">
		
					
			
				
				<?php $img=catch_that_image($post->ID); ?>
				
				<img src="<?php echo $img ?>" title="" class="img-responsive" />



				<div class="medium-col-wrap">
					<div class="meta medium-col">
						 <header class="entry-header">
						 <h1 class="entry-title"><a href="http://wp-bbosa.com/Llama/taylor-swifts-cat-couldve-destroyed-everything/" rel="bookmark">Taylor Swift’s Cat Could’ve Destroyed Everything</a></h1>          
						 <div class="entry-meta">
						 <small>February 27th 2014 by Christine Kerr</small>
						 <p> <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View</a></p>
						 </div>
						 </header>
					</div>
				</div>
				</article>
				
				
				
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('row padding-vertical'); ?>>
						
					<?php 
					if (get_field('column_1')) { ?>
					<section class="medium-col">
					<?php the_field('column_1'); ?>
					</section>
					<?php }?>
		
						<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>


			<!-- <img src="assets/images/feature-image.jpg" class="img-responsive" alt="" /> -->
					
					
					<?php if (get_field('column_2')) { ?>

					<section class="medium-col">
					<?php the_field('column_2'); ?>	
					</section>
					<?php }?>
							  
					<?php if( !empty( $post->post_content) ) { ?>
					<section class="medium-col">
					<?php the_content(); } ?>
					</section>
			
					<br class="clear">
					<?php edit_post_link(); ?>




			</article><!--/row-->

				<?php endwhile; ?>
				<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
				<?php endif; ?>


				<?php get_template_part('pagination'); ?>
	
			</main><!--/container-fluid-->

			<?php get_footer(); ?>