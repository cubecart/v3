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
|	Core functions for the PayPal Gateway	
+--------------------------------------------------------------------------
*/

/*
//////////////////////////
// PAYPAL GATEWAY
//////////////////////////
// L@@K AT ALL THE LOVELY 
// VARIABLES WE HAVE TO
// PLAY WITH!!
//////

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

$module = fetchDbConfig("PayPal");

function repeatVars(){

		return FALSE;
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS;
	$amount = sprintf("%.2f",$basket['subTotal']+$basket['tax']);
	$hiddenVars = "<input type='hidden' name='cmd' value='_xclick' />
				<input type='hidden' name='business' value='".$module['email']."' />
				<input type='hidden' name='item_name' value='Cart Order No: ".$cart_order_id."' />
				<input type='hidden' name='item_number' value='".$cart_order_id."' />
				<input type='hidden' name='amount' value='".$amount."' />
				<input type='hidden' name='shipping' value='".$basket['shipCost']."' />
				<input type='hidden' name='invoice' value='".$cart_order_id."' />
				<input type='hidden' name='first_name' value='".$ccUserData[0]['firstName']."' />
				<input type='hidden' name='last_name' value='".$ccUserData[0]['lastName']."' />
				<input type='hidden' name='currency_code' value='".$config['defaultCurrency']."' />
				<input type='hidden' name='address1' value='".$ccUserData[0]['add_1']."' />
				<input type='hidden' name='address2' value='".$ccUserData[0]['add_2']."' />
				<input type='hidden' name='city' value='".$ccUserData[0]['town']."' />
				<input type='hidden' name='state' value='".$ccUserData[0]['county']."' />
				<input type='hidden' name='zip' value='".$ccUserData[0]['postcode']."' />
				<input type='hidden' name='day_phone_a' value='".$ccUserData[0]['phone']."' />
				<input type='hidden' name='add' value='1' />
				<input type='hidden' name='rm' value='2' />
				<input type='hidden' name='no_note' value='1' />
				<input type='hidden' name='upload' value='1' />
				<input type='hidden' name='bn' value='CubeCart_Cart_ST' />
				<input type='hidden' name='notify_url' value='".$GLOBALS['storeURL']."/modules/gateway/PayPal/ipn.php' />
				<input type='hidden' name='return' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;oid=".base64_encode($cart_order_id)."' />
				<input type='hidden' name='cancel_return' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;f=1&amp;oid=".base64_encode($cart_order_id)."' />";
	
	return $hiddenVars;
	
}

function success(){
	global $db, $glob, $module, $basket;
		
	############################################################################################
	// Following line updated for Sir William's PayPal AutoReturn Fix
	// $result = $db->select("SELECT status  FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE cart_order_id = ".$db->mySQLSafe($basket['cart_order_id']) );
	$result = $db->select("SELECT status  FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE sec_order_id = ".$db->mySQLSafe($_GET['tx']) );
	############################################################################################
	
	if($result[0]['status']==2){
		return TRUE;
	} else {
		return FALSE;
	}	
		
}

///////////////////////////
// Other Vars
////////
if($module['testMode']==1){
	$formAction = "https://www.sandbox.paypal.com/cgi-bin/webscr";
	$formMethod = "post";
	$formTarget = "_self";
} else {
	$formAction = "https://www.paypal.com/cgi-bin/webscr";
	$formMethod = "post";
	$formTarget = "_self";
}

$transfer = "auto";
$stateUpdate = FALSE;
?>