	
	
	<div class="main-footer"></div>
	  
	  <footer role="contentinfo">
		<div class="container-fluid"> 
	    <p><?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>, 
		all rights reserved. <a href="http://www.thosedigitalthoughts.com">Website Development Sydney</a>. + 0845 313 6023 + 
		<a href="<?php bloginfo('url'); ?>/faqs/">FAQ’S</a> + 
		<a href="<?php bloginfo('template_directory'); ?>/assets/docs/Schedule of Administrative Fees V2 UK.pdf" target="_blank">SCHEDULE OF FEES</a> + 
		
		<a href="<?php bloginfo('template_directory'); ?>/assets/docs/Student Policies and Procedures V2 UK.pdf" target="_blank">STUDENT POLICIES AND PROCEDURES</a> + 
		<a href="<?php bloginfo('url'); ?>/cookie-policy/">COOKIE POLICY</a></p>
	    </div>
	  </footer>
	  



<?php wp_footer(); ?>	 
	



	<?php if(is_page('contact')) { ?>
	
	<script src="<?php bloginfo('template_directory' ); ?>/assets/js/jquery.qtip.min.js" type="text/javascript" />
			<script type="text/javascript">
			jQuery(document).ready(
			function() { 
			jQuery('area[title]').qtip(
			{ style: { classes: 'myCustomClass' }
			}); 
			
			 jQuery('img[usemap]').rwdImageMaps();
			});

			</script>
	<?php } ?>
	
	
	
<?php if(is_page('about') || $post->post_parent == '1830' || in_category(10) || $post_type == 'google-hangouts' || $post_type == 'podcast' || $post_type == 'wei-tv') : ?>
	
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
	<?php endif; ?>
	
	
	
	<?php if(is_front_page()) { ?>
	
	<!-- Facebook Conversion Code for Facebook Leads -->
			<script type="text/javascript">
			var fb_param = {};
			fb_param.pixel_id = '6019249876170';
			fb_param.value = '0.00';
			fb_param.currency = 'AUD';
			(function(){
			  var fpw = document.createElement('script');
			  fpw.async = true;
			  fpw.src = '//connect.facebook.net/en_US/fp.js';
			  var ref = document.getElementsByTagName('script')[0];
			  ref.parentNode.insertBefore(fpw, ref);
			})();
			</script>
			<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6019249876170&amp;value=0&amp;currency=AUD" /></noscript>
		
		
		
			<script type="text/javascript">
				jQuery(".enrol-button, #home-cta h3 ").fitText(.9, { minFontSize: '12px', maxFontSize: '19px' });
				jQuery("#home-cta h2").fitText(.9, { minFontSize: '27px', maxFontSize: '39px' });
			</script>
	<?php } ?>
	
</body>
	
</html>