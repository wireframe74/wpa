<div class="footer-wrap container">
	


		<section class="newsletter clearfix">
				<h1>NEWSLETTER SIGN UP</h1>
 <!-- Begin MailChimp Signup Form --> 
 <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<div id="mc_embed_signup">
		<form action="http://aawep.us5.list-manage2.com/subscribe/post?u=0406d9beb5d84b16eb3b6d454&amp;id=9dabc3624c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			
		<input type="text" value="" name="MMERGE1" placeholder="Enter Name" class="required form-control placeholder" id="mce-MMERGE1">
		<input type="email" value="" placeholder="Enter Email" name="EMAIL" class="required email form-control placeholder" id="mce-EMAIL">


			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_0406d9beb5d84b16eb3b6d454_9dabc3624c" tabindex="-1" value=""></div>
		 
		</div>

		  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="form-control">
		</form>

					<script type="text/javascript">
					var fnames = new Array();var ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';
					try {
					    var jqueryLoaded=jQuery;
					    jqueryLoaded=true;
					} catch(err) {
					    var jqueryLoaded=false;
					}
					var head= document.getElementsByTagName('head')[0];
					if (!jqueryLoaded) {
					    var script = document.createElement('script');
					    script.type = 'text/javascript';
					    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
					    head.appendChild(script);
					    if (script.readyState && script.onload!==null){
					        script.onreadystatechange= function () {
					              if (this.readyState == 'complete') mce_preload_check();
					        }    
					    }
					}

					var err_style = '';
					try{
					    err_style = mc_custom_error_style;
					} catch(e){
					    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
					}
					var head= document.getElementsByTagName('head')[0];
					var style= document.createElement('style');
					style.type= 'text/css';
					if (style.styleSheet) {
					  style.styleSheet.cssText = err_style;
					} else {
					  style.appendChild(document.createTextNode(err_style));
					}
					head.appendChild(style);
					setTimeout('mce_preload_check();', 250);

					var mce_preload_checks = 0;
					function mce_preload_check(){
					    if (mce_preload_checks>40) return;
					    mce_preload_checks++;
					    try {
					        var jqueryLoaded=jQuery;
					    } catch(err) {
					        setTimeout('mce_preload_check();', 250);
					        return;
					    }
					    var script = document.createElement('script');
					    script.type = 'text/javascript';
					    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
					    head.appendChild(script);
					    try {
					        var validatorLoaded=jQuery("#fake-form").validate({});
					    } catch(err) {
					        setTimeout('mce_preload_check();', 250);
					        return;
					    }
					    mce_init_form();
					}
					function mce_init_form(){
					    jQuery(document).ready( function($) {
					      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
					      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
					      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
					      options = { url: 'http://aawep.us5.list-manage.com/subscribe/post-json?u=0406d9beb5d84b16eb3b6d454&id=9dabc3624c&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
					                    beforeSubmit: function(){
					                        $('#mce_tmp_error_msg').remove();
					                        $('.datefield','#mc_embed_signup').each(
					                            function(){
					                                var txt = 'filled';
					                                var fields = new Array();
					                                var i = 0;
					                                $(':text', this).each(
					                                    function(){
					                                        fields[i] = this;
					                                        i++;
					                                    });
					                                $(':hidden', this).each(
					                                    function(){
					                                        var bday = false;
					                                        if (fields.length == 2){
					                                            bday = true;
					                                            fields[2] = {'value':1970};//trick birthdays into having years
					                                        }
					                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
					                                    		this.value = '';
														    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
					                                    		this.value = '';
														    } else {
														        if (/\[day\]/.test(fields[0].name)){
					    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
														        } else {
					    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
						                                        }
						                                    }
					                                    });
					                            });
					                        $('.phonefield-us','#mc_embed_signup').each(
					                            function(){
					                                var fields = new Array();
					                                var i = 0;
					                                $(':text', this).each(
					                                    function(){
					                                        fields[i] = this;
					                                        i++;
					                                    });
					                                $(':hidden', this).each(
					                                    function(){
					                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
					                                    		this.value = '';
														    } else {
														        this.value = 'filled';
						                                    }
					                                    });
					                            });
					                        return mce_validator.form();
					                    }, 
					                    success: mce_success_cb
					                };
					      $('#mc-embedded-subscribe-form').ajaxForm(options);
					      
					      
					    });
					}
					function mce_success_cb(resp){
					    $('#mce-success-response').hide();
					    $('#mce-error-response').hide();
					    if (resp.result=="success"){
					        $('#mce-'+resp.result+'-response').show();
					        $('#mce-'+resp.result+'-response').html(resp.msg);
					        $('#mc-embedded-subscribe-form').each(function(){
					            this.reset();
					    	});
					    } else {
					        var index = -1;
					        var msg;
					        try {
					            var parts = resp.msg.split(' - ',2);
					            if (parts[1]==undefined){
					                msg = resp.msg;
					            } else {
					                i = parseInt(parts[0]);
					                if (i.toString() == parts[0]){
					                    index = parts[0];
					                    msg = parts[1];
					                } else {
					                    index = -1;
					                    msg = resp.msg;
					                }
					            }
					        } catch(e){
					            index = -1;
					            msg = resp.msg;
					        }
					        try{
					            if (index== -1){
					                $('#mce-'+resp.result+'-response').show();
					                $('#mce-'+resp.result+'-response').html(msg);            
					            } else {
					                err_id = 'mce_tmp_error_msg';
					                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
					                
					                var input_id = '#mc_embed_signup';
					                var f = $(input_id);
					                if (ftypes[index]=='address'){
					                    input_id = '#mce-'+fnames[index]+'-addr1';
					                    f = $(input_id).parent().parent().get(0);
					                } else if (ftypes[index]=='date'){
					                    input_id = '#mce-'+fnames[index]+'-month';
					                    f = $(input_id).parent().parent().get(0);
					                } else {
					                    input_id = '#mce-'+fnames[index];
					                    f = $().parent(input_id).get(0);
					                }
					                if (f){
					                    $(f).append(html);
					                    $(input_id).focus();
					                } else {
					                    $('#mce-'+resp.result+'-response').show();
					                    $('#mce-'+resp.result+'-response').html(msg);
					                }
					            }
					        } catch(e){
					            $('#mce-'+resp.result+'-response').show();
					            $('#mce-'+resp.result+'-response').html(msg);
					        }
					    }
					}

					</script>
		<!--End mc_embed_signup-->				



		<!-- 		<div id="mc_embed_signup">
													<form action="http://aawep.us5.list-manage.com/subscribe/post?u=0406d9beb5d84b16eb3b6d454&amp;id=9dabc3624c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate="novalidate">
													<input type="email" value="" name="NAME" class="form-control placeholder" id="mce-EMAIL" placeholder="Enter Name" required="">
													<input type="email" value="" name="EMAIL" class="form-control placeholder" id="mce-EMAIL" placeholder="Enter Email" required="">
													
												</div>
												 <input type="submit" value="subscribe" class="form-control"> 
												</form> -->
												
				</section>
				
				
				
				<a href="http://www.weddingplanningacademy.co.uk/course-payment-types/" target="_blank">
					<img  
					class="image-responsive image-full-width" 
					srcset="<?php bloginfo('template_directory'); ?>/assets/images/banner-promo.gif 1170w,
					<?php bloginfo('template_directory'); ?>/assets/images/banner-promo-med.gif 640w,
					<?php bloginfo('template_directory'); ?>/assets/images/banner-promo-sml.gif 340w" 

					sizes="100%" alt="Sign up to Receive Email Updates"
				>

				</a>
				
				<section class="about-home center-txt">
				
				<h1>ABOUT</h1>
				<p>Wedding Industry Pros is the official blog for the UK Academy of Wedding and Event Planning. 
					You will find many useful articles relating to the wedding industry covering everything from running a business to the latest styling tips and trends.
				</p>
				
				<p>
				<a class="btn btn-lg btn-primary" href="<?php bloginfo('url'); ?>/about" role="button">View</a>
				</p>
				

    </div><!-- /container-fluid -->

	</div><!-- /wrap -->
	
	 <div id="footer">
      <div class="container-fluid no-padding">



	  <!-- TOP FOOTER AREA -->

	 <div class="container-fluid quick-links no-padding">
	 	

						 <section class="container site-links">
						 
						 
								<aside class="group col-sm-4 col-md-4 col-lg-4 pinterest"> 
									<h2>LATEST PINS</h2>
									 <?php dynamic_sidebar( 'footer-widget-1' ); ?> 
								</aside><!--/span-->
								
							

								<aside class="group col-sm-4 col-md-4 col-lg-4 news"> 
									<h2>LATEST POSTS</h2> 
									<?php $args= array('posts_per_page' => 2, 'post_type' => 'post');
														 query_posts($args);
										
															if ( have_posts() ) {
																while ( have_posts() ) {
																	the_post(); 
																	?>

																	 <p><strong><p>
																	 	<?php the_title( ); ?>&nbsp
																	 	<?php // echo date('F jS, Y'); ?></strong></p> 
																	 <?php the_excerpt(); ?> 
																	 </p>


														<?php 		} // end while
															} // end if
														?> 
								</aside><!--/span-->
								
								
								<aside class="group col-sm-4 col-md-4 col-lg-4 subscribe"> 
									<h2>NEWSLETTER SUBSCRIBE</h2> 
															<div id="mc_embed_signup">
																<form action="http://aawep.us5.list-manage.com/subscribe/post?u=0406d9beb5d84b16eb3b6d454&amp;id=9dabc3624c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate="novalidate">
																<input type="email" value="" name="EMAIL" class="form-control placeholder" id="mce-EMAIL" placeholder="Name" required="">
																<input type="email" value="" name="EMAIL" class="form-control placeholder" id="mce-EMAIL" placeholder="Email " required="">
																 <input type="submit" value="subscribe" class="form-control"> 
																</form>
															</div> 
								</aside><!--/span-->
								
						</section>

	</div>




			<!-- BOTTOM FOOTER -->
			
			<div class="container-fluid pink-bg no-padding">
				

							<section class="container bottom-footer">
							
							<ul id="social-links">
								  <li id="fb"><a href="http://www.facebook.com/WeddingSchoolUK" target="_blank">Facebook</a></li>
								  <li id="twitter"><a href="http://twitter.com/#!/ukawep" target="_blank">Twitter</a></li>
								  <li id="pinterest"><a href="http://pinterest.com/ukawep/" target="_blank">Pinterest</a></li>
								  <li id="youtube"><a href="http://youtube.com/ukawep" target="_blank">Youtube</a></li>
								  <li id="google-plus"><a href="https://plus.google.com/104044813686575813036" rel="publisher" target="_blank">Google+</a></li>
							  </ul>
							  
							  
							  
							  
							</section>
							
							
							<section class="copyright container">
								<!-- copyright -->
								<p class="copyright pull-left">
									&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
								</p>

							</section>



			</div>  <!-- BOTTOM FOOTER -->
	  
		</div>
    </div>
	


    <?php if (is_single()) : ?> 
    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-505291ed6d2f8c4f"></script> 
	<?php endif; ?>



	
		<?php wp_footer(); ?>

		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23377304-1', 'ukawep.co.uk');
  ga('send', 'pageview');

</script>
	
	</body>
</html>




