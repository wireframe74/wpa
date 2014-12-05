<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
   <meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
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
  </head>

  <body <?php body_class(); ?>>
  <?php 
	
	
	include_once(TEMPLATEPATH .'/includes/generic-page-header.php'); 
		
	}
	
?>
	  <div class="row-fluid online-chat top-area">
	  
	  <a class="pull-right chat text-hide">Online Chat</a>
	  </div>
	