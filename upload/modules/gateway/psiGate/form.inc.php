<?php
$module = fetchDbConfig("psiGate");

if($_GET['process']==1){

$XPost = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<Order>
";
	
	if($module['test']==1){
		$XPost .= "<StoreID>teststore</StoreID>
		<Passphrase>psigate1234</Passphrase>";
	} else {
		$XPost .= "<StoreID>".$module['acNo']."</StoreID>
	<Passphrase>".$module['passPhrase']."</Passphrase>
	";
	}
	
	$XPost .= 
	"<Subtotal>".$basket['grandTotal']."</Subtotal>
	<PaymentType>CC</PaymentType>
	<CardAction>0</CardAction>
	<CardNumber>".$_POST["cardNumber"]."</CardNumber>
	<CardExpMonth>".$_POST["expirationMonth"]."</CardExpMonth>
	<CardExpYear>".$_POST["expirationYear"]."</CardExpYear>
	<CardIDCode>1</CardIDCode>
	<CardIDNumber>".$_POST["cvc2"]."</CardIDNumber>
	<CustomerIP>".$_SERVER['REMOTE_ADDR']."</CustomerIP>
	<Item>
		<ItemID>".$cart_order_id."</ItemID>
		<ItemDescription>CubeCart Order - ".$cart_order_id."</ItemDescription>
		<ItemQty>1</ItemQty>
		<ItemPrice>".$basket['grandTotal']."</ItemPrice>
	</Item>	
	<Bname>".$_POST["firstName"]." ".$_POST["lastName"]."</Bname>
	<Baddress1>".$_POST["addr1"]."</Baddress1>
	<Baddress2>".$_POST["addr2"]."</Baddress2>
	<Bcity>".$_POST["city"]."</Bcity>
	<Bprovince>".$_POST["state"]."</Bprovince>
	<Bpostalcode>".$_POST["postalCode"]."</Bpostalcode>
	<Bcountry>".$_POST["country"]."</Bcountry>
	<Email>".$_POST["emailAddress"]."</Email>
</Order>";

if($module['test']==1){
	$url = "https://dev.psigate.com:7989/Messenger/XMLMessenger";
} else {
	$url = $module['url'];
}


$ch = curl_init();    // initialize curl handle
curl_setopt($ch, CURLOPT_URL,$url); // set url to post to
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
curl_setopt($ch, CURLOPT_TIMEOUT, 4); // times out after 4s
curl_setopt($ch, CURLOPT_POSTFIELDS, $XPost); // add POST fields
$result = curl_exec($ch); // run the whole process
if (curl_errno($ch)) {
   print curl_error($ch);
} else {
   curl_close($ch);
}

// use XML Parser on $result, and your set!

       $xml_parser = xml_parser_create();
       xml_parser_set_option($xml_parser,XML_OPTION_CASE_FOLDING,0);
       xml_parser_set_option($xml_parser,XML_OPTION_SKIP_WHITE,1);
       xml_parse_into_struct($xml_parser, $result, $vals, $index);
       xml_parser_free($xml_parser);

// $vals = array of XML tags.  Go get em!

/* 
foreach($vals as $key => $value){

	echo $key ." = ".$value."<br/>";
	foreach($value as $key2 => $value2){
	echo $key2 ." = ".$value2."<br/>";
	}
	
	
	echo "<hr/>";
}
echo "Array 4 Value = ".$vals[4]['value'];
exit;
*/


	if($vals[4]['value'] == "APPROVED") {
		header("Location: confirmed.php");
		exit;
	} else {
		header("Location: confirmed.php?f=1");
		exit;
	}
	
	
	
}


$formTemplate = new XTemplate ("modules/gateway/psiGate/form.tpl");

$formTemplate->assign("VAL_FIRST_NAME",$ccUserData[0]['firstName']);
$formTemplate->assign("VAL_LAST_NAME",$ccUserData[0]['lastName']);
$formTemplate->assign("VAL_EMAIL_ADDRESS",$ccUserData[0]['email']);
$formTemplate->assign("VAL_ADD_1",$ccUserData[0]['add_1']);
$formTemplate->assign("VAL_ADD_2",$ccUserData[0]['add_2']);
$formTemplate->assign("VAL_CITY",$ccUserData[0]['town']);
$formTemplate->assign("VAL_COUNTY",$ccUserData[0]['county']);
$formTemplate->assign("VAL_POST_CODE",$ccUserData[0]['postcode']);
$formTemplate->assign("VAL_CART_ORDER_ID",$basket['cart_order_id']);
$formTemplate->assign("VAL_GRAND_TOTAL",$basket['grandTotal']);
$formTemplate->assign("VAL_MERCH_ID",$module['acNo']);


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
	
	$formTemplate->assign("LANG_CC_INFO_TITLE",$lang['module']['psiGate']['cc_info_title']);
	$formTemplate->assign("LANG_FIRST_NAME",$lang['module']['psiGate']['first_name']); 
	$formTemplate->assign("LANG_LAST_NAME",$lang['module']['psiGate']['last_name']); 
	//$formTemplate->assign("LANG_CARD_TYPE",$lang['module']['psiGate']['card_type']);
	$formTemplate->assign("LANG_CARD_NUMBER",$lang['module']['psiGate']['card_number']);
	$formTemplate->assign("LANG_EXPIRES",$lang['module']['psiGate']['expires']);
	$formTemplate->assign("LANG_MMYYYY",$lang['module']['psiGate']['mmyyyy']);
	$formTemplate->assign("LANG_SECURITY_CODE",$lang['module']['psiGate']['security_code']);
	$formTemplate->assign("LANG_CUST_INFO_TITLE",$lang['module']['psiGate']['customer_info']);
	$formTemplate->assign("LANG_EMAIL",$lang['module']['psiGate']['email']);
	$formTemplate->assign("LANG_ADDRESS",$lang['module']['psiGate']['address']);
	$formTemplate->assign("LANG_CITY",$lang['module']['psiGate']['city']);
	$formTemplate->assign("LANG_STATE",$lang['module']['psiGate']['state']);
	$formTemplate->assign("LANG_ZIPCODE",$lang['module']['psiGate']['zipcode']);
	$formTemplate->assign("LANG_COUNTRY",$lang['module']['psiGate']['country']);
	$formTemplate->assign("LANG_OPTIONAL",$lang['module']['psiGate']['optional']);

$formTemplate->parse("form");
$formTemplate = $formTemplate->text("form");
?>