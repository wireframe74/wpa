<?php get_header(); ?>

<main role="main" class="container-fluid">
	
<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			
			
			<article id="post-<?php the_ID(); ?>" class="col-md-12 no-padding">
		
			<?php get_template_part('loop'); ?>

<div class="navigation pagination-links container">
 <div class="alignleft"><?php previous_posts_link('Previous') ?></div>
 <div class="alignright"><?php next_posts_link('Next','') ?></div>
 </div>


			<?php // get_template_part('pagination'); ?>

			</article>


		
	



		

		</section>
		<!-- /section -->	
	

</main><!--/container-fluid-->

<?php get_footer(); ?>