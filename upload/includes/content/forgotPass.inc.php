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
|	forgotPass.inc.php
|   ========================================
|	Password Reset Page	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$forgot_pass = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/forgotPass.tpl");

$forgot_pass->assign("LANG_FORGOT_PASS_TITLE",$lang['front']['forgotPass']['forgot_pass']);
$forgot_pass->assign("LANG_EMAIL",$lang['front']['forgotPass']['email']);
$forgot_pass->assign("TXT_SUBMIT",$lang['front']['forgotPass']['send_pass']);

if(isset($_POST['email']) && !empty($_POST['email'])){
	$query = "SELECT firstName, lastName FROM ".$glob['dbprefix']."CubeCart_customer WHERE `email` = ".$db->mySQLSafe($_POST['email'])." AND `type`>0";
	$result = $db->select($query); 
}

if(isset($_POST['submit']) && $result == TRUE){

	// update to new password
		$newPass = randomPass();
		$data['password'] = "'".md5($newPass)."'";
		$where = "`email` = ".$db->mySQLSafe($_POST['email']);
		$update = $db->update($glob['dbprefix']."CubeCart_customer", $data, $where);
		
	// send email
		include("classes/htmlMimeMail.php");
		
		$mail = new htmlMimeMail();
        
		$text = sprintf($lang['front']['forgotPass']['reset_email'],$result[0]['firstName'],$result[0]['lastName'],$_POST['email'],$newPass,$GLOBALS['storeURL'],$GLOBALS['storeURL'],$_SERVER['REMOTE_ADDR']);
		
		$mail->setText($text);
		$mail->setReturnPath($config['masterEmail']);
		$mail->setFrom($config['masterName'].' <'.$config['masterEmail'].'>');
		$mail->setSubject("Password Reset");
		$mail->setHeader('X-Mailer', 'CubeCart Mailer');
		$send = $mail->send(array($_POST['email']), $config['mailMethod']);

	
	$forgot_pass->assign("FORGOT_PASS_STATUS",sprintf($lang['front']['forgotPass']['new_pass_sent'],$_POST['email']));

} elseif(isset($_POST['submit']) && $result == FALSE) {

	$forgot_pass->assign("FORGOT_PASS_STATUS",$lang['front']['forgotPass']['email_not_found']);
	$forgot_pass->parse("forgot_pass.form");
} else {

	$forgot_pass->assign("FORGOT_PASS_STATUS",$lang['front']['forgotPass']['enter_email']);
	$forgot_pass->parse("forgot_pass.form");

}

$forgot_pass->parse("forgot_pass");
$page_content = $forgot_pass->text("forgot_pass");
?>