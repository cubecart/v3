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
|	searchForm.inc.php
|   ========================================
|	Search Box	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$box_content = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/searchForm.tpl");

$box_content->assign("LANG_SEARCH_FOR",$lang['front']['boxes']['search_for']);
if(isset($_GET['searchStr'])){
	$box_content->assign("SEARCHSTR",treatGet($_GET['searchStr']));
} else {
	$box_content->assign("SEARCHSTR","");
}
$box_content->assign("LANG_GO",$lang['front']['boxes']['go']);
		
$box_content->parse("search_form");
$box_content = $box_content->text("search_form");
?>