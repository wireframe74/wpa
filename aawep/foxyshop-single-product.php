<?php get_header();  
foxyshop_include('header');
 ?>


<?php if($_GET['hide-info'] == 'true') : ?> 
	<style>
		#tab-container {
overflow: hidden;
display: none;
}

		#payment-container {
			display: block;
		}
	</style>
 <?php endif; ?>

	<main role="main">
       
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

<?php
while (have_posts()) : the_post();

	//Initialize Product
	global $product;
	$product = foxyshop_setup_product();
	
	//This is for testing to see what is included in the $product array
	//print_r($product);

	//Initialize Form
	foxyshop_start_form();
	foxyshop_build_image_slideshow("prettyPhoto", true);
	?>


<!-- COURSE INFO TABS -->
<div class="container">
<div id="tab-container" class="tab-container container-fluid tabbed-content-margin">

	<ul class='etabs nav nav-tabs'>
    <li class='tab'><a href="#tab-overview">Overview</a></li>
    <li class='tab'><a href="#tab-sample">Course Sample</a></li>
    <li class='tab'><a href="#tab-assignments">Assignments</a></li>
	<li class='tab'><a href="#tab-fees">Fees</a></li>
	<li class='tab'><a href="#tab-compare">Course Comparison</a></li> 
	
	</ul>
 
	<?php if($product['id'] == 5159) : ?>
		<style>
			#tab-container .etabs li {
				display: none;
			} 

			#tab-container .etabs li:first-child {
				display: block;
			} 
		</style>
	<?php endif; ?>

<div id="tab-overview" class="tab-pane">
<?php
echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
echo $product['description']; 

 the_field('overview'); 
?>
</div>

<div id="tab-sample" class="tab-pane">
<?php
echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
?>

<?php the_field('sample'); ?>
</div>

<div id="tab-assignments" class="tab-pane">

<?php
echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
?>


<?php the_field('assignments'); ?>
</div>
  
<div id="tab-fees" class="tab-pane">

<?php
echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
?>


		<div class="row">
										
												<?php while(the_repeater_field('payment_plan_options')): ?>		
												<aside class="group col-md-4">
												<div class="payment-ctas">
													<h3><?php the_sub_field('payment_plan_title'); ?></h3>
													<?php the_sub_field('payment_plan_description'); ?>
												</div><!--payment-ctas-->
											</aside><!--span-->
										<?php endwhile; ?>
										</div><!--row-->

				

</div><!--tab-fees-->


<div id="tab-compare" class="tab-pane">


<div id="compareNinjaTable_62243">
	<img src="http://compareninja.com/public/images/loader_small.gif" style="display: block; width: 18px; margin: 50px auto 0;" />
	<p style="display: none;">Created with Compare Ninja</p>
</div>

<script type="text/javascript">
(function() {
	var cn = document.createElement('script'); cn.type = 'text/javascript';
	cn.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'compareninja.com/API/table/62243?cnurl=' + window.location.href;
	var s = document.getElementsByTagName('head')[0].appendChild(cn);
})();
</script>





</div><!--tab-fees-->
  
<div class="enrollment-links">
<a id="fillForm" class="btn btn-lg btn-primary" href="#topArea" role="button">
<?php if($product['id'] == 5159):
    echo 'Buy Now</a>';
else:
    echo 'Enrol Online</a>';
endif;
?> 

<a class="btn brochure-btn btn-default" href="<?php bloginfo('url'); ?>/download-brochure/">BROCHURE</a>
<a class="btn enrolment-btn btn-default pull-right" href="<?php bloginfo('url'); ?>/courses">Back to All</a>
</div>	 
						
						

</div>

  <!-- tab-container -->
  
  
  










<!-- PAYMENT AREA TABS -->
<div id="payment-container" class="container tab-container tabbed-content-margin">

<ul class="nav etabs nav-tabs" id="myTab">
<li class="active"><a href="#tab-one" data-toggle="tab">Credit Card / Paypal</a></li>
<li><a href="#tab-three" data-toggle="tab">Direct Deposit</a></li>
<li><a href="#tab-four" data-toggle="tab">Cheque</a></li>
<li><a href="#tab-six" data-toggle="tab">Phone</a></li>
</ul>


 

<div id="tab-one" class="tab-pane">

<h2>CREDIT CARD</h2>


<?php 
echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>';

 ?>
<p>Please choose your preferred payment plan. Choose from either a full payment or a subscription based payment (4 or 10 months in duration).</p>

<p><strong>PAYMENT OPTIONS:</strong></p>

<?php
//Shows the Price (includes sale price if applicable)
	echo '<div id="foxyshop_main_price">';
	foxyshop_price();
	echo '</div>';
the_field('short_description');
foxyshop_product_variations(2);


echo "<input type=\"hidden\" id=\"sub_enddate_". 
esc_attr($product['id']).
"\" name=\"sub_enddate\" value=\"\" />";

echo '<button type="submit" name="x:productsubmit" id="productsubmit" class="foxyshop_button">Add To Cart</button>'; 

echo '</form>';

?>

<?php //Add On Products ($qty [1 or 0], $before_entry, $after_entry)
if(foxyshop_addon_products() != ''): ?>
<?php foxyshop_addon_products(); ?>
<?php endif; ?>




</div>
  


<?php endwhile; // end of the loop. ?>


<?php
query_posts('page_id=103');
while (have_posts()) : the_post();
?>

<div id="tab-three" class="tab-pane active">

<h2>Direct Deposit</h2>
<?php echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>' ?>
<?php the_field('direct_deposit'); ?>
</div>
  
<div id="tab-four" class="tab-pane">

<h2>Cheque</h2>
<?php echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>' ?>
<?php the_field('cheque'); ?>
</div>

<div id="tab-six" class="tab-pane">

<h2>Phone</h2>
<?php echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>' ?>
<?php the_field('phone'); ?>
</div>
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?>
</div>
<!-- tab-container -->
  
<div class="clear"></div>

<?php
edit_post_link('<img src="' . FOXYSHOP_DIR . '/images/editicon.png" alt="Edit Product" width="16" height="16" />','<span class="foxyshop_edit_product">','</span>');
//Check Inventory Levels and Display Status (last variable allows backordering of out of stock items)
// foxyshop_inventory_management("There are only %c item%s left in stock.", "Item is not in stock.", false);

	
//Shows any related products
foxyshop_related_products("Related Products");

//Custom Code Can Go Here


echo '</div>';
?>


<script>

$("select.variation-payment-plan-options").change(function() {
	var current_value = $(this).val();
	
	//2 Months
	if (current_value.substring(0, 8) == "2 Months") {
		<?php $new_date = date("Ymd", strtotime("+2 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";

	//4 Months
	} 
	
	else if (current_value.substring(0, 8) == '4 Months') {
		<?php $new_date = date("Ymd", strtotime("+4 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	
	else if (current_value.substring(0, 8) == '6 Months') {
		<?php $new_date = date("Ymd", strtotime("+6 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	
	else if (current_value.substring(0, 8) == '8 Months') {
		<?php $new_date = date("Ymd", strtotime("+8 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	else if (current_value.substring(0, 9) == '10 Months') {
		<?php $new_date = date("Ymd", strtotime("+10 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	


	//Set the Value
	$("#sub_enddate_<?php echo esc_attr($product['id']); ?>").val(new_date);
});

</script>




	<div class="clr"></div>
	
	
	
	<div id="enrolmentWrap" class="container-fluid contact-form-wrap">
		 
        <div class="container">
			
			<div class="row">
			
				<div class="col-md-12">
					<?php gravity_form(1, $display_title=true, 
					$display_description=true, 
					$display_inactive=false, 
					$field_values=null, 
					$ajax=true, $tabindex); 
					
				
					?>
					
				<div class="enrollment-links">	
<a id="back-cart" class="btn black back enrolment-btn btn-default pull-left" href="#">Back</a>
</div>	


	
		



			
					
					
					
				</div> 
					
				</div> <!-- row -->
                         
                     
             </div><!-- container-->
                        
         </div><!-- container-fluid-->
                        
                       
                        
	

		
		








		
		
			   </article>
		</section>
		<!-- /section -->
	</main>



<?php 
/*
if($_SESSION['VIEW_CART'] != 1) {
header("Location: http://zackeryfretty.com/blink-182/");
}

*/


/*


------------ ATTENTION ------------
If you need to edit this template, do not edit the version in the plugin directory. Place a copy in your template folder and edit it there.
This will allow you to upgrade FoxyShop without breaking your customizations. More details here: http://www.foxy-shop.com/documentation/theme-customization/
-----------------------------------
*/ ?>










<?php foxyshop_include('footer'); ?>
<?php get_footer(); ?>