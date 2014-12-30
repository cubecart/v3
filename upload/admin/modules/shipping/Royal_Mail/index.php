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
|	Configure Royal Mail
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


<p><a href="http://www.royalmail.com/"><img src="logo.gif" alt="" border="0" title="" /></a></p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>
<p class="copyText">Royal Mail shipping rates use the products weight in KG. (Please make sure your settings are in KG and not Lbs) <br />
<a href="http://www.royalmail.com/" target="_blank" class="txtLink">http://www.royalmail.com/</a></p>
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
    <td align="left" valign="top" class="tdOdd"><span class="copyText"><strong>Zone 1 Countries:</strong><br />
      (List comma separated ISO codes)</span></td>
    <td class="tdOdd"><textarea name="module[zone1Countries]" cols="40" rows="2" class="textbox"><?php echo $module['zone1Countries']; ?></textarea>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 1 Handling Fee:</strong></span></td>
    <td class="tdOdd"><input type="text" name="module[zone1Handling]" value="<?php echo $module['zone1Handling']; ?>" class="textbox" size="5" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 1 Shiping Rates:</strong> <br />(Comma Separated)    </span></td>
    <td class="tdOdd"><input type="text" name="module[zone1Rates]" value="<?php echo $module['zone1Rates']; ?>" class="textbox" size="40" />	</td>
  </tr>
    <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 2 Countries:</strong></span></td>
    <td class="tdEven"><textarea name="module[zone2Countries]" cols="40" rows="2" class="textbox"><?php echo $module['zone2Countries']; ?></textarea>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 2 Handling Fee: </strong></span></td>
    <td class="tdEven"><input type="text" name="module[zone2Handling]" value="<?php echo $module['zone2Handling']; ?>" class="textbox" size="5" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 2 Shiping Rates:</strong> <br />(Comma Separated)    </span></td>
    <td class="tdEven"><input type="text" name="module[zone2Rates]" value="<?php echo $module['zone2Rates']; ?>" class="textbox" size="40" /></td>
  </tr>
    <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 3 Countries:</strong></span></td>
    <td class="tdOdd"><textarea name="module[zone3Countries]" cols="40" rows="2" class="textbox"><?php echo $module['zone3Countries']; ?></textarea>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 3 Handling Fee:</strong></span></td>
    <td class="tdOdd"><input type="text" name="module[zone3Handling]" value="<?php echo $module['zone3Handling']; ?>" class="textbox" size="5" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 3 Shiping Rates:</strong> <br />(Comma Separated)    </span></td>
    <td class="tdOdd"><input type="text" name="module[zone3Rates]" value="<?php echo $module['zone3Rates']; ?>" class="textbox" size="40" />	</td>
  </tr>
    <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 4 Countries:</strong></span></td>
    <td class="tdEven"><textarea name="module[zone4Countries]" cols="40" rows="2" class="textbox"><?php echo $module['zone4Countries']; ?></textarea>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 4 Handling Fee: </strong></span></td>
    <td class="tdEven"><input type="text" name="module[zone4Handling]" value="<?php echo $module['zone4Handling']; ?>" class="textbox" size="5" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 4 Shiping Rates:</strong>
      <br />(Comma Separated)    </span></td>
    <td class="tdEven"><input type="text" name="module[zone4Rates]" value="<?php echo $module['zone4Rates']; ?>" class="textbox" size="40" />	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
<p class="copyText">Shipping rates are worked out by weight/price.</p>
<p class="copyText">e.g. 1:1.29 (For a parcel of 1Kg or under the shipping would be &pound;1.29) </p>
</form>
<?php include("../../../includes/footer.inc.php"); ?>