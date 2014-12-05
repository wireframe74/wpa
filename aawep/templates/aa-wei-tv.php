<?php 
 /* Template Name: UK LIVE - WEI TELEVISION */
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

   <div id="tab-wei-tv" class="tab-pane active">
		
		<div class="col-xs-12 col-md-6">
			<h2><?php the_title( ); ?></h2>
			<?php the_content(); ?>
		</div>

		<div class="col-xs-12 col-md-6">
			<img src="<?php bloginfo('template_directory' ); ?>/assets/images/tv-alison.jpg" alt="WEI TV" />
		</div>
 	</div>

</div> <!-- .container -->
</div><!-- tab-container -->


<?php endwhile; ?>
<?php rewind_posts(); ?>



	




<?php  	$args2 = array(
		'post_type' => 'uk-tv',
		'posts_per_page'         => 12,
		'paged' => $paged,
		

	);

 $the_query = new WP_Query( $args2 ); ?>



<section class="container-fluid">
	<div class="row">
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<aside class="group col-xs-12 col-sm-6 col-md-3 col-lg-3">
								
			<a class="cta cta-white video no-padding" href="<?php the_permalink(); ?>">
			<div class="video-container">
			
 <img src="<?php video_thumbnail(); ?>" width="300" />
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
			
			<?php if(get_field('date')): ?>
				<date>Published on <?php echo date('m/d/Y', $time); ?></date>
			<?php endif; ?>



			</div>
			
			</a>
									
</aside><!--/span-->
<?php endwhile; endif; ?>
<?php rewind_posts(); ?>
	</div>
</section>




<div class="clear"></div>








</div> <!-- .container-fluid .nav-bg -->





<div class="clear"></div>
</article>
</section>



<section class="container-fluid paged">
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
