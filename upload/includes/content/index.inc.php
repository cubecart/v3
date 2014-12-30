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
|	index.inc.php
|   ========================================
|	The Homepage :O)	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$index=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/index.tpl");

include("language/".$lang_folder."/home.inc.php");

if($home['enabled']==0){

	include("language/".$config['defaultLang']."/home.inc.php");

}

$index->assign("HOME_TITLE",validHTML(stripslashes($home['title'])));
$index->assign("HOME_CONTENT",stripslashes($home['copy']));

$latestProducts = $db->select("SELECT productId, image, price, name, sale_price FROM ".$glob['dbprefix']."CubeCart_inventory WHERE `showFeatured` = 1 ORDER BY productId DESC LIMIT ".$config['noLatestProds']);

if($config['showLatestProds']==1 && $latestProducts==TRUE){
	
	for($i=0;$i<count($latestProducts);$i++){
	
		if(($val = prodAltLang($latestProducts[$i]['productId'])) == TRUE){
			
				$latestProducts[$i]['name'] = $val['name'];
		
		}
	
		if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$latestProducts[$i]['image'])){
			
			$index->assign("VAL_IMG_SRC",$GLOBALS['rootRel']."images/uploads/thumbs/thumb_".$latestProducts[$i]['image']);
		
		} else {
		
			$index->assign("VAL_IMG_SRC",$GLOBALS['rootRel']."skins/".$config['skinDir']."/styleImages/thumb_nophoto.gif");
		
		}
	$index->assign("LANG_LATEST_PRODUCTS",$lang['front']['index']['latest_products']);
	
	if(salePrice($latestProducts[$i]['price'], $latestProducts[$i]['sale_price'])==FALSE){
			
			$index->assign("TXT_PRICE",priceFormat($latestProducts[$i]['price']));
	
	} else {
			
			$index->assign("TXT_PRICE","<span class='txtOldPrice'>".priceFormat($latestProducts[$i]['price'])."</span>");
	
	}
		
		$salePrice = salePrice($latestProducts[$i]['price'], $latestProducts[$i]['sale_price']);
		
	$index->assign("VAL_WIDTH", $config['gdthumbSize']+75);
		
	$index->assign("TXT_SALE_PRICE", priceFormat($salePrice));
	
	$index->assign("VAL_PRODUCT_ID",$latestProducts[$i]['productId']);
	
	$index->assign("VAL_PRODUCT_NAME",validHTML($latestProducts[$i]['name']));
	
	$index->parse("index.latest_prods.repeat_prods");
	
	}
	
	$index->parse("index.latest_prods");	

}

$index->parse("index");
$page_content = $index->text("index");
?>