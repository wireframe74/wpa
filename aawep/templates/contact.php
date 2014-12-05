<?php 
/* Template Name: CONTACT */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		
		<div class="container-fluid">
		
			<div class="container content">
			<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>				  
			<h2>CONTACT</h2>

			<p>If you would like to speak to one of our course consultants call our hotline on 0845 313 6023.</p>
			<?php endwhile; ?>
			<?php endif; ?>	
			</div><!--/row-->
			</div><!--/container-->
		 </div><!--/container-fluid-->
		
		
		  <div class="container-fluid contact-form-wrap">
		
        
        <div class="container">
		
                        <div class="col-md-12">
                        
                        
                        
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>				  
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>	
                        </div>
                 
                        
                        
                   <div class="col-md-12">
					<?php gravity_form(2, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
					</div>
                         
                     
                        </div>
                        
                        </div>
                        
                        <!-- col-md-12 -->
                        
			
		</div>
			<!-- container -->
		
		
		
		
		</div><!-- container-fluid-->
        
        
        
        
  <div class="container-fluid country-map">
		
        
        <div class="container">
		  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/locations.gif" alt="Locations" class="img-responsive" width="937" height="704" usemap="#Map">
          <map name="Map">
            <area shape="rect" coords="126,160,168,199" href="#" data-hasqtip="1"  title="WEI - US & Canadian Campus">
            <area shape="rect" coords="173,238,230,286" href="#"  data-hasqtip="2" title="WEI - US & Canadian Campus">
            <area shape="rect" coords="401,192,455,239" href="#"  data-hasqtip="3" title="UK - UK & European Campus">
            <area shape="rect" coords="766,442,809,488"  data-hasqtip="4" href="#" title="AU - Australian Campus">
            <area shape="rect" coords="855,496,910,543"  data-hasqtip="5" href="#" title="NZ - New Zealand Campus">
          </map>
        </div>
                        
                      
                        
<!-- col-md-12 -->
</div><!-- container -->
</div><!-- container-fluid-->
</div>
</div><!--/.container-->
	
	
	
	
	
		
	


<?php get_footer(); ?>
