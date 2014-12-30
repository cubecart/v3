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
|	Core functions for the 2Checkout (v2) Gateway	
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// 2CHECKOUT GATEWAY
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

$module = fetchDbConfig("2Checkout");

function repeatVars(){

		global $i, $orderInv;

		$hiddenVars = "<input type='hidden' name='c_prod_".$i."' value='".$orderInv['productCode'].",".$orderInv['quantity']."' />
		<input type='hidden' name='id_type_".$i."' value='1' />
		<input type='hidden' name='c_name_".$i."' value='".$orderInv['name']."' />
		<input type='hidden' name='c_description_".$i."' value='".$orderInv['name']."' />
		<input type='hidden' name='c_price_".$i."' value='".sprintf("%.2f",$orderInv['price'])."' />";
		
		if($product[0]["digital"]==1){
			$hiddenVars .= "<input type='hidden' name='c_tangible_".$i."' value='Y' />";
		} else {
			$hiddenVars .= "<input type='hidden' name='c_tangible_".$i."' value='N' />";
		}
		
		return $hiddenVars;
	
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config;
	
	$hiddenVars = "<input type='hidden' name='sid' value='".$module['acNo']."' />
			<input type='hidden' name='cart_order_id' value='".$cart_order_id."' />
			<input type='hidden' name='total' value='".$basket['grandTotal']."' />
			<input type='hidden' name='card_holder_name' value='".$ccUserData[0]['title']." ".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']."' />
			<input type='hidden' name='street_address' value='".$ccUserData[0]['add_1']." ".$ccUserData[0]['add_2']."' />
			<input type='hidden' name='city' value='".$ccUserData[0]['town']."' />
			<input type='hidden' name='state' value='".$ccUserData[0]['county']."' />
			<input type='hidden' name='country' value='".countryName($ccUserData[0]['country'])."' />
			<input type='hidden' name='zip' value='".$ccUserData[0]['postcode']."' />
			<input type='hidden' name='phone' value='".$ccUserData[0]['phone']."' />
			<input type='hidden' name='email' value='".$ccUserData[0]['email']."' />
			<input type='hidden' name='ship_name' value='".$basket['delInf']['title']." ".$basket['delInf']['firstName']." ".$basket['delInf']['lastName']."' />
			<input type='hidden' name='ship_street_address' value='".$basket['delInf']['add_1']." ".$basket['delInf']['add_2']."' />
			<input type='hidden' name='ship_city' value='".$basket['delInf']['town']."' />
			<input type='hidden' name='ship_state' value='".$basket['delInf']['county']."' />
			<input type='hidden' name='ship_zip' value='".$basket['delInf']['postcode']."' />
			<input type='hidden' name='ship_country' value='".countryName($basket['delInf']['country'])."' />";
			
			if($module['testMode']=="Y"){
				
				$hiddenVars .= "<input type='hidden' name='demo' value='Y' />";
			
			} else {
				
				$hiddenVars .= "<input type='hidden' name='demo' value='N' />";
			
			}
				
			return $hiddenVars;
	
}

function success(){
	global $basket;
	
	if(($_POST['cart_id'] == $basket['cart_order_id']) && $_POST['credit_card_processed']=="Y"){
	
		return TRUE;
	
	} else {
	
		return FALSE;
	
	}

}

///////////////////////////
// Other Vars
////////
$formAction = "https://www2.2checkout.com/2co/buyer/purchase";
$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;

$emailText = "Charges for the purchase will appear on your statement under the name 2Checkout.com\r\n";
$emailText .= "Questions regarding your order should be directed to:\r\n\r\n";
$emailText .= $config['storeName']."\r\n";
$emailText .= $GLOBALS['storeURL']."\r\n";
$emailText .= $config['masterEmail'];
?>