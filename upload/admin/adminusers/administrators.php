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
|	administrators.php
|   ========================================
|	Manage Administrators
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
$rowsPerPage = 25;

if(isset($_GET["delete"]) && $_GET["delete"]>0){

$where = "adminId=".$db->mySQLSafe($_GET["delete"]);
$delete = $db->delete($glob['dbprefix']."CubeCart_admin_users", $where);
$deletePerms = $db->delete($glob['dbprefix']."CubeCart_admin_permissions", $where);
		
		if($delete == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['adminusers']['del_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['adminusers']['del_failed']."</p>";
		}

} elseif(isset($_POST['adminId'])) {

	$record["name"] = $db->mySQLSafe($_POST['name']);		
	$record["username"] = $db->mySQLSafe($_POST['adminUsername']);	
	
	if(!empty($_POST['adminPassword'])){
		$record["password"] = $db->mySQLSafe(md5($_POST['adminPassword']));
	} 
	
	$record["notes"] = $db->mySQLSafe($_POST['notes']);
	$record["email"] = $db->mySQLSafe($_POST['email']);
	$record["isSuper"] = $db->mySQLSafe($_POST['isSuper']);  
	
	if($_POST['adminId']>0) {
 		$where = "adminId=".$db->mySQLSafe($_POST['adminId']);
		$update = $db->update($glob['dbprefix']."CubeCart_admin_users", $record, $where);
		unset($record, $where);

		if($update == TRUE){
			$msg = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['adminusers']['update_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['adminusers']['update_fail']."</p>";
		}
 		
	} else {
	 	$insert = $db->insert($glob['dbprefix']."CubeCart_admin_users", $record);
		unset($record);

		if($insert == TRUE){
			$msg = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['adminusers']['add_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['adminusers']['add_failed']."</p>";
		}
	}
}

if(!isset($_GET['mode'])){

	// make sql query
	if(isset($_GET['edit']) && $_GET['edit']>0){
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_admin_users WHERE adminId = %s", $db->mySQLSafe($_GET['edit'])); 
	} else {
	
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_admin_users ORDER BY isSuper DESC";
	} 
	
	if(isset($_GET['page'])){
	
		$page = $_GET['page'];
	
	} else {
		
		$page = 0;
	
	}
	
	// query database
	$results = $db->select($query, $rowsPerPage, $page);
	$numrows = $db->numrows($query);
	$pagination = $db->paginate($numrows, $rowsPerPage, $page, "page");
}

include("../includes/header.inc.php");
?>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td nowrap='nowrap'><p class="pageTitle"><?php echo $lang['admin']['adminusers']['administrators_title'];?></p></td>
     <?php if(!isset($_GET["mode"]) && permission("users","add")==TRUE){ ?><td align="right" valign="middle"><a href="?mode=new" class="txtLink"><img src="../images/buttons/new.gif" alt="" hspace="4" border="0" title="" /><?php echo $lang['admin']['add_new'];?></a></td><?php } ?>
  </tr>
</table>
<?php if(isset($msg)){ echo stripslashes($msg); }?>
<?php
if(!isset($_GET["mode"]) && !isset($_GET['edit'])){
?> 
<p class="copyText"><?php echo $lang['admin']['adminusers']['current_users'];?></p>
<p class="copyText"><?php echo $pagination; ?></p>
<table width="100%"  border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
  	<td class="tdTitle"><?php echo $lang['admin']['adminusers']['id'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['adminusers']['user_notes'];?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['adminusers']['no_logins'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['adminusers']['super_user'];?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['adminusers']['email'];?></td>
	<td align="center" class="tdTitle"><?php echo $lang['admin']['adminusers']['action'];?></td>
  </tr>
<?php
for($i=0; $i<count($results); $i++) {

	$cellColor = "";
	$cellColor = cellColor($i);
?>
  <tr>
  	<td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['adminId']; ?>.</span></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><strong><?php echo $results[$i]['username']; ?></strong><?php if(!empty($results[$i]['notes'])) { echo " - ".$results[$i]['notes']; } ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['noLogins']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><img src="../images/<?php echo $results[$i]['isSuper']; ?>.gif" alt="" title="" /></td>
	    <td align="center" class="<?php echo $cellColor; ?>"><a href="mailto:<?php echo $results[$i]['ipAddress']; ?>" class="txtLink"><?php echo $results[$i]['email']; ?></a></td>
	    <td align="center" class="<?php echo $cellColor; ?>">
		<?php if(permission("users","edit")==TRUE){ ?>	
		<a href="?edit=<?php echo $results[$i]['adminId']; ?>" class="txtLink"><?php echo $lang['admin']['edit']; ?></a> /  
		<?php } ?>
		<?php if(permission("users","delete")==TRUE) { ?>	      
		<a href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $results[$i]['adminId']; ?>');" class="txtLink"><?php echo $lang['admin']['delete']; ?></a> 	            
		<?php } if(permission("users","edit")==TRUE && $results[$i]['isSuper']==0) { ?>	      
		 / <a href="permissions.php?adminId=<?php echo $results[$i]['adminId']; ?>" class="txtLink"><?php echo $lang['admin']['adminusers']['permissions'];?></a> <?php } ?></td>
  </tr>
<?php } ?>

</table>
<p class="copyText"><?php echo $pagination; ?></p>


<?php 
} elseif($_GET["mode"]=="new" OR $_GET["edit"]>0){  

if(isset($_GET["edit"]) && $_GET["edit"]>0){ $modeTxt = $lang['admin']['edit']; } else { $modeTxt = $lang['admin']['add']; } 
?>
<p class="copyText"><?php echo $lang['admin']['adminusers']['add_admin'];?></p>
<form action="<?php echo $GLOBALS['rootRel'];?>admin/adminusers/administrators.php" method="post" enctype="multipart/form-data" name="form1">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php if(isset($_GET["edit"]) && $_GET["edit"]>0){ echo $modeTxt; } else { echo $modeTxt;  } ?> <?php echo $lang['admin']['adminusers']['administrator']; ?></td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['adminusers']['full_name']; ?></strong></td>
    <td>
      <input name="name" type="text" class="textbox" value="<?php if(isset($results[0]['name'])) echo $results[0]['name']; ?>" maxlength="255" />
    </td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['adminusers']['username']; ?></strong><br />
</td>
    <td><input name="adminUsername" type="text" class="textbox" value="<?php if(isset($results[0]['username'])) echo $results[0]['username']; ?>" maxlength="255" /></td>
  </tr>
  <tr>
    <td width="25%" class="tdText"><strong><?php echo $lang['admin']['adminusers']['email2']; ?></strong></td>
    <td><input name="email" value="<?php if(isset($results[0]['email'])) echo $results[0]['email']; ?>" type="text" class="textbox" /></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['adminusers']['password']; ?></strong><br />
      <?php echo $lang['admin']['adminusers']['pass_warn']; ?></td>
    <td class="tdText"><input type="password" name="adminPassword" class="textbox" /></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['adminusers']['make_super']; ?></td>
    <td class="tdText">
<?php echo $lang['admin']['yes']; ?>
<input name="isSuper" type="radio" value="1" <?php if(isset($results[0]['isSuper']) && $results[0]['isSuper']==1) { echo "checked='checked'"; } ?> />
<?php echo $lang['admin']['no']; ?>
<input name="isSuper" type="radio" value="0" <?php if(isset($results[0]['isSuper']) && $results[0]['isSuper']==0) echo "checked='checked'"; ?><?php if(isset($_GET['mode']) && $_GET['mode']=="new") { echo "checked='checked'"; } ?> /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdText"><strong><?php echo $lang['admin']['adminusers']['notes']; ?></strong></td>
    <td><textarea name="notes" class="textbox" cols="60" rows="3" id="notes"><?php if(isset($results[0]['notes'])) echo $results[0]['notes']; ?></textarea></td>
  </tr>
  <tr>
    <td width="25%">&nbsp;</td>
    <td>
	<input type="hidden" name="adminId" value="<?php  if(isset($results[0]['adminId'])) echo $results[0]['adminId']; ?>" />
	<input type="submit" name="Submit" class="submit" value="<?php if(isset($_GET["edit"]) && $_GET["edit"]>0){ echo $modeTxt; } else { echo $modeTxt;  } ?> User" /></td>
  </tr>
</table>
</form>
<?php } ?>
<?php include("../includes/footer.inc.php"); ?>