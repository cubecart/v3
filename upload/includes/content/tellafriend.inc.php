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
|	tellafriend.inc.php
|   ========================================
|	Tell a friend about a product	
+--------------------------------------------------------------------------
*/
if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database
$_GET['productId'] = treatGet($_GET['productId']) ;
$result = $db->select("SELECT name FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productId = ".$db->mySQLSafe($_GET['productId'])); 

	if($lang_folder !== $config['defaultLang']){
	
		$foreignVal = $db->select("SELECT name FROM ".$glob['dbprefix']."CubeCart_inv_lang WHERE prod_master_id = ".$db->mySQLSafe($_GET['productId'])." AND prod_lang=".$db->mySQLSafe($lang_folder));
		
		if($foreignVal==TRUE){
		
			$result[0]['name'] = $foreignVal[0]['name'];
			
		}
	
	}

// send email if form is submit
if(isset($_POST['submit'])){

		$spamCode = fetchSpamCode($_POST['ESC'],TRUE);

		// start validation
		if((!isset($_POST['spamcode']) || ($spamCode['SpamCode']!==$_POST['spamcode']) || ($_SERVER['REMOTE_ADDR']!==$spamCode['userIp'])) AND ($config['floodControl']==1))
		{
			$errorMsg = $lang['front']['tellafriend']['error_code'];

		}
		elseif(empty($_POST['senderName']) || empty($_POST['recipName']) )
		{
			$errorMsg = $lang['front']['tellafriend']['error_name'];

		} 
		elseif(validateEmail($_POST['senderEmail'])==FALSE || validateEmail($_POST['recipEmail'])==FALSE)
		{
			$errorMsg = $lang['front']['tellafriend']['error_email'];
		}
		else
		{

			// make email
			include("classes/htmlMimeMail.php");
			
			$mail = new htmlMimeMail();
			
			$text = sprintf($lang['front']['tellafriend']['email_body'],treatGet($_POST['recipName']),stripslashes(treatGet($_POST['message'])),$GLOBALS['storeURL'],treatGet($_GET['productId']),$GLOBALS['storeURL'],$_SERVER['REMOTE_ADDR']);
			
			$mail->setText($text);
			$mail->setReturnPath($_POST['senderEmail']);
			$mail->setFrom($_POST['senderName'].' <'.$_POST['senderEmail'].'>');
			$mail->setSubject(sprintf($lang['front']['tellafriend']['email_subject'],$_POST['senderName']));
			$mail->setHeader('X-Mailer', 'CubeCart Mailer');
			$send = $mail->send(array($_POST['recipEmail']), $config['mailMethod']);
		
		}

}

$tellafriend=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/tellafriend.tpl");

	$tellafriend->assign("PRODUCT_ID",$_GET['productId']);
	
	$tellafriend->assign("TAF_TITLE",$lang['front']['tellafriend']['tellafriend']);
	
	if(isset($_POST['submit']) && !isset($errorMsg))
	{
	
		$tellafriend->assign("TAF_DESC",sprintf($lang['front']['tellafriend']['message_sent'],$_POST['recipName'],$result[0]['name']));
	
	} 
	else 
	{
	
		$tellafriend->assign("TAF_DESC",sprintf($lang['front']['tellafriend']['fill_out_below'],$result[0]['name']));
	
		if(isset($errorMsg))
		{

			$tellafriend->assign("VAL_ERROR",$errorMsg);
			$tellafriend->parse("tellafriend.error");
	
		}
	
		
	
	}
	
	$tellafriend->assign("TXT_RECIP_NAME",$lang['front']['tellafriend']['friends_name']);
	
	$tellafriend->assign("TXT_RECIP_EMAIL",$lang['front']['tellafriend']['friends_email']);
	
	
	$tellafriend->assign("TXT_SENDER_NAME",$lang['front']['tellafriend']['your_name']);
	
	if(isset($_POST['senderName'])){
		$tellafriend->assign("VAL_SENDER_NAME",$_POST['senderName']);
	}
	
	$tellafriend->assign("TXT_SENDER_EMAIL",$lang['front']['tellafriend']['your_email']);
	
	if(isset($_POST['senderName'])){
		$tellafriend->assign("VAL_SENDER_EMAIL",$_POST['senderEmail']);
	}
	
	$tellafriend->assign("TXT_MESSAGE",$lang['front']['tellafriend']['message']);
	
	if(isset($_POST['message'])){
		$tellafriend->assign("VAL_MESSAGE",stripslashes($_POST['message']));
	} else {
		$tellafriend->assign("VAL_MESSAGE",sprintf($lang['front']['tellafriend']['default_message'],$result[0]['name']));
	}
	
	$tellafriend->assign("TXT_SUBMIT",$lang['front']['tellafriend']['send']);
	
	// Start Spam Bot Control
	if($config['floodControl']==1) {
		
		$spamCode = strtoupper(randomPass(5));
		$ESC = createSpamCode($spamCode);
		
		$imgSpambot = imgSpambot($ESC);
		
		$tellafriend->assign("VAL_ESC",$ESC);
		$tellafriend->assign("TXT_SPAMBOT",$lang['front']['tellafriend']['spambot']);
		$tellafriend->assign("IMG_SPAMBOT",$imgSpambot);
		$tellafriend->parse("tellafriend.spambot");
	}


$tellafriend->parse("tellafriend");
$page_content = $tellafriend->text("tellafriend");
?>