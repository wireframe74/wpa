<?php get_header(); ?>

	<main role="main" class="container-fluid">

		
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>	  	  
			

			<article id="post-<?php the_ID(); ?>" <?php post_class('row padding-vertical'); ?>>
					<div class="container">
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



					</div>	<!-- container -->
			</article><!--/row-->

				<?php endwhile; ?>
				<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
				<?php endif; ?>



	
			</main><!--/container-fluid-->
		







<?php get_footer(); ?>
