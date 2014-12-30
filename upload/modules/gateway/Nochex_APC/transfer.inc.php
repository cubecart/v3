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
|	transfer.php
|   ========================================
|	Core functions for the Nochex Gateway	
+--------------------------------------------------------------------------
*/

/*
//////////////////////////
// NOCHEX GATEWAY
//////////////////////////
// IN THE REPEATED REGION
//////
$orderInv['productId']						- product id as an integer
$orderInv['name']							- product name as a varchar
$orderInv['price']							- price of each product (inc options)
$orderInv['quantity']						- quantity of products as an integer
$orderInv['product_options']				- products attributes as test
$orderInv['productCode']					- product code as a varchar
$i											- This is the current incremented integer starting at 0

/////////////////////////
// FIXED VARS
///////
$cart_order_id							- cart order id as a varchar
$ccUserData[0]['email']						- Customers email address
$ccUserData[0]['title']						- Customers title (Mr Miss etc...)
$ccUserData[0]['firstName']					- Customers first name
$ccUserData[0]['lastName']					- Customers last name 
$ccUserData[0]['add_1']						- Invoice Address line 1
$ccUserData[0]['add_2']						- Invoice Address line 1
$ccUserData[0]['town']						- Invoice Town or city
$ccUserData[0]['county']					- Invoice County or state
$ccUserData[0]['postcode']					- Invoice Post/Zip Code
$ccUserData[0]['country']					- Invoice country Id we can look up the country name like this
										countryName($ccUserData[0]['country']);
$ccUserData[0]['phone']						- Contact phone no
$ccUserData[0]['mobile']					- Mobile/Cell phone number

$basket['delInf']['title']				- Delivery title (Mr Miss etc...)
$basket['delInf']['firstName']			- Delivery customers first name
$basket['delInf']['lastName']			- Delivery customers last name 
$basket['delInf']['add_1']				- Delivery Address line 1
$basket['delInf']['add_2']				- Delivery Address line 1
$basket['delInf']['town']				- Delivery Town or city
$basket['delInf']['county']				- Delivery County or state
$basket['delInf']['postcode']			- Delivery Post/Zip Code
$basket['delInf']['country']			- Delivery  country Id we can look up the country name like this	
									countryName($basket['delInf']['country']);


$basket['subTotal'] 					- Order Subtotal (exTax and Shipping)
$basket['grandTotal']					- Basket total which has to be paid (inc Tax and Shipping).
$basket['tax']							- Total tax to pay
$basket['shipCost']						- Shipping price
////////////////////////////////////////////////////////
*/

$module = fetchDbConfig("Nochex_APC");

function repeatVars(){

		return FALSE;
	
}

function fixedVars(){
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS;
	$amount = sprintf("%.2f",$basket['subTotal']+$basket['tax']);
	$hiddenVars = "";
	$hiddenVars.= "<input type='hidden' name='description' value='Cart Order No: ".$cart_order_id."' />";
	$hiddenVars.= "<input type='hidden' name='amount' value='".$amount."' />";
	switch($module['accType']){
		case "seller":
			$hiddenVars.= "<input type='hidden' name='firstname' value='".$ccUserData[0]['firstName']."' />";
			$hiddenVars.= "<input type='hidden' name='lastname' value='".$ccUserData[0]['lastName']."' />";
			$hiddenVars.= "<input type='hidden' name='firstline' value='".$ccUserData[0]['add_1']."' />";
			$hiddenVars.= "<input type='hidden' name='town' value='".$ccUserData[0]['town']."' />";
			$hiddenVars.= "<input type='hidden' name='county' value='".$ccUserData[0]['county']."' />";
			$hiddenVars.= "<input type='hidden' name='postcode' value='".$ccUserData[0]['postcode']."' />";
			$hiddenVars.= "<input type='hidden' name='email_address_sender' value='".$ccUserData[0]['email']."' />";
			$hiddenVars.= "<input type='hidden' name='email' value='".$module['email']."' />";
			$hiddenVars.= "<input type='hidden' name='ordernumber' value='".$cart_order_id."' />";
			$hiddenVars.= "<input type='hidden' name='returnurl' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;pg=".base64_encode("Nochex_APC")."&amp;success=1&amp;oid=".base64_encode($cart_order_id)."' />";
			$hiddenVars.= "<input type='hidden' name='cancelurl' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;pg=".base64_encode("Nochex_APC")."&amp;f=1&amp;oid=".base64_encode($cart_order_id)."' />";
			$hiddenVars.= "<input type='hidden' name='responderurl' value='".$GLOBALS['storeURL']."/modules/gateway/Nochex_APC/apc.php' />";
			if($module['testMode']==1){
				$hiddenVars.= "<input type='hidden' name='status' value='test' />";
			}
			break;
		case "merchant":
			$billing_address = array();
			if(strlen($ccUserData[0]['add_1'])>0) $billing_address[] = $ccUserData[0]['add_1'];
			if(strlen($ccUserData[0]['add_2'])>0) $billing_address[] = $ccUserData[0]['add_2'];
			if(strlen($ccUserData[0]['town'])>0) $billing_address[] = $ccUserData[0]['town'];
			if(strlen($ccUserData[0]['county'])>0) $billing_address[] = $ccUserData[0]['county'];
			if(strlen($module['merchant_id'])>0){
				$merchant_id = $module['merchant_id'];
			}else{
				$merchant_id = $module['email'];
			}
			$hiddenVars.= "<input type='hidden' name='postage' value='".$basket['shipCost']."' />";
			$hiddenVars.= "<input type='hidden' name='billing_fullname' value='".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']."' />";
			$hiddenVars.= "<input type='hidden' name='billing_address' value='".implode("\r\n", $billing_address)."' />";
			$hiddenVars.= "<input type='hidden' name='billing_postcode' value='".$ccUserData[0]['postcode']."' />";
			$hiddenVars.= "<input type='hidden' name='customer_phone_number' value='".$ccUserData[0]['phone']."' />";
			$hiddenVars.= "<input type='hidden' name='email_address' value='".$ccUserData[0]['email']."' />";
			$hiddenVars.= "<input type='hidden' name='order_id' value='".$cart_order_id."' />";
			$hiddenVars.= "<input type='hidden' name='merchant_id' value='".$merchant_id."' />";
			$hiddenVars.= "<input type='hidden' name='success_url' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;pg=".base64_encode("Nochex_APC")."&amp;success=1&amp;oid=".base64_encode($cart_order_id)."' />";
			$hiddenVars.= "<input type='hidden' name='test_success_url' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;pg=".base64_encode("Nochex_APC")."&amp;success=1&amp;oid=".base64_encode($cart_order_id)."' />";
			$hiddenVars.= "<input type='hidden' name='cancel_url' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;pg=".base64_encode("Nochex_APC")."&amp;f=1&amp;oid=".base64_encode($cart_order_id)."' />";
			$hiddenVars.= "<input type='hidden' name='declined_url' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;pg=".base64_encode("Nochex_APC")."&amp;f=1&amp;oid=".base64_encode($cart_order_id)."' />";
			$hiddenVars.= "<input type='hidden' name='callback_url' value='".$GLOBALS['storeURL']."/modules/gateway/Nochex_APC/apc.php' />";
			if($module['passTemplate']==1){
				$template_html = nochex_get_template_html();
				$hiddenVars.= "<input type='hidden' name='header_html' value='".$template_html[0]."' />";
				$hiddenVars.= "<input type='hidden' name='footer_html' value='".$template_html[1]."' />";
			}
			if($module['testMode']==1){
				$hiddenVars.= "<input type='hidden' name='test_transaction' value='100' />";
			}
			break;
	}
	return $hiddenVars;
}

