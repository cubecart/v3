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
|	languages.php
|   ========================================
|	Manage Categories in Other Languages
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
if(permission("categories","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

// delete category
if(isset($_GET['delete']) && $_GET['delete']>0){

$where = "id = ".$db->mySQLSafe($_GET['delete']);

$delete = $db->delete($glob['dbprefix']."CubeCart_cats_lang", $where, ""); 

	if($delete == TRUE){
		$msg = "<p class='infoText'>".$lang['admin']['cats']['delete_success']."</p>";
	} else {
		$msg = "<p class='infoText'>".$lang['admin']['cats']['delete_fail']."</p>";
	}
	
} elseif(isset($_POST['id']) && $_POST['id']>0){
// instantiate db class

$record["cat_name"] = $db->mySQLSafe($_POST['cat_name']);
$record["cat_lang"] = $db->mySQLSafe($_POST['cat_lang']);
$record["cat_master_id"] = $db->mySQLSafe($_GET['cat_master_id']);		
							
$where = "id = ".$db->mySQLSafe($_POST['id']);

$update =$db->update($glob['dbprefix']."CubeCart_cats_lang", $record, $where);
			
	if($update == TRUE){
		$msg = "<p class='infoText'>'".$_POST['cat_name']."' ".$lang['admin']['cats']['update_success']."</p>"; 
	} else {
		$msg = "<p class='warnText'>'".$_POST['cat_name']."' ".$lang['admin']['cats']['update_fail']."</p>"; 
	}
	
	header("Location: languages.php?cat_master_id=".$_GET['cat_master_id']);
	exit;

} elseif(isset($_POST['id']) && empty($_POST['id'])){

$record["cat_name"] = $db->mySQLSafe($_POST['cat_name']);
$record["cat_lang"] = $db->mySQLSafe($_POST['cat_lang']);
$record["cat_master_id"] = $db->mySQLSafe($_GET['cat_master_id']);			

$insert = $db->insert($glob['dbprefix']."CubeCart_cats_lang", $record);

	if($insert == TRUE){
		$msg = "<p class='infoText'>'".$_POST['cat_name']."' ".$lang['admin']['cats']['add_success']."</p>";
	} else {
		$msg = "<p class='warnText'>".$lang['admin']['cats']['add_fail']."</p>";
	}
	
	header("Location: languages.php?cat_master_id=".$_GET['cat_master_id']);
	exit;
}

// retrieve current categories
if(!isset($_GET['mode'])){
	
	// make sql query
	if(isset($_GET['edit']) && $_GET['edit']>0){
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_cats_lang WHERE id = %s", $db->mySQLSafe($_GET['edit'])); 
	} else {
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_cats_lang WHERE cat_master_id = %s ORDER BY cat_name ASC", $db->mySQLSafe($_GET['cat_master_id'])); 
	} 
	
	// query database
	$results = $db->select($query);
} // end if mode is not new
include("../includes/header.inc.php");
?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td nowrap='nowrap'><p class="pageTitle"><?php echo $lang['admin']['cats']['site_cats_other_lang']; ?></p></td>
    <?php if(!isset($_GET["mode"])){ ?><td align="right" valign="middle"><a <?php if(permission("categories","write")==TRUE){?>href="?mode=new&amp;cat_master_id=<?php echo $_GET['cat_master_id']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><img src="../images/buttons/new.gif" alt="" hspace="4" border="0" title="" /><?php echo $lang['admin']['add_new']; ?></a></td><?php } ?>
  </tr>
</table>
<?php if((isset($_GET['edit']) && $_GET['edit']>0) || (isset($_GET['mode']) && $_GET['mode']=="new")){ ?>
<?php 
		if($_GET['mode']=="new"){
		// get recordset of old cats to translate
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_category WHERE cat_id = %s", $db->mySQLSafe($_GET['cat_master_id']));
		$results = $db->select($query);
		
		}
		?>

<form action="<?php echo $GLOBALS['rootRel'];?>admin/categories/languages.php?cat_master_id=<?php echo $_GET['cat_master_id']; ?>" target="_self" method="post" language="javascript">

<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
  	<td class="tdTitle"><?php echo $lang['admin']['cats']['site_cat_other_lang'];?></td>
  </tr>
  <tr>
    <td class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['cats']['cat_name'];?></strong></span> <input name="cat_name" class="textbox" value="<?php echo $results[0]['cat_name']; ?>" type="text" maxlength="255" /></td>
  </tr>
  <tr>
    <td class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['cats']['language'];?></strong></span> 	  <?php
	$path = $GLOBALS['rootDir']."/language";
	if ($dir = opendir($path)) {
		?>
		<select class="textbox" name="cat_lang">
		<?php
	
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi($folder,array(".","..")) && $folder!==$config['defaultLang']){
			
			include($path."/".$folder."/config.inc.php");
			?>
				<option value="<?php echo $folder; ?>" <?php if($results[0]['cat_lang']==$folder) echo "selected='selected'"; ?>><?php echo $langName; ?></option>
			<?php 
			}
		} 
		?>
			</select>
		
	<?php } ?></td>
  </tr>
  <tr>
    <td class="tdRichText">
	<input type="hidden" value="<?php echo $_GET['edit']; ?>" name="id" />
	<input name="submit" type="submit" id="submit" class="submit" <?php if($_GET['mode']!=="new"){ ?>value="<?php echo $lang['admin']['cats']['update_cat'];?>"<?php } else { echo "value=\"".$lang['admin']['cats']['save_cat']."\""; } ?> /></td>
  </tr>
</table>
</form>
<?php } else {
if(isset($msg)){
 echo stripslashes($msg);
} else { 
?>
<p class="copyText"><?php echo $lang['admin']['cats']['current_cat_list']; ?></p>
<?php } ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
    <td class="tdTitle" width="80%"><?php echo $lang['admin']['cats']['cat_name2']; ?></td>
    <td class="tdTitle" colspan="2" align="center" width="20%"><?php echo $lang['admin']['cats']['action']; ?></td>
  </tr>
  <?php 
  if($results == TRUE){
  	for ($i=0; $i<count($results); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
	
  ?>
  <tr>
    <td width="80%" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['cat_name']; ?></span> <img src="../../language/<?php echo $results[$i]['cat_lang']; ?>/flag.gif" alt="" title="" /></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a <?php if(permission("categories","edit")==TRUE){ ?>href="?edit=<?php echo $results[$i]['id']; ?>&amp;cat_master_id=<?php echo $_GET['cat_master_id']; ?>" class="txtLink"<?php } else { echo $link401; } ?> ><?php echo $lang['admin']['edit']; ?></a></td>
    <td align="center" width="5%" class="<?php echo $cellColor; ?>"><a <?php if(permission("categories","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $results[$i]['id']; ?>&amp;cat_master_id=<?php echo $_GET['cat_master_id']; ?>');" class="txtLink" <?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete']; ?></a></td>
  </tr>
  <?php } // end loop
  } else { ?>
   <tr>
    <td colspan="3" class="tdText"><?php echo $lang['admin']['cats']['no_site_cats']; ?></td>
  </tr>
  <?php } ?>
</table>

<?php } ?>
<?php include("../includes/footer.inc.php"); ?>
