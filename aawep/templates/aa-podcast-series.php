<?php 
 /* Template Name: UK LIVE - PODCAST SERIES */
 get_header();
 ?>

<style>
	iframe {
height: auto;
width: 100%;
position: relative;
}


.header-video iframe {
  height: 100%;
  position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
}

</style>
<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

  <?php 
          $args = array(
            'post_type' => 'podcast',
            'posts_per_page'   => 1,
            );

          $query = new WP_Query( $args );
           while ($query->have_posts()) : $query->the_post(); 
           ?>
            
	

<!-- COURSE INFO TABS -->

<div class="tab-container container-fluid tabbed-content-margin">

<?php include_once('aa-nav.php'); ?>
	
 
<div class="container"  id="tab-podcast-series">

   <div id="tab-podcast-series" class="tab-pane active">
		
	<div class="row">
   
   <h2><?php the_field('episode_number'); ?></h2>
  <h3><?php the_title(); ?></h3>




    <img src="<?php the_field('image_preview'); ?>" alt="<?php the_title(); ?>" class="podcast-lrg-img" />
  

  <?php the_content(); ?>
  <?php the_field('introduction'); ?>


 </div>
<?php endwhile; ?>
<?php rewind_posts(); ?>




 
  </div>










</div> <!-- .container -->
</div><!-- tab-container -->

<?php   $args2 = array(
    'post_type' => 'podcast',
    'posts_per_page'         => 12,
    'paged' => $paged,
    'offset' => 1,

  );

 $the_query = new WP_Query( $args2 ); ?>



<section class="container-fluid podcast-wrap-widgets">
  <div class="row">
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<aside class="group col-xs-12 col-sm-6 col-md-3 col-lg-3">
                
      <a class="no-padding" href="<?php the_permalink(); ?>">
      <img src="<?php the_field('image_preview'); ?>" alt="<?php the_title(); ?>"  />
    
      </a>
                  
</aside><!--/span-->
<?php endwhile; endif; ?>
<?php rewind_posts(); ?>
  </div>
</section>




<div class="clear"></div>




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



</div> <!-- .container-fluid .nav-bg -->





<div class="clear"></div>
</article>
		</section>
		<!-- /section -->
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
