<?php

/************************************************
* HSBC API Module by Adam Harris @ XOMY Limited *
* http://www.xomy.com | adam@xomy.com           *
*                                               *
* Before making any modifications, please       *
* contact me at the above email so that we can  *
* discuss the implications and advantages for   *
* the module.                                   *
*                                               *
* This module is released for the benefit of    *
* the community and should not be sold.         *
*                                               *
* This module is not released under GPL and     *
* cannot be redistributed without permission    *
* from myself.                                  *
************************************************/

$module = fetchDbConfig("HSBC");
include ("modules/gateway/HSBC/func_https_libcurl.php");

if($_GET['process']==1){
	$ccPassthru = "";
	$ccPassthru[] = $_POST["emailAddress"]."|";
	$ccPassthru[] = $_POST["phone"]."|";
	$ccPassthru[] = $_POST["firstName"]."|";
	$ccPassthru[] = $_POST["lastName"]."|";
	$ccPassthru[] = $_POST["city"]."|";
	$ccPassthru[] = $_POST["addr1"]."|";
	$ccPassthru[] = $_POST["addr2"]."|";
	$ccPassthru[] = $_POST["state"]."|";
	$ccPassthru[] = $_POST["postalCode"]."|";
	$ccPassthru[] = $_POST["cvc2"]."|";
	$ccPassthru[] = $_POST["expirationMonth"]."/".$_POST["expirationYear"]."|";
	$ccPassthru[] = $_POST["issueNumber"]."|";
	$ccPassthru[] = $_POST["cardNumber"]."|";
	$ccPassthru[] = $_POST["startMonth"]."/".$_POST["startYear"]."|";
	$ccPassthru[] = $_POST["cardType"]."|";
	$ccPassthru[] = $_POST["amount"]."|";
	?>
	<html>
	<head></head>
	<body onLoad="document.getElementById('ccVerifyCC').submit();">
	<div style="text-align: center; border: 1px solid darkred; font-family: arial;">
		<br />
		<img src="<?=$config['storeURL_SSL'];?>/admin/modules/gateway/HSBC/logo.gif" /><br /><br />
		Cardholder Authentication in Progress<br /><br />
		<img src="<?=$config['storeURL_SSL'];?>/modules/gateway/HSBC/ajax.gif" /><br /><br />
		<img src="<?=$config['storeURL_SSL'];?>/modules/gateway/HSBC/vbv.png" /><img src="<?=$config['storeURL_SSL'];?>/modules/gateway/HSBC/mcs.png" /><br /><br />
	</div>
	<form method="POST" action="https://<?=$module['pas'];?>" id="ccVerifyCC">
	<input type="hidden" name="CardExpiration" value="<?php echo $_POST["expirationYear"].$_POST["expirationMonth"];?>" />
	<input type="hidden" name="CardholderPan" value="<?php echo $_POST["cardNumber"];?>" />
	<input type="hidden" name="CcpaClientId" value="UK03162651GBP01" />
	<input type="hidden" name="CurrencyExponent" value="2" />
	<input type="hidden" name="PurchaseAmount" value="£<?=$_POST["amount"];?>" />
	<input type="hidden" name="PurchaseAmountRaw" value="<?=(100*$_POST["amount"]);?>" />
	<input type="hidden" name="PurchaseCurrency" value="826" />
	<input type="hidden" name="MD" value="<?=base64_encode(join("",$ccPassthru));?>" />
	<input type="hidden" name="ResultUrl" value="<?=$config['storeURL_SSL'];?>/modules/gateway/HSBC/verify.php" />
	</form>
	</body>
	</html>
<?php
	exit;
}

if ($module['avs'] == 1) {
	$formTemplate = new XTemplate ("modules/gateway/HSBC/formAVS.tpl");
} else {
	$formTemplate = new XTemplate ("modules/gateway/HSBC/form.tpl");
}

$formTemplate->assign("VAL_FIRST_NAME",$ccUserData[0]['firstName']);
$formTemplate->assign("VAL_LAST_NAME",$ccUserData[0]['lastName']);
$formTemplate->assign("VAL_EMAIL_ADDRESS",$ccUserData[0]['email']);
$formTemplate->assign("VAL_ADD_1",$ccUserData[0]['add_1']);
$formTemplate->assign("VAL_ADD_2",$ccUserData[0]['add_2']);
$formTemplate->assign("VAL_CITY",$ccUserData[0]['town']);
$formTemplate->assign("VAL_COUNTY",$ccUserData[0]['county']);
$formTemplate->assign("VAL_POST_CODE",$ccUserData[0]['postcode']);
$formTemplate->assign("VAL_PHONE",$ccUserData[0]['phone']);
$formTemplate->assign("VAL_CART_ORDER_ID",$basket['cart_order_id']);
$formTemplate->assign("VAL_GRAND_TOTAL",$basket['grandTotal']);
$formTemplate->assign("VAL_MERCH_ID",$module['acNo']);
$formTemplate->assign("VAL_AVSMSG",$module['avstext']);


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

$formTemplate->parse("form");
$formTemplate = $formTemplate->text("form");
?>
