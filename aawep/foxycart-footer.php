	</div>
	
	<div class="main-footer"></div>
	  
	  <footer role="contentinfo">
		<div class="container-fluid"> 
	    <p><?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>, all rights reserved. Website by Flourish. + 0845 313 6023 + <a href="#">FAQ’S</a> + <a href="#">TERMS & CONDITIONS</a> + <a href="#">COOKIE POLICY</a></p>
	    </div>
	  </footer>
	  


<script src="http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/4.0.0/conditionizr.js"></script>
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>-->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fittext.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.transit.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>

<script>

$(document).ready(function () {

	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	
	/* if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		for (var i = 0; i < imgs.length; i++) {
			if (/.*\.svgjQuery/.test(imgs[i].src)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
			}
		}
	}
*/


jQuery("table").addClass("table table-striped");
jQuery("form").addClass("form-inline");

jQuery("label").addClass("control-label");

jQuery(".fc_text, .medium").addClass("form-control");

var positiveMargin = false;

$('#display-nav').click(function () {

 if($(window).scrollTop() > 300 ) {
       $('html,body').animate({ scrollTop: $('body').offset().top }, 'slow').delay(700);
       // getData();
   }
   
   

    if (!positiveMargin) {
        var marginLeft = "225px";
        positiveMargin = true;
    }
    else {
        var marginLeft = "0px";
        positiveMargin = false;
    }
     $('#sidebar-links').animate({
               marginLeft: marginLeft
               }, {
               duration: 1000,
               specialEasing: {
               marginLeft: 'easeOutBounce'
               },
               complete: function () {
               }
             });
 });

});
</script>
</body>
</html>