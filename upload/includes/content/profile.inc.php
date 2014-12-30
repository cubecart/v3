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
|	profile.inc.php
|   ========================================
|	Customers Profile	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// send email if form is submit
if(isset($_POST['submit']) && $ccUserData[0]['customer_id']>0){

	if($_POST['email']!==$ccUserData[0]['email']){
		$emailArray = $db->select("SELECT customer_id, type FROM ".$glob['dbprefix']."CubeCart_customer WHERE email=".$db->mySQLSafe($_POST['email']));
	}

	if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['add_1']) || empty($_POST['town']) || empty($_POST['county']) || empty($_POST['postcode']) || empty($_POST['country'])){
	
	$errorMsg = $lang['front']['profile']['complete_all'];
	
	} elseif(validateEmail($_POST['email'])==FALSE) {
	
	$errorMsg = $lang['front']['profile']['email_invalid'];
	
	} elseif(!ereg("[0-9]",$_POST['phone'])) {
	
	$errorMsg = $lang['front']['profile']['enter_valid_tel'];
	
	} elseif(!empty($_POST['mobile']) && !ereg("[0-9]",$_POST['mobile'])) {
	
	$errorMsg = $lang['front']['profile']['enter_valid_tel'];
	
	} elseif(isset($emailArray) && $emailArray == TRUE && $emailArray[0]['type']==1) {
	
	$errorMsg = $lang['front']['profile']['email_inuse'];
	
	} else {
		
		// update database
			$data['title'] = $db->mySQLSafe($_POST['title']);
			$data['firstName'] = $db->mySQLSafe($_POST['firstName']);
			$data['lastName'] = $db->mySQLSafe($_POST['lastName']); 
			$data['email'] = $db->mySQLSafe($_POST['email']); 
			$data['add_1'] = $db->mySQLSafe($_POST['add_1']);
			$data['add_2'] = $db->mySQLSafe($_POST['add_2']);
			$data['town'] = $db->mySQLSafe($_POST['town']); 
			$data['county'] = $db->mySQLSafe($_POST['county']); 
			$data['postcode'] = $db->mySQLSafe($_POST['postcode']);
			$data['country'] = $db->mySQLSafe($_POST['country']);
			$data['phone'] = $db->mySQLSafe($_POST['phone']); 
			$data['mobile'] = $db->mySQLSafe($_POST['mobile']);
			
					// look up users zone
			$zoneId = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_counties WHERE (abbrev LIKE ".$db->mySQLSafe($_POST['county'])." OR name LIKE ".$db->mySQLSafe($_POST['county']).")");
		
			if($zoneId[0]['id']>0){
		
				$data["zoneId"] = $zoneId[0]['id'];
		
			} else {
			
				$data["zoneId"] = 0;
				
			} 
	
			$where = "customer_id = ".$ccUserData[0]['customer_id'];
			$updateAcc = $db->update($glob['dbprefix']."CubeCart_customer",$data,$where);
			
					// make email
			include("classes/htmlMimeMail.php");
			
			$mail = new htmlMimeMail();
			
			$text = sprintf($lang['front']['profile']['update_email'],treatGet($_POST['firstName']),treatGet($_POST['lastName']),$GLOBALS['storeURL'],$_SERVER['REMOTE_ADDR']);
			
			$mail->setText($text);
			$mail->setFrom($config['masterName'].' <'.$config['masterEmail'].'>');
			$mail->setSubject($lang['front']['profile']['update_email_subj']);
			$mail->setHeader('X-Mailer', 'CubeCart Mailer');
			$send = $mail->send(array(treatGet($_POST['email'])), $config['mailMethod']);
			
			if(isset($_GET['f']) && !empty($_GET['f'])){
				header("Location: cart.php?act=".$_GET['f']);
			}
	
			// rebuild customer array
			$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_sessions INNER JOIN ".$glob['dbprefix']."CubeCart_customer ON ".$glob['dbprefix']."CubeCart_sessions.customer_id = ".$glob['dbprefix']."CubeCart_customer.customer_id WHERE sessId = '".$_SESSION['ccUser']."'";
			$ccUserData = $db->select($query);
	}
}