function success(){
	if(isset($_GET["success"])){
		return TRUE;
	}else{
		return FALSE;
	}
}

function nochex_get_template_html(){
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS;
	global $db, $glob, $config, $lang;
	ob_start();
	$body = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/global/cart.tpl");
	if(isset($_GET['searchStr'])){
		$body->assign("SEARCHSTR",treatGet($_GET['searchStr']));
	} else {
		$body->assign("SEARCHSTR","");
	}
	$body->assign("CURRENCY_VER", $currencyVer);
	$body->assign("VAL_ISO", $charsetIso);
	$body->assign("VAL_SKIN", $config['skinDir']);
	$body->assign("PAGE_CONTENT", "<!-- EXPLODER -->");
	include("includes/boxes/searchForm.inc.php");
	$body->assign("SEARCH_FORM", $box_content);
	include("includes/boxes/session.inc.php");
	$body->assign("SESSION", $box_content);
	include("includes/boxes/siteDocs.inc.php");
	$body->assign("SITE_DOCS", $box_content);
	include("includes/boxes/cartNavi.inc.php");
	$body->assign("CART_NAVI", $box_content);
	$body->parse("body");
	$body->out("body");
	$body = ob_get_contents();
	ob_end_clean();
	$body = str_replace(array("<html>", "<head>", "</head>", "<body>"), "", $body);
	$body = array_shift(explode("</body>", $body));
	//die("<pre>".print_r($GLOBALS, true)."</pre>");
	$body = nochex_insert_absolute_urls($body, array("src", "href"));
	$body = explode("<!-- EXPLODER -->", $body);
	$header_html = "<center>".$body[0];
	$header_html.= "<div><img src=\"" . $GLOBALS['storeURL'] . "/modules/gateway/Nochex_APC/header.gif\" border=\"0\" alt=\"\" ></a></div>";
	$footer_html = $body[1]."</center>";
	return array(htmlspecialchars($header_html), htmlspecialchars($footer_html));
}

function nochex_insert_absolute_urls($markup, $attribs = array()){
	foreach($attribs as $attrib){
		$offset = 0;
		while($pos = strpos($markup, $attrib."=", $offset)){
			if($pos===false) break;
			if(substr($markup, $pos + strlen($attrib) + 1, 1)=="\"" || substr($markup, $pos + strlen($attrib) + 1, 1)=="'"){
				$pos++;
			}
			if(substr($markup, $pos + strlen($attrib) + 1, 7)!="http://" && substr($markup, $pos + strlen($attrib) + 1, 8)!="https://"){
				$markup = substr($markup, 0, $pos + strlen($attrib) + 1) . $GLOBALS['storeURL'] . "/" . substr($markup, $pos + strlen($attrib) + 1);
			}
			$offset = $pos;
		}
	}
	return $markup;
}

$formAction = "https://secure.nochex.com/";
$formMethod = "post";
$formTarget = "_self";

$transfer = "auto";
$stateUpdate = FALSE;

?>