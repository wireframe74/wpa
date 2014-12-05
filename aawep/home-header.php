<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
   <meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon"> 
       

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		


		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  		<script type="text/javascript"> 
var $buoop = {}; 
$buoop.ol = window.onload; 
window.onload=function(){ 
 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
 var e = document.createElement("script"); 
 e.setAttribute("type", "text/javascript"); 
 e.setAttribute("src", "//browser-update.org/update.js"); 
 document.body.appendChild(e); 
} 
</script> 

<script type="text/javascript">
	var $mcGoal = {'settings':{'uuid':'267ac9d4183ac14f026a0f3a5','dc':'us3'}};
	(function() {
		 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
		sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
	})(); 
</script>


</head>
<div class="js">
  <body <?php body_class(); ?>>


  
   
  
	<div class="container-fluid header-wrapper generic-header page-header row no-padding">
	
	<?php include_once(TEMPLATEPATH. '/includes/nav.php'); ?>
	
		
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/page-headers/sml/home-header.jpg" class="img-responsive mobile-only" />
		
	
	
		<div class="col-xs-3 col-sm-3 no-padding" id="home-cta">
		<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.svg" />
		<!--  <h1><a href="#">Wedding Planning Academy</a></h1> -->
			<hr/>
			
			<h2>START YOUR 
			NEW CAREER
			IN WEDDING 
			& EVENT PLANNING.</h2>

			<h3>“The variety of the content contained within the course is extensive, the support from the tutors is priceless and the value is amazing.”</h3>
			<a class="large-button" href="<?php bloginfo('url'); ?>/course-payment-types/">ENROL ONLINE</a>
		</div><!--/span-->
		
		
		
		
	<div class="row-fluid">
	
		
		
		
		
		
	
	
	<?php include_once(TEMPLATEPATH .'/includes/desktop-navigation.php'); ?>
	
	
	
	
	
	</div><!--/row-fluid-->
	</div><!--/header-wrapper-->
		
		

	

	  <div class="row-fluid online-chat">
	  <a id="scroll-lower">Scroll Down</a>
	  <a class="pull-right chat text-hide">Online Chat</a>
	  </div>
	