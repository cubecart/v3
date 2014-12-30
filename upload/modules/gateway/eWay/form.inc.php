<?php
$module = fetchDbConfig("eWay");

if($_GET['process']==1){

require_once('EwayPayment.php');

$eway = new EwayPayment($module['acNo'], 'https://www.eway.com.au/gateway_cvn/xmlpayment.asp');
$eway->setCustomerFirstname($_POST["firstName"]);
$eway->setCustomerLastname($_POST["lastName"]);
$eway->setCustomerEmail($_POST["emailAddress"]);
$eway->setCustomerAddress($_POST["addr1"].' '.$_POST["addr2"].', '.$_POST["city"].', '.$_POST["state"].', '.$_POST["country"]);
$eway->setCustomerPostcode($_POST["postalCode"]);
$eway->setCustomerInvoiceDescription('Testing');
$eway->setCustomerInvoiceRef($basket['cart_order_id']);
$eway->setCardHoldersName($_POST["firstName"]." ".$_POST["lastName"]);
$eway->setCardNumber($_POST["cardNumber"]);
$eway->setCardExpiryMonth($_POST["expirationMonth"]);
$eway->setCardExpiryYear($_POST["expirationYear"]);
$eway->setCardCVN($_POST["cvc2"]);
$eway->setTrxnNumber(str_replace("-","",$basket['cart_order_id']));

// Eway takes payments in Cents
$cents = $basket['grandTotal'] * 100;
$eway->setTotalAmount($cents);

	if($eway->doPayment() == 0) {
		header("Location: confirmed.php");
		exit;
	} else {
		header("Location: confirmed.php?f=1");
		exit;
	}
	
}


$formTemplate = new XTemplate ("modules/gateway/eWay/form.tpl");

$formTemplate->assign("VAL_FIRST_NAME",$ccUserData[0]['firstName']);
$formTemplate->assign("VAL_LAST_NAME",$ccUserData[0]['lastName']);
$formTemplate->assign("VAL_EMAIL_ADDRESS",$ccUserData[0]['email']);
$formTemplate->assign("VAL_ADD_1",$ccUserData[0]['add_1']);
$formTemplate->assign("VAL_ADD_2",$ccUserData[0]['add_2']);
$formTemplate->assign("VAL_CITY",$ccUserData[0]['town']);
$formTemplate->assign("VAL_COUNTY",$ccUserData[0]['county']);
$formTemplate->assign("VAL_POST_CODE",$ccUserData[0]['postcode']);


$countries = $db->select("SELECT id, iso, printable_name FROM ".$glob['dbprefix']."CubeCart_iso_countries ORDER BY printable_name"); 
	
	for($i=0; $i<count($countries); $i++){
				
			
		if($countries[$i]['id'] == $ccUserData[0]['country']){
			$formTemplate->assign("COUNTRY_SELECTED","selected='selected'");
		} else {
			$formTemplate->assign("COUNTRY_SELECTED","");
		}
	
		$formTemplate->assign("VAL_COUNTRY_ISO",$countries[$i]['iso']);

		$countryName = "";
		$countryName = $countries[$i]['printable_name'];

		if(strlen($countryName)>20){

			$countryName = substr($countryName,0,20)."&hellip;";

		}

		$formTemplate->assign("VAL_COUNTRY_NAME",$countryName);
		$formTemplate->parse("form.repeat_countries");
	}
	
	$formTemplate->assign("LANG_CC_INFO_TITLE",$lang['module']['eway']['cc_info_title']);
	$formTemplate->assign("LANG_FIRST_NAME",$lang['module']['eway']['first_name']); 
	$formTemplate->assign("LANG_LAST_NAME",$lang['module']['eway']['last_name']); 
	//$formTemplate->assign("LANG_CARD_TYPE",$lang['module']['eway']['card_type']);
	$formTemplate->assign("LANG_CARD_NUMBER",$lang['module']['eway']['card_number']);
	$formTemplate->assign("LANG_EXPIRES",$lang['module']['eway']['expires']);
	$formTemplate->assign("LANG_MMYYYY",$lang['module']['eway']['mmyyyy']);
	$formTemplate->assign("LANG_SECURITY_CODE",$lang['module']['eway']['security_code']);
	$formTemplate->assign("LANG_CUST_INFO_TITLE",$lang['module']['eway']['customer_info']);
	$formTemplate->assign("LANG_EMAIL",$lang['module']['eway']['email']);
	$formTemplate->assign("LANG_ADDRESS",$lang['module']['eway']['address']);
	$formTemplate->assign("LANG_CITY",$lang['module']['eway']['city']);
	$formTemplate->assign("LANG_STATE",$lang['module']['eway']['state']);
	$formTemplate->assign("LANG_ZIPCODE",$lang['module']['eway']['zipcode']);
	$formTemplate->assign("LANG_COUNTRY",$lang['module']['eway']['country']);
	$formTemplate->assign("LANG_OPTIONAL",$lang['module']['eway']['optional']);


$formTemplate->parse("form");
$formTemplate = $formTemplate->text("form");
?>