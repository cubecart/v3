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
|	confirmed.php
|   ========================================
|	Order Confirmation
+--------------------------------------------------------------------------
|	This gateway coding was sponsored by:
|   ========================================
|	Big Boy Media Ltd http://www.bigboymedia.com 
+--------------------------------------------------------------------------
*/
if(!isset($_POST['trans_id']) && !isset($_POST['amount'])){
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

	include_once("../../../includes/ini.inc.php");
	
	// INCLUDE CORE VARIABLES & FUNCTIONS
	include_once("../../../includes/global.inc.php");
	$enableSSl = 1;
	
	// initiate db class
	include_once("../../../classes/db.inc.php");
	$db = new db();
	
	include_once("../../../includes/functions.inc.php");
	$config = fetchDbConfig("config");
	
	include_once("../../../includes/sessionStart.inc.php");
	
	include_once("../../../includes/sslSwitch.inc.php");

	include_once("../../../includes/session.inc.php");
	// get exchange rates etc
	include_once("../../../includes/currencyVars.inc.php");
	
	include_once("../../../language/".$config['defaultLang']."/lang.inc.php");

// WORK OUT IS THE ORDER WAS SUCCESSFULL OR NOT ;)

// 1. Include gateway file

include("transfer.inc.php");

// 2. Include function which returns ture or false

$success = successFirst();
	
	if($success == TRUE){
		
		//$cart_order_id = $_POST['trans_id'];
		//include_once("../../../includes/orderSuccess.inc.php");
		$result = "?pg=".base64_encode("SECPay");
		
	} else {
		
		$result = "?f=1&amp;pg=".base64_encode("SECPay");
		
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charsetIso;?>" />
<title>Redirecting...</title>
<meta http-equiv="refresh" content="0;URL=<?php echo $GLOBALS['storeURL']."/confirmed.php".$result; ?>" />
</head>
<body>
<p align="center"><a href="<?php echo $GLOBALS['storeURL']."/confirmed.php".$result; ?>"><?php echo $GLOBALS['storeURL']; ?></a></p>
<?php 

if($success == TRUE){
		
	// add affilate tracking code/module
	$affiliateModule = $db->select("SELECT folder, `default` FROM ".$glob['dbprefix']."CubeCart_Modules WHERE module='affiliate' AND status = 1");

	if($affiliateModule == TRUE) {
	
		for($i=0; $i<count($affiliateModule); $i++){
			
			include("../../../modules/affiliate/".$affiliateModule[$i]['folder']."/tracker.inc.php");
			// VARS AVAILABLE
			// Order Id Number $basket['cart_order_id']
			// Order Total $order[0]['prod_total']
			$basket['cart_order_id'] = $_POST['trans_id'];
			$order[0]['prod_total'] = $_POST['amount'];
			echo $affCode;
		
		}
	
	}
		
}

?>
</body>
</html>
