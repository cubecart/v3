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
|	account.inc.php
|   ========================================
|	Customers Account Homepage	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database

$account=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/account.tpl");

	$account->assign("LANG_YOUR_ACCOUNT",$lang['front']['account']['your_account']);

	$account->assign("TXT_PERSONAL_INFO",$lang['front']['account']['personal_info']);
	
	$account->assign("TXT_ORDER_HISTORY",$lang['front']['account']['order_history']);
	
	$account->assign("TXT_CHANGE_PASSWORD",$lang['front']['account']['change_password']);
	
	$account->assign("TXT_NEWSLETTER",$lang['front']['account']['newsletter']);
	
	$account->assign("LANG_LOGIN_REQUIRED",$lang['front']['account']['login_to_view']);
	
	if($ccUserData[0]['customer_id']>0) $account->parse("account.session_true");
	
	else $account->parse("account.session_false");
	
	$account->parse("account");
	
$page_content = $account->text("account");
?>