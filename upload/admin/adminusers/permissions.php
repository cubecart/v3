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
|	permissions.php
|   ========================================
|	Set Admin Users Permissions
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
if(permission("administrators","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

include("../includes/header.inc.php");
if($_POST['noSections']>0){

// delete all current permissions to replace them
$delete = $db->delete($glob['dbprefix']."CubeCart_admin_permissions","adminId=".$_POST['adminId']);

for($i=0; $i<$_POST['noSections']; $i++){
	
	$data['sectId'] = $db->mySQLSafe($_POST['sectId'.$i]);
	$data['read'] = $db->mySQLSafe($_POST['read'.$i]);
	$data['write'] = $db->mySQLSafe($_POST['write'.$i]);
	$data['edit'] = $db->mySQLSafe($_POST['edit'.$i]);
	$data['delete'] = $db->mySQLSafe($_POST['delete'.$i]);
	$data['adminId'] = $db->mySQLSafe($_POST['adminId']);
	$insert = $db->insert($glob['dbprefix']."CubeCart_admin_permissions",$data);
	unset($data);

}

$msg = "<p class='infoText'>".$lang['admin']['adminusers']['perms_updated']."</p>";

}
?>
<p class="pageTitle"><?php echo $lang['admin']['adminusers']['permissions']; ?></p>
<?php if(isset($msg)){
	echo stripslashes($msg);
} ?>
<p class="copyText"><?php echo $lang['admin']['adminusers']['set_perms']; ?></p>
<form action="<?php echo currentPage(); ?>" method="post" enctype="multipart/form-data" target="_self">
<table  border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
  	<td class="tdTitle"><?php echo $lang['admin']['adminusers']['section']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['read']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['write']; ?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['edit']; ?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['delete']; ?></td>
  </tr>
<?php
$sectionsQuery = "SELECT * FROM ".$glob['dbprefix']."CubeCart_admin_sections";
$sectionsResult = $db->select($sectionsQuery);

if($sectionsResult == TRUE) {

	for($i=0; $i<count($sectionsResult); $i++) {


	$permissionsQuery =  "SELECT * FROM ".$glob['dbprefix']."CubeCart_admin_permissions WHERE adminId = ".$db->mySQLSafe($_GET['adminId'])." AND sectId = ".$db->mySQLSafe($sectionsResult[$i]['sectId']);
	$permissionsResult = $db->select($permissionsQuery);
		
	$cellColor = "";
	$cellColor = cellColor($i); 
?>
  <tr>
  	<td class="<?php echo $cellColor; ?>"><span class="copyText"><strong><?php echo ucfirst($sectionsResult[$i]['name']); ?></strong> - <?php echo $sectionsResult[$i]['description']; ?></span><input type="hidden" name="sectId<?php echo $i; ?>" value="<?php echo $sectionsResult[$i]['sectId']; ?>" /></td>
    <td align="center" valign="middle" class="<?php echo $cellColor; ?>"><input name="read<?php echo $i; ?>" type="checkbox" value="1" <?php if($permissionsResult[0]['read']==1) { echo "checked='checked'"; } ?> /></td>
    <td align="center" valign="middle" class="<?php echo $cellColor; ?>"><input name="write<?php echo $i; ?>" type="checkbox" value="1" <?php if($permissionsResult[0]['write']==1) { echo "checked='checked'"; } ?> /></td>
    <td align="center" valign="middle" class="<?php echo $cellColor; ?>"><input name="edit<?php echo $i; ?>" type="checkbox" value="1" <?php if($permissionsResult[0]['edit']==1) { echo "checked='checked'"; } ?> /></td>
	    <td align="center" valign="middle" class="<?php echo $cellColor; ?>"><input name="delete<?php echo $i; ?>" type="checkbox" value="1" <?php if($permissionsResult[0]['delete']==1) { echo "checked='checked'"; } ?> /></td>
  </tr>
	<?php } ?>
<?php } ?>

  <tr>
    <td colspan="5" align="right">
	<input type="hidden" value="<?php echo $_GET['adminId']; ?>" name="adminId" />
	<input type="hidden" value="<?php echo $i; ?>" name="noSections" />
	<input name="Submit" type="submit" class="submit" id="Submit" value="Update Permissions" /></td>
  </tr>
</table>
</form>
<span class="copyText"><?php echo $lang['admin']['adminusers']['nb_bulk']; ?></span>
<?php include("../includes/footer.inc.php"); ?>