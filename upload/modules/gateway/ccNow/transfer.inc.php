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
|	Core functions for the ccNOW GATEWAY	
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// CCNOW GATEWAY
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
$cart_order_id								- cart order id as a varchar
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

$module = fetchDbConfig("ccNow");

function repeatVars(){

		global $i, $orderInv; 

		$hiddenVars = "<input type='hidden' name='x_product_sku_".$i."' value='".$orderInv['productCode']."' />
		<input type='hidden' name='x_product_title_".$i."' value='".$orderInv['name']."' />
		<input type='hidden' name='x_product_quantity_".$i."' value='".$orderInv['quantity']."' />
		<input type='hidden' name='x_product_unitprice_".$i."' value='".sprintf("%.2f",$orderInv['price']/$orderInv['quantity'])."' />
		<input type='hidden' name='x_product_url_".$i."' value='".$GLOBALS['storeURL']."/index.php?act=viewProd&productId=".$orderInv['productId']."' />";
		
		return $hiddenVars;
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS;
	
	$hiddenVars = "<input type='hidden' name='x_login' value='".$module['acName']."' />
					<input type='hidden' name='x_version' value='1.0' />
					<input type='hidden' name='x_fp_arg_list' value='x_login^x_fp_arg_list^x_fp_sequence^x_amount^x_currency_code' />
					<input type='hidden' name='x_fp_hash' value='".md5($module['acName']."^x_login^x_fp_arg_list^x_fp_sequence^x_amount^x_currency_code^".$cart_order_id."^".$basket['grandTotal']."^".$config['defaultCurrency']."^".$module['actKey'])."' />
					<input type='hidden' name='x_fp_sequence' value='".$cart_order_id."' />
					<input type='hidden' name='x_currency_code' value='".$config['defaultCurrency']."' />
					<input type='hidden' name='x_method' value='NONE' />
					<input type='hidden' name='x_name' value='".$ccUserData[0]['title']." ".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']."' />
					<input type='hidden' name='x_address' value='".$ccUserData[0]['add_1']."' />
					<input type='hidden' name='x_address2' value='".$ccUserData[0]['add_2']."' />
					<input type='hidden' name='x_city' value='".$ccUserData[0]['town']."' />
					<input type='hidden' name='x_state' value='".$ccUserData[0]['county']."' />
					<input type='hidden' name='x_zip' value='".$ccUserData[0]['postcode']."' />
					<input type='hidden' name='x_country' value='".countryIso($ccUserData[0]['country'])."' />
					<input type='hidden' name='x_phone' value='".$ccUserData[0]['phone']."' />
					<input type='hidden' name='x_email' value='".$ccUserData[0]['email']."' />
					<input type='hidden' name='x_ship_to_name' value='".$basket['delInf']['title']." ".$basket['delInf']['firstName']." ".$basket['delInf']['lastName']."' />
					<input type='hidden' name='x_ship_to_address' value='".$basket['delInf']['add_1']."' />
					<input type='hidden' name='x_ship_to_address2' value='".$basket['delInf']['add_2']."' />
					<input type='hidden' name='x_ship_to_city' value='".$basket['delInf']['town']."' />
					<input type='hidden' name='x_ship_to_state' value='".$basket['delInf']['county']."' />
					<input type='hidden' name='x_ship_to_zip' value='".$basket['delInf']['postcode']."' />
					<input type='hidden' name='x_ship_to_country' value='".countryIso($basket['delInf']['country'])."' />
					<input type='hidden' name='x_invoice_num' value='".$cart_order_id."' />
					<input type='hidden' name='x_instructions' value='".$basket['customer_comments']."' />
					<input type='hidden' name='x_amount' value='".$basket['grandTotal']."' />
					<input type='hidden' name='x_shipping_amount' value='".($basket['shipCost']+$basket['tax'])."' />";
				
			return $hiddenVars;
	
}

function success(){
	global $basket;
	
	if( (base64_decode($_GET['oid']) == $basket['cart_order_id']) && !isset($_GET['f']) ) {
	
		return TRUE;
	
	} else {
	
		return FALSE;
	
	}

}

///////////////////////////
// Other Vars
////////
$formAction = "http://www.ccnow.com/cgi-local/transact.cgi";
$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;
?>