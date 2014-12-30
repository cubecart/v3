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
|	currency.inc.php
|   ========================================
|	Currency Jump Box	
+--------------------------------------------------------------------------
*/
if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$currencies = $db->select("SELECT name, code FROM ".$glob['dbprefix']."CubeCart_currencies WHERE active = 1 ORDER BY name ASC");

if($currencies == TRUE) {

$box_content = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/currency.tpl");

$box_content->assign("LANG_CURRENCY_TITLE",$lang['front']['boxes']['currency']);
			
			
			for($i=0; $i<count($currencies); $i++){
				
				if($ccUserData[0]['currency']==$currencies[$i]['code']){
					$box_content->assign("CURRENCY_SELECTED","selected='selected'");
				} elseif(($config['defaultCurrency']==$currencies[$i]['code']) && empty($ccUserData[0]['currency'])) {
					$box_content->assign("CURRENCY_SELECTED","selected='selected'");
				} else {
					$box_content->assign("CURRENCY_SELECTED","");
				}
				
				
				
				if(strlen($currencies[$i]['name'])>20) {
					$currencyName = substr($currencies[$i]['name'],0,18)."&hellip;";
				} else {
					$currencyName = $currencies[$i]['name'];
				}
				
					$box_content->assign("VAL_CURRENCY",$currencies[$i]['code']);
					$box_content->assign("CURRENCY_NAME",$currencyName);
					$box_content->assign("VAL_CURRENT_PAGE",$returnPage);
					$box_content->parse("currency.option");
				
				}

		
		
$box_content->parse("currency");
$box_content = $box_content->text("currency");

} else {

	$box_content = "";

}
?>