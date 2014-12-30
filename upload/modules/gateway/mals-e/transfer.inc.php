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
|	Core functions for the Mals-e Gateway	
+--------------------------------------------------------------------------
*/

/*
//////////////////////////
// MALS-E GATEWAY
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

$module = fetchDbConfig("mals-e");

function repeatVars(){
		
		global $orderInv;
		return "<input type='hidden' name='product[]' value='".$orderInv['name']."' />";
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS, $db, $glob;
	
	$hiddenVars = "<input type='hidden' name='userid' value='".$module['acc']."' />
				<input type='hidden' name='qty1' value='1' />
				<input type='hidden' name='product1' value='".$cart_order_id."' />
				<input type='hidden' name='price1' value='".$basket['grandTotal']."' />
				<input type='hidden' name='return' value='".$GLOBALS['storeURL']."/confirmed.php?pg=".base64_encode("mals-e")."' />
				<input type='hidden' name='inv_name' value='".$ccUserData[0]['title']." ".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']."' />
				<input type='hidden' name='inv_addr1' value='".$ccUserData[0]['add_1']." ".$ccUserData[0]['add_2']."' />
				<input type='hidden' name='inv_addr2' value='".$ccUserData[0]['town']."' />
				<input type='hidden' name='inv_state' value='".$ccUserData[0]['county']."' />
				<input type='hidden' name='inv_zip' value='".$ccUserData[0]['postcode']."' />
				<input type='hidden' name='inv_country' value='".countryName($ccUserData[0]['country'])."' />
				<input type='hidden' name='tel' value='".$ccUserData[0]['phone']."' />
				<input type='hidden' name='email' value='".$ccUserData[0]['email']."' />
				<input type='hidden' name='del_name' value='".$basket['delInf']['title']." ".$basket['delInf']['firstName']." ".$basket['delInf']['lastName']."' />
				<input type='hidden' name='del_addr1' value='".$basket['delInf']['add_1']." ".$basket['delInf']['add_2']."' />
				<input type='hidden' name='del_addr2' value='".$basket['delInf']['town']."' />
				<input type='hidden' name='del_state' value='".$basket['delInf']['county']."' />
				<input type='hidden' name='del_zip' value='".$basket['delInf']['postcode']."' />
				<input type='hidden' name='del_country' value='".countryName($basket['delInf']['country'])."' />";
				
				// empty the basket
				$emptyBasket['basket'] = "''";
				$where = "basket LIKE '%".$cart_order_id."%'";
				$delete = $db->update($glob['dbprefix']."CubeCart_sessions",$emptyBasket ,$where);
				
			return $hiddenVars;
	
}

function success(){
		
			return TRUE;

}

///////////////////////////
// Other Vars
////////

$formAction = "http://".$module['domain']."/cf/pay.cfm";
$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = FALSE;

?>