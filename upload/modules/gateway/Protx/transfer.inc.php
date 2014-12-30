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
|	Core functions for the PROTX Gateway	
+--------------------------------------------------------------------------
|	Thanks to Ben XO for Bug Fixing ( xo at dubplates dot org )
+--------------------------------------------------------------------------
*/
/*
//////////////////////////
// PROTX GATEWAY
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

$module = fetchDbConfig("Protx");


/////////////////////////////////////////////////////////
///////////////   START OF PROTX FUNCTIONS  /////////////
/////////////////////////////////////////////////////////

// ** Base 64 Encoding function **
// PHP does it natively but just for consistency and ease of maintenance, let's declare our own function
function base64Encode($plain) {
  // Initialise output variable
  $output = "";
  
  // Do encoding
  $output = base64_encode($plain);
  
  // Return the result
  return $output;
}


// ** Base 64 decoding function **
// PHP does it natively but just for consistency and ease of maintenance, let's declare our own function

function base64Decode($scrambled) {
  // Initialise output variable
  $output = "";
  
  // Do encoding
  $output = base64_decode($scrambled);
  
  // Return the result
  return $output;
}


/*  The SimpleXor encryption algorithm                                                                                **
**  NOTE: This is a placeholder really.  Future releases of VSP Form will use AES or TwoFish.  Proper encryption      **
**       This simple function and the Base64 will deter script kiddies and prevent the "View Source" type tampering    **
**      It won't stop a half decent hacker though, but the most they could do is change the amount field to something **
**      else, so provided the vendor checks the reports and compares amounts, there is no harm done.  It's still      **
**      more secure than the other PSPs who don't both encrypting their forms at all                                  */

function simpleXor($InString, $Key) {
  // Initialise key array
  $KeyList = array();
  // Initialise out variable
  $output = "";
  
  // Convert $Key into array of ASCII values
  for($i = 0; $i < strlen($Key); $i++){
    $KeyList[$i] = ord(substr($Key, $i, 1));
  }

  // Step through string a character at a time
  for($i = 0; $i < strlen($InString); $i++) {
    // Get ASCII code from string, get ASCII code from key (loop through with MOD), XOR the two, get the character from the result
    // % is MOD (modulus), ^ is XOR
    $output.= chr(ord(substr($InString, $i, 1)) ^ ($KeyList[$i % strlen($Key)]));
  }

  // Return the result
  return $output;
}

/* The getToken function.                                                                                         **
** NOTE: A function of convenience that extracts the value from the "name=value&name2=value2..." VSP reply string **
**     Works even if one of the values is a URL containing the & or = signs.                                      */

function getToken($thisString) {

  // List the possible tokens
  $Tokens = array(
    "Status",
    "StatusDetail",
    "VendorTxCode",
    "VPSTxId",
    "TxAuthNo",
    "Amount",
    "AVSCV2", 
    "AddressResult", 
    "PostCodeResult", 
    "CV2Result", 
    "GiftAid", 
    "3DSecureStatus", 
    "CAVV" );

  // Initialise arrays
  $output = array();
  $resultArray = array();
  
  // Get the next token in the sequence
  for ($i = count($Tokens)-1; $i >= 0 ; $i--){
    // Find the position in the string
    $start = strpos($thisString, $Tokens[$i]);
    // If it's present
    if ($start !== false){
      // Record position and token name
      $resultArray[$i]->start = $start;
      $resultArray[$i]->token = $Tokens[$i];
    }
  }
  
  // Sort in order of position
  sort($resultArray);

  // Go through the result array, getting the token values
  for ($i = 0; $i<count($resultArray); $i++){
    // Get the start point of the value
    $valueStart = $resultArray[$i]->start + strlen($resultArray[$i]->token) + 1;
    // Get the length of the value
    if ($i==(count($resultArray)-1)) {
      $output[$resultArray[$i]->token] = substr($thisString, $valueStart);
    } else {
      $valueLength = $resultArray[$i+1]->start - $resultArray[$i]->start - strlen($resultArray[$i]->token) - 2;
      $output[$resultArray[$i]->token] = substr($thisString, $valueStart, $valueLength);
    }      

  }

  // Return the ouput array
  return $output;

}

