<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php bloginfo('url' ); ?>/aawep2014/wp-content/themes/wedding-academy-blog/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php bloginfo('url' ); ?>/aawep2014/wp-content/themes/wedding-academy-blog/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>


	    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('url' ); ?>/aawep2014/wp-content/themes/wedding-academy-blog/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('url' ); ?>/aawep2014/wp-content/themes/wedding-academy-blog/assets/css/custom.css" rel="stylesheet">
<script>
// Picture element HTML5 shiv
document.createElement( "picture" );
</script>
<script src="<?php bloginfo('url' ); ?>/aawep2014/wp-content/themes/wedding-academy-blog/assets/js/picturefill.js"></script>




    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php if(is_single()): ?>

<script type="text/javascript" src="http://w.sharethis.com/gallery/shareegg/shareegg.js"></script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "041e40b1-3906-4002-ac4a-d5152b073758", doNotHash: false, doNotCopy: false, hashAddressBar: false, onhover:false});</script>
<link media='screen' type='text/css' rel='stylesheet' href='http://w.sharethis.com/gallery/shareegg/shareegg.css'></link>

<?php endif; ?>


    </head>
	<body <?php body_class(); ?>>

	<div id="wrap">
    <div class="container">

      <!-- Static navbar -->
	  <header class="main-header clear">
		  <div class="container-fluid header">
		  
			<h1 class="logo">

<img src="<?php bloginfo('url' ); ?>/aawep2014/wp-content/themes/wedding-academy-blog/assets/images/logo.gif" class="img-responsive" alt="logo" />

</h1> 


				<!-- <a href="<?php // echo home_url(); ?>">Wedding Academy Blog</a></h1> -->
		  
					  <ul class="social-links">
					  		<li class="item-1"><a href="http://www.facebook.com/WeddingSchoolUK" target="_blank">Facebook</a></li>
					  		<li class="item-2"><a href="http://twitter.com/#!/ukawep" target="_blank">Twitter</a></li>
					  		<li class="item-3"><a href="http://pinterest.com/ukawep/" target="_blank">Pinterest</a></li>
					  		<li class="item-4"><a href="http://youtube.com/ukawep" target="_blank">Youtube</a></li>
					  		<li class="item-5"><a href="https://plus.google.com/104044813686575813036" target="_blank">Google+</a></li>
					  		<li class="item-6"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 Feed" target="_blank">item</a></li>
					  	</ul>

<?php // get_search_form(); ?>

<form class="search" method="get" action="http://www.weddingacademyblog.com/wedding-academy-blog" role="search">
	<input class="search-input" type="search" name="s" placeholder="Search">
	<button class="search-submit" type="submit" role="button">Search</button>
</form>


		  </div>

	 </header><!-- /header -->




	   <div class="navbar navbar-default" role="navigation">
        <div class="nav-wrap container-fluid">
         

		 <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
       
          </div>
		  

          <nav class="navbar-collapse collapse">

	          	<?php 
			 	wp_nav_menu( array(
				 'menu'              => 'Blog Menu',

				 'depth'             => 2,
				 'container'         => 'div',
				 'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
				 'menu_class'        => 'nav navbar-nav',
				 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				 'walker'            => new wp_bootstrap_navwalker())
				 );
	 			?>
		</nav><!--/.nav-collapse -->
		  
		  
		  
        </div><!--/.container-fluid -->
	
		
		
      </div><!--navbar-->

      <?php if(is_front_page() || is_search() ) { 
		include_once('slider.php'); 
      }

      else {

      	include_once('post-banner.php'); 
      }




      ?>