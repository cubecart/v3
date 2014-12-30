<?php
$module = fetchDbConfig("PayJunction");

if($_GET['process']==1){

	## Required variables
	//$curl_exec		= "/usr/bin/curl -m 64 -d";
	$server			= "https://payjunction.com/live/vendor/quick_link/transact";
	$request		= "";
	$response 		= array ();
	$is_approved		= false;
	$is_default_page	= true;
	 
		$post_array 	= array
		(
			"dc_test"			=> $module['testMode'],
			"dc_logon"			=> $module['user'],
			"dc_password"			=> $module['pass'],
			"dc_transaction_type"		=> "AUTHORIZATION_CAPTURE",
			"dc_transaction_amount"		=> $basket['grandTotal'],
			"dc_first_name"			=> $_POST['dc_first_name'],
			"dc_last_name"			=> $_POST['dc_last_name'],
			"dc_number"			=> $_POST['dc_number'],
			"dc_expiration_month"		=> $_POST['dc_expiration_month'],
			"dc_expiration_year"		=> $_POST['dc_expiration_year'],
			"dc_verification_number"	=> $_POST['dc_verification_number'],
			"dc_address"			=> $_POST['dc_address'],
			"dc_city"			=> $_POST['dc_city'],
			"dc_state"			=> $_POST['dc_state'],
			"dc_zipcode"			=> $_POST['dc_zipcode'],
			"dc_country"			=> countryName($_POST['dc_country'])
		);
	
		## Setup the POST string to send to the PayJunction Server
		reset($post_array);
		while (list ($key, $val) = each($post_array)) 
		{
			$request .= $key . "=" . urlencode($val) . "&";
		}
	
		## Send the secure transaction request to PayJunction
		//$content = exec ("$curl_exec \"$request\" $server");
		
		// Use more secure curl_setop instead of exec
		$ch = curl_init($server); 
		curl_setopt($ch, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
		curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim( $request, "& " )); // use HTTP POST to send form data
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment this line if you get no gateway response. ###
		$content = curl_exec($ch); //execute post and get results
		curl_close ($ch);
		
	
		## Parse the response from PayJunction
		$content = array_values (split (chr (28), $content));
		while ($key_value = next ($content))
		{
			list ($key, $value) = split ("=", $key_value);
			$response[$key] = $value; 
		}
	
		## The result page.
		if ($response['response_code'] == "00" || $response['response_code'] == "85")
		{
			$is_approved = true;
		}
		$is_default_page = false;
	
	if ($is_approved){
			//$cart_order_id = $basket['cart_order_id'];
			//include("../../../includes/orderSuccess.inc.php");
			header("Location: confirmed.php");
			exit;
				
	} else {
		
			header("Location: confirmed.php?f=1");
			exit;
	}

}


$formTemplate = new XTemplate ("modules/gateway/PayJunction/form.tpl");

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
	
	$formTemplate->assign("LANG_CC_INFO_TITLE",$lang['module']['PayJunction']['cc_info_title']);
	$formTemplate->assign("LANG_FIRST_NAME",$lang['module']['PayJunction']['first_name']); 
	$formTemplate->assign("LANG_LAST_NAME",$lang['module']['PayJunction']['last_name']); 
	$formTemplate->assign("LANG_CARD_NUMBER",$lang['module']['PayJunction']['card_number']);
	$formTemplate->assign("LANG_EXPIRES",$lang['module']['PayJunction']['expires']);
	$formTemplate->assign("LANG_MMYYYY",$lang['module']['PayJunction']['mmyyyy']);
	$formTemplate->assign("LANG_SECURITY_CODE",$lang['module']['PayJunction']['security_code']);
	$formTemplate->assign("LANG_CUST_INFO_TITLE",$lang['module']['PayJunction']['customer_info']);
	$formTemplate->assign("LANG_ADDRESS",$lang['module']['PayJunction']['address']);
	$formTemplate->assign("LANG_CITY",$lang['module']['PayJunction']['city']);
	$formTemplate->assign("LANG_STATE",$lang['module']['PayJunction']['state']);
	$formTemplate->assign("LANG_ZIPCODE",$lang['module']['PayJunction']['zipcode']);
	$formTemplate->assign("LANG_COUNTRY",$lang['module']['PayJunction']['country']);


$formTemplate->parse("form");
$formTemplate = $formTemplate->text("form");
?>