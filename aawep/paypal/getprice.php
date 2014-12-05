<?php

/*
Given an entry_id, this function    
Returns an array with the following fields: 
    [name] => Event Design Certificate IV
    [initial-price] => 374.25
    [recurring-price] => 374.25
    [duration] => 4
	
	If recurring-price is 0, then ignore duration.	
 */


#print_r(getPrice(61));







function getPrice($meta_key, $entry_id, $title) {

$conf['db_hostname'] = "localhost";
$conf['db_username'] = "aawepcom_thepal";
$conf['db_password'] = "U)Dr04l3U+~n";
$conf['db_name'] = "aawepcom_scotire";

if (($SQL_ID = mysql_connect($conf['db_hostname'],$conf['db_username'],$conf['db_password']))) {
	mysql_select_db($conf['db_name'], $SQL_ID);
}

$query = "select * from wp_postmeta where post_id = '$entry_id' AND meta_key = '$meta_key'";

$res  = mysql_query($query, $SQL_ID);

mysql_close($SQL_ID);

switch ($meta_key) {
    case "pp_full":
        $duration = "1";
        break;
    case "pp_2":
        $duration = "2";
        break;
    case "pp_4":
        $duration = "4";
        break;
    case "pp_6":
        $duration = "6";
        break;
    case "pp_8":
        $duration = "8";
        break;
    case "pp_10":
        $duration = "10";
        break;
}

// TODO: Look at old site to confirm values for recurring and duration

while ($row = mysql_fetch_assoc($res)) {
	$product['name'] = $title;
	$product['initial-price'] = $row['meta_value'];
	$product['recurring-price'] = $row['meta_value'];
	$product['duration'] = $duration;
}

return $product;

}
?>