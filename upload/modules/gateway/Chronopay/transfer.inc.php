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
|	Core functions for the Chronopay Gateway	
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// CHRONOPAY GATEWAY
//////////////////////////
// L@@K AT AL THE LOVELY 
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

$module = fetchDbConfig("Chronopay");

function repeatVars(){

		global $i, $orderInv;

		// product specific fields are not required.
		$hiddenVars = "";

		return $hiddenVars;
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config;
	
	// get language for payment page
	switch( trim($ccUserData[0]['lang']) )
	{
		case 'nl':
			$chronoLang = 'NL';
			break;
		case 'es':
			$chronoLang = 'ES';
			break;
		default:
			$chronoLang = 'EN';
			break;
			// chronopay also supports RU for Russian, but this is not supported via Cubecart
	}
			
	$handler_url = $GLOBALS['storeURL']."/modules/gateway/Chronopay/ipn.php";
	// small security hash to just add a little request validation
	$cHash = md5( $GLOBALS['storeURL'].$module['productId'].$basket['grandTotal'] );
	
	$hiddenVars = "<input type='hidden' name='product_id' value='".$module['productId']."' />
			<input type='hidden' name='product_name' value='".$module['productName']."' />
			<input type='hidden' name='product_price' value='".$basket['grandTotal']."' />
			<input type='hidden' name='product_price_currency' value='".$config['defaultCurrency']."' />
			<input type='hidden' name='language' value='".$chronoLang."' />
			<input type='hidden' name='cs1' value='".$cart_order_id."' />
			<input type='hidden' name='cs2' value='".$cHash."' />
			<input type='hidden' name='cs3' value='".$basket['grandTotal']."' />
			<input type='hidden' name='cb_url' value='".$handler_url."' />
			<input type='hidden' name='cb_type' value='P' />
			<input type='hidden' name='decline_url' value='".$handler_url."' />
			<input type='hidden' name='f_name' value='".$ccUserData[0]['firstName']."' />
			<input type='hidden' name='s_name' value='".$ccUserData[0]['lastName']."' />
			<input type='hidden' name='street' value='".$ccUserData[0]['add_1']." ".$ccUserData[0]['add_2']."' />
			<input type='hidden' name='city' value='".$ccUserData[0]['town']."' />
			<input type='hidden' name='state' value='".$ccUserData[0]['county']."' />
			<input type='hidden' name='zip' value='".$ccUserData[0]['postcode']."' />
			<input type='hidden' name='country' value='".countryName($ccUserData[0]['country'])."' />
			<input type='hidden' name='email' value='".$ccUserData[0]['email']."' />
			<input type='hidden' name='phone' value='".$ccUserData[0]['phone']."' />";

			return $hiddenVars;
	
}

function successFirst(){
	global $basket, $db, $glob, $lang, $config;
	
	$cart_order_id = trim( $_POST['cs1'] );

	// check order status
	$order_sum = $db->select( "SELECT status FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE cart_order_id = ".$db->mySQLsafe($cart_order_id) );			

	if( $order_sum[0]['status']=='2' )	// processing status
	{
		// set order status
		include("../../../includes/orderSuccess.inc.php");
		return true;
	}
	else
		return false;
}

function success()
{
	global $basket;

	if( $_GET['f']==1 )
			return false;
	else
		return true;
}





///////////////////////////
// Other Vars
////////
$formAction = "https://secure.chronopay.com/index_shop.cgi";
$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;

$emailText = "Questions regarding your order should be directed to:\r\n\r\n";
$emailText .= $config['storeName']."\r\n";
$emailText .= $GLOBALS['storeURL']."\r\n";
$emailText .= $config['masterEmail'];
?>