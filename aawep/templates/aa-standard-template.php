<?php 
/* Template Name: UK LIVE - STANDARD TEMPLATE */
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

							<div id="tab-overview" class="tab-pane">
							<h2><?php the_title( ); ?></h2>
							<?php the_content(); ?>
							</div>
							</div> <!-- .container -->
							</div><!-- tab-container -->
							<?php endwhile; ?>
					</div> <!-- .container-fluid .nav-bg -->

<div class="clear"></div>
</article>
</section><!-- /section -->
</main>
<?php get_footer(); ?>
