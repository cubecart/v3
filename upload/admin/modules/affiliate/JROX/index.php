<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2005 - 2014. All rights reserved.
|   CubeCart Limited,
|   5 Bridge Street,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 2JU
|   UNITED KINGDOM
|   http://www.CubeCart.com
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Tuesday, 14th March 2006
|   Email: info (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	index.php
|   ========================================
|	Configure JROX.COM Affiliate Manager
+--------------------------------------------------------------------------
*/
include("../../../../includes/ini.inc.php");
include("../../../../includes/global.inc.php");
require_once("../../../../classes/db.inc.php");
$db = new db();
include_once("../../../../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../../../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../../../includes/sslSwitch.inc.php");
include("../../../includes/auth.inc.php");
include("../../../includes/header.inc.php");

if(permission("settings","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

if(isset($_POST['module'])){
	include("../../status.php");
	include("../../../includes/functions.inc.php");
	$module = fetchDbConfig($_GET['folder']);
	$msg = writeDbConf($_POST['module'], $_GET['folder'], $module);

}
$module = fetchDbConfig($_GET['folder']);
?>

<p><a href="http://jam.jrox.com" target="_blank"><img src="logo.gif" alt="JROX.COM Affiliate Manager" border="0" title="" /></a></p>
<?php
if(isset($msg)){
	echo stripslashes($msg);
}
?>
<form action="<?php echo $module['URL']; ?>/admin/" id="fx_admin_login_form" name="fx_admin_login_form" method="post" target="_blank">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
	<tr>
		<td colspan="2" class="tdTitle">Login to JAM (Opens in new window) </td>
	</tr>
	<tr>
		<td align="left" class="tdText">Admin Username:</td>
		<td class="tdText"><input name="jX_User_Name" type="text" id="jX_User_Name" value="" size="20" maxlength="20" /></td>
	</tr>
	<tr>
		<td align="left" class="tdText">Admin Password:</td>
	  <td class="tdText"><input name="jX_Pass_Word" type="password" id="jX_Pass_Word" value="" size="20" maxlength="20" /></td>
	</tr>
	<tr>
		<td align="right" class="tdText">&nbsp;</td>
		<td class="tdText"><input type="submit" class="submit" value="Login As Admin" /><input name="fx_adm_login" type="hidden" id="fx_adm_login" value="fx_login" />
									<input name="adm_req" type="hidden" id="adm_req" value="fx_validate" /></td>
	</tr>
</table>
</form>
<br />
<form action="<?php echo $GLOBALS['rootRel'];?>admin/modules/<?php echo $_GET['module']; ?>/<?php echo $_GET['folder']; ?>/index.php?module=<?php echo $_GET['module']; ?>&amp;folder=<?php echo $_GET['folder']; ?>" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle">Configuration Settings </td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Status:</strong></td>
    <td class="tdText">
	<select name="module[status]">
	<option value="1" <?php if($module['status']==1) echo "selected='selected'"; ?>>Enabled</option>
	<option value="0" <?php if($module['status']==0) echo "selected='selected'"; ?>>Disabled</option>
    </select></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdText"><strong>URL to JAM:</strong></td>
    <td class="tdText"><input type="text" name="module[URL]" value="<?php echo $module['URL']; ?>" class="textbox" size="40" />
	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
<?php include("../../../includes/footer.inc.php"); ?>

