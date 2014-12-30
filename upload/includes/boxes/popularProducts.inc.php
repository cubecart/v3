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
|	popularProducts.inc.php
|   ========================================
|	Display the most Popular Products	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database
$popularProds = $db->select("SELECT name, productId FROM ".$glob['dbprefix']."CubeCart_inventory ORDER BY popularity DESC",$config['noPopularBoxItems']);

$box_content = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/popularProducts.tpl");

$box_content->assign("LANG_POPULAR_PRODUCTS_TITLE",$lang['front']['boxes']['popular_products']);

if($popularProds == TRUE){
	// start loop
	for ($i=0; $i<count($popularProds); $i++){
		
		if(($val = prodAltLang($popularProds[$i]['productId'])) == TRUE){
			
				$popularProds[$i]['name'] = $val['name'];
		
		}
		$popularProds[$i]['name'] = validHTML($popularProds[$i]['name']);
		$box_content->assign("DATA",$popularProds[$i]);
		$box_content->parse("popular_products.li");
	
	} // end loop
} 
$box_content->parse("popular_products");
$box_content = $box_content->text("popular_products");
?>