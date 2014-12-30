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
|	session.inc.php
|   ========================================
|	Session Links & Welcome Text	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$box_content = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/session.tpl");

// build attributes
if($ccUserData[0]['customer_id']>0){

		$box_content->assign("LANG_WELCOME_BACK",$lang['front']['boxes']['welcome_back']);
		$box_content->assign("TXT_USERNAME",$ccUserData[0]['firstName']." ".$ccUserData[0]['lastName']);
		$box_content->assign("LANG_LOGOUT",$lang['front']['boxes']['logout']);
		$box_content->assign("LANG_YOUR_ACCOUNT",$lang['front']['boxes']['your_account']);
		$box_content->parse("session.session_true");

} else {

		$box_content->assign("LANG_WELCOME_GUEST",$lang['front']['boxes']['welcome_guest']);
		$box_content->assign("VAL_SELF",base64_encode(currentPage()));
		$box_content->assign("LANG_LOGIN",$lang['front']['boxes']['login']);
		$box_content->assign("LANG_REGISTER",$lang['front']['boxes']['register']);
		$box_content->parse("session.session_false");

}

$box_content->parse("session");
$box_content = $box_content->text("session");
?>