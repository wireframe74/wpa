<?php 
 /* Template Name: ASK ALISON - MONTHLY MESSAGE */
 get_header();
 ?>


<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

<?php 
	$args = array(
 		'cat' => 10,
		'post_type' => 'post', 
		'posts_per_page'         => 1,
 		);

$query = new WP_Query( $args );
 while ($query->have_posts()) : $query->the_post(); ?>
	

<!-- COURSE INFO TABS -->

<div  class="tab-container container-fluid tabbed-content-margin">

<?php include_once('templates/aa-nav.php'); ?>
	
 
<div class="container">

	   <div id="tab-monthly-message" class="tab-pane active">


		    <h2>Monthly Message: <span class="primary-color"><?php echo date("F"); ?></span></h2>

			<?php  if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full', array('class' => ' img-responsive' )); ?>
			<?php endif; ?>

			<?php the_content(); ?>

			<p class="signature">Alison</p>
			<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<div class="clear"></div>

<?php 
		$args2 = array(
	 		'cat' => 10,
			'post_type' => 'post', 
			'posts_per_page' => 2,
	 		);
	 $query2 = new WP_Query( $args2 );
	?>


	<?php while ($query2->have_posts()) : $query2->the_post(); ?>
		
		<aside class="col-sm-6">
			<h2>Monthly Message: <span class="primary-color"><?php echo date("F"); ?></span></h2>
			<p><?php the_excerpt(); ?></p>
			<p><a href="<?php the_permalink(); ?>">Read More</a></p>
		</aside>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>




		</div>

</div> <!-- .container -->




</div><!-- tab-container -->
</div> <!-- .container-fluid .nav-bg -->





<div class="clear"></div>
</article>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>