// Randomise based on time
function randomise() {
    list($usec, $sec) = explode(' ', microtime());
    return (float) $sec + ((float) $usec * 100000);
}

/////////////////////////////////////////////////////////
///////////////   END OF PROTX FUNCTIONS  ///////////////
/////////////////////////////////////////////////////////

function repeatVars(){

	return FALSE;
}

function fixedVars(){
	
	global $module, $basket, $ccUserData, $cart_order_id, $config, $GLOBALS;
	
			$VendorTxCode = 'CC3'.(rand(0,32000)*rand(0,32000));
			
			// Protocol  2.23
			$cryptVars = 
				"VendorTxCode=".$VendorTxCode
				."&Amount=".$basket['grandTotal']
				."&Currency=".$config['defaultCurrency']
				."&Description=Cart-".$cart_order_id
				."&CustomerEmail=".$ccUserData[0]['email']
				."&CustomerName=".$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']
				."&VendorEmail=".$config['masterEmail']
				."&ApplyAVSCV2=0&Apply3DSecure=0"
				
				."&SuccessURL=".$GLOBALS['storeURL']."/modules/gateway/Protx/confirmed.php?oid=".base64_encode($cart_order_id)."&amt=".base64_encode($basket['grandTotal'])
				."&FailureURL=".$GLOBALS['storeURL']."/modules/gateway/Protx/confirmed.php?f=1"
			
				## New required fields for 2.23
				."&BillingSurname=".$ccUserData[0]['lastName']
				."&BillingFirstnames=".$ccUserData[0]['firstName']
				."&BillingAddress1=".$ccUserData[0]['add_1']
				."&BillingAddress2=".$ccUserData[0]['add_2'] // optional
				."&BillingCity=".$ccUserData[0]['town']
				."&BillingCountry=".countryIso($ccUserData[0]['country'])
				."&BillingPostCode=".$ccUserData[0]['postcode']
				."&BillingPhone=".$ccUserData[0]['phone'] // optional

				."&DeliverySurname=".$basket['delInf']['firstName'] 
				."&DeliveryFirstnames=".$basket['delInf']['lastName']
				."&DeliveryAddress1=".$basket['delInf']['add_1']
				."&DeliveryAddress2=".$basket['delInf']['add_2'] // optinal
				."&DeliveryCity=".$basket['delInf']['add_1']
				."&DeliveryPostCode=".$basket['delInf']['postcode']
				."&DeliveryCountry=".countryIso($basket['delInf']['country'])
				."&DeliveryPhone=".$basket['delInf']['phone'] // optional
				."&Basket=" // optional
				."&AllowGiftAid=0" // optional
				."&SendEMail=1"
				."&EMailMessage=" // optional
				."&Refferid={32839EA8-8935-49A4-95FB-369E755B632C}";
							
			$encrypted = base64Encode(SimpleXor($cryptVars,$module['passphrase']));
	
			$hiddenVars = "<input type='hidden' name='VendorTxCode' value='".$VendorTxCode."' /> 
					<input type='hidden' name='VPSProtocol' value='2.23' />
					<input type='hidden' name='TxType' value='PAYMENT' />
					<input type='hidden' name='Vendor' value='".$module['acNo']."' />
					<input type='hidden' name='Crypt' value='".$encrypted."' />";

			return $hiddenVars;	
}

function successFirst(){
	
	if(isset($_GET['crypt']) && isset($_GET['oid'])){
	
		return TRUE;
	
	} else {
	
		return FALSE;
	
	}

}


function success(){
	global $basket;
	
		if($_GET['f']==1){
		
			return FALSE;
			
		} else {
		
			return TRUE;
			
		}	

}

///////////////////////////
// Other Vars
////////

if($module['gate'] == "sim") {
	
	$formAction = "https://test.sagepay.com/Simulator/VSPFormGateway.asp";

} elseif($module['gate'] == "test") {
	
	$formAction ="https://test.sagepay.com/gateway/service/vspform-register.vsp";

} elseif($module['gate'] == "live"){
	
	$formAction ="https://live.sagepay.com/gateway/service/vspform-register.vsp";

}

$formMethod = "post";
$formTarget = "_self";
$transfer = "auto";
$stateUpdate = TRUE;
?>
