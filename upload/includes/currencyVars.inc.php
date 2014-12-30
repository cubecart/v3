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
|	currencyVars.inc.php
|   ========================================
|	Gets Currency Array	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$override = array("viewOrder" => 1, "viewOrders" => 1);

$page = treatGet($_GET['act']);

if(isset($override[$page]) && $override[$page] == 1){

	$cCode = $config['defaultCurrency'];
	
} elseif(!empty($ccUserData[0]['currency'])){

	$cCode = $ccUserData[0]['currency'];
	
} elseif(!empty($order[0]['currency'])){

	$cCode = $order[0]['currency'];
	
} else {

	$cCode = $config['defaultCurrency'];
	
}
$currencyVer = $ini['ver'];
$query = "SELECT value, symbolLeft, symbolRight, decimalPlaces, name FROM ".$glob['dbprefix']."CubeCart_currencies WHERE code=".$db->mySQLSafe($cCode);
$currencyVars = $db->select($query);
?>