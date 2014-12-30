<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.18
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	changePass.inc.php
|   ========================================
|	Change the Customers Password	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// send email if form is submit
if(isset($_POST['submit']) && $ccUserData[0]['customer_id']>0){
	
	$checkOld = $db->numrows("SELECT customer_id FROM ".$glob['dbprefix']."CubeCart_customer WHERE customer_id=".$db->mySQLSafe($ccUserData[0]['customer_id'])." AND password = ".$db->mySQLSafe(md5($_POST['oldPass'])));
	
	if($checkOld==FALSE){
	
		$errorMsg = $lang['front']['changePass']['password_incorrect'];

	} elseif($_POST['newPass']!==$_POST['newPassConf']) {
	
		$errorMsg = $lang['front']['changePass']['conf_not_match'];
	
	} else {
		
		// update
		$data['password'] = $db->mySQLSafe(md5($_POST['newPass']));
		$where = "customer_id=".$db->mySQLSafe($ccUserData[0]['customer_id']);
		$updatePassword = $db->update($glob['dbprefix']."CubeCart_customer",$data, $where);
		 
	} 

}

$change_pass = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/changePass.tpl");

	$change_pass->assign("LANG_CHANGE_PASS_TITLE",$lang['front']['changePass']['change_pass']);

	
	if(!isset($_POST['submit'])) {
		
		$change_pass->assign("LANG_PASS_DESC",$lang['front']['changePass']['change_pass_below']);
		$change_pass->parse("change_pass.session_true.no_error");
		
	} elseif(isset($errorMsg)){
		
		$change_pass->assign("VAL_ERROR",$errorMsg);
		$change_pass->parse("change_pass.session_true.error");
		
	} else {

		$change_pass->assign("LANG_PASS_DESC",$lang['front']['changePass']['password_updated']);
		$change_pass->parse("change_pass.session_true.no_error");
		$change_pass->parse("change_pass.session_true");
		
	}
	
	if($ccUserData[0]['customer_id']>0 && $updatePassword == FALSE) { 
	
		$change_pass->assign("TXT_OLD_PASS",$lang['front']['changePass']['old_pass']);
		
		$change_pass->assign("TXT_NEW_PASS",$lang['front']['changePass']['new_pass']);
		
		$change_pass->assign("TXT_NEW_PASS_CONF",$lang['front']['changePass']['confirm_pass']);
	
		$change_pass->assign("TXT_SUBMIT",$lang['front']['changePass']['submit']);

		$change_pass->parse("change_pass.session_true.form");
		$change_pass->parse("change_pass.session_true");
		
	} else { 
		
		$change_pass->assign("LANG_LOGIN_REQUIRED",$lang['front']['account']['login_to_view']);		
		$change_pass->parse("change_pass.session_false");

	}

	$change_pass->parse("change_pass");
$page_content = $change_pass->text("change_pass");
?>
