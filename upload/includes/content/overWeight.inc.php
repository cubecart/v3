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
|	overWeight.inc.php
|   ========================================
|	Warning for order too large	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$over_weight = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/overWeight.tpl");

	$over_weight->assign("LANG_SORRY",$lang['front']['overWeight']['sorry']);
	$over_weight->assign("LANG_DESC",$lang['front']['overWeight']['desc']);
	
	$over_weight->parse("over_weight");
	
$page_content = $over_weight->text("over_weight");
?>