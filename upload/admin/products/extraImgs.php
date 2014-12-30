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
|	extraImgs.php
|   ========================================
|	Add/Edit/Delete Unlimited Extra Product Images	
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
include_once("../../includes/sslSwitch.inc.php");
include("../includes/auth.inc.php");
	
	// add
	if(isset($_GET['add']) && !empty($_GET['add'])) {
	
		$record['img'] = $db->mySQLSafe(urldecode($_GET['add']));
		$record['productId'] = $db->mySQLSafe($_GET['productId']);  
		
		$insert = $db->insert($glob['dbprefix']."CubeCart_img_idx", $record);
		unset($record);

		if($insert == TRUE){
			
			$msg = "<p class='infoText'>".$lang['admin']['products']['img_added_to_prod']."</p>";
			
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['products']['img_not_added_to_prod']."</p>";
		}
		
		$count['noImages'] = "noImages + 1";
		$db->update($glob['dbprefix']."CubeCart_inventory", $count, "productId = ".$db->mySQLSafe($_GET['productId']));
	
	} elseif(isset($_GET['remove']) && !empty($_GET['remove'])){
	
	$where = "img=".$db->mySQLSafe(urldecode($_GET['remove']))." AND productId=".$db->mySQLSafe($_GET["productId"]);
	$delete = $db->delete($glob['dbprefix']."CubeCart_img_idx", $where);
		
		if($delete == TRUE){
			
			$msg = "<p class='infoText'>".$lang['admin']['products']['img_removed']."</p>";
		
		} else {
			
			$msg = "<p class='warnText'>".$lang['admin']['products']['img_not_removed']."</p>";
		
		}
		$count['noImages'] = "noImages - 1";
		$db->update($glob['dbprefix']."CubeCart_inventory", $count, "productId = ".$db->mySQLSafe($_GET['productId']));
	
	}
	
	$query = "SELECT img FROM ".$glob['dbprefix']."CubeCart_img_idx WHERE productId=".$db->mySQLsafe($_GET['productId']);
	$imgArray = $db->select($query);
	
	 if($imgArray == TRUE){
  
  		for ($i=0; $i<count($imgArray); $i++){
			
			$key = $imgArray[$i]['img'];
			$imgIndex[$key] = 1;
		
		}
		
	}
	unset($i);
	$currentPage = $_SERVER['PHP_SELF']."?productId=".$_GET['productId']."&amp;img=".$_GET['img'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
	<head>
		<title><?php echo $lang['admin']['products']['image_management'];?></title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
	</head>
	<body>
	<p class="pageTitle"><?php echo $lang['admin']['products']['manage_images'];?></p>
	<?php if(isset($msg)){ echo stripslashes($msg); }?>
	<table border="0" width="100%" cellspacing="0" cellpadding="3" class="mainTable">
      <tr>
        <td class="tdTitle"><?php echo $lang['admin']['products']['image'];?></td>
		<td class="tdTitle">&nbsp;</td>
        <td align="center" class="tdTitle"><?php echo $lang['admin']['products']['action'];?></td>
      </tr>
        <?php 
	$dirArray = walk_dir($GLOBALS['rootDir']."/images/uploads");
	if(is_array($dirArray)){

		foreach($dirArray as $file) {
		
		// get root rel link
		$fileName = str_replace($GLOBALS['rootDir']."/images/uploads/","",$file);
		$fileRoot = $GLOBALS['rootRel'].str_replace($GLOBALS['rootDir']."/","",$file);
		$size = getimagesize($file);
		

		$cellColor = "";
		
			if (CheckImgExt(strtolower($file)) && !eregi("thumb_",$file) && $fileName!==$_GET['img']) {
			
			$i++;
			$cellColor = cellColor($i);
	?>
	  <tr>
        <td class="<?php echo $cellColor; ?>">
		<?php if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$fileName)){ ?>
		<img src="<?php echo $GLOBALS['rootRel']."images/uploads/thumbs/thumb_".$fileName; ?>" alt="" title="" />
		<br />
		<?php } ?>
		<a href="javascript:;" onClick="openPopUp('../filemanager/preview.php?file=<?php echo $fileRoot."&amp;x=".$size[0]."&amp;y=".$size[1]; ?>','filemanager',<?php echo $size[0]+12; ?>,<?php echo $size[1]+12; ?>)" class="txtDir"><?php echo $fileRoot; ?></a>
		</td>
		<td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo format_size(filesize($file)); ?></span></td>
        <td align="center" class="<?php echo $cellColor; ?>">
		<?php
		if(isset($imgIndex[$fileName])){ 
		?>
		
		<a href="<?php echo $currentPage; ?>&amp;remove=<?php echo urlencode($fileName); ?>" class="txtLink"><?php echo $lang['admin']['remove'];?></a>
		
		<?php } else { ?>
		
		<a href="<?php echo $currentPage; ?>&amp;add=<?php echo urlencode($fileName); ?>" class="txtLink"><?php echo $lang['admin']['add'];?></a>
		
		<?php } ?>
		
		</td>
      </tr>
	
	  <?php 
	  		}
	  	}
	}
	
	if(!isset($i)){
	?>
	<tr>
	    <td colspan="3" class="copyText"><?php echo $lang['admin']['products']['no_images_avail']; ?> <a href="../filemanager/upload.php?custom=1&redir=0" class="txtLink"><?php echo $lang['admin']['products']['upload_new_images']; ?></a></td>
    </tr>
	<?php
	}
	?>	
    </table>
	<p align="center"><a href="javascript:window.close();" class="txtLink"><?php echo $lang['admin']['products']['close_window'];?></a></p>
	</body>
</html>
