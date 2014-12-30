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
|	info.inc.php
|   ========================================
|	Info & Stats Box	
+--------------------------------------------------------------------------
*/
if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database
$noProducts = $db->select("SELECT count(productId) as no FROM ".$glob['dbprefix']."CubeCart_inventory");
// query database
$noCategories = $db->select("SELECT count(cat_id) as no FROM ".$glob['dbprefix']."CubeCart_category"); 
 

$box_content=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/info.tpl");

$box_content->assign("LANG_INFO_TITLE",$lang['front']['boxes']['information']);
$box_content->assign("LANG_INFO_PRODUCTS",$lang['front']['boxes']['products']);
$box_content->assign("DATA_NO_PRODUCTS",$noProducts[0]['no']);
$box_content->assign("LANG_INFO_CATEGORIES",$lang['front']['boxes']['categories']);
$box_content->assign("DATA_NO_CATEGORIES",$noCategories[0]['no']);
$box_content->assign("LANG_INFO_PRICES",$lang['front']['boxes']['prices']);
$box_content->assign("DATA_CURRENCY",$currencyVars[0]['name']);

$box_content->parse("info");

$box_content = $box_content->text("info");
?>