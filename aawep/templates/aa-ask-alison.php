<?php 
/* Template Name: UK LIVE - ASK CHRISTINE */
 get_header();
 ?>


	<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

					<?php while (have_posts()) : the_post(); ?>
						

					<!-- COURSE INFO TABS -->

					<div class="tab-container container-fluid tabbed-content-margin">

							<?php include_once('aa-nav.php'); ?>

							<div class="container">

							<div id="tab-ask-alison" class="tab-pane">

								<div class="row">
									
										<div class="col-xs-12 col-md-6">
									<?php the_content(); ?>
									</div>

									<div class="col-xs-12 col-md-6">
									<section class="alison-date">
										<div class="info">
											<p>NEXT EVENT:</p>
										


											<?php $date = get_field('date');
											// $date = 19881123 (23/11/1988)

											// extract Y,M,D
											$y = substr($date, 0, 4);
											$m = substr($date, 4, 2);
											$d = substr($date, 6, 2);

											// create UNIX
											$time = strtotime("{$d}-{$m}-{$y}");

											echo '<h1>';
											echo date('m:d:Y', $time);
											echo '</h1>';

							
											?>



											<p><?php the_field('location'); ?><br>
											<?php the_field('time'); ?></p>
										</div>
									</section>
									</div>

									
								</div>



				

								
								</div>
									
							
							</div>
							</div> <!-- .container -->
							</div><!-- tab-container -->
							<?php endwhile; ?>
					</div> <!-- .container-fluid .nav-bg -->

						 <div class="container-fluid contact-form-wrap">
		
        
        <div class="container">
		
      
                 
                        
                        
                   <div class="col-md-12">
					<?php gravity_form(6, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
					</div>
                         
                     
                        </div>
                        
                        </div>
                        
                        <!-- col-md-12 -->
                        
			
		</div>
			<!-- container -->
		
		
		
		
		</div><!-- container-fluid-->







<div class="clear"></div>
</article>
</section><!-- /section -->
</main>
<?php get_footer(); ?>
