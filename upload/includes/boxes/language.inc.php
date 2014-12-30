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
|	language.inc.php
|   ========================================
|	Language Jump Box	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$box_content = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/language.tpl");

$box_content->assign("LANG_LANGUAGE_TITLE",$lang['front']['boxes']['language']);

	$path = "language";
	if ($dir = opendir($path)) {

		$returnPage = "";
		$returnPage = urlencode(currentPage());
		
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi("[.]", $folder)){
			
			include($path."/".$folder."/config.inc.php");
			
				if($lang_folder==$folder){
					$box_content->assign("LANG_SELECTED","selected='selected'");
				} else {
					$box_content->assign("LANG_SELECTED","");
				}
				
				$box_content->assign("LANG_NAME",$langName);
				$box_content->assign("LANG_VAL",$folder);
				$box_content->assign("VAL_CURRENT_PAGE",$returnPage);
				$box_content->parse("language.option");
			
			}
		
		} 
		
	}
	
// $lang_folder is defined in /index.php
$box_content->assign("ICON_FLAG",$lang_folder."/flag.gif");

$box_content->parse("language");
$box_content = $box_content->text("language");
?>