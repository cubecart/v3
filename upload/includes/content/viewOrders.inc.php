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
|	viewOrders.inc.php
|   ========================================
|	Displays the Customers Orders	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database

$view_orders=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/viewOrders.tpl");

	$view_orders->assign("LANG_YOUR_VIEW_ORDERS",$lang['front']['viewOrders']['your_orders']);

	$orders = $db->select("SELECT status, cart_order_id, time FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE customer_id = ".$db->mySQLsafe($ccUserData[0]['customer_id'])." ORDER BY `time` DESC");
	
	if($orders == TRUE){
		
		$view_orders->assign("LANG_ORDER_LIST",$lang['front']['viewOrders']['orders_listed_below']); 
		
		$view_orders->assign("LANG_ORDER_NO",$lang['front']['viewOrders']['order_no']); 
		$view_orders->assign("LANG_STATUS",$lang['front']['viewOrders']['status']);
		$view_orders->assign("LANG_DATE_TIME",$lang['front']['viewOrders']['date_time']);
		$view_orders->assign("LANG_ACTION",$lang['front']['viewOrders']['action']);
		$view_orders->assign("LANG_VIEW_ORDER",$lang['front']['viewOrders']['view']);

		for($i=0; $i<count($orders);$i++){
			
			$state = $orders[$i]['status'];
			$orders[$i]['state'] =  $lang['orderState'][$state];
			
			$view_orders->assign("TD_CART_CLASS",cellColor($i, $tdEven="tdcartEven", $tdOdd="tdcartOdd"));
			$view_orders->assign("DATA",$orders[$i]);
			$view_orders->assign("DATA",$orders[$i]);
			$view_orders->assign("VAL_DATE_TIME",formatTime($orders[$i]['time']));
			$view_orders->parse("view_orders.session_true.orders_true.repeat_orders");
		}
		
	
		$view_orders->parse("view_orders.session_true.orders_true");
	
	} else {
		$view_orders->assign("LANG_NO_ORDERS",$lang['front']['viewOrders']['no_orders']);
		$view_orders->parse("view_orders.session_true.orders_false");
	
	}
	
	
	$view_orders->assign("LANG_LOGIN_REQUIRED",$lang['front']['viewOrders']['login_required']);
	
	if($ccUserData[0]['customer_id']>0) $view_orders->parse("view_orders.session_true");
	
	else $view_orders->parse("view_orders.session_false");
	
	$view_orders->parse("view_orders");
	
$page_content = $view_orders->text("view_orders");

if($_GET["ccdl"]){
	$page_content = "ccdl";
}
?>