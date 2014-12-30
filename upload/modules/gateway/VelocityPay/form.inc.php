<?php
$module = fetchDbConfig("VelocityPay");

if ($_GET['process']==1)
{
    if (phpversion()<5)
    {
        require_once('class.velocityDirect-PHP4.php');
    }
    else
    {
        require_once('class.velocityDirect-PHP5.php');
    }
        
    $VPDirect = new VelocityDirect($module['testMode'],$module['VPMerchantID'],$module['VPMerchantPassword'],$module['secureDir']);
    $VPDirect->setCardDetails(
        $_POST["firstName"]." ".$_POST["lastName"],
        $_POST["cardNumber"],
        $_POST["expirationMonth"],
        $_POST["expirationYear"],
        $_POST['issueNumber'],
        $_POST['startDateMM'],
        $_POST['startDateYY'],
        $_POST["cvc2"]
    );

    $VPDirect->setAddressDetails(
        $_POST["houseNumber"],
        $_POST['addr1']." ".$_POST['addr2'],
        $_POST["city"],
        $_POST["state"],
        $_POST["postalCode"],
        $_POST["country"],
        $module['VPCurrencyCode'],
        $ccUserData[0]['email']
    );
    
    
    $VPDirect->setOrderDetails(getVPAmount($basket['grandTotal']),$basket['cart_order_id'],$basket['cart_order_id']);
    $VPDirect->process();
    
    $VPResponseCode=$VPDirect->getResponseCode();
    
    if($VPResponseCode==00)
    { 
		$cart_order_id = $basket['cart_order_id'];
		include("../../../includes/orderSuccess.inc.php");
		header("Location: confirmed.php");
		exit;
	}
    else
    {
        header("Location: confirmed.php?f=1&VPMessage=" . $VPDirect->getMessage());
		exit;
    }
}
else
{
    $formTemplate = new XTemplate ("modules/gateway/VelocityPay/form.tpl");

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

    $countries = $db->select("SELECT id, iso, numcode, iso3, printable_name FROM ".$glob['dbprefix']."CubeCart_iso_countries ORDER BY printable_name"); 
	    
	    for($i=0; $i<count($countries); $i++){
				    
			    
		    if($countries[$i]['id'] == $ccUserData[0]['country']){
			    $formTemplate->assign("COUNTRY_SELECTED","selected='selected'");
		    } else {
			    $formTemplate->assign("COUNTRY_SELECTED","");
		    }
	    
		    $formTemplate->assign("VAL_COUNTRY_ISO",$countries[$i]['numcode']);

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
}

function getNumbers($szString)
{
  $numbers="";
  
  for ($i=0; $i<strlen($szString); $i++)
  {
      $curChar = substr($szString, $i, 1);
      if (is_numeric($curChar))
      {
          $numbers .= $curChar;
      } 
  }
  
  return $numbers;
}

function stripNumbers($szString)
{
  $newStreet="";
  for ($i=0; $i<strlen($szString); $i++)
  {
      $curChar = substr($szString, $i, 1);
      if (!is_numeric($curChar))
      {
          $newStreet .= $curChar;
      }
  }
  return $newStreet;
}

function getVPAmount($amount)
{
    return number_format($amount, 2, '.', '') * 100;
}
?>
