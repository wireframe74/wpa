<?php 
/* Template Name: UK LIVE - WED BIZ HOUR */
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

									<div id="tab-wedbizhour" class="tab-pane">
		 									<h2>#WEDBIZHOUR</h2>
											<h4>The latest tweets from #wedbizhour with Alison.</h4>

		<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/hashtag/WedBizHour?src=hash">#WedBizHour</a> is coming soon. A weekly Twitter Hour to talk about being in the Business of Weddings. Hosted by <a href="https://twitter.com/TheAlisonHoward">@TheAlisonHoward</a> <a href="https://twitter.com/hashtag/WedBiz?src=hash">#WedBiz</a></p>&mdash; WeddingInstitute (@WedInstitute) <a href="https://twitter.com/WedInstitute/status/511986673992085504">September 16, 2014</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>


									
<!-- <a class="twitter-timeline" href="https://twitter.com/hashtag/wedbizhour" 
data-widget-id="512122087809372160"
data-chrome="nofooter transparent"
>#wedbizhour Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	 -->		




<div class="clear"></div>
<!-- <a class="large-button view-stream" href="http://ow.ly/BAres" target="_blank">VIEW LIVE TWITTER STREAM</a> -->


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
