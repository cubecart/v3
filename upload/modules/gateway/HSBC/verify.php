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

	$pasData = base64_decode($_POST['MD']);
	$pasData = explode("|",$pasData);

	switch($_POST['CcpaResultsCode']) {
		// Payer authentication was successful.
		case "0":
			$pasConfig['PayerSecurityLevel'] = "2";
			$pasConfig['PayerAuthenticationCode'] = $_POST['CAVV'];
			$pasConfig['PayerTxnId'] = $_POST['XID'];
			$pasConfig['CardholderPresentCode'] = "13";
			break;
			
		// The cardholder’s card was not within a participating BIN range.
		case "1":
			$pasConfig['PayerSecurityLevel'] = "5";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "13";
			break;
			
		// The cardholder was in a participating BIN range, but was not enrolled in 3-D Secure.
		case "2":
			$pasConfig['PayerSecurityLevel'] = "1";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "13";
			break;
			
		// The cardholder was not enrolled in 3-D Secure. However, the cardholder was authenticated using the 3-D Secure attempt server.
		case "3":
			$pasConfig['PayerSecurityLevel'] = "6";
			$pasConfig['PayerAuthenticationCode'] = $_POST['CAVV'];
			$pasConfig['PayerTxnId'] = $_POST['XID'];
			$pasConfig['CardholderPresentCode'] = "13";
			break;
			
		// The cardholder was enrolled in 3-D Secure. A PARes has not yet been received for this transaction.
		case "4":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
			
		// The cardholder has failed payer authentication.
		case "5":
			header("Location: confirmed.php?f=1");
			exit;
			
		// Signature validation of the results from the ACS failed.
		case "6":
			header("Location: confirmed.php?f=1");
			exit;
			
		// The ACS was unable to provide authentication results.
		case "7":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
			
		// The CCPA failed to communicate with the Directory Server.
		case "8":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
			
		// The CCPA was unable to interpret the results from payer authentication or enrolment verification.
		case "9":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
			
		// The CCPA failed to locate or access configuration information for this merchant.
		case "10":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
			
		// Data submitted or configured in the CCPA has failed validation checks.
		case "11":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
			
		// Unexpected system error from CCPA.
		case "12":
			$pasConfig['PayerSecurityLevel'] = "4";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
				
		// Indicates that card submitted is not recognised, or the PAS does not support the card type.
		case "14":
			$pasConfig['PayerSecurityLevel'] = "7";
			$pasConfig['PayerAuthenticationCode'] = "";
			$pasConfig['PayerTxnId'] = "";
			$pasConfig['CardholderPresentCode'] = "";
			break;
	}
	
	include ("../../../includes/global.inc.php");
	include ("../../../classes/db.inc.php");
	$db = new db();
	include ("../../../includes/functions.inc.php");
	$config = fetchDbConfig("config");
	include ("../../../modules/gateway/HSBC/func_https_libcurl.php");
	
	$module = fetchDbConfig("HSBC");

	switch($module['test']) {
		case "0": $pp_mode="P"; break;
		case "1": $pp_mode="Y"; break;
		default: $pp_mode="N"; break;
	}
	$domen = ($module["test"]=="2" ? $module["url"] : $module["url"]);
	$port = ($module["test"]=="2" ? 443 : 443);
	$pp_login = $module["userID"];
	$pp_pass = $module["passPhrase"];
	$pp_client = $module["acNo"];
	$curr = "826";
	
	$XPost = "";
	$XPost[] = "<?xml version='1.0' encoding='UTF-8' ?>";
	$XPost[] = "	<EngineDocList>";
	$XPost[] = "	<DocVersion>1.0</DocVersion>";
	$XPost[] = "	<EngineDoc>";
	$XPost[] = "		<ContentType>OrderFormDoc</ContentType>";

	$XPost[] = "		<User>";
	$XPost[] = "			<Name>$pp_login</Name>";
	$XPost[] = "			<Password>$pp_pass</Password>";
	$XPost[] = "			<ClientId DataType='S32'>$pp_client</ClientId>";
	$XPost[] = "		</User>";

	$XPost[] = "		<Instructions>";
	$XPost[] = "			<Pipeline>Payment</Pipeline>";
	$XPost[] = "		</Instructions>";

	$XPost[] = "		<OrderFormDoc>";
	$XPost[] = "			<Mode>$pp_mode</Mode>";
	$XPost[] = "			<Consumer>";
	$XPost[] = "				<Email>".$pasData[0]."</Email>";
	$XPost[] = "				<BillTo>";
	$XPost[] = "					<Location>";
	$XPost[] = "						<TelVoice>".$pasData[1]."</TelVoice>";
	$XPost[] = "						<Address>";
	$XPost[] = "							<Name>".$pasData[2]." ".$pasData[3]."</Name>";
	$XPost[] = "							<City>".$pasData[4]."</City>";
	$XPost[] = "							<Street1>".$pasData[5]."</Street1>";
	$XPost[] = "							<Street2>".$pasData[6]."</Street2>";
	$XPost[] = "							<StateProv>".$pasData[7]."</StateProv>";
	$XPost[] = "							<PostalCode>".$pasData[8]."</PostalCode>";
	$XPost[] = "						</Address>";
	$XPost[] = "					</Location>";
	$XPost[] = "				</BillTo>";

	$XPost[] = "				<PaymentMech>";
	$XPost[] = "					<CreditCard>";
	$XPost[] = "						<Cvv2Indicator>".(!empty($pasData[9])?1:2)."</Cvv2Indicator>";
	$XPost[] = "						<Cvv2Val>".$pasData[9]."</Cvv2Val>";
	$XPost[] = "						<Expires DataType='ExpirationDate' Locale='840'>".$pasData[10]."</Expires>";
	if ((($pasData[14] == 9)||($pasData[14] == 10))&&($pasData[11])){
		$XPost[] = "					<IssueNum>".$pasData[11]."</IssueNum>";
	}
	$XPost[] = "						<Number>".$pasData[12]."</Number>";
	if ((($pasData[14] == 9)||($pasData[14] == 10))&&($pasData[13] != "/")){
		$XPost[] = "					<StartDate DataType='StartDate' Locale='840'>".$pasData[13]."</StartDate>";
	}
	$XPost[] = "						<Type>".$pasData[14]."</Type>";
	$XPost[] = "					</CreditCard>";
	$XPost[] = "				</PaymentMech>";
	$XPost[] = "			</Consumer>";
	$XPost[] = "			<Transaction>";
	$XPost[] = "				<Type>Auth</Type>";
	$XPost[] = "				<ChargeDesc1></ChargeDesc1>";
	$XPost[] = "				<CurrentTotals>";
	$XPost[] = "					<Totals>";
	$XPost[] = "                                            <Total DataType='Money' Currency='".$curr."'>".(100*$pasData[15])."</Total>";
	$XPost[] = "					</Totals>";
	$XPost[] = "				</CurrentTotals>";
	// PAS
	$XPost[] = "				<PayerSecurityLevel>".$pasConfig['PayerSecurityLevel']."</PayerSecurityLevel>";
	$XPost[] = "				<PayerAuthenticationCode>".$pasConfig['PayerAuthenticationCode']."</PayerAuthenticationCode>";
	$XPost[] = "				<PayerTxnId>".$pasConfig['PayerTxnId']."</PayerTxnId>";
	$XPost[] = "				<CardholderPresentCode>".$pasConfig['CardholderPresentCode']."</CardholderPresentCode>";
	$XPost[] = "			</Transaction>";
	$XPost[] = "		</OrderFormDoc>";
	$XPost[] = "	</EngineDoc>";
	$XPost[] = "</EngineDocList>";
	
	$pst = array("CLRCMRC_XML=".join("",$XPost));
	list($a,$return)=func_https_request("POST","https://".$domen.":$port/",$pst);
	$return=preg_replace("/\n/","",$return);
	
	preg_match("/<AuthCode(.*)>(.*)<\/AuthCode>/",$return,$out);
	$authCode = $out[2];

	if($authCode) {
		header("Location: ".$config['storeURL_SSL']."/confirmed.php");
		exit;
	} else {
		header("Location: ".$config['storeURL_SSL']."/confirmed.php?f=1");
		exit;
	}
	
?>