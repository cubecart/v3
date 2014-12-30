<?php
/*********************************************************
Basic IPN script to be used on your server to receive IPN POSTed (back) 
from Chronopay payments.

This script is provided "as is" with NO WARRANTY OF ANY KIND, INCLUDING
THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
PURPOSE


**********************************************************/

include("../../../includes/ini.inc.php");
include("../../../includes/global.inc.php");
require_once("../../../classes/db.inc.php");
$db = new db();
include_once("../../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../../language/".$config['defaultLang']."/lang.inc.php");
include("../../../includes/currencyVars.inc.php");

$module = fetchDbConfig("Chronopay");

// Get the IP address of the server calling your script

$IP = $_SERVER['REMOTE_ADDR'];


// Logging for testing
$debug = true;
if( $debug==true )
{
	$log_file = $glob['rootDir'].'/chrono.log';
	$str = "IPN Request from: $IP\n";
	$str .= "Date: ".date('Y-m-d H:i:s')."\n";
	$str .= "POST: \n";
	foreach( $_POST as $k=>$v )
		$str .= "   $k => $v \n";
	$str .= "GET: \n";
	foreach( $_GET as $k=>$v )
		$str .= "   $k => $v \n";
	$str .= "----------------------------------\n\n";
	$fh = fopen( $log_file, 'a' );
	if( $fh )
	{
		fwrite( $fh, $str );
		fclose( $fh );
	}
}
// end logging




/* testing
$_POST = array(
		'transaction_type' => 'onetime', 
		'customer_id' => '003197-000000050', 
		'site_id' => '003197-0005', 
		'product_id' => '003197-0005-0001', 
		'date' => '', 
		'time' => '',
		'transaction_id' => '', 
		'email' => 'sam.pipe@gmail.com', 
		'country' => 'BHS', 
		'name' => 'JIM BOB', 
		'city' => 'Auckland', 
		'street' => '21 Jump St',  
		'phone' => '1231231123', 
		'state' => 'XX', 
		'zip' => '1001', 
		'language' => 'EN', 
		'cs1' => '060926-061411-6075', 
		'cs2' => '7722a94230cc9cd0f28fe8e06319ba9f', 
		'cs3' => '6.99', 
		'username' => '',
		'password' => '', 
		'total' => '6.99', 
		'currency' => 'USD', 
		);
// testing */




// process response.
$trans_type 	= trim( stripslashes($_POST['transaction_type']) );
$trans_id 		= trim( stripslashes($_POST['transaction_id']) );
$cust_id 		= trim( stripslashes($_POST['customer_id']) );
$site_id 		= trim( stripslashes($_POST['site_id']) );
$product_id 	= trim( stripslashes($_POST['product_id']) );
$trans_date 	= trim( stripslashes($_POST['date']) );
$trans_time 	= trim( stripslashes($_POST['time']) );
$trans_name 	= trim( stripslashes($_POST['name']) );
$trans_email 	= trim( stripslashes($_POST['email']) );
$total		 	= trim( stripslashes($_POST['total']) );
$cart_order_id	= trim( stripslashes($_POST['cs1']) );
$cHash			= trim( stripslashes($_POST['cs2']) );
$cTotal 		= trim( stripslashes($_POST['cs3']) );
$amount			= trim( stripslashes($_POST['total']) );

// now validate the request
$retHash = md5( $glob['storeURL'].$product_id.$cTotal );

if( $retHash==$cHash && $trans_type!='' && $cart_order_id!='' )
{
	// valid request from Chronopay server.
	
	// get order details.
	$summary = $db->select("SELECT prod_total, comments, status FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE cart_order_id = ".$db->mySQLsafe($cart_order_id) );	
	
	// validate taht the order hasn;t already been processed.
	if( $summary[0]['status']!=1 )
	{
		// order is not at a pending status.. fail as this must be an error somewhere or a fake request. 
		exit();
	}
	
	// create tran_log
	$trans_log = 'Transaction ID: '.addslashes($trans_id)."\r\n".
					'Customer ID: '.addslashes($cust_id)."\r\n".
					'Customer Email: '.addslashes($trans_email)."\r\n".
					'Chronopay Date: '.addslashes($trans_date)."\r\n".
					'Chronopay Time: '.addslashes($trans_time)."\r\n";		
	
	// check the status of the payment
	if( $trans_type=='onetime' || $trans_type=='initial' || $trans_type=='rebill' )
	{
		// successful payment
		$ppComment = 'Chronopay Successful Transaction'."\r\n".$trans_log;
		
		// update comment
		if( empty($summary[0]['comment']) )
			$updateComment['comments'] = "'Chronopay Comment: ".$ppComment."'";
		else 
			$updateComment['comments'] = "'".$summary[0]['comments']."\r\n\r\nChronopay Comment: ".$ppComment."'";

		$update = $db->update( $glob['dbprefix']."CubeCart_order_sum", $updateComment,"cart_order_id=".$db->mySQLSafe($cart_order_id) );
		$updateOrder = array( 'status'=>'2' );
		$update = $db->update( $glob['dbprefix']."CubeCart_order_sum", $updateOrder,"cart_order_id=".$db->mySQLSafe($cart_order_id) );
		
		// set order status
		//include("../../../includes/orderSuccess.inc.php");
	}
	else
	{
		// failed payment
		$ppComment = 'Chronopay Declined Transaction'."\r\n".$trans_log;
		
		// update comment
		if( empty($summary[0]['comment']) )
			$updateComment['comments'] = "'Chronopay Comment: ".$ppComment."'";
		else 
			$updateComment['comments'] = "'".$summary[0]['comments']."\r\n\r\nChronopay Comment: ".$ppComment."'";

		$update = $db->update( $glob['dbprefix']."CubeCart_order_sum", $updateComment,"cart_order_id=".$db->mySQLSafe($cart_order_id) );
	}
}
else
{
	// invalid request from Chronopay server.
	// if the transaction is fraudolent or not correct do something to notify yourself of the problem
}
?>