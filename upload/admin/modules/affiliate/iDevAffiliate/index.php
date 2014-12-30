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
|	Configure iDevAffiliate
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

<p><a href="http://www.idevdirect.com/affiliates/idevaffiliate.php?id=370"><img src="logo.gif" alt="iDevAffilliate" border="0" title="" /></a></p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>
<p class="copyText">&quot;Adding affiliate tracking software to your site is one of the most effective ways to achieve more sales and more traffic!&quot;<br />
<a href="http://www.idevdirect.com/affiliates/idevaffiliate.php?id=370" target="_blank" class="txtLink">http://www.idevdirect.com</a></p>
<form action="<?php echo $module['URL']; ?>/admin/setup.php" method="post" enctype="multipart/form-data" name="login" target="_blank" id="login">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
	<tr>
		<td colspan="2" class="tdTitle">Login to iDevAffiliate (Opens in new window) </td>
	</tr>
	<tr>
		<td align="left" class="tdText">Admin Username:</td>
		<td class="tdText"><input type="text" name="aduser" class="textbox" size="20" /></td>
	</tr>
	<tr>
		<td align="left" class="tdText">Admin Password:</td>
	  <td class="tdText"><input type="password" name="adpass" class="textbox" size="20" /></td>
	</tr>
	<tr>
		<td align="right" class="tdText">&nbsp;</td>
		<td class="tdText"><input type="submit" class="submit" value="Login As Admin" /></td>
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
    <td align="left" valign="top" class="tdText"><strong>URL to iDevAffiliate: </strong></td>
    <td class="tdText"><input type="text" name="module[URL]" value="<?php echo $module['URL']; ?>" class="textbox" size="40" />
	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
<p class="copyText">Please note that CubeCart Limited is a partner of iDevDirect.com L.L.C.</p>
<?php include("../../../includes/footer.inc.php"); ?>