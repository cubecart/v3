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
|	viewProduct.inc.php
|   ========================================
|	Displays the Product in Detail
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}


// query database
$_GET['productId'] = treatGet($_GET['productId']);
$query = "SELECT productId, productCode, quantity, name, description, image, noImages, price, popularity, sale_price, stock_level, useStockLevel, digital, digitalDir, cat_name, ".$glob['dbprefix']."CubeCart_inventory.cat_id, cat_father_id, cat_image, per_ship, item_ship, item_int_ship, per_int_ship, noProducts FROM ".$glob['dbprefix']."CubeCart_inventory INNER JOIN ".$glob['dbprefix']."CubeCart_category ON ".$glob['dbprefix']."CubeCart_inventory.cat_id = ".$glob['dbprefix']."CubeCart_category.cat_id where productId = ".$db->mySQLSafe($_GET['productId']);

$prodArray = $db->select($query);

$meta['siteTitle'] = $config['siteTitle']." - ".$prodArray[0]['name'];
$meta['metaDescription'] = substr(strip_tags($prodArray[0]['description']),0,35);

$view_prod = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/viewProd.tpl");

if($prodArray == TRUE){
	
	$val = "";
	
	if(($val = prodAltLang($prodArray[0]['productId'])) == TRUE){
				
		$prodArray[0]['name'] = $val['name'];
		$prodArray[0]['description'] = $val['description'];
			
	}

// update amount of views
	$upPop['popularity'] = "popularity+1"; 
	$db->update($glob['dbprefix']."CubeCart_inventory",$upPop,"productId = ".$db->mySQLSafe($_GET['productId']));
	
	$view_prod->assign("LANG_PRODTITLE",$lang['front']['viewProd']['product']);
	$view_prod->assign("LANG_PRODINFO",$lang['front']['viewProd']['product_info']);
	$view_prod->assign("LANG_PRICE",$lang['front']['viewProd']['price']);
	$view_prod->assign("LANG_PRODCODE",$lang['front']['viewProd']['product_code']);
	$view_prod->assign("LANG_TELLFRIEND",$lang['front']['viewProd']['tellafriend']);
	$view_prod->assign("TXT_PRODTITLE",validHTML($prodArray[0]['name']));
	$view_prod->assign("TXT_DESCRIPTION",$prodArray[0]['description']);
	
	if(isset($_GET['add']) && isset($_GET['quan'])){
		$view_prod->assign("CURRENT_URL",str_replace(array("&amp;add=".$_GET['add'],"&amp;quan=".$_GET['quan']),"",currentPage()));
	} else {
		$view_prod->assign("CURRENT_URL",currentPage());
	}

	if(salePrice($prodArray[0]['price'], $prodArray[0]['sale_price'])==FALSE){
		$view_prod->assign("TXT_PRICE",priceFormat($prodArray[0]['price']));
	} else {
		$view_prod->assign("TXT_PRICE","<span class='txtOldPrice'>".priceFormat($prodArray[0]['price'])."</span>");
	}
	$salePrice = salePrice($prodArray[0]['price'], $prodArray[0]['sale_price']);
	$view_prod->assign("TXT_SALE_PRICE", priceFormat($salePrice));
	$view_prod->assign("TXT_PRODCODE", $prodArray[0]['productCode']);

	$view_prod->assign("CURRENT_DIR",getCatDir($prodArray[0]['cat_name'],$prodArray[0]['cat_father_id'], $prodArray[0]['cat_id'],$link=TRUE));

	$view_prod->assign("LANG_QUAN",$lang['front']['viewProd']['quantity']);

	$view_prod->assign("PRODUCT_ID",$prodArray[0]['productId']);



	if(!empty($prodArray[0]['image'])){
		$view_prod->assign("IMG_SRC","images/uploads/".$prodArray[0]['image']);
	} else {
		$view_prod->assign("IMG_SRC","skins/".$config['skinDir']."/styleImages/nophoto.gif");
	}
	
	if($prodArray[0]['noImages']>0){
		$view_prod->assign("LANG_MORE_IMAGES",$lang['front']['viewProd']['more_images']);
		$view_prod->parse("view_prod.prod_true.more_images");
		
	}
	
	

	if($config['outofstockPurchase']==1){
	
		$view_prod->assign("BTN_ADDBASKET",$lang['front']['viewProd']['add_to_basket']);
		$view_prod->parse("view_prod.prod_true.buy_btn");
		
	
	} elseif($prodArray[0]['useStockLevel']==1 && $prodArray[0]['stock_level']>0){
	
		$view_prod->assign("BTN_ADDBASKET",$lang['front']['viewProd']['add_to_basket']);
		$view_prod->parse("view_prod.prod_true.buy_btn");	
		
	} elseif($prodArray[0]['useStockLevel']==0){

		$view_prod->assign("BTN_ADDBASKET",$lang['front']['viewProd']['add_to_basket']);
		$view_prod->parse("view_prod.prod_true.buy_btn");

	}

	$view_prod->assign("LANG_DIR_LOC",$lang['front']['viewProd']['location']);


	if($config['stockLevel']==1 && $prodArray[0]['useStockLevel']==1 && $prodArray[0]['stock_level']>0){
		
		$view_prod->assign("TXT_INSTOCK",$lang['front']['viewProd']['no_instock']." ".$prodArray[0]['stock_level']);
	
	} elseif($prodArray[0]['useStockLevel']==1 && $prodArray[0]['stock_level']>0) {
		
		$view_prod->assign("TXT_INSTOCK",$lang['front']['viewProd']['instock']);
	
	} else {
		
		$view_prod->assign("TXT_INSTOCK","");
	
	}


	if($prodArray[0]['stock_level']<1 && $prodArray[0]['useStockLevel']==1 && $prodArray[0]['digital']==0){
	
		$view_prod->assign("TXT_OUTOFSTOCK",$lang['front']['viewProd']['out_of_stock']);
		
	} else {
	
		$view_prod->assign("TXT_OUTOFSTOCK","&nbsp;");
	
	}

// build sql query for product options luuuuuurvely
	$query = "SELECT ".$glob['dbprefix']."CubeCart_options_bot.option_id, ".$glob['dbprefix']."CubeCart_options_bot.value_id, option_price, option_symbol, value_name, option_name, assign_id FROM `".$glob['dbprefix']."CubeCart_options_bot` INNER JOIN `".$glob['dbprefix']."CubeCart_options_mid` ON ".$glob['dbprefix']."CubeCart_options_mid.value_id = ".$glob['dbprefix']."CubeCart_options_bot.value_id INNER JOIN `".$glob['dbprefix']."CubeCart_options_top` ON ".$glob['dbprefix']."CubeCart_options_bot.option_id = ".$glob['dbprefix']."CubeCart_options_top.option_id WHERE product =".$db->mySQLSafe($_GET['productId'])." ORDER BY option_name, value_name ASC";

	$options = $db->select($query); 


	if($options == TRUE){
	
		$view_prod->assign("TXT_PROD_OPTIONS",$lang['front']['viewProd']['prod_opts']);
	
		// start loop
			
		for ($i=0; $i<count($options); $i++){
		
			$view_prod->assign("VAL_ASSIGN_ID", $options[$i]['assign_id']);
			$view_prod->assign("VAL_VALUE_NAME", $options[$i]['value_name']);
					
			
			if($options[$i]['option_price']>0){
				$view_prod->assign("VAL_OPT_SIGN",$options[$i]['option_symbol']);
				$view_prod->assign("VAL_OPT_PRICE",priceFormat($options[$i]['option_price']));
				$view_prod->parse("view_prod.prod_true.prod_opts.repeat_options.repeat_values.repeat_price");
			}
			$view_prod->parse("view_prod.prod_true.prod_opts.repeat_options.repeat_values");	
			
			if($options[$i]['option_id']!==$options[$i+1]['option_id']){
		
				$view_prod->assign("VAL_OPTS_NAME", $options[$i]['option_name']);
				$view_prod->parse("view_prod.prod_true.prod_opts.repeat_options");

			} 
				
			
		}
	
		$view_prod->parse("view_prod.prod_true.prod_opts");
	
	} // end if product options are true 

	$view_prod->parse("view_prod.prod_true");

} else {// end if product array is true
	
	$view_prod->assign("LANG_PRODUCT_EXPIRED",$lang['front']['viewProd']['prod_not_found']);
	$view_prod->parse("view_prod.prod_false");

}
$view_prod->parse("view_prod");
$page_content = $view_prod->text("view_prod");
?>