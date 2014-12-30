<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.18
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	index.php
|   ========================================
|	Add/Edit/Delete Products	
+--------------------------------------------------------------------------
*/
include("../../includes/ini.inc.php");
include("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include("../../includes/sslSwitch.inc.php");
include("../includes/auth.inc.php");
include("../includes/rte/fckeditor.php");
include("../../classes/gd.inc.php");
include("../../includes/currencyVars.inc.php");

if(permission("products","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
$productsPerPage = 25;

if(isset($_GET['action']) && $_GET['action']=="gbase"){

	$db = new db();
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory INNER JOIN ".$glob['dbprefix']."CubeCart_category on ".$glob['dbprefix']."CubeCart_inventory.cat_id = ".$glob['dbprefix']."CubeCart_category.cat_id ".$whereClause." ORDER BY name ASC";
	$results = $db->select($query);

	if($results==TRUE) {

	$googleBaseContent = "id\tproduct_url\tname\tdescription\timage_url\tprice\tcondition\r\n";
		
		for($i=0; $i<count($results); $i++){
			
			
			$salePrice = salePrice($results[$i]['price'], $results[$i]['sale_price']);
			
			if($salePrice > 0){
			
				$price = $salePrice;
			
			} else {
			
				$price = $results[$i]['price'];
			
			}
			
			$name = str_replace(array("&nbsp;","\t","\r","\n","\0","\x0B","
			"),"",strip_tags($results[$i]['name']));
			$name = str_replace("  ","",$name);
			$desc = str_replace(array("&nbsp;","\t","\r","\n","\0","\x0B","
			"),"",strip_tags($results[$i]['description']));
			$desc = str_replace("  ","",$desc);
			
			$googleBaseContent .= 
$results[$i]['productId']."\t".$glob['storeURL']."/index.php?act=viewProd&productId=".$results[$i]['productId']."\t".$name."\t".$desc;
			
			if($results[$i]['image']){
				$googleBaseContent .= "\t".$glob['storeURL']."/images/uploads/".$results[$i]['image'];
			} else {
				$googleBaseContent .= "\t".$glob['storeURL']."/skins/".$config['skinDir']."/styleImages/nophoto.gif";
			}

			$googleBaseContent .= "\t".$price."\tnew\r\n";
		
		}
		

	$filename = "GoogleBaseFeed_";
	$contentLength = strlen($googleBaseContent);
	$content = $googleBaseContent;

	$filename .= date("dMy").".txt";
	header('Pragma: private');
	header('Cache-control: private, must-revalidate');
	header("Content-Disposition: attachment; filename=".$filename);
	header("Content-type: text/plain");
	header("Content-type: application/octet-stream");
	header("Content-length: ".$contentLength);
	header("Content-Transfer-Encoding: binary");
	echo $content;
	exit;
	}

} elseif(isset($_GET['delete']) && $_GET["delete"]>0){
		
		// delete product
		$where = "productId=".$db->mySQLSafe($_GET["delete"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_inventory", $where);

		// set categories -1
		$cats = $db->select("SELECT cat_id FROM ".$glob['dbprefix']."CubeCart_cats_idx WHERE productId=".$db->mySQLSafe($_GET["delete"]));
		if($cats==TRUE){
			
			for($i=0;$i<count($cats);$i++){

					$db->categoryNos($cats[$i]['cat_id'], "-");
			
			}
		
		}
		
		// delete category index
		$where = "productId=".$db->mySQLSafe($_GET["delete"]);  
		$deleteIdx = $db->delete($glob['dbprefix']."CubeCart_cats_idx", $where);
		unset($record);
		
		// delete product options
		$record['product'] = $db->mySQLSafe($_GET["delete"]);
		$where = "product=".$db->mySQLSafe($_GET["delete"]);  
		$deleteOps = $db->delete($glob['dbprefix']."CubeCart_options_bot", $where);
		unset($record);
		
		if($delete == TRUE){
			
			$msg = "<p class='infoText'>".$lang['admin']['products']['delete_success']."</p>";
			
		} else {
			
			$msg = "<p class='warnText'>".$lang['admin']['products']['delete_fail']."</p>";
			
		}

} elseif(isset($_POST['productId'])) {

// generate product code
	if(empty($_POST['productCode'])){
		
		$chars = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N",
				"O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3",
				"4","5","6","7","8","9","0");
		$max_chars = count($chars) - 1;
		srand((double)microtime()*1000000);
			for($i = 0; $i < 5; $i++){
				$randChars = ($i == 0) ? $chars[rand(0, $max_chars)] : $randnum . $chars[rand(0, $max_chars)];
			}
		$record["productCode"] = $db->mySQLSafe(strtoupper(substr($_POST['name'],0,3)).$randChars.$_POST['cat_id']);
		
	} else {
		$record["productCode"] = $db->mySQLSafe($_POST['productCode']);	
	}

	$record["name"] = $db->mySQLSafe($_POST['name']);		
	$record["cat_id"] = $db->mySQLSafe($_POST['cat_id']);	
	$record["description"] = $db->mySQLSafe($_POST['FCKeditor']);
	$record["image"] = $db->mySQLSafe($_POST['imageName']);
	$record["price"] = $db->mySQLSafe($_POST['price']);  
	$record["sale_price"] = $db->mySQLSafe($_POST['sale_price']);
	$record["stock_level"] = $db->mySQLSafe($_POST['stock_level']); 
	$record["useStockLevel"] = $db->mySQLSafe($_POST['useStockLevel']);
	$record["digital"] = $db->mySQLSafe($_POST['digital']);
	$record["digitalDir"] = $db->mySQLSafe($_POST['digitalDir']);
	$record["prodWeight"] = $db->mySQLSafe($_POST['prodWeight']);
	$record["taxType"] = $db->mySQLSafe($_POST['taxType']); 
	$record["showFeatured"] = $db->mySQLSafe($_POST['showFeatured']); 

	// if image is a JPG check thumbnail doesn't exist and if not make one
	$imageFormat = strtoupper(ereg_replace(".*\.(.*)$","\\1",$_POST['imageName']));
	if($imageFormat == "JPG" || $imageFormat == "JPEG" || $imageFormat == "PNG" || ($imageFormat == "GIF" && $config['gdGifSupport']==1)){
		
		if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$_POST['imageName'])){
			@chmod($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$_POST['imageName'], 0775);
			unlink($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$_POST['imageName']);
		}
		
		$thumb=new thumbnail($GLOBALS['rootDir']."/images/uploads/".$_POST['imageName']);
		$thumb->size_auto($config['gdthumbSize']);
		$thumb->jpeg_quality($config['gdquality']);
		$thumb->save($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$_POST['imageName']);
	}

	if(isset($_POST['productId']) && $_POST['productId']>0) {
 		
		$where = "productId=".$db->mySQLSafe($_POST['productId']);
		$update = $db->update($glob['dbprefix']."CubeCart_inventory", $record, $where);
		unset($record, $where);
		
		// update category count
		if($_POST['oldCatId']!==$_POST['cat_id']){
				
				// set old category -1 IF IT WAS IN THERE BEFORE
				$numOldCat = $db->numrows("SELECT * FROM ".$glob['dbprefix']."CubeCart_cats_idx WHERE cat_id = ".$db->mySQLSafe($_POST['oldCatId'])." AND productId = ".$db->mySQLSafe($_POST['productId']));
				
				if($numOldCat>0){
					$db->categoryNos($_POST['oldCatId'], "-");
				}
				
				// set new category +1 IF IT WAS NOT IN THERE BEFORE
				$numNewCat = $db->numrows("SELECT * FROM ".$glob['dbprefix']."CubeCart_cats_idx WHERE cat_id = ".$db->mySQLSafe($_POST['cat_id'])." AND productId = ".$db->mySQLSafe($_POST['productId']));
				
				if($numNewCat == 0) {
					$db->categoryNos($_POST['cat_id'], "+");
				}
				
				
				// delete old idx
				$where = "productId = ".$db->mySQLSafe($_POST['productId'])." AND cat_id = ".$db->mySQLSafe($_POST['oldCatId']);  
				$deleteIdx = $db->delete($glob['dbprefix']."CubeCart_cats_idx", $where);
				unset($record);
				
				// delete new index if it was added as an extra before
				$where = "productId = ".$db->mySQLSafe($_POST['productId'])." AND cat_id = ".$db->mySQLSafe($_POST['cat_id']);  
				$deleteIdx = $db->delete($glob['dbprefix']."CubeCart_cats_idx", $where);
				unset($record);
							
				// add new idx
				$record['productId'] = $db->mySQLSafe($_POST['productId']);
				$record['cat_id'] = $db->mySQLSafe($_POST['cat_id']);  
				$insertIdx = $db->insert($glob['dbprefix']."CubeCart_cats_idx", $record);
				unset($record);
				
		}

		if($update == TRUE){
			$msg = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['products']['update_successful']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['products']['update_fail']."</p>";
		}
 		
	} else {
	 	
		$insert = $db->insert($glob['dbprefix']."CubeCart_inventory", $record);
		unset($record);
		
		$record['cat_id'] = $db->mySQLSafe($_POST['cat_id']);
		$record['productId'] = $db->insertid();  
		$insertIdx = $db->insert($glob['dbprefix']."CubeCart_cats_idx", $record);
		unset($record);

		if($insert == TRUE){
			
			$msg = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['products']['add_success']."</p>";
			
			// notch up amount of products in category
			$db->categoryNos($_POST['cat_id'], "+");
		
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['products']['add_fail']."</p>";
		}
	}
}

if(!isset($_GET['mode'])){
	
	// make sql query
	if(isset($_GET['edit']) && $_GET['edit']>0){
		
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productId = %s", $db->mySQLSafe($_GET['edit'])); 
		
	} else {
	
		if(isset($_GET['orderCol']) && isset($_GET['orderDir'])){
			
			$orderBy =  $glob['dbprefix']."CubeCart_inventory.".$_GET['orderCol']." ".$_GET['orderDir'];
		
		} else {
			
			$orderBy = $glob['dbprefix']."CubeCart_inventory.productId ASC";
		
		}
		
		$whereClause = "";
		
		if(isset($_GET['searchStr']) && !empty($_GET['searchStr'])){
			$searchwords = split ( "[ ,]", $_GET['searchStr']);   
	
		foreach($searchwords as $word){
			$searchArray[]=$word;
		}

		$noKeys = count($searchArray);
		for ($i=0; $i<$noKeys;$i++) {
		
			$ucSearchTerm = strtoupper($searchArray[$i]);
			if(($ucSearchTerm!=="AND")AND($ucSearchTerm!=="OR")){

				$like .= "(name LIKE '%".$searchArray[$i]."%' OR description LIKE '%".$searchArray[$i]."%' OR  productCode LIKE '%".$searchArray[$i]."%') OR ";
			
			} else {
				$like = substr($like,0,strlen($like)-3);
				$like .= $ucSearchTerm;
			}  

		}
		$like = substr($like,0,strlen($like)-3);
		
		$whereClause .= "WHERE ".$like;
		
	}
	
	
	if(isset($_GET['category']) && $_GET['category']>0){
		
		if(isset($like)){
			$whereClause .= " AND ";
		} else {
			$whereClause .= " WHERE ";
		}
		
		$whereClause .= $glob['dbprefix']."CubeCart_inventory.cat_id = ".$_GET['category']; 
	
	}
		
		
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory INNER JOIN ".$glob['dbprefix']."CubeCart_category on ".$glob['dbprefix']."CubeCart_inventory.cat_id = ".$glob['dbprefix']."CubeCart_category.cat_id ".$whereClause." ORDER BY ".$orderBy;

	} 
	
	// query database
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 0;
	}
	
	$results = $db->select($query, $productsPerPage, $page);
	$numrows = $db->numrows($query);
	$pagination = $db->paginate($numrows, $productsPerPage, $page, "page");
}
	$query = "SELECT cat_id, cat_name, cat_father_id FROM ".$glob['dbprefix']."CubeCart_category ORDER BY cat_id DESC";
	$categoryArray = $db->select($query);
include("../includes/header.inc.php"); 
?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td nowrap='nowrap'><p class="pageTitle"><?php echo $lang['admin']['products']['prod_inventory'];?></p></td>
     <?php if(!isset($_GET["mode"])){ ?><td align="right" valign="middle"><a <?php if(permission("products","write")==TRUE){ ?>href="?mode=new" class="txtLink" <?php } else { echo $link401; } ?>><img src="../images/buttons/new.gif" alt="" hspace="4" border="0" title="" /><?php echo $lang['admin']['add_new'];?></a></td><?php } ?>
  </tr>
  <tr align="right">
    <td colspan="2" nowrap='nowrap'>
	<a href="index.php?action=gbase"><img src="../images/googleBase.gif" alt="Download Google Base Product Feed" width="76" height="28" border="0" title="" /></a></td>
  </tr>
</table>

<?php if(isset($msg)){ echo stripslashes($msg); }?>
<?php
if(!isset($_GET['mode']) && !isset($_GET['edit']) ){
?>
<?php if($results == TRUE){ ?>
<p class="copyText"><?php echo $lang['admin']['products']['current_prods_in_db'];?></p>
<form name="filter" method="get" action="<?php echo $GLOBALS['rootRel'];?>admin/products/index.php">
<p align="right" class="copyText">
  <select name="category" class="textbox">
	<option value="All" <?php if(isset($_GET['category']) && $_GET['category']=="All") echo "selected='selected'"; ?>><?php echo $lang['admin']['products']['all_cats'];?></option>
	<?php for ($i=0; $i<count($categoryArray); $i++){ ?>
	<option value="<?php echo $categoryArray[$i]['cat_id']; ?>" <?php if(isset($_GET['category']) && $categoryArray[$i]['cat_id']==$_GET['category']) echo "selected='selected'"; ?>><?php echo getCatDir($categoryArray[$i]['cat_name'],$categoryArray[$i]['cat_father_id'], $categoryArray[$i]['cat_id']); ?></option>
	<?php } ?>
	</select>
	by 
	<select name="orderCol" class="textbox">
		<option value="name" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="name") echo "selected='selected'";?>><?php echo $lang['admin']['products']['prod_name'];?></option>
		<option value="productId" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="productId") echo "selected='selected'";?>><?php echo $lang['admin']['products']['prod_id'];?></option>
		<option value="productCode" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="productCode") echo "selected='selected'";?>><?php echo $lang['admin']['products']['prod_code'];?></option>
		<option value="cat_id" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="cat_id") echo "selected='selected'";?>><?php echo $lang['admin']['products']['master_cat2'];?></option>
		<option value="stock_level" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="stock_level") echo "selected='selected'";?>><?php echo $lang['admin']['products']['stock_level'];?></option>
		<option value="price" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="price") echo "selected='selected'";?>><?php echo $lang['admin']['products']['normal_price'];?></option>
		<option value="sale_price" <?php if(isset($_GET['orderCol']) && $_GET['orderCol']=="sale_price") echo "selected='selected'";?>><?php echo $lang['admin']['products']['sale_price'];?></option>
	</select> 
	in
    <select name="orderDir" class="textbox">
		<option value="ASC" <?php if(isset($_GET['orderDir']) && $_GET['orderDir']=="ASC") echo "selected='selected'";?>><?php echo $lang['admin']['products']['asc'];?></option>
		<option value="DESC" <?php if(isset($_GET['orderDir']) && $_GET['orderDir']=="DESC") echo "selected='selected'";?>><?php echo $lang['admin']['products']['desc'];?></option>
	</select> 
	<?php echo $lang['admin']['products']['containing_text'];?> 
	
	  <input type="text" name="searchStr" class="textbox" value="<?php if(isset($_GET['searchStr']))echo $_GET['searchStr']; ?>" />
  <input name="submit" type="submit" value="<?php echo $lang['admin']['products']['filter'];?>" class="submit" />
  <input name="Button" type="button" onclick="MM_goToURL('parent','index.php');return document.MM_returnValue" value="<?php echo $lang['admin']['products']['reset'];?>" class="submit" />
</p>
</form>
<?php } ?>
<p class="copyText"><?php echo $pagination; ?></p>
<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['products']['id'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['products']['type'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['products']['prod_code'];?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['products']['name'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['products']['master_cat2'];?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['products']['image'];?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['products']['price_sale_price'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['products']['in_stock'];?></td>
    <td class="tdTitle" colspan="3" align="center" width="20%"><?php echo $lang['admin']['products']['action'];?></td>
  </tr>
  <?php 
  if($results == TRUE){
  	
	for ($i=0; $i<count($results); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
  ?>
  <tr>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['productId']; ?></span></td>
	<td align="center" class="<?php echo $cellColor; ?>"><img src="../images/productIcon<?php echo $results[$i]['digital'];?>.gif" alt="" width="16" height="16" title="" /></td>
	<td align="left" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['productCode']; ?></span></td>
	<td align="left" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['name']; ?></span></td>
    <td class="<?php echo $cellColor; ?>"><span class="txtDir"><?php echo getCatDir($results[$i]['cat_name'],$results[$i]['cat_father_id'], $results[$i]['cat_id']);?></span><br />
	  <a href="javascript:;" <?php if(permission("products","edit")==TRUE){ ?>onclick="openPopUp('<?php echo $GLOBALS['rootRel']; ?>admin/products/extraCats.php?productId=<?php echo $results[$i]['productId']; ?>&amp;cat_id=<?php echo $results[$i]['cat_id']; ?>&amp;cat_father_id=<?php echo $results[$i]['cat_father_id']; ?>&amp;cat_name=<?php echo urlencode($results[$i]['cat_name']); ?>&amp;name=<?php echo urlencode($results[$i]['name']); ?>','extraCats',500,450,1);" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['products']['manage_cats'];?></a></td>
    
	<td align="center" valign="middle"  class="<?php echo $cellColor; ?>">
	<?php
	if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$results[$i]['image']) && !empty($results[$i]['image'])){
		
		$imgSize = getimagesize($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$results[$i]['image']);
		$imgFile = "/thumbs/thumb_".$results[$i]['image']; 
	
	} elseif(file_exists($GLOBALS['rootDir']."/images/uploads/".$results[$i]['image']) && !empty($results[$i]['image'])){
		
		$imgSize = getimagesize($GLOBALS['rootDir']."/images/uploads/".$results[$i]['image']); 
		$imgFile = $results[$i]['image'];
		
	}
	?>
	<?php if($imgFile == TRUE){ ?>
	<img src="<?php echo $GLOBALS['rootRel'];?>images/uploads/<?php echo $imgFile; ?>" alt="<?php echo $results[$i]['name']; ?>" title="" <?php if($imgSize['0']>49){ ?>height="50"<?php } // end if image exists ?> />
	
	<div><a href="javascript:;" <?php if(permission("products","edit")==TRUE){ ?>onclick="openPopUp('<?php echo $GLOBALS['rootRel']; ?>admin/products/extraImgs.php?productId=<?php echo $results[$i]['productId']; ?>&amp;img=<?php echo urlencode($results[$i]['image']); ?>','extraImgs',550,450,1);" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['products']['manage_images'];?></a></div>
	<?php 
	unset($imgFile);
	} else { echo "&nbsp;"; }// end if image exists ?>
	</td>
	<td align="center" class="<?php echo $cellColor; ?>">
	<span class="copyText"><?php echo priceFormat($results[$i]['price']); ?></span>
	
	<?php 
	$salePrice = salePrice($results[$i]['price'], $results[$i]['sale_price']);
	if($salePrice==TRUE){?>
	<br />
	<span class="txtRed">
	<?php
	echo priceFormat($salePrice);
	?>
	</span>
	<?php } ?>
	</td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php if($results[$i]['useStockLevel']==1) { echo $results[$i]['stock_level']; } else { echo "n/a"; }?></span></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a <?php if(permission("products","edit")==TRUE){ ?>href="?edit=<?php echo $results[$i]['productId']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['edit'];?></a></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a <?php if(permission("products","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q'];?>','?delete=<?php echo $results[$i]['productId']; ?>&cat_id=<?php echo $results[$i]['cat_id']; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a <?php if(permission("products","edit")==TRUE){ ?>href="languages.php?prod_master_id=<?php echo $results[$i]['productId']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['products']['languages'];?></a></td>
  </tr>
  <?php } // end loop
  } else { ?>
   <tr>
    <td colspan="6" class="tdText"><?php echo $lang['admin']['products']['no_products_exist'];?></td>
  </tr>
  <?php } ?>
</table>
<p class="copyText"><?php echo $pagination; ?></p>

<?php 
} elseif(($_GET["mode"]=="new" && permission("products","write")==TRUE) || ($_GET["edit"]>0 && permission("products","edit")==TRUE)){  

if(isset($_GET["edit"]) && $_GET["edit"]>0){ $modeTxt = $lang['admin']['edit']; } else { $modeTxt = $lang['admin']['add']; } 
?>
<p class="copyText"><?php echo $lang['admin']['products']['add_prod_desc'];?></p>
<form action="<?php echo $GLOBALS['rootRel'];?>admin/products/index.php" method="post" enctype="multipart/form-data" name="form1" language="javascript">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php if(isset($_GET["edit"]) && $_GET["edit"]>0){ echo $modeTxt; } else { echo $modeTxt; } echo $lang['admin']['products']['product'];?> </td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['products']['prod_name2'];?></strong></td>
    <td>
      <input name="name" type="text" class="textbox" value="<?php if(isset($results[0]['name'])) echo validHTML($results[0]['name']); ?>" maxlength="255" />
    </td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['products']['prod_stock_no'];?></strong> <br />
<?php echo $lang['admin']['products']['auto_generated'];?>
</td>
    <td><input name="productCode" type="text" class="textbox" value="<?php if(isset($results[0]['productCode'])) echo $results[0]['productCode']; ?>" maxlength="255" /></td>
  </tr>
  <tr>
    <td colspan="2" class="tdRichText"><span class="tdText"><strong><?php echo $lang['admin']['products']['description'];?></strong> <?php echo $lang['admin']['products']['primary_lang'];?></span>
	  </td>
    </tr>
  <tr>
    <td colspan="2" class="tdRichText">
<?php
		$oFCKeditor = new FCKeditor('FCKeditor');
		$oFCKeditor->BasePath = $GLOBALS['rootRel'].'admin/includes/rte/' ;
		
		if(isset($results[0]['description'])){ 
			$oFCKeditor->Value = $results[0]['description'];
		} else {
			$oFCKeditor->Value = "";
		}
		$oFCKeditor->Create();
?>
	</td>
    </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['products']['category'];?></strong></td>
    <td>
	<select name="cat_id" class="textbox">
	<?php for ($i=0; $i<count($categoryArray); $i++){ ?>
	<option value="<?php echo $categoryArray[$i]['cat_id']; ?>" <?php if(isset($results[0]['cat_id']) && $categoryArray[$i]['cat_id']==$results[0]['cat_id']) { echo "selected='selected'"; } ?>><?php echo getCatDir($categoryArray[$i]['cat_name'],$categoryArray[$i]['cat_father_id'], $categoryArray[$i]['cat_id']); ?></option>
	<?php } ?>
	</select>
	</td>
  </tr>
  <tr>
    <td width="25%" align="left" valign="top" class="tdText"><strong><?php echo $lang['admin']['products']['image2'];?></strong> <br />
	<?php echo $lang['admin']['products']['opt_and_thumbs'];?></td>
    <td valign="top"><div id="selectedImage"><?php if(!empty($results[0]['image'])){ ?><img src="<?php echo $GLOBALS['rootRel']."images/uploads/".$results[0]['image']; ?>" alt="<?php echo $results[0]['image']; ?>" title="" />
	<br/>
	<div  style="padding: 3px;"><input type="button" class="submit" src="../images/remove.gif" name="remove" style="width: 200px;" value="Remove Image" onclick="addImage('','')" /></div>
	<?php } ?></div><div id="imageControls"><table border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td><input name="upload" style="width: 200px;" class="submit" type="button" id="upload" onclick="openPopUp('../filemanager/upload.php?custom=1','filemanager',450,250)" value="<?php echo $lang['admin']['products']['upload_new'];?>" /></td>
  </tr>
  <tr>
    <td><input name="browse" style="width: 200px;" class="submit" type="button" id="browse" onclick="openPopUp('../filemanager/browse.php?custom=1','filemanager',450,500)" value="<?php echo $lang['admin']['products']['browse_existing'];?>" /></td>
  </tr>
</table>
</div><input type="hidden" name="imageName" id="imageName" value="<?php if(isset($results[0]['image'])) echo $results[0]['image']; ?>" /></td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['products']['normal_price2'];?></strong></td>
    <td><input name="price" value="<?php if(isset($results[0]['price'])) echo $results[0]['price']; ?>" type="text" class="textbox" size="10" /></td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['products']['sale_price2'];?></strong><br />
      <?php echo $lang['admin']['products']['sale_mode_desc'];?> </td>
    <td><input name="sale_price" value="<?php if(isset($results[0]['sale_price'])) echo $results[0]['sale_price']; ?>" type="text" class="textbox" size="10" /></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['products']['prod_weight'];?></strong></td>
    <td class="tdText"><input name="prodWeight" type="text" class="textbox" size="10" value="<?php if(isset($results[0]['prodWeight'])) echo $results[0]['prodWeight']; ?>" /> <?php echo $config['weightUnit']; ?></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['products']['tax_class'];?></strong></td>
    <td class="tdText">
	<select name="taxType">
    <?php
	$taxTypes = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_taxes"); 
	?>
	<?php for($i=0; $i<count($taxTypes);$i++){ ?>
	<option value="<?php echo $taxTypes[$i]['id']; ?>" <?php if(isset($results[0]['taxType']) && $taxTypes[$i]['id'] == $results[0]['taxType']) echo "selected='selected'"; ?>><?php echo $taxTypes[$i]['taxName']; ?> (<?php echo $taxTypes[$i]['percent']; ?>%)</option>
	<?php } ?>
	</select>
	</td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['products']['stock_level2'];?><br />
      </strong><?php echo $lang['admin']['products']['reduce_stock_level'];?>      </td>
    <td class="tdText"><input name="stock_level" value="<?php if(isset($results[0]['stock_level'])) echo $results[0]['stock_level']; ?>" type="text" class="textbox" size="10" /></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['products']['use_stock_q'];?></strong></td>
    <td class="tdText">
	<?php echo $lang['admin']['yes'];?>
      <input name="useStockLevel" type="radio" value="1" <?php if(isset($results[0]['useStockLevel']) && $results[0]['useStockLevel']==1) { echo "checked='checked'"; } elseif(!isset($results[0]['useStockLevel'])) { echo "checked='checked'"; } ?> />
<?php echo $lang['admin']['no'];?>
<input name="useStockLevel" type="radio" value="0" <?php if(isset($results[0]['useStockLevel']) && $results[0]['useStockLevel']==0) echo "checked='checked'"; ?> /></td>
  </tr>
  <tr>
    <td class="tdText" valign="top"><strong><?php echo $lang['admin']['products']['product_type'];?></strong> 
      </td>
    <td class="tdText"><?php echo $lang['admin']['products']['tangible'];?><span class="tdText">
      <input name="digital" onclick="digitalDir.className='hiddenTextbox';digitalDir.value=''" type="radio" value="0" <?php if(isset($results[0]['digital']) && $results[0]['digital']==0) { echo "checked='checked'"; } elseif(!isset($results[0]['digital'])) { echo "checked='checked'"; } ?> />
    </span> <?php echo $lang['admin']['products']['digital'];?><span class="tdText">
    <input name="digital" onclick="digitalDir.className='dirTextbox'" type="radio" value="1" <?php if(isset($results[0]['digital']) && $results[0]['digital']==1) { echo "checked='checked'"; } ?> />
  
    <input name="digitalDir" type="text" id="digitalDir" value="<?php if(isset($results[0]['digitalDir'])) echo $results[0]['digitalDir']; ?>" maxlength="255" <?php if(isset($results[0]['digitalDir']) && $results[0]['digital']==1) { echo "class='dirTextbox'"; } else { ?>class="hiddenTextbox" <?php } ?> />
    <br />
    <?php echo $lang['admin']['products']['digi_path'];?></span></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['products']['show_featured'];?></strong></td>
    <td class="tdText">
	<select name="showFeatured" class="textbox">
        <option value="1" <?php if(isset($results[0]['showFeatured']) && $results[0]['showFeatured']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
        <option value="0" <?php if(isset($results[0]['showFeatured']) && $results[0]['showFeatured']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
      </select>
	</td>
  </tr>
  <tr>
    <td width="25%">&nbsp;</td>
    <td>
	<input type="hidden" name="oldCatId" value="<?php if(isset($results[0]['cat_id'])) echo $results[0]['cat_id']; ?>" />
	<input type="hidden" name="productId" value="<?php if(isset($results[0]['productId'])) echo $results[0]['productId']; ?>" />
	<input type="submit" name="Submit" class="submit" value="<?php if(isset($_GET["edit"]) && $_GET["edit"]>0){ echo $modeTxt; } else { echo $modeTxt;  } ?> <?php echo $lang['admin']['products']['product'];?>" /></td>
  </tr>
</table>
<br />

<div class="tdText"><em><u><strong><?php echo $lang['admin']['products']['digi_info'];?></strong></u></em> 
<?php echo $lang['admin']['products']['digi_desc'];?>
</div>
</form>
<?php } ?>
<?php include("../includes/footer.inc.php"); ?>
