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
|	index.php
|   ========================================
|	Manage Images on Server
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
if(permission("filemanager","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
include("../includes/header.inc.php");

if(isset($_GET['unlink']) && !empty($_GET['unlink'])){
	
	// check for dependancies	
	$file = treatGet(urldecode($_GET['unlink'])); 
	$imageName = str_replace(array($GLOBALS['rootRel']."images/uploads/thumbs/thumb_",$GLOBALS['rootRel']."images/uploads/"),"",$file);
	
	$query = "SELECT ".$glob['dbprefix']."CubeCart_inventory.image, ".$glob['dbprefix']."CubeCart_category.cat_image FROM ".$glob['dbprefix']."CubeCart_inventory, ".$glob['dbprefix']."CubeCart_category WHERE image = '".$imageName."' OR cat_image = '".$imageName."'";
	$results = $db->select($query);
	
	$query = "SELECT doc_id FROM ".$glob['dbprefix']."CubeCart_docs WHERE doc_content LIKE '%".$imageName."%'";
	$siteDocs = $db->select($query);
	
	/*$filename = $GLOBALS['rootDir']."/includes/static/home.htm";
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	$homepage = ereg($imageName,$contents);
	*/
	
	$path = $GLOBALS['rootDir']."/language";
	$homepage = "";
	if ($dir = opendir($path)) {
	
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi($folder,array(".",".."))){
			
			include($path."/".$folder."/home.inc.php");
			
				if(ereg($imageName,$home['copy'])){
					
					$homepage = TRUE;
				
				}
			
			}
		
		} 
		
	}
	
	$query = "SELECT img FROM ".$glob['dbprefix']."CubeCart_img_idx WHERE img = '".$imageName."'";
	$extraImg = $db->select($query);
	
	
	if($results == TRUE && !isset($_GET['confirmed'])){

		$msg = "<p class='warnText'>".sprintf($lang['admin']['filemanager']['prod_cat_use_img'],$file)." <a href=\"javascript:decision('".$lang['admin']['delete_q']."','index.php?unlink=".$file."&confirmed=1');\" class='txtRed'>".$lang['admin']['filemanager']['continue_q']."</a></p>";
	
	} elseif($siteDocs == TRUE && !isset($_GET['confirmed'])) {
	
		$msg = "<p class='warnText'>".sprintf($lang['admin']['filemanager']['site_doc_use_img'],$file)." <a href=\"javascript:decision('Are you sure you want to delete this?','index.php?unlink=".$file."&amp;confirmed=1');\" class='txtRed'>".$lang['admin']['filemanager']['continue_q']."</a></p>";
		
	} elseif($homepage == TRUE && !isset($_GET['confirmed'])) {
	
		$msg = "<p class='warnText'>".sprintf($lang['admin']['filemanager']['home_use_img'],$file)." <a href=\"javascript:decision('".$lang['admin']['delete_q']."','index.php?unlink=".$file."&amp;confirmed=1');\" class='txtRed'>".$lang['admin']['filemanager']['continue_q']."</a></p>";
		
	} elseif($extraImg == TRUE && !isset($_GET['confirmed'])) {
	
		$msg = "<p class='warnText'>".sprintf($lang['admin']['filemanager']['gallery_use_img'],$file)." <a href=\"javascript:decision('".$lang['admin']['delete_q']."','index.php?unlink=".$file."&amp;confirmed=1&amp;idx=1');\" class='txtRed'>".$lang['admin']['filemanager']['continue_q']."</a></p>";
		
	} else {

		if(file_exists($GLOBALS['rootDir']."/images/uploads/".$imageName) && unlink($GLOBALS['rootDir']."/images/uploads/".$imageName)){
			// delete thumbnail if it exists
			if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$imageName)){
				unlink($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$imageName);
			}
			
			if(isset($_GET['idx'])){
				$delete = "img = '".$imageName."'";
				$siteDocs = $db->delete($glob['dbprefix']."CubeCart_img_idx",$delete);
			}
			
			$msg = "<p class='infoText'>".$lang['admin']['filemanager']['image_deleted']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['filemanager']['delete_failed']."</p>";
		}
	
	}
}
?>
<p class="pageTitle"><?php echo $lang['admin']['filemanager']['image_manager']; ?></p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} else { ?>
<p class="copyText"><?php echo $lang['admin']['filemanager']['delete_from_server']; ?></p>
<?php } ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td class="tdTitle"><?php echo $lang['admin']['filemanager']['img_click_prev']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['filemanager']['size']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['filemanager']['action']; ?></td>
  </tr>
<?php
	$dirArray = walk_dir($GLOBALS['rootDir']."/images/uploads");
	$i = 0;
	if(is_array($dirArray)){

		foreach($dirArray as $file) {
	
		// get root rel link
		$fileRoot = $GLOBALS['rootRel'].str_replace($GLOBALS['rootDir']."/","",$file);
		$size = getimagesize($file);

			if (CheckImgExt(strtolower($file)) && !eregi("thumb_",$file)) {
				$i++;
				$cellColor = "";
				$cellColor = cellColor($i);
?>
  <tr>
    <td class="<?php echo $cellColor; ?>"><a href="javascript:;" onclick="openPopUp('preview.php?file=<?php echo $fileRoot."&amp;x=".$size[0]."&amp;y=".$size[1]; ?>','filemanager',<?php echo $size[0]+12; ?>,<?php echo $size[1]+12; ?>)" class="txtDir"><?php echo $fileRoot; ?></a></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo format_size(filesize($file)); ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("filemanager","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','index.php?unlink=<?php echo urlencode($fileRoot); ?>');" class="txtLink" <?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete']; ?></a></td>
  </tr>
<?php 
			}
		
		}
		
	} 
	if($i==0) {
	?>
	<tr>
    <td colspan="3" class="tdText"><?php echo $lang['admin']['filemanager']['no_images_added'];?></td>
	</tr>
<?php } ?>
</table>

<?php include("../includes/footer.inc.php"); ?>