$profile = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/profile.tpl");

	$profile->assign("LANG_PERSONAL_INFO_TITLE",$lang['front']['profile']['personal_info']);
	
	if(isset($updateAcc) && $updateAcc == TRUE) {
		$profile->assign("LANG_PROFILE_DESC",$lang['front']['profile']['account_updated']);
		$profile->parse("profile.session_true.no_error");
	} elseif(isset($errorMsg)) {
		$profile->assign("VAL_ERROR",$errorMsg);
		$profile->parse("profile.session_true.error");
	} else {
		$profile->assign("LANG_PROFILE_DESC",$lang['front']['profile']['edit_below']);
		$profile->parse("profile.session_true.no_error");
	}
	
	if($ccUserData[0]['customer_id']>0) { 
	
		if(isset($_GET['f']) && !empty($_GET['f'])){
		$profile->assign("VAL_EXTRA_GET","&amp;f=".$_GET['f']);
		}
	
		$profile->assign("TXT_TITLE",$lang['front']['profile']['title']);
		$profile->assign("VAL_TITLE",$ccUserData[0]['title']);
		
		$profile->assign("TXT_FIRST_NAME",$lang['front']['profile']['first_name']);
		$profile->assign("VAL_FIRST_NAME",$ccUserData[0]['firstName']);
		
		$profile->assign("TXT_LAST_NAME",$lang['front']['profile']['last_name']);
		$profile->assign("VAL_LAST_NAME",$ccUserData[0]['lastName']);
		
		$profile->assign("TXT_EMAIL",$lang['front']['profile']['email']);
		$profile->assign("VAL_EMAIL",$ccUserData[0]['email']);
		
		$profile->assign("TXT_ADD_1",$lang['front']['profile']['address']);
		$profile->assign("VAL_ADD_1",$ccUserData[0]['add_1']);
		
		$profile->assign("TXT_ADD_2","");
		$profile->assign("VAL_ADD_2",$ccUserData[0]['add_2']);
		
		$profile->assign("TXT_TOWN",$lang['front']['profile']['town']);
		$profile->assign("VAL_TOWN",$ccUserData[0]['town']);
		
		$profile->assign("TXT_COUNTY",$lang['front']['profile']['county']);
		$profile->assign("VAL_COUNTY",$ccUserData[0]['county']);
		
		$profile->assign("TXT_POSTCODE",$lang['front']['profile']['postcode']);
		$profile->assign("VAL_POSTCODE",$ccUserData[0]['postcode']);
		
		$profile->assign("TXT_COUNTRY",$lang['front']['profile']['country']);
		

	$countries = $db->select("SELECT id, printable_name FROM ".$glob['dbprefix']."CubeCart_iso_countries ORDER BY printable_name"); 
	
	for($i=0; $i<count($countries); $i++){

			
				if($countries[$i]['id'] == $ccUserData[0]['country']){
					$profile->assign("COUNTRY_SELECTED","selected='selected'");
				} else {
					$profile->assign("COUNTRY_SELECTED","");
				}
			
				$profile->assign("VAL_COUNTRY_ID",$countries[$i]['id']);
		
				$countryName = "";
				$countryName = $countries[$i]['printable_name'];
		
				if(strlen($countryName)>20){
		
					$countryName = substr($countryName,0,20)."&hellip;";
		
				}
		
				$profile->assign("VAL_COUNTRY_NAME",$countryName);
				
				$profile->parse("profile.session_true.country_opts");
			
			} 
	
		$profile->assign("VAL_COUNTRY",$ccUserData[0]['country']);
		
		$profile->assign("TXT_PHONE",$lang['front']['profile']['phone']);
		$profile->assign("VAL_PHONE",$ccUserData[0]['phone']);
		
		$profile->assign("TXT_MOBILE",$lang['front']['profile']['mobile']);
		$profile->assign("VAL_MOBILE",$ccUserData[0]['mobile']);
		
		$profile->assign("TXT_SUBMIT",$lang['front']['profile']['update_account']);

		$profile->parse("profile.session_true");
	
	} else { 
		$profile->assign("LANG_LOGIN_REQUIRED",$lang['front']['profile']['login_required']);
		$profile->parse("profile.session_false");
	
	}
	
	$profile->parse("profile");
$page_content = $profile->text("profile");
?>