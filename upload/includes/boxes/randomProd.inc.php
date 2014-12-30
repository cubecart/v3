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
|	randomProduct.inc.php
|   ========================================
|	Random Product Box	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

mt_srand ((double) microtime() * 1000000); 
$seed = mt_rand(1,10000);

if(isset($_GET['catId'])){
	
	$whereClause = "WHERE cat_id=".$db->mySQLSafe($_GET['catId']);

} else {

	$whereClause = "";

}

$randProd= $db->select("SELECT name, image, productId FROM ".$glob['dbprefix']."CubeCart_inventory ".$whereClause." ORDER BY RAND(".$seed.") LIMIT 1");
 
if($randProd==TRUE){

		if(($val = prodAltLang($randProd[0]['productId'])) == TRUE){
			
			$randProd[0]['name'] = $val['name'];
		
		}
	
	$box_content=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/randomProd.tpl");
	
	$box_content->assign("LANG_RANDOM_PRODUCT",$lang['front']['boxes']['featured_prod']);
	$box_content->assign("PRODUCT_ID",$randProd[0]['productId']);
	$box_content->assign("PRODUCT_NAME",validHTML($randProd[0]['name']));
	
	if(!empty($randProd[0]['image'])){
		$box_content->assign("IMG_SRC","images/uploads/thumbs/thumb_".$randProd[0]['image']);
	} else {
		$box_content->assign("IMG_SRC","skins/".$config['skinDir']."/styleImages/thumb_nophoto.gif");
	}
	
	$box_content->parse("random_prod");
	
	$box_content = $box_content->text("random_prod");

} else {

	$box_content = "";
	
}
?>