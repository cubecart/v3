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
|	mailingList.inc.php
|   ========================================
|	Mailing List Box	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$box_content=new XTemplate("skins/".$config['skinDir']."/styleTemplates/boxes/mailList.tpl");

$box_content->assign("LANG_MAIL_LIST_TITLE",$lang['front']['boxes']['mailing_list']);
$box_content->assign("FORM_METHOD",currentPage());
$box_content->assign("LANG_MAIL_LIST_DESC",$lang['front']['boxes']['subscribe_below']);
$box_content->assign("LANG_EMAIL",$lang['front']['boxes']['email']);
$box_content->assign("LANG_GO",$lang['front']['boxes']['join_now']);

if(isset($_POST['act']) && $_POST['act']=="mailList"){

	// see if email is already subscribed

	// if already in db change status
	$email = $db->select("SELECT email, optIn1st FROM ".$glob['dbprefix']."CubeCart_customer WHERE email = ".$db->mySQLSafe($_POST['email']));
	
	// if not in database insert it

	 if($email == TRUE && $email[0]['optIn1st']==1) {
		
		$box_content->assign("LANG_MAIL_LIST_DESC",sprintf($lang['front']['boxes']['already_subscribed'],$_POST['email']));
	
	} elseif(validateEmail($_POST['email'])==FALSE) {
	
		$box_content->assign("LANG_MAIL_LIST_DESC",$lang['front']['boxes']['enter_valid_email']);
		$box_content->parse("mail_list.form");
		
	} elseif($email==FALSE){
			
		// insert
		$record["optIn1st"] = 1;
		$record["ipAddress"] = $db->mySQLSafe($_SERVER['REMOTE_ADDR']); 
		$record["email"] = $db->mySQLSafe($_POST['email']);
		$record["type"] = 0; 
		$record["regTime"] = $db->mySQLSafe(time());
		$insert = $db->insert($glob['dbprefix']."CubeCart_customer", $record);
		
		$box_content->assign("LANG_MAIL_LIST_DESC",sprintf($lang['front']['boxes']['added_to_mail'],treatGet($_POST['email'])));
			
	} else {
	
		// subscribe them again
		$record["optIn1st"] = 1;  
		$where = "email=".$db->mySQLSafe($_POST['email']);
		$update = $db->update($glob['dbprefix']."CubeCart_customer", $record, $where);
		
		$box_content->assign("LANG_MAIL_LIST_DESC",sprintf($lang['front']['boxes']['subscribed_to_mail'],treatGet($_POST['email'])));
	
	}

} else {

	$box_content->parse("mail_list.form");

}
	
$box_content->parse("mail_list");

$box_content = $box_content->text("mail_list");
?>