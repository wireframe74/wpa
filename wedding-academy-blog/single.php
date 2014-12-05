<?php get_header(); ?>

	<main role="main" class="container">

		
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('row padding-vertical content-area'); ?>>
					
					<?php 
					if (get_field('column_1')) { ?>
					<section class="medium-col">
					<?php the_field('column_1'); ?>
					</section>
					<?php }?>
		
						<!-- ENTER LARGE IMAGE HERE -->
				


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


 <div class="container no-padding">

			<section class="article-links">
							<ul class="clearfix">

								


										<li class="comments-count col-md-4"><a href="#"><span class="circle">

										<?php $my_comment_num = get_comments_number( $post_id ); ?>
										<?php if($my_comment_num ==''): ?>0<?php else: ?><?php echo $my_comment_num; ?><?php endif; ?>


										</span>&nbsp; Comments</a>
										</li>
										<li class="comment-make col-md-4"><a href="#">Make a Comment</a></li>
								
								
                       
                        <div class="addthis_toolbox addthis_default_style "> 
                        	<a class="addthis_counter addthis_pill_style imageShare"></a> 
                        </div>

<!-- <span class='st_sharethis' displayText='ShareThis'></span>
<span class='st_twitter' displayText='Tweet'></span>
<span class='st_linkedin' displayText='LinkedIn'></span>
<span class='st_fblike' displayText='Facebook Like'></span>
<span class='st_email' displayText='Email'></span>
<span class='st_plusone' displayText='Google +1'></span>
<span class='st_pinterestfollow' displayText='Pinterest Follow' st_username='WedInstitute'></span>
 -->

<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-505291ed6d2f8c4f"></script>
									
							</ul>
			</section>
						
						
<!-- <div class="navigation pagination-links container">
 <div class="alignleft"><?php // previous_posts_link('Previous') ?></div>
 <div class="alignright"><?php // next_posts_link('Next','') ?></div>
 </div>


 <section class="pagination-links ">
									<a class="prev">Prev</a>
									<a class="next">Next</a>
			</section>
 -->




			<div class="comment-wrap" <?php $comment_count = get_comment_count($post->ID); ?> <?php if ($comment_count['approved'] < 1) : ?>style="display:none"<?php endif; ?> >

						<?php comments_template( '', true ); // Remove if you don't want comments ?>
								<br class="clear">
								
			</div>

	</div> <!-- container -->



	

<?php // get_sidebar(); ?>

<?php get_footer(); ?>