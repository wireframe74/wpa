<?php
session_start();

/* Template Name: Redirect */
$course = $_GET["course"];
$course = stripslashes($course);


switch ($course)
        {
  case "Certificate in Event Design":
				$product = "Diploma in Wedding and Event Planning";
                header("Location: http://www.thosedigitalthoughts.com/aawep2014/checkout-step-2/");
                break;
 
                case "\"Diploma in Wedding and Event Planning\"":
				
				$_SESSION['courseName'] = 'Diploma in Wedding and Event Planning';
	$product = "Diploma in Wedding and Event Planning";
				header("Location: http://www.thosedigitalthoughts.com/aawep2014/checkout-step-2/");
                break;
 
        }
		




?>