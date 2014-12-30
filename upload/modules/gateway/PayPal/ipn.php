<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	ipn.php
|   ========================================
|	IPN for the PayPal Gateway	
+--------------------------------------------------------------------------
*/


include("../../../includes/ini.inc.php");
include("../../../includes/global.inc.php");
require_once("../../../classes/db.inc.php");
$db = new db();
include_once("../../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../../language/".$config['defaultLang']."/lang.inc.php");
include("../../../includes/currencyVars.inc.php");

$module = fetchDbConfig("PayPal");


// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';

foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
}

if($module['testMode']==1){ 
	$ipnUrl = "www.sandbox.paypal.com";
} else {
	$ipnUrl = "www.paypal.com";
}

// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ($ipnUrl, 80, $errno, $errstr, 30);

	if (!$fp) {
		// HTTP ERROR
	} else {
		fputs ($fp, $header . $req);
		
		while (!feof($fp)) {
		
		$res = fgets ($fp, 1024);
		
		if (strcmp ($res, "VERIFIED") == 0) {
			
			$fail = FALSE;
			
			$summary = $db->select("SELECT prod_total, comments FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE cart_order_id = ".$db->mySQLsafe($_POST['invoice']));
			
			// check the payment_status is Completed
			if($_POST['payment_status']!=="Completed"){
				$fail = TRUE;

				// add auto paypal status to comments of order
				$ppComment = "";
				
				switch($_POST['payment_status']){
					case "Canceled_Reversal":
					$ppComment = "Canceled Reversal - This means a reversal has been canceled; for example, you, the merchant, won a dispute with the customer and the funds for the transaction that was reversed have been returned to you.";
					break;
					
					case "Denied":
					$ppComment = "Denied - You, the merchant, denied the payment. This will only happen if the payment was previously pending due to one of the following pending reasons.";
					break;
					
					case "Failed":
					$ppComment = "Failed - The payment has failed. This will only happen if the payment was attempted from your customer�s bank account.";
					break;
					
					case "Pending":
					$ppComment = "Pending - The payment is pending; see the pending_reason variable for more information. Please note, you will receive another Instant Payment Notification when the status of the payment changes to
\"Completed,\" \"Failed,\" or
\"Denied.\"";
					break;
					
					case "Refunded":
					$ppComment = "Refunded - You, the merchant, refunded the payment.";
					break;
					
					case "Reversed":
					$ppComment = "Reversed - This means that a payment was reversed due to a chargeback or other type of reversal. The funds have been debited from your account balance and returned to the customer. The reason for the reversal is given
by the reason_code variable.";
					break;
					
					default:
					$ppComment = "Unspecified Error.";
					break;
					
				}
				
				if(empty($summary[0]['comment'])){
					$updateComment['comment'] = "PayPal Comment: ".$ppComment;
				} else {
					$updateComment['comment'] = $summary[0]['comment']."\r\n\r\nPayPal Comment: ".$ppComment;
				}
				$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateComment,"cart_order_id=".$db->mySQLSafe($_POST['invoice']));
				
			}

			// check that txn_id has not been previously processed
			$txn_id = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE sec_order_id = ".$db->mySQLsafe($_POST['txn_id']));
			
			
			if($txn_id == TRUE){
				
				$fail = TRUE;
				
			} else {
				
				$updateOrderTxn['sec_order_id'] = $db->mySQLSafe($_POST['txn_id']);
				
				$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateOrderTxn,"cart_order_id=".$db->mySQLSafe($_POST['invoice']));
			
			}
			
			
			// check that receiver_email is your Primary PayPal email
			if($_POST['receiver_email']!==trim($module['email'])){
				$fail = TRUE;
			}
			
			// make sure amount paid is same as in database
			if($_POST['mc_gross']!==$summary[0]['prod_total']){
				$fail = TRUE;
			}
			
			// process payment
			if($fail==FALSE){
				$cart_order_id = $_POST['invoice'];
				include("../../../includes/orderSuccess.inc.php");
			}
			
			
		} elseif (strcmp ($res, "INVALID") == 0) {
			// log for manual investigation
		}
	
	}

fclose ($fp);

}
?>