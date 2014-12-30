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
|	viewCat.inc.php
|   ========================================
|	Display the Current Category	
+--------------------------------------------------------------------------
*/
if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

if(isset($_GET['page'])){
	
	$page = treatGet($_GET['page']);

} else {
	
	$page = 0;

}

$view_cat = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/viewCat.tpl");
////////////////////////
// BUILD SUB CATEGORIES
////////
if(isset($_GET['catId'])) {
	$_GET['catId'] = treatGet($_GET['catId']);
	// build query
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_category WHERE cat_father_id = ".$db->mySQLSafe($_GET['catId'])." ORDER BY cat_name ASC";
	
	// get category array in foreign innit
	$resultsForeign = $db->select("SELECT cat_master_id as cat_id, cat_name FROM ".$glob['dbprefix']."CubeCart_cats_lang WHERE cat_lang = '".$lang_folder."'");
	
	// query database
	$subCategories = "";
	$subCategories = $db->select($query);

}

if(isset($_GET['catId']) && $_GET['catId']>0 && $subCategories == TRUE) {

// loop results
for ($i=0; $i<count($subCategories); $i++){
		
			if(is_array($resultsForeign)){
	
				for ($k=0; $k<count($resultsForeign); $k++){
	
					if($resultsForeign[$k]['cat_id'] == $subCategories[$i]['cat_id']){
					
						$subCategories[$i]['cat_name'] = $resultsForeign[$k]['cat_name'];
					
					}
					
				}
			
			}

			if(empty($subCategories[$i]['cat_image'])){
				$view_cat->assign("IMG_CATEGORY",$GLOBALS['rootRel']."skins/".$config['skinDir']."/styleImages/catnophoto.gif");
			} else {
				$view_cat->assign("IMG_CATEGORY",$GLOBALS['rootRel']."images/uploads/".$subCategories[$i]['cat_image']);
			}
		
		$view_cat->assign("TXT_LINK_CATID",$subCategories[$i]['cat_id']);

		$view_cat->assign("TXT_CATEGORY", validHTML($subCategories[$i]['cat_name']));
		
		$view_cat->assign("NO_PRODUCTS", $subCategories[$i]['noProducts']);
		
		$view_cat->parse("view_cat.sub_cats.sub_cats_loop");
	
	} // end loop results
$view_cat->parse("view_cat.sub_cats");
} // end $subCategories == TRUE

////////////////////////////
// BUILD PRODUCTS
///////////


// build query
if(isset($_GET['searchStr'])){
	
	// Fix for SQL Injection if Reg Globals is On
	if(isset($searchArray))
	{
		unset($searchArray);
	}
	$searchwords = split ( "[ ,]", treatGet($_GET['searchStr']));   
	foreach($searchwords as $word){
		$searchArray[]=$word;
	}

	$noKeys = count($searchArray);
	$like = "";
	for ($i=0; $i<$noKeys;$i++) {
		
		$ucSearchTerm = strtoupper($searchArray[$i]);
		if(($ucSearchTerm!=="AND") && ($ucSearchTerm!=="OR")){
			
			$like .= "(name LIKE '%".$searchArray[$i]."%' OR description LIKE '%".$searchArray[$i]."%' OR productCode LIKE '%".$searchArray[$i]."%') OR ";
			
			// see if search terrm is in database
			$searchQuery = "SELECT id FROM ".$glob['dbprefix']."CubeCart_search WHERE searchstr='".$ucSearchTerm."'";
			$searchLogs = $db->select($searchQuery);
			
			$insertStr['searchstr'] = $db->mySQLsafe($ucSearchTerm);
			$insertStr['hits'] = $db->mySQLsafe(1);
			$updateStr['hits'] = "hits+1";
			
			if($searchLogs == TRUE) {
				
				$db->update($glob['dbprefix']."CubeCart_search",$updateStr,"id=".$searchLogs[0]['id'],$quote = "");
			
			} elseif(!empty($_GET['searchStr'])) {
				
				$db->insert($glob['dbprefix']."CubeCart_search",$insertStr);
			
			}
			
		} else {
			
			$like = substr($like,0,strlen($like)-3);
			$like .= $ucSearchTerm;
		
		}  

	}
	$like = substr($like,0,strlen($like)-3);
	
	$productListQuery = "SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory WHERE ".$like;
	
} elseif($_GET['catId']=="saleItems" && $config['saleMode']>0) {
	
	$productListQuery = "SELECT ".$glob['dbprefix']."CubeCart_cats_idx.cat_id, ".$glob['dbprefix']."CubeCart_cats_idx.productId, productCode, quantity, description, image, price, name, popularity, sale_price, stock_level, useStockLevel FROM ".$glob['dbprefix']."CubeCart_cats_idx INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON ".$glob['dbprefix']."CubeCart_cats_idx.productId = ".$glob['dbprefix']."CubeCart_inventory.productId WHERE sale_price > 0 GROUP BY ".$glob['dbprefix']."CubeCart_inventory.productId";


} else {
	
	$productListQuery = "SELECT ".$glob['dbprefix']."CubeCart_cats_idx.cat_id, ".$glob['dbprefix']."CubeCart_cats_idx.productId, productCode, quantity, description, image, price, name, popularity, sale_price, stock_level, useStockLevel FROM ".$glob['dbprefix']."CubeCart_cats_idx INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON ".$glob['dbprefix']."CubeCart_cats_idx.productId = ".$glob['dbprefix']."CubeCart_inventory.productId WHERE ".$glob['dbprefix']."CubeCart_cats_idx.cat_id = ".$db->mySQLSafe($_GET['catId']);
	
}

