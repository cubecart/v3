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
|   Date: Friday, 15 July 2005
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	transfer.php
|   ========================================
|	Core functions for the Authorize.Net Gateway	
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// AUTHORIZE.NET GATEWAY
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

$module = fetchDbConfig("Authorize");

function repeatVars(){

		return FALSE;
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS; 
	
	$amount = $basket['grandTotal'];

	// Trim $ sign if it exists
	if (substr($amount, 0,1) == "$") {
		$amount = substr($amount,1);
	}
	$loginid = $module['acNo'];
	$txnkey = $module['txnkey'];
	
	if(!empty($ccUserData[0]['add_2'])){

		$add = $ccUserData[0]['add_1'].", ".$ccUserData[0]['add_2'];
					
	} else {
						
		$add = $ccUserData[0]['add_1'];
					
	}
	
	// function InsertFP ($loginid, $txnkey, $amount, $sequence) - Insert HTML form elements required for SIM
	// function CalculateFP ($loginid, $txnkey, $amount, $sequence, $tstamp) - Returns Fingerprint.
	
	// compute HMAC-MD5
	// Uses PHP mhash extension. Pl sure to enable the extension
	function hmac ($key, $data)
	{
	return (bin2hex (mhash(MHASH_MD5, $data, $key)));
	}
	
	// Calculate and return fingerprint
	// Use when you need control on the HTML output
	function CalculateFP ($loginid, $txnkey, $amount, $sequence, $tstamp, $currency = "")
	{
	return (hmac ($txnkey, $loginid . "^" . $sequence . "^" . $tstamp . "^" . $amount . "^" . $currency));
	}
	
	
	// Inserts the hidden variables in the HTML FORM required for SIM
	// Invokes hmac function to calculate fingerprint.
	
	function InsertFP ($loginid, $txnkey, $amount, $sequence, $currency = "")
	{
	
	$tstamp = time();
	
	$fingerprint = hmac ($txnkey, $loginid . "^" . $sequence . "^" . $tstamp . "^" . $amount . "^" . $currency);
	
	$hiddenVars = "<input type='hidden' name='x_fp_sequence' value='" . $sequence . "' />
					<input type='hidden' name='x_fp_timestamp' value='" . $tstamp . "' />
					<input type='hidden' name='x_fp_hash' value='" . $fingerprint . "'/>";
	
	return $hiddenVars;
	
	}
	
	// Seed random number for security and better randomness.

	srand(time());
	$sequence = rand(1, 1000);
	// Insert the form elements required for SIM by calling InsertFP		
	
	$hiddenVars = InsertFP ($loginid, $txnkey, $amount, $sequence, $config['defaultCurrency'])."
					<input type='hidden' name='x_login' value='".$loginid."' />
					<input type='hidden' name='x_currency_code' value='" . $config['defaultCurrency'] . "' />
					<input type='hidden' name='x_show_form' value='PAYMENT_FORM' />
					<input type='hidden' name='x_amount' value='".$amount."' />
					<input type='hidden' name='x_cust_id' value='".substr(strtoupper($ccUserData[0]['lastName']),0,4).$ccUserData[0]['customer_id']."' />
					<input type='hidden' name='x_description' value='Cart - ".$cart_order_id."' />
					<input type='hidden' name='x_invoice_num' value='".$cart_order_id."' />
					<input type='hidden' name='x_first_name' value='".$ccUserData[0]['firstName']."' />
					<input type='hidden' name='x_last_name' value='".$ccUserData[0]['lastName']."' />
					<input type='hidden' name='x_relay_response' value='TRUE' />
					<input type='hidden' name='x_relay_url' value='".$GLOBALS['storeURL']."/modules/gateway/Authorize/confirmed.php' />
					<input type='hidden' name='x_address' value='".$add."' />
					<input type='hidden' name='x_city' value='".$ccUserData[0]['town']."' />
					<input type='hidden' name='x_state' value='".$ccUserData[0]['county']."' />
					<input type='hidden' name='x_zip' value='".$ccUserData[0]['postcode']."' />
					<input type='hidden' name='x_country' value='".countryIso($ccUserData[0]['country'])."' />
					<input type='hidden' name='x_phone' value='".$ccUserData[0]['phone']."' />
					<input type='hidden' name='x_email' value='".$ccUserData[0]['email']."' />
					<input type='hidden' name='x_ship_to_first_name' value='".$basket['delInf']['firstName']."' />
					<input type='hidden' name='x_ship_to_last_name' value='".$basket['delInf']['lastName']."' />
					<input type='hidden' name='x_ship_to_address' value='".$basket['delInf']['add_1']." ".$basket['delInf']['add_2']."' />
					<input type='hidden' name='x_ship_to_city' value='".$basket['delInf']['town']."' />
					<input type='hidden' name='x_ship_to_state' value='".$basket['delInf']['county']."' />
					<input type='hidden' name='x_ship_to_zip' value='".$basket['delInf']['postcode']."' />
					<input type='hidden' name='x_ship_to_country' value='".countryIso($basket['delInf']['country'])."' />
					<input type='hidden' name='x_Customer_IP' value='".$_SERVER['REMOTE_ADDR']."' />\r\n					";

				
				if($module['testMode']==1){	
					$hiddenVars .= "<input type='hidden' name='x_test_request' value='TRUE' />";
				}
				
			return $hiddenVars;
	
}

function successFirst(){
	
	if($_POST['x_response_code']==1 && isset($_POST['x_invoice_num'])){
	
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
if($module['testMode']==1){
$formAction = "https://certification.authorize.net/gateway/transact.dll";
} else {
$formAction = "https://secure.authorize.net/gateway/transact.dll";
}

$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;
?>