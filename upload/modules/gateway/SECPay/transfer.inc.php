<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2005 - 2014. All rights reserved.
|   CubeCart Limited,
|   5 Bridge Street,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 2JU
|   UNITED KINGDOM
|   http://www.CubeCart.com
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Thursday, 13 October 2005
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	transfer.php
|   ========================================
|	Core functions for the SECPay Gateway	
+--------------------------------------------------------------------------
|	This gateway coding was sponsored by:
|   ========================================
|	Big Boy Media Ltd http://www.bigboymedia.com 
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// SECPay GATEWAY
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

$module = fetchDbConfig("SECPay");

function repeatVars(){

		return FALSE;
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS;
	
	$hiddenVars = "<input type='hidden' name='merchant' value='".$module['merchant']."' />
		<input type='hidden' name='trans_id' value='".$cart_order_id."' />
		<input type='hidden' name='amount' value='".$basket['grandTotal']."' />
		<input type='hidden' name='callback' value='".$GLOBALS['storeURL']."/modules/gateway/SECPay/confirmed.php' />
		<input type='hidden' name='cb_post' value='true' />";
		
		if($config['SSL']==1){
		$hiddenVars .= "<input type='hidden' name='ssl_cb' value='true' />";
		}
		
		if($module['testMode']==1){
		$hiddenVars .= "<input type='hidden' name='test_status' value='true' />";
		}
		
		$hiddenVars .= "<input type='hidden' name='currency' value='".$config['defaultCurrency']."' />
		<input type='hidden' name='bill_name' value='".$ccUserData[0]['title']." ".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']."' />
		<input type='hidden' name='bill_addr_1' value='".$ccUserData[0]['add_1']."' />
		<input type='hidden' name='bill_addr_2' value='".$ccUserData[0]['add_2']."' />
		<input type='hidden' name='bill_city' value='".$ccUserData[0]['town']."' />
		<input type='hidden' name='bill_state' value='".$ccUserData[0]['county']."' />
		<input type='hidden' name='bill_country' value='".countryName($ccUserData[0]['country'])."' />
		<input type='hidden' name='bill_post_code' value='".$ccUserData[0]['postcode']."' />
		<input type='hidden' name='bill_email' value='".$ccUserData[0]['email']."' />
		<input type='hidden' name='bill_tel' value='".$ccUserData[0]['phone']."' /> 
		<input type='hidden' name='bill_url' value='".$GLOBALS['storeURL']."' />
		
		<input type='hidden' name='bill_name' value='".$basket['delInf']['title']." ".$basket['delInf']['firstName']." ".$basket['delInf']['lastName']."' />
		<input type='hidden' name='ship_addr_1' value='".$basket['delInf']['add_1']."' />
		<input type='hidden' name='ship_addr_2' value='".$basket['delInf']['add_2']."' />
		<input type='hidden' name='ship_city' value='".$basket['delInf']['town']."' />
		<input type='hidden' name='ship_state' value='".$basket['delInf']['county']."' />
		<input type='hidden' name='ship_country' value='".countryName($basket['delInf']['country'])."' />
		<input type='hidden' name='ship_post_code' value='".$basket['delInf']['postcode']."' />
		<input type='hidden' name='ship_tel' value='".$basket['delInf']['phone']."' /> ";
				
		return $hiddenVars;
	
}

function successFirst(){
	global $basket;
	
	if($_POST['code'] == "A" && isset($_POST['trans_id'])) {
	
		return TRUE;
	
	} else {
	
		return FALSE;
	
	}

}

function success(){
		
		if($_GET['f']==1){
		
			return FALSE;
			
		} else {
		
			return TRUE;
			
		}	

}

///////////////////////////
// Other Vars
////////
$formAction = "https://www.secpay.com/java-bin/ValCard";
$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;
?>