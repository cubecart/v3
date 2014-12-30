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
|	apc.php
|   ========================================
|	APC for the Nochex Gateway	
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

$module = fetchDbConfig("Nochex_APC");


// read the POST data and compile request string for validation call
$params = array();
foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$params[] = "$key=$value";
}
$params = implode("&", $params);

$validation_url = "www.nochex.com";

// post back to Nochex server to validate
$header .= "POST /nochex.dll/apc/apc HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($params) . "\r\n\r\n";
$fp = fsockopen ($validation_url, 80, $errno, $errstr, 30);

	if (!$fp) {
		// HTTP ERROR
	} else {
		fputs ($fp, $header . $params);
		
		while (!feof($fp)) {
		
		$res = fgets ($fp, 1024);
		
		if (strcmp ($res, "AUTHORISED") == 0) {
			
			$fail = FALSE;
			$cleared = TRUE;
			
			$summary = $db->select("SELECT prod_total, comments FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE cart_order_id = ".$db->mySQLsafe($_POST['order_id']));
			
			// check that the transaction has not been previously processed
			$txn_id = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE sec_order_id = ".$db->mySQLsafe($_POST['transaction_id']));
			
			if($txn_id == TRUE){
				$fail = TRUE;
			} else {
				$updateOrderTxn['sec_order_id'] = $db->mySQLSafe($_POST['transaction_id']);
				$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateOrderTxn,"cart_order_id=".$db->mySQLSafe($_POST['order_id']));
			}
			
			// check that the transaction status is correct and mark test transactions
			if(strtolower($_POST['status'])=="test"){
				if($module['testMode']==0){
					$fail = TRUE;
				}else{
					$cleared = FALSE;
				}
			}
			
			// check that to_email is your Nochex email address
			if(strtolower($_POST['to_email'])!==strtolower(trim($module['email']))){
				$fail = TRUE;
			}
			
			// make sure amount paid is same as in database
			if($_POST['amount']!=$summary[0]['prod_total']){
				$fail = TRUE;
			}
			
			// process payment
			if($fail==FALSE){
				if($cleared==TRUE){
					$cart_order_id = $_POST['order_id'];
					include("../../../includes/orderSuccess.inc.php");
				}else{
					$updateOrderStatus['status'] = $db->mySQLSafe(7);
					$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateOrderStatus,"cart_order_id=".$db->mySQLSafe($_POST['order_id']));
				}
			}
			
			
		} elseif (strcmp ($res, "DECLINED") == 0) {
			// mark order as declined
			$updateOrderStatus['status'] = $db->mySQLSafe(4);
			$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateOrderStatus,"cart_order_id=".$db->mySQLSafe($_POST['order_id']));
		}
	
	}

fclose ($fp);

}
?>