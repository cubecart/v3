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
|	noShip.inc.php
|   ========================================
|	Warning the store wont ship to the desired country	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$no_ship = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/noShip.tpl");

	$no_ship->assign("LANG_SORRY",$lang['front']['noShip']['sorry']);
	$no_ship->assign("LANG_DESC",$lang['front']['noShip']['desc']);
	
	$no_ship->parse("no_ship");
	
$page_content = $no_ship->text("no_ship");
?>