  
	<div class="container-fluid header-wrapper generic-header page-header row no-padding">
	<?php include_once(TEMPLATEPATH .'/includes/nav.php'); ?>
	
		
		
	<div class="row-fluid">
	<h1><?php 
	if(get_field('header_text')) : ?>
	<?php  the_field('header_text'); ?>
	<?php else : the_title();  ?>
	<?php endif; ?>
	
	</h1>
	<?php include_once(TEMPLATEPATH .'/includes/desktop-navigation.php'); ?>
	</div><!--/row-fluid-->
	
	
	</div><!--/header-wrapper-->
		