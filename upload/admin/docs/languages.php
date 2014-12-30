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
|	Manage Site Docs in Other Languages
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
include("../includes/rte/fckeditor.php");
include("../includes/auth.inc.php");
if(permission("documents","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
include("../includes/header.inc.php");
// delete document
if(isset($_GET['delete']) && $_GET['delete']>0){

$where = "id = ".$db->mySQLSafe($_GET['delete']);

$delete = $db->delete($glob['dbprefix']."CubeCart_docs_lang", $where, ""); 

	if($delete == TRUE){
		$msg = "<p class='infoText'>".$lang['admin']['docs']['delete_success']."</p>";
	} else {
		$msg = "<p class='infoText'>".$lang['admin']['docs']['delete_fail']."</p>";
	}
	
} elseif(isset($_POST['id']) && $_POST['id']>0){
// instantiate db class

$record["doc_name"] = $db->mySQLSafe($_POST['doc_name']);
$record["doc_lang"] = $db->mySQLSafe($_POST['doc_lang']);
$record["doc_master_id"] = $db->mySQLSafe($_GET['doc_master_id']);		
$record["doc_content"] = $db->mySQLSafe($_POST['FCKeditor']);
							
$where = "id = ".$db->mySQLSafe($_POST['id']);

$update =$db->update($glob['dbprefix']."CubeCart_docs_lang", $record, $where);
			
	if($update == TRUE){
		$msg = "<p class='infoText'>'".$_POST['doc_name']."' ".$lang['admin']['docs']['update_success']."</p>"; 
	} else {
		$msg = "<p class='warnText'>'".$_POST['doc_name']."' ".$lang['admin']['docs']['update_fail']."</p>"; 
	}

} elseif(isset($_POST['id']) && empty($_POST['id'])){
// instantiate db class

$record["doc_name"] = $db->mySQLSafe($_POST['doc_name']);
$record["doc_lang"] = $db->mySQLSafe($_POST['doc_lang']);
$record["doc_master_id"] = $db->mySQLSafe($_GET['doc_master_id']);			
$record["doc_content"] = $db->mySQLSafe($_POST['FCKeditor']);	

$insert = $db->insert($glob['dbprefix']."CubeCart_docs_lang", $record);

	if($insert == TRUE){
		$msg = "<p class='infoText'>'".$_POST['doc_name']."' ".$lang['admin']['docs']['add_success']."</p>";
	} else {
		$msg = "<p class='warnText'>".$lang['admin']['docs']['add_fail']."</p>";
	}
}

// retrieve current documents
if(!isset($_GET['mode'])){
	
	// make sql query
	if(isset($_GET['edit']) && $_GET['edit']>0){
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_docs_lang WHERE id = %s", $db->mySQLSafe($_GET['edit'])); 
	} else {
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_docs_lang WHERE doc_master_id = %s ORDER BY doc_name ASC", $db->mySQLSafe($_GET['doc_master_id'])); 
	} 
	
	// query database
	$results = $db->select($query);
} // end if mode is not new
?>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td nowrap='nowrap'><p class="pageTitle"><?php echo $lang['admin']['docs']['site_docs_other_lang']; ?></p></td>
    <?php if(!isset($_GET["mode"])){ ?><td align="right" valign="middle"><a <?php if(permission("documents","write")==TRUE){?>href="?mode=new&amp;doc_master_id=<?php echo $_GET['doc_master_id']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><img src="../images/buttons/new.gif" alt="" hspace="4" border="0" title="" /><?php echo $lang['admin']['add_new']; ?></a></td><?php } ?>
  </tr>
</table>
<?php if((isset($_GET['edit']) && $_GET['edit']>0) || (isset($_GET['mode']) && $_GET['mode']=="new")){ ?>
<?php 
		if($_GET['mode']=="new"){
		// get recordset of old doc to translate
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_docs WHERE doc_id = %s", $db->mySQLSafe($_GET['doc_master_id']));
		$results = $db->select($query);
		
		}
		?>

<form action="<?php echo $GLOBALS['rootRel'];?>admin/docs/languages.php?doc_master_id=<?php echo $_GET['doc_master_id']; ?>" target="_self" method="post" language="javascript">
<p class="copyText"><?php echo $lang['admin']['docs']['use_rich_text'];?></p>
<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
  	<td class="tdTitle"><?php echo $lang['admin']['docs']['site_doc_other_lang'];?></td>
  </tr>
  <tr>
    <td class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['docs']['doc_name'];?></strong></span> <input name="doc_name" class="textbox" value="<?php echo $results[0]['doc_name']; ?>" type="text" maxlength="255" /></td>
  </tr>
  <tr>
    <td class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['docs']['language'];?></strong></span> 	  <?php
	$path = $GLOBALS['rootDir']."/language";
	if ($dir = opendir($path)) {
		?>
		<select class="textbox" name="doc_lang">
		<?php
	
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi($folder,array(".","..")) && $folder!==$config['defaultLang']){
			
			include($path."/".$folder."/config.inc.php");
			?>
				<option value="<?php echo $folder; ?>" <?php if($results[0]['doc_lang']==$folder) echo "selected='selected'"; ?>><?php echo $langName; ?></option>
			<?php 
			}
		} 
		?>
			</select>
		
	<?php } ?></td>
  </tr>
  <tr>
    <td class="tdRichText">
<?php
$oFCKeditor = new FCKeditor('FCKeditor');
$oFCKeditor->BasePath = $GLOBALS['rootRel'].'admin/includes/rte/';
$oFCKeditor->Value = $results[0]['doc_content'];
$oFCKeditor->Create();
?></td>
  </tr>
  <tr>
    <td class="tdRichText">
	<input type="hidden" value="<?php echo $_GET['edit']; ?>" name="id" />
	<input name="submit" type="submit" id="submit" class="submit" <?php if($_GET['mode']!=="new"){ ?>value="<?php echo $lang['admin']['docs']['update_doc'];?>"<?php } else { echo "value=\"".$lang['admin']['docs']['save_doc']."\""; } ?> /></td>
  </tr>
</table>
</form>
<?php } else {
if(isset($msg)){
 echo stripslashes($msg);
} else { 
?>
<p class="copyText"><?php echo $lang['admin']['docs']['current_doc_list']; ?></p>
<?php } ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
    <td class="tdTitle" width="80%"><?php echo $lang['admin']['docs']['doc_name2']; ?></td>
    <td class="tdTitle" colspan="2" align="center" width="20%"><?php echo $lang['admin']['docs']['action']; ?></td>
  </tr>
  <?php 
  if($results == TRUE){
  	for ($i=0; $i<count($results); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
	
  ?>
  <tr>
    <td width="80%" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['doc_name']; ?></span> <img src="../../language/<?php echo $results[$i]['doc_lang']; ?>/flag.gif" alt="" title="" /></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a <?php if(permission("documents","edit")==TRUE){ ?>href="?edit=<?php echo $results[$i]['id']; ?>&amp;doc_master_id=<?php echo $_GET['doc_master_id']; ?>" class="txtLink"<?php } else { echo $link401; } ?> ><?php echo $lang['admin']['edit']; ?></a></td>
    <td align="center" width="5%" class="<?php echo $cellColor; ?>"><a <?php if(permission("documents","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $results[$i]['id']; ?>&amp;doc_master_id=<?php echo $_GET['doc_master_id']; ?>');" class="txtLink" <?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete']; ?></a></td>
  </tr>
  <?php } // end loop
  } else { ?>
   <tr>
    <td colspan="3" class="tdText"><?php echo $lang['admin']['docs']['no_site_docs']; ?></td>
  </tr>
  <?php } ?>
</table>

<?php } ?>
<?php include("../includes/footer.inc.php"); ?>
