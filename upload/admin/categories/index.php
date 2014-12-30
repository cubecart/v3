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
|	Manage Categories
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
if(permission("categories","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
$catsPerPage = 25;

if(isset($_GET["delete"]) && $_GET["delete"]>0){

		// delete index
		$where = "cat_id=".$db->mySQLSafe($_GET["delete"]);
		$deleteIdx = $db->delete($glob['dbprefix']."CubeCart_cats_idx", $where);
		
		// delete category
		$where = "cat_id=".$db->mySQLSafe($_GET["delete"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_category", $where);
		
		if($delete == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['categories']['delete_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['categories']['delete_failed']."</p>";
		}

} elseif(isset($_POST['cat_id'])) {

	$record["cat_name"] = $db->mySQLSafe($_POST['cat_name']);		
	$record["cat_father_id"] = $db->mySQLSafe($_POST['cat_father_id']);	
	$record["cat_image"] = $db->mySQLSafe($_POST['imageName']);
	$record["per_ship"] = $db->mySQLSafe($_POST['per_ship']);  
	$record["item_ship"] = $db->mySQLSafe($_POST['item_ship']); 
	$record["item_int_ship"] = $db->mySQLSafe($_POST['item_int_ship']); 
	$record["per_int_ship"] = $db->mySQLSafe($_POST['per_int_ship']);

	if($_POST['cat_id']>0) {
 		
		// update product count. This is gona be tricky!!! 
		if($_POST['oldFatherId']!==$_POST['cat_father_id'] && $_POST['noProducts']>0) {
		
			// change old count
			$db->categoryNos($_POST['oldFatherId'], "-", $_POST['noProducts']);
			// update new count
			$db->categoryNos($_POST['cat_father_id'], "+", $_POST['noProducts']);
			
		}
		
		
		$where = "cat_id=".$db->mySQLSafe($_POST['cat_id']);
		$update = $db->update($glob['dbprefix']."CubeCart_category", $record, $where);

		if($update == TRUE){
			
			$msg = "<p class='infoText'>'".$_POST['cat_name']."' ".$lang['admin']['categories']['update_success']."</p>";
		
		} else {
			
			$msg = "<p class='warnText'>".$lang['admin']['categories']['update_fail']."</p>";
		
		}
 		
	} else {
	 	
		$insert = $db->insert($glob['dbprefix']."CubeCart_category", $record);

		if($insert == TRUE){
			
			$msg = "<p class='infoText'>'".$_POST['cat_name']."' ".$lang['admin']['categories']['add_success']."</p>";
		
		} else {
			
			$msg = "<p class='warnText'>".$lang['admin']['categories']['add_failed']."</p>";
		
		}
	}
}

if(!isset($_GET['mode'])){
	
	// make sql query
	if(isset($_GET['edit']) && $_GET['edit']>0){
		
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_category WHERE cat_id = %s", $db->mySQLSafe($_GET['edit'])); 
	
	} else {
	
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_category ORDER BY cat_id, cat_father_id ASC";
	} 
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 0;
	}
	
	// query database
	$results = $db->select($query, $catsPerPage, $page);
	$numrows = $db->numrows($query);
	$pagination = $db->paginate($numrows, $catsPerPage, $page, "page");
}

include("../includes/header.inc.php"); 
?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td nowrap='nowrap'><p class="pageTitle"><?php echo $lang['admin']['categories']['categories'];?></p></td>
     <?php if(!isset($_GET["mode"])){ ?><td align="right" valign="middle"><a <?php if(permission("categories","write")==TRUE){?>href="?mode=new" class="txtLink"<?php } else { echo $link401; } ?>><img src="../images/buttons/new.gif" alt="" hspace="4" border="0" title="" /><?php echo $lang['admin']['add_new'];?></a></td><?php } ?>
  </tr>
</table>
<?php if(isset($msg)){ echo stripslashes($msg); }?>
<?php
if(!isset($_GET['mode']) && !isset($_GET['edit'])){
?>
<p class="copyText"><?php echo $lang['admin']['categories']['categories_desc']; ?></p>
<p class="copyText"><?php echo $pagination; ?></p>
<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
    <td width="10%" nowrap='nowrap' class="tdTitle"><?php echo $lang['admin']['categories']['cat_name']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['categories']['dir']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['categories']['image']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['categories']['no_products']; ?></td>
    <td class="tdTitle" colspan="3" align="center" width="20%"><?php echo $lang['admin']['categories']['action']; ?></td>
  </tr>
  <?php 
  if($results == TRUE){
  
  	for ($i=0; $i<count($results); $i++){ 
	
	$cellColor = "";
	$cellColor = cellColor($i);
	?>
  <tr>
    <td nowrap='nowrap' width="10%" class="<?php echo $cellColor; ?>"><a href="<?php echo $GLOBALS['rootRel']."index.php?act=viewCat&amp;catId=".$results[$i]['cat_id']; ?>" target="_blank" class="txtLink"><?php echo $results[$i]['cat_name']; ?></a></td>
    <td nowrap='nowrap'  class="<?php echo $cellColor; ?>"><span class="txtDir"><?php echo getCatDir($results[$i]['cat_name'],$results[$i]['cat_father_id'], $results[$i]['cat_id']);?></span></td>
    <td align="center" valign="middle" nowrap='nowrap'  class="<?php echo $cellColor; ?>">
	<?php 
	if(file_exists($GLOBALS['rootDir']."/images/uploads/".$results[$i]['cat_image']) && !empty($results[$i]['cat_image'])){
	$imgSize = getimagesize($GLOBALS['rootDir']."/images/uploads/".$results[$i]['cat_image']); 
	
	?>
	<img src="<?php echo $glob['rootRel'];?>images/uploads/<?php echo $results[$i]['cat_image']; ?>" alt="<?php echo $results[$i]['cat_name']; ?>" title="" <?php if($imgSize['0']>49){ ?>height="50"<?php } // end if image exists ?> />
		<?php } else { echo "&nbsp;"; }// end if image exists ?></td>
    <td align="center" valign="middle" nowrap='nowrap'  class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['noProducts']; ?></span></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a 
	<?php if(permission("categories","edit")==TRUE){ ?>
	href="?edit=<?php echo $results[$i]['cat_id']; ?>" class="txtLink"
	<?php } else { echo $link401; } ?>
	><?php echo $lang['admin']['edit']; ?></a></td>
    <td align="center" width="5%" class="<?php echo $cellColor; ?>"><a 
	
	<?php if(permission("categories","delete")==TRUE && $results[$i]['noProducts']<=0){ ?>
	href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $results[$i]['cat_id']; ?>&amp;cat_father_id=<?php echo $results[$i]['cat_id'];?>');" class="txtLink"
	
	<?php } elseif(permission("categories","delete")==TRUE && $results[$i]['noProducts']>0) {
	echo "href='javascript:alert(\"".$lang['admin']['categories']['cannot_del']."\")' class='txtNullLink'";
	} else { echo $link401; } ?>
	
	><?php echo $lang['admin']['delete']; ?></a></td>
    <td align="center" width="5%" class="<?php echo $cellColor; ?>"><a <?php if(permission("categories","edit")==TRUE){ ?>href="languages.php?cat_master_id=<?php echo $results[$i]['cat_id']; ?>" class="txtLink"<?php } else { echo $link401; } ?> ><?php echo $lang['admin']['docs']['languages']; ?></a></td>
  </tr>
  <?php } // end loop
  } else { ?>
   <tr>
    <td colspan="7" class="tdText"><?php echo $lang['admin']['categories']['no_cats_exist'];?></td>
  </tr>
  <?php } ?>
</table>
<p class="copyText"><?php echo $pagination; ?></p>

<?php 
} elseif($_GET["mode"]=="new" OR $_GET["edit"]>0){  

if(isset($_GET["edit"]) && $_GET["edit"]>0){ $modeTxt = $lang['admin']['edit']; } else { $modeTxt = $lang['admin']['add']; } 
?>
<p class="copyText"><?php echo $lang['admin']['categories']['add_desc'];?></p>
<form action="<?php echo $GLOBALS['rootRel'];?>admin/categories/index.php" method="post" enctype="multipart/form-data" name="form1">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php if(isset($_GET["edit"]) && $_GET["edit"]>0){ echo $modeTxt; } else { echo $modeTxt;  } ?> <?php echo $lang['admin']['categories']['category'];?></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['categories']['category_name'];?></td>
    <td>
      <input name="cat_name" type="text" class="textbox" value="<?php if(isset($results[0]['cat_name'])) echo validHTML($results[0]['cat_name']); ?>" maxlength="255" />
    </td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['categories']['category_level'];?></td>
    <td>
	
    <?php
	$db = new db();
	$query = "SELECT cat_name, cat_father_id, cat_id FROM ".$glob['dbprefix']."CubeCart_category ORDER BY cat_id DESC";
	$categories = $db->select($query);
	?>
	<select name="cat_father_id" class="textbox">
	<option value="0"><?php echo $lang['admin']['categories']['top_level'];?></option>
	<?php
  	for ($i=0; $i<count($categories); $i++){
	
		if($categories[$i]['cat_id']!==$results[0]['cat_id']){ ?>
	<option value="<?php echo $categories[$i]['cat_id']; ?>" <?php if(isset($results[0]['cat_father_id']) && $categories[$i]['cat_id']==$results[0]['cat_father_id']) { echo "selected='selected'"; } ?>>
	<?php echo getCatDir($categories[$i]['cat_name'],$categories[$i]['cat_father_id'], $categories[$i]['cat_id']); ?>		
	</option>
	<?php
		} // end if cat_id is not the same
	}
	?>
	</select>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdText"><?php echo $lang['admin']['categories']['image_optional'];?></td>
    <td valign="top"><div id="selectedImage"><?php if(!empty($results[0]['cat_image'])){ ?><img src="<?php echo $GLOBALS['rootRel']."images/uploads/".$results[0]['cat_image']; ?>" alt="<?php echo $results[0]['cat_image']; ?>" title="" />
	<div  style="padding: 3px;">
	<input type="button" class="submit" src="../images/remove.gif" name="remove" style="width: 200px;" value="<?php echo $lang['admin']['remove']; ?>" onclick="addImage('','')" /></div>
	<?php } ?></div><div id="imageControls"><table border="0" cellspacing="0" cellpadding="3">  
  <tr>
    <td><input name="upload" style="width: 200px;" class="submit" type="button" id="upload" onclick="openPopUp('../filemanager/upload.php?custom=1','filemanager',450,250)" value="<?php echo $lang['admin']['categories']['upload_new_image']; ?>" /></td>
  </tr>
  <tr>
    <td><input name="browse" style="width: 200px;" class="submit" type="button" id="browse" onclick="openPopUp('../filemanager/browse.php?custom=1','filemanager',450,500)" value="<?php echo $lang['admin']['categories']['browse_existing']; ?>" /></td>
  </tr>
</table>
</div><input type="hidden" name="imageName" id="imageName" value="<?php echo $results[0]['cat_image']; ?>" /></td>
  </tr>
  <?php
  $module = fetchDbConfig("Per_Category");
  if($module['status'] == 1) {
  ?>
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['categories']['ship_by_cat']; ?></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['categories']['per_ship']; ?></td>
    <td><input name="per_ship" value="<?php echo $results[0]['per_ship']; ?>" type="text" class="textbox" size="6" /></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['categories']['per_item']; ?></td>
    <td><input name="item_ship" value="<?php echo $results[0]['item_ship']; ?>" type="text" class="textbox" size="6" /></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['categories']['per_int_ship']; ?></td>
    <td><input name="item_int_ship" value="<?php echo $results[0]['item_int_ship']; ?>" type="text" class="textbox" size="6" /></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['categories']['per_int_item']; ?></td>
    <td><input name="per_int_ship" value="<?php echo $results[0]['per_int_ship']; ?>" type="text" class="textbox" size="6" /></td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>
	<input type="hidden" name="noProducts" value="<?php echo $results[0]['noProducts']; ?>" />
	<input type="hidden" name="oldFatherId" value="<?php echo $results[0]['cat_father_id']; ?>" />
	<input type="hidden" name="cat_id" value="<?php echo $results[0]['cat_id']; ?>" />
	<input type="submit" name="Submit" class="submit" value="<?php if(isset($_GET["edit"]) && $_GET["edit"]>0){ echo $modeTxt; } else { echo $modeTxt;  } ?>" /></td>
  </tr>
</table>
</form>
<?php } ?>
<?php include("../includes/footer.inc.php"); ?>
