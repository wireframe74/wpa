<div class="navbar  internal" role="navigation">

          
		  
		  
		  <div class="navbar-header desktop-only internal">
			<button type="button" id="display-nav" class="navbar-toggle" >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">Project name</a>
			<ul class="quickLinks list-inline nav navbar-nav pull-right">
			   <li id="enrol"><a href="<?php bloginfo('url'); ?>/course-payment-types/">Enrol</a></li>
			   <li id="login"><a href="https://weddingtraining.instructure.com/login/" target="_blank">login</a></li>
			</ul>
          </div>
          
		  
		  
		    <div class="navbar-header mobile-only internal">
			
			
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			
			
            <a class="navbar-brand" href="#">Project name</a>
			<ul class="quickLinks list-inline nav navbar-nav pull-right">
			   <li id="enrol"><a href="#about">Enrol</a></li>
			   <li id="login"><a href="https://weddingtraining.instructure.com/login/" target="_blank">login</a></li>
			</ul>
          </div>
		  
		  
		  
		  
		  
		  
	<nav class="navbar-collapse collapse internal">
          
           
		<?php 
		 wp_nav_menu( array(
			 'menu'              => 'primary',
			 'theme_location'    => 'primary',
			 'depth'             => 2,
			 'container'         => 'div',
			 'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
			 'menu_class'        => 'nav navbar-nav',
			 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			 'walker'            => new wp_bootstrap_navwalker())
		 );
 ?>


 
		
			
			
          </nav><!--/.nav-collapse -->
		  
		  
		  
		  
        </div><!--/.navbar -->