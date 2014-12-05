<?php
#error_reporting(0);
session_start();
session_regenerate_id(true);
$_SESSION = array();
$debug = 0;

require_once 'CallerService.php';
require_once 'getprice.php';

 if(! isset($token)) {$nvpArr = array(); //GENERAL CART DETAILS
	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
	$cart['CURRENCYCODE']="GBP";
	$cart['COUNTRYYCODE']="GB";
	$cart['PAYMENTACTION']="Sale";
	$cart['LOCALECODE'] = "GB";
	$cart['RETURNURL'] = urlencode($url.'/DoExpressCheckoutPayment.php');
	$cart['CANCELURL'] = urlencode("$url/cart/paypal");

	//DETERMINE ORDER OF PRODUCTS (RECURRING FIRST)
	$count = 0;
	for ($x=1; $x<6; $x++) {
		if (isset($_GET['add'.(string)$x]))
			$count++;
	}
	if (isset($_REQUEST['pkg']) && isset($_REQUEST['title']) && isset($_REQUEST['entry_id'])){
		$pkg = getPrice($_REQUEST['pkg'], $_REQUEST['entry_id'], $_REQUEST['title']);	
		if ($pkg['recurring-price'] == 0){ 
			$mainIndex = $count;
			$x = 0;
		}	
		else {
			$mainIndex = 0;
			$x = 1;
		}
	}
	else 
		$x = 0;

	//ADDON ITEMS
	$cart['ITEMAMT'] = 0;			
	for ($y=5; $y>0; $y--) {
		if (isset($_GET["add".(string)$y])) {
			$adn = getPrice($_GET["add".(string)$y]);
			$p1['L_NAME'.(string)$x] = $adn['name'];
			$p1['L_AMT'.(string)$x]  = $adn['initial-price'];

			$cart['ITEMAMT'] += $adn['initial-price'];
			$p1['L_QTY'.(string)$x]  = 1;
			$p1['L_DESC'.(string)$x] = $adn['name'];
#			$p1['L_TAXAMT'.(string)$x]  = sprintf("%01.2f", $adn['initial-price'] * .1);
			if ($adn['recurring-price'] != 0) {


				$p1['L_DESC'.(string)$x] = "Recurring: " . $adn['name'];
				$_SESSION['R'.(string)$x.'recurr']  = $adn['recurring-price'];
				$_SESSION['R'.(string)$x.'init']  = $adn['initial-price'];
				$p1['L_BILLINGTYPE'.(string)$x]= "RecurringPayments";
				$p1['L_BILLINGAGREEMENTDESCRIPTION'.(string)$x] = $adn['name'] . ": " .$adn['recurring-price'] . " monthly";
				$p1['L_PROFILESTARTDATE'.(string)$x] = gmdate("Y-m-d\TH:i:s\Z"); 
				$p1['L_BILLINGPERIOD'.(string)$x] = 'Month';
				$p1['L_BILLINGFREQUENCY'.(string)$x] = 1;	
			}
			$x++;
		}
	}

	if (isset($_REQUEST['pkg'])){			
			//MAIN PACKAGE DETAILS
			$p1['L_NAME'.(string)$mainIndex] = $pkg['name'];
		   $p1['L_AMT'.(string)$mainIndex]  = $pkg['initial-price'];
			$p1['L_QTY'.(string)$mainIndex]  = 1;
			$p1['L_DESC'.(string)$mainIndex] = $pkg['name'];
			if ($_GET['study_method'] == "elearn") {
				$cart['NOSHIPPING']= "1";
				$p1['L_DESC'.(string)$mainIndex] .= " - Elearning";
			}
			else {
				$cart['SHIPPINGAMT'] = "0.00";
				$p1['L_DESC'.(string)$mainIndex] .= " - Correspondence";
			}

			if ($pkg['recurring-price'] != 0) {
				$p1['L_DESC'.(string)$mainIndex] = "Recurring: " . $pkg['name'];
				$p1['L_INITAMT'.(string)$mainIndex]  = 0;
				$_SESSION['R'.(string)$mainIndex.'recurr'] = $pkg['recurring-price'];
				$_SESSION['R'.(string)$mainIndex.'init'] = 0;


				$p1['L_BILLINGTYPE'.(string)$mainIndex] = "RecurringPayments";
				$p1['L_BILLINGAGREEMENTDESCRIPTION'.(string)$mainIndex] = $pkg['name'] . ": " .$pkg['recurring-price'] . "  " . $pkg['duration'] . " months";
#				$p1['L_PROFILESTARTDATE'.(string)$mainIndex] = date("Y-m-d\TH:i:s\Z", time()); 
				$p1['L_BILLINGPERIOD'.(string)$mainIndex] = 'Month';
				$p1['L_BILLINGFREQUENCY'.(string)$mainIndex] = 1;	
				$p1['L_TOTALBILLINGCYCLES'.(string)$mainIndex] = $pkg['duration'];
				$nvpArr =  array_merge($nvpArr, $p1);
			}

			$cart['ITEMAMT'] += $p1['L_AMT'.(string)$mainIndex];
#			$p1['L_TAXAMT'.(string)$mainIndex]  = sprintf("%01.2f", $p1['L_AMT'.(string)$mainIndex] * .1);		
	}


			$cart['AMT'] = $cart['TAXAMT']+$cart['ITEMAMT']+ $cart['SHIPPINGAMT'];
			$cart['ITEMAMT'] = sprintf("%01.2f", $cart['ITEMAMT']);  
			$cart['MAXAMT']= $cart['AMT']+25.00;
			$nvpArr = array_merge($p1,$cart);
	
			$nvpstr = array2nvp($nvpArr);
 			$resArray=hash_call("SetExpressCheckout",$nvpstr);
			$_SESSION['set_exRes'] = $resArray;
			$_SESSION['set_ex'] = $nvpArr;
 			$_SESSION['order'] = $nvpArr;
			
			if ($debug == 1) {			
				printArray($nvpArr);
				printArray($resArray);
			}


		   $ack = strtoupper($resArray["ACK"]);
		   if($ack=="SUCCESS"){
					// Redirect to paypal.com here
					$token = urldecode($resArray["TOKEN"]);
					$payPalURL = PAYPAL_URL.$token;
					header("Location: ".$payPalURL);
		  	} else  {
				
				printArray($_SESSION['order']);
				printArray($_SESSION);
				echo "<br />";
				printArray($_SESSION['set_exRes']);
			}
} 


?>