$productResults = $db->select($productListQuery, $config['productPages'], $page);

// get different languages 
if($productResults == TRUE && $lang_folder !== $config['defaultLang']){

	for($i=0;$i<count($productResults);$i++){
	
		if(($val = prodAltLang($productResults[$i]['productId'])) == TRUE){
			
				$productResults[$i]['name'] = $val['name'];
				$productResults[$i]['description'] = $val['description'];
		
		}
		
	}

}

$totalNoProducts = $db->numrows($productListQuery);

// get current category info
	if(isset($_GET['catId']) && $_GET['catId']>0){
		$currentCatQuery = "SELECT cat_name, cat_father_id, cat_id, cat_image FROM ".$glob['dbprefix']."CubeCart_category WHERE cat_id = ".$db->mySQLSafe($_GET['catId']);
		$currentCat = $db->select($currentCatQuery);
		
		$resultForeign = $db->select("SELECT cat_master_id as cat_id, cat_name FROM ".$glob['dbprefix']."CubeCart_cats_lang WHERE cat_lang = '".$lang_folder."' AND cat_master_id = ".$db->mySQLSafe($_GET['catId']));
		
		if($resultForeign == TRUE){
			
			$currentCat[0]['cat_name'] = $resultForeign[0]['cat_name'];
		
		}
		
		
	}

		if(!empty($currentCat[0]['cat_image'])) {
			$view_cat->assign("IMG_CURENT_CATEGORY","images/uploads/".$currentCat[0]['cat_image']);
			$view_cat->assign("TXT_CURENT_CATEGORY",validHTML($currentCat[0]['cat_name']));
			$view_cat->parse("view_cat.cat_img");
		}

	if(isset($_GET['searchStr'])){
		
		$view_cat->assign("TXT_CAT_TITLE",$lang['front']['viewCat']['search_results']);
	
	} elseif($_GET['catId']=="saleItems" && $config['saleMode']>0) {
		
		$view_cat->assign("TXT_CAT_TITLE",$lang['front']['viewCat']['sale_items']);
	
	} else {
		
		$view_cat->assign("TXT_CAT_TITLE",validHTML($currentCat[0]['cat_name']));
	
	}
	
	$view_cat->assign("LANG_IMAGE",$lang['front']['viewCat']['image']);
	$view_cat->assign("LANG_DESC",$lang['front']['viewCat']['description']);
	$view_cat->assign("LANG_PRICE",$lang['front']['viewCat']['price']);
	$view_cat->assign("PAGINATION",$db->paginate($totalNoProducts, $config['productPages'], $page, "page"));

