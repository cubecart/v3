<?php
$module = fetchDbConfig("BluePay");

if($_GET['process']==1){

	if($module['testMode']==1)
	{
		$moduleMode = "TEST";
	}
	else
	{
		$moduleMode = "LIVE";
	}


	if(phpversion()<5){
	
		require_once('BP20-PHP4.3.php');
	
	} else {
	
		require_once('BP20-PHP5.php');
	
	}
	
	
	$bp = new BluePayment();
	$bp->sale($basket['grandTotal']);
	$bp->setOrderId($basket['cart_order_id']);
	$bp->setCustInfo($_POST["cardNumber"],
	 $_POST["cvc2"],
	 $_POST["expirationMonth"].$_POST["expirationYear"],
	 $_POST["firstName"],
	 $_POST["lastName"],
	 $_POST["addr1"].' '.$_POST["addr2"],
	 $_POST["city"],
	 $_POST["state"],
	 $_POST["postalCode"],
	 $_POST["country"]);
	$bp->process();
	
	$response = $bp->getStatus();
	
	
	if($module['debug']==1){
	
	echo 'Response: '. $bp->getResponse() .'<br />'.
	 'TransId: '. $bp->getTransId() .'<br />'.
	 'Status: '. $bp->getStatus() .'<br />'.
	 'AVS Resp: '. $bp->getAvsResp() .'<br />'.
	 'CVV2 Resp: '. $bp->getCvv2Resp() .'<br />'.
	 'Auth Code: '. $bp->getAuthCode() .'<br />'.
	 'Message: '. $bp->getMessage() .'<br />'.
	 'Rebid: '. $bp->getRebid();
	 exit;
	
	}
	
	if($response==1){
			
			$cart_order_id = $basket['cart_order_id'];
			include("../../../includes/orderSuccess.inc.php");
			header("Location: confirmed.php?pg=".base64_encode("Bluepay"));
			exit;
		
	} elseif($response==0) {
	
			header("Location: confirmed.php?f=1&pg=".base64_encode("Bluepay"));
			exit;
	
	} elseif($response=="E"){
	
		echo 'Response: '. $bp->getResponse() .'<br />'.'TransId: '. $bp->getTransId() .'<br />'.'Status: '. $bp->getStatus() .'<br />'.'AVS Resp: '. $bp->getAvsResp() .'<br />'.'CVV2 Resp: '. $bp->getCvv2Resp() .'<br />'.'Auth Code: '. $bp->getAuthCode() .'<br />'.'Message: '. $bp->getMessage() .'<br />'.'Rebid: '. $bp->getRebid();
	 exit;
	 
	}


}


$formTemplate = new XTemplate ("modules/gateway/BluePay/form.tpl");

// look up county
$isoLookup = $db->select("SELECT abbrev FROM `".$glob['dbprefix']."CubeCart_iso_counties`
WHERE `name` LIKE '%".ucfirst(str_replace(" ","",strtolower($ccUserData[0]['county'])))."%'");

if($isoLookup == TRUE){
	
	$countyIso = $isoLookup[0]['abbrev'];

} else {

	$countyIso = "XX";

}

$formTemplate->assign("VAL_FIRST_NAME",$ccUserData[0]['firstName']);
$formTemplate->assign("VAL_LAST_NAME",$ccUserData[0]['lastName']);
$formTemplate->assign("VAL_EMAIL_ADDRESS",$ccUserData[0]['email']);
$formTemplate->assign("VAL_ADD_1",$ccUserData[0]['add_1']);
$formTemplate->assign("VAL_ADD_2",$ccUserData[0]['add_2']);
$formTemplate->assign("VAL_CITY",$ccUserData[0]['town']);
$formTemplate->assign("VAL_COUNTY",$countyIso);
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
	
	$formTemplate->assign("LANG_CC_INFO_TITLE",$lang['module']['bluePay']['cc_info_title']);
	$formTemplate->assign("LANG_FIRST_NAME",$lang['module']['bluePay']['first_name']); 
	$formTemplate->assign("LANG_LAST_NAME",$lang['module']['bluePay']['last_name']); 
	//$formTemplate->assign("LANG_CARD_TYPE",$lang['module']['bluePay']['card_type']);
	$formTemplate->assign("LANG_CARD_NUMBER",$lang['module']['bluePay']['card_number']);
	$formTemplate->assign("LANG_EXPIRES",$lang['module']['bluePay']['expires']);
	$formTemplate->assign("LANG_MMYY",$lang['module']['bluePay']['mmyy']);
	$formTemplate->assign("LANG_SECURITY_CODE",$lang['module']['bluePay']['security_code']);
	$formTemplate->assign("LANG_CUST_INFO_TITLE",$lang['module']['bluePay']['customer_info']);
	$formTemplate->assign("LANG_EMAIL",$lang['module']['bluePay']['email']);
	$formTemplate->assign("LANG_ADDRESS",$lang['module']['bluePay']['address']);
	$formTemplate->assign("LANG_CITY",$lang['module']['bluePay']['city']);
	$formTemplate->assign("LANG_STATE",$lang['module']['bluePay']['state']);
	$formTemplate->assign("LANG_ZIPCODE",$lang['module']['bluePay']['zipcode']);
	$formTemplate->assign("LANG_COUNTRY",$lang['module']['bluePay']['country']);
	$formTemplate->assign("LANG_OPTIONAL",$lang['module']['bluePay']['optional']);

$formTemplate->parse("form");
$formTemplate = $formTemplate->text("form");
?>