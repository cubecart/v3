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
|	saleItems.inc.php
|   ========================================
|	Sales Items Box	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database
$saleItems = $db->select("SELECT name, productId, price, sale_price, price - sale_price as saving FROM ".$glob['dbprefix']."CubeCart_inventory WHERE price > sale_price AND sale_price > 0 ORDER BY saving DESC",$config['noSaleBoxItems']);

if($saleItems == TRUE && $config['saleMode']>0){

$salePrice = 0;

$box_content=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/saleItems.tpl");

$box_content->assign("LANG_SALE_ITEMS_TITLE",$lang['front']['boxes']['sale_items']);

	for($i=0;$i<count($saleItems);$i++){
			
			
			
			if(($val = prodAltLang($saleItems[$i]['productId'])) == TRUE){
			
				$saleItems[$i]['name'] = $val['name'];
		
			}
			
			$salePrice = salePrice($saleItems[$i]['price'], $saleItems[$i]['sale_price']);
			$saleItems[$i]['name'] = validHTML($saleItems[$i]['name']);
			$box_content->assign("DATA",$saleItems[$i]);
			$box_content->assign("SAVING",priceFormat($saleItems[$i]['price'] - $salePrice));
			$box_content->assign("LANG_SAVE",$lang['front']['boxes']['save']);
			$box_content->parse("sale_items.li");
	
	} // end loop
	
$box_content->parse("sale_items");
$box_content = $box_content->text("sale_items"); 

} else {
	
	$box_content = "";

}
?>