// repeated region
if($productResults == TRUE){
	
	if($_GET['catId']>0){
	
		$view_cat->assign("LANG_CURRENT_DIR",$lang['front']['viewCat']['products_in']);
		$view_cat->assign("CURRENT_DIR",getCatDir(validHTML($currentCat[0]['cat_name']),$currentCat[0]['cat_father_id'], $currentCat[0]['cat_id'], $link=TRUE));
	
	}
	
	for ($i=0; $i<count($productResults); $i++){
	
		// alternate class
		$view_cat->assign("CLASS",cellColor($i, $tdEven="tdEven", $tdOdd="tdOdd"));

		if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$productResults[$i]['image'])){
			
			$view_cat->assign("SRC_PROD_THUMB",$GLOBALS['rootRel']."images/uploads/thumbs/thumb_".$productResults[$i]['image']);
		} else {
			$view_cat->assign("SRC_PROD_THUMB",$GLOBALS['rootRel']."skins/".$config['skinDir']."/styleImages/thumb_nophoto.gif");
		}


		$view_cat->assign("TXT_TITLE",validHTML($productResults[$i]['name']));		

		$view_cat->assign("TXT_DESC",substr(strip_tags($productResults[$i]['description']),0,$config['productPrecis'])."&hellip;");

		if(salePrice($productResults[$i]['price'], $productResults[$i]['sale_price'])==FALSE){
			$view_cat->assign("TXT_PRICE",priceFormat($productResults[$i]['price']));
		} else {
			$view_cat->assign("TXT_PRICE","<span class='txtOldPrice'>".priceFormat($productResults[$i]['price'])."</span>");
		}
		$salePrice = salePrice($productResults[$i]['price'], $productResults[$i]['sale_price']);
		
		$view_cat->assign("TXT_SALE_PRICE", priceFormat($salePrice));

		if(isset($_GET['add']) && isset($_GET['quan'])){
			
			$view_cat->assign("CURRENT_URL",str_replace(array("&amp;add=".$_GET['add'],"&amp;quan=".$_GET['quan']),"",currentPage()));
			
		} else {
		
			$view_cat->assign("CURRENT_URL",currentPage());
			
		}

		if($config['outofstockPurchase']==1){
			
			$view_cat->assign("BTN_BUY",$lang['front']['viewCat']['buy']);
			$view_cat->assign("PRODUCT_ID",$productResults[$i]['productId']);
			$view_cat->parse("view_cat.productTable.products.buy_btn");
		
		} elseif($productResults[$i]['useStockLevel']==1 && $productResults[$i]['stock_level']>0){
			
			$view_cat->assign("BTN_BUY",$lang['front']['viewCat']['buy']);
			$view_cat->assign("PRODUCT_ID",$productResults[$i]['productId']);
			$view_cat->parse("view_cat.productTable.products.buy_btn");
		
		} elseif($productResults[$i]['useStockLevel']==0){
		
			$view_cat->assign("BTN_BUY",$lang['front']['viewCat']['buy']);
			$view_cat->assign("PRODUCT_ID",$productResults[$i]['productId']);
			$view_cat->parse("view_cat.productTable.products.buy_btn");
		
		}

		$view_cat->assign("BTN_MORE",$lang['front']['viewCat']['more']);
		$view_cat->assign("PRODUCT_ID",$productResults[$i]['productId']);

		if($productResults[$i]['stock_level']<1 && $productResults[$i]['useStockLevel']==1 && $productResults[$i]['digital']==0){
		
			$view_cat->assign("TXT_OUTOFSTOCK",$lang['front']['viewCat']['out_of_stock']);
			
		} else {
		
			$view_cat->assign("TXT_OUTOFSTOCK","");
		
		}
		
		$view_cat->parse("view_cat.productTable.products");
	}
	$view_cat->parse("view_cat.productTable");

} elseif(isset($_GET['searchStr'])) {

	$view_cat->assign("TXT_NO_PRODUCTS",$lang['front']['viewCat']['no_products_match']." ".treatGet($_GET['searchStr']));
	$view_cat->parse("view_cat.noProducts");

} else {
	
	$view_cat->assign("TXT_NO_PRODUCTS",$lang['front']['viewCat']['no_prods_in_cat']);
	$view_cat->parse("view_cat.noProducts");

}

$view_cat->parse("view_cat");
$page_content = $view_cat->text("view_cat");
?>