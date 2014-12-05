<?php 
/* Template Name: UK LIVE -  GOOGLE HANGOUTS */
 get_header();
 ?>


	<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

					
										

					<!-- COURSE INFO TABS -->

					<div class="tab-container container-fluid tabbed-content-margin">

							<?php include_once('aa-nav.php'); ?>

							<div class="container" id="container-div">

							<div id="tab-content" class="tab-pane">

							<div class="row">
								

						<?php 
						$args = array(
 						'post_type' => 'google-hangouts',
						'posts_per_page'         => 1,
				 		);

					$query = new WP_Query( $args );
					 while ($query->have_posts()) : $query->the_post(); 
					 ?>


					<div class="col-xs-12">
						 <h2>GOOGLE HANGOUTS</h2>
								<div class="span-lrg">
								<?php the_field('introduction') ?>
								</div>
								<div class="span-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/wei-live.gif"  /></div>

								<div class="clear"></div>

							<?php if(get_field('image_preview')): ?>

								<h2>THE LATEST LIVE HANGOUT:</h2>
					</div>


								<div class="img-wrapper col-xs-12 col-md-8">
								<a href="<?php the_permalink(); ?>" class="latest-hangout-link"></a>
								<?php if(get_field('image_preview')): ?>
								        <img src="<?php the_field('image_preview'); ?>" width="300" alt="<?php the_title( ); ?>" />
									<?php else: ?>
								        <img src="<?php video_thumbnail(); ?>" width="300" alt="<?php the_title( ); ?>" />
									<?php endif ?>


								</div><!-- img-wrapper -->

<?php endif ?>
							<?php endwhile; ?>
							<?php rewind_posts(); ?>

							</div><!-- .row -->
									
						

							</div>
							</div> <!-- .container -->
							</div><!-- tab-container -->
			

					</div> <!-- .container-fluid .nav-bg -->

<?php  	$args2 = array(
		'post_type' => 'google-hangouts',
		'posts_per_page'         => 12,
		'paged' => $paged,
		'offset' => 1,

	);

 $the_query = new WP_Query( $args2 ); ?>



<section class="container-fluid archive-container">
	<div class="row">
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<aside class="group col-xs-12 col-sm-6 col-md-3 col-lg-3">
								
			<a class="cta cta-white video no-padding" href="<?php the_permalink(); ?>">
			<div class="video-container">
			
 <img src="<?php video_thumbnail(); ?>" width="300" />
			<?php 
				// <?php $embed_code = wp_oembed_get(get_field('video_url') );
				// echo $embed_code;
				?>
			
			</div>

		
			
			<div class="video-caption">
			<h3><?php the_title(); ?></h3>
			
			<?php 

			$date = get_sub_field('date');
			// $date = 19881123 (23/11/1988)
			 
			// extract Y,M,D
			$y = substr($date, 0, 4);
			$m = substr($date, 4, 2);
			$d = substr($date, 6, 2);
			 
			
			$time = strtotime("{$d}-{$m}-{$y}");
			 
		  ?>
			
			<date>Published on <?php echo date('d/m/Y', $time); ?></date>

			</div>
			
			</a>
									
</aside><!--/span-->
<?php endwhile; endif; ?>
<?php rewind_posts(); ?>
	</div>
</section>




<div class="clear"></div>









</article>
</section><!-- /section -->

<section class="container-fluid paged ">
<div class="row">
	

		<div class="col-xs-12">
			<?php
		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $the_query->max_num_pages
		) );
		?>
		</div>


</div>
</section>


</main>


	<script type="text/javascript">
			jQuery(document).ready(
			function() { 
			 HeaderVideo.init({
			  container: jQuery('.header-video'),
			  header: jQuery('.header-video--media'),
			  videoTrigger: jQuery("#video-trigger"),
			  autoPlayVideo: false
			});    

			});

			</script>

			
<?php get_footer(); ?>
