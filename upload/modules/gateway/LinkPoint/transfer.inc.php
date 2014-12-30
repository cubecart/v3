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
|	Core functions for the Linkpoint Gateway	
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// LINKPOINT GATEWAY
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

$module = fetchDbConfig("LinkPoint");
function repeatVars(){
		
		return FALSE;
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config;
	
	$hiddenVars = "<input type='hidden' name='mode' value='payonly' />
	<input type='hidden' name='chargetotal' value='".$basket['grandTotal']."' />
	<input type='hidden' name='storename' value='".$module['acNo']."' />
	<input type='hidden' name='baddr1' value='".$ccUserData[0]['add_1']." ".$ccUserData[0]['add_2']."' />
	<input type='hidden' name='bzip' value='".$ccUserData[0]['postcode']."' />
	<input type='hidden' name='txnorg' value='eci' />
	<input type='hidden' name='txntype' value='sale' />
	<input type='hidden' name='authenticateTransaction' value='false' />
	<input type='hidden' name='bname' value='".$ccUserData[0]['title']." ".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']."' />
	<input type='hidden' name='bcity' value='".$ccUserData[0]['town']."' />
	<input type='hidden' name='bcountry' value='".countryIso($ccUserData[0]['country'])."' />
	<input type='hidden' name='bstate' value='".$ccUserData[0]['county']."' />
	<input type='hidden' name='email' value='".$ccUserData[0]['email']."' />
	<input type='hidden' name='responseSuccessURL' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;oid=".base64_encode($cart_order_id)."' />
	<input type='hidden' name='responseFailURL' value='".$GLOBALS['storeURL']."/confirmed.php?act=conf&amp;f=1&amp;oid=".base64_encode($cart_order_id)."' />
	<input type='hidden' name='oid' value='".$cart_order_id."' />
	<input type='hidden' name='comments' value='".$basket['customer_comments']."' />
	<input type='hidden' name='userid' value='".$ccUserData[0]['customer_id']."' />
	<input type='hidden' name='phone' value='".$ccUserData[0]['phone']."' />";
				
			return $hiddenVars;
	
}

function success(){
	global $basket;
	
	if($_GET['f']==1) {
		return false;
	} elseif((base64_decode($_GET['oid']) == $basket['cart_order_id'])) {
		return true;
	} else {
		return false;
	}

}

///////////////////////////
// Other Vars
////////

if($module['testMode']=="Y"){
				
	$formAction = "https://www.staging.linkpointcentral.com/lpc/servlet/lppay";
			
} else {
				
	$formAction = "https://www.linkpointcentral.com/lpc/servlet/lppay";
			
}

$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;
?>