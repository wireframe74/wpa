<?php
session_start(); 
require_once 'CallerService.php';

$token = $_REQUEST['token'];

$debug = 0	;

$txids = array();
$profids = array();
$count = 0;
$amt = 0;

//
//LOOP THROUGH ALL PRODUCTS
//
for ($x=0; $x<6; $x++) {
	if (isset($_SESSION['set_ex']['L_AMT'.(string)$x])) {
		if (isset($_SESSION['set_ex']['L_BILLINGTYPE'.(string)$x])) {
			//
			//  Product is recurring
			//
			$crpp['METHOD'] = 'CreateRecurringPaymentsProfile';

			$crpp['PROFILESTARTDATE'] = gmdate("Y-m-d\TH:i:s\Z");
				$crpp['BILLINGPERIOD'] = 'Month';
			$crpp['BILLINGFREQUENCY'] = '1';
			$crpp['TOKEN'] = $_REQUEST['token'];
			$crpp['COUNTRYCODE'] = $_SESSION['set_ex']['COUNTERYCODE'];
			$crpp['CURRENCYCODE'] = $_SESSION['set_ex']['CURRENCYCODE']; 
			$crpp['DESC'] = $_SESSION['set_ex']['L_BILLINGAGREEMENTDESCRIPTION'.(string)$x];
			
			//Limit Billing Cycles?
			if (isset($_SESSION['set_ex']['L_TOTALBILLINGCYCLES'.(string)$x])) 
				$crpp['TOTALBILLINGCYCLES'] =  ($_SESSION['set_ex']['L_TOTALBILLINGCYCLES'.(string)$x]);
			else
				unset ($crpp['TOTALBILLINGCYCLES']);

			//Initial Amount?
			$crpp['INITAMT'] = $_SESSION['R'.(string)$x.'init']; 
			if ($crpp['INITAMT'] == 0)
				unset($crpp['INITAMT']);

			//Get Total for Product
			$crpp['AMT'] = $_SESSION['R'.(string)$x.'recurr']; 
// 			$crpp['TAXAMT'] =  sprintf("%01.2f", $crpp['AMT'] * .1);
						
			//API call
			$crppstr = array2nvp($crpp);
			$resArray=hash_call("CreateRecurringPaymentsProfile",$crppstr);

			//Result for Receipt
			if ($resArray['ACK'] == "Success"){
				$r['PROFILEID'] = $resArray['PROFILEID'];
				$r['METHOD'] = "GetRecurringPaymentsProfileDetails";
				$s = array2nvp($r);
				$resArray = hash_call("GetRecurringPaymentsProfileDetails",$s);
				$recur['item'] = $resArray['DESC'];
				$recur['initial'] = $resArray['AMT'];

				$recur['cycles'] = $resArray['TOTALBILLINGCYCLES'];

				$recur['regular'] = $resArray['REGULARAMT'];
				$recur['regularTax'] = $resArray['REGULARTAXAMT'];
				$checkout['recur'][] = $recur;	
			}
			else printArray($resArray);

			//API info
			if ($debug == 1) {
				echo "RECURRING <br />";
				printArray($crpp);
				printArray($resArray);
				echo "<hr>";
			}

		} else {

			//
			//   Product is not recurring
			//
			$p1['METHOD'] = 'DoExpressCheckoutPayment';
			$p1['TOKEN'] = $_REQUEST["token"];
			$p1['PAYERID'] = $_REQUEST["PayerID"];
			$p1['PAYMENTACTION'] = "Sale";
			$p1['CURRENCYCODE'] = $_SESSION['set_ex']['CURRENCYCODE'];

			//Set Each Item
			$p1['L_AMT'.(string)$count] = sprintf("%01.2f", $_SESSION['set_ex']['L_AMT'.(string)$x]);
			$p1['L_NAME'.(string)$count] = $_SESSION['set_ex']['L_NAME'.(string)$x];

// 			$p1['L_TAXAMT'.(string)$count] = sprintf("%01.2f", $p1['L_AMT'.(string)$count]);
			$amt += $p1['L_AMT'.(string)$count];
			$count++;
		}
	}
}



//Do Checkout
if (isset($p1)){
	$p1['ITEMAMT'] = sprintf("%01.2f", $amt);
	$p1['SHIPPINGAMT'] = sprintf("%01.2f", $_SESSION['set_ex']['SHIPPINGAMT']); 
// 	$p1['TAXAMT'] =  sprintf("%01.2f", ($p1['ITEMAMT'] + $p1['SHIPPINGAMT']) * .1);
	$p1['AMT'] =  sprintf("%01.2f",$p1['ITEMAMT'] + $p1['TAXAMT'] + $p1['SHIPPINGAMT']);
	
	$pStr= array2nvp($p1);
	$resArray=hash_call("DoExpressCheckoutPayment",$pStr);

	if (substr($resArray['ACK'],0,5) == "Succe")			
		$txid = $resArray['TRANSACTIONID'];
	else 
		printArray($p1);
	
	if ($debug == 1) {	
		printArray($_SESSION);
		printArray($p1);
		printArray($resArray);
		$a['TOKEN'] = $_REQUEST['token'];
		$a['METHOD'] = "GetExpressCheckoutDetails";
		echo "EXP CHECKOUT";
		printArray($a);
		$s = array2nvp($a);
		$resArray=hash_call("GetExpressCheckoutDetails",$s);
		printArray($resArray);
		echo "<hr>";
	}
}


//Get CHECKOUT DETAILS
$a['TOKEN'] = $_REQUEST['token'];
$a['METHOD'] = "GetExpressCheckoutDetails";
$s = array2nvp($a);
$resArray=hash_call("GetExpressCheckoutDetails",$s);	
$checkout['total'] =	$resArray['AMT'];
$checkout['shipping'] = $resArray['SHIPPINGAMT'];
$checkout['tax'] = $resArray['TAXAMT'];
for ($x=0; $x<6; $x++) {
	if (isset($resArray['L_DESC'.(string)$x]) && (substr($resArray['L_DESC'.(string)$x], 0, 6 ) != "Recurr"))
		$checkout["item"][] = $resArray['L_NAME'.(string)$x] . " - " . $resArray['L_AMT'.(string)$x];
}
// -----------------


//
//Display Results
//
	
echo "<html>

<head>

    <title>Thank you page</title>

  <style>

  body {font-family:arial, helvetica, sans-serif;}

  #container {

    background-image: -moz-linear-gradient(top, #fcfcfc, #000 23%, rgba() 89%, #bfbfbf);

    border:1px solid #dbdbdb;

    background-image: -webkit-gradient(linear, center top, center bottom, from(#fcfcfc), to(#bfbfbf), color-stop(23%, #000), color-stop(89%, rgba()));

    box-shadow: 0 1px 15px rgba(0,0,0,0.19);

    position:relative; 

    padding: 29px;

    width: 400px;  margin: 40px auto;

}

h2 {

    font-family: georgia;

    font-size: 40px;

    font-weight: normal;

}

   h3 {

    border-top: 1px solid #DBDBDB;

    font-size: 14px;

    font-weight: bold;

    margin-top: 24px;

    padding-top: 20px;

}

p {

    font-size: 12px;

    line-height: 154%;

}

#logo {width:330px; height:103px; position:relative; margin:10px auto;}

a img {border:none}

  </style>

</head>

<body>

<div id=\"container\">

<div id=\"logo\"><img src=\"http://www.weddingplanningacademy.co.uk/assets/images/logo_uk.gif\" /></div>

<h2>Thank you for order!</h2>

<p>A representative shall be in touch to discuss your needs in greater depth shortly.</p>";
echo "<h3>Checkout Payment</h3>";
// printArray($checkout['item']);
echo "<p>";
echo "Shipping: " . $checkout['shipping'] . "<br />";
echo "Tax: " . $checkout['tax'] . "<br />";
echo "Total: " . $checkout['total'] . "<br />";
if (isset($checkout['recur']))
	foreach ($checkout['recur'] as $bill){
		echo "<br />Recurring Billing Item<br />";	
		echo $bill['item'] . " + GST";
		echo "<br />";
	}
#print_r($_SESSION['set_ex']);
echo "</p>";
?>
<a href="http://www.weddingplanningacademy.co.uk"><img src="http://www.weddingplanningacademy.co.uk/assets/images/return.gif" /></a>
</div>
</body>
</html>
