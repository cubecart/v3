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
|	Configure Shipping By Weight
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
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>

<p class="copyText">This module is for shipping by Weight (Please make sure you have the correct weight unit selected in your settings)</p>
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
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 1 Shiping 1st Class Rates:</strong> <br />(Comma Separated)    </span></td>
    <td class="tdOdd"><input type="text" name="module[zone1RatesClass1]" value="<?php echo $module['zone1RatesClass1']; ?>" class="textbox" size="40" />	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 1 Shiping 2nd Class Rates:</strong> <br />
      (Comma Separated) </span></td>
    <td class="tdOdd"><input type="text" name="module[zone1RatesClass2]" value="<?php echo $module['zone1RatesClass2']; ?>" class="textbox" size="40" /></td>
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
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 2 Shiping 1st Class Rates:</strong> <br />
        (Comma Separated)    </span></td>
    <td class="tdEven"><input type="text" name="module[zone2RatesClass1]" value="<?php echo $module['zone2RatesClass1']; ?>" class="textbox" size="40" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 2 Shiping 2nd Class Rates:</strong> <br />
(Comma Separated)</span></td>
    <td class="tdEven"><input type="text" name="module[zone2RatesClass2]" value="<?php echo $module['zone2RatesClass2']; ?>" class="textbox" size="40" /></td>
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
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 3 Shiping 1st Class Rates:</strong> <br />(Comma Separated)    </span></td>
    <td class="tdOdd"><input type="text" name="module[zone3RatesClass1]" value="<?php echo $module['zone3RatesClass1']; ?>" class="textbox" size="40" />	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdOdd"><span class="tdText"><strong>Zone 3 Shiping 2nd Class Rates:</strong> <br />
      (Comma Separated)</span></td>
    <td class="tdOdd"><input type="text" name="module[zone3RatesClass2]" value="<?php echo $module['zone3RatesClass2']; ?>" class="textbox" size="40" /></td>
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
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 4 Shiping<span class="tdOdd"><strong> 1st Class</strong></span> Rates:</strong>
      <br />(Comma Separated)    </span></td>
    <td class="tdEven"><input type="text" name="module[zone4RatesClass1]" value="<?php echo $module['zone4RatesClass1']; ?>" class="textbox" size="40" />	</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="tdEven"><span class="tdText"><strong>Zone 4 Shiping<span class="tdOdd"><strong> 2nd Class</strong></span> Rates:</strong> <br />
      (Comma Separated) </span></td>
    <td class="tdEven"><input type="text" name="module[zone4RatesClass2]" value="<?php echo $module['zone4RatesClass2']; ?>" class="textbox" size="40" /></td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Tax Class: </strong></td>
    <td class="tdText"><?php
	$tax = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_taxes");
	?>
	<select name="module[tax]">
	<?php for($i=0; $i<count($tax); $i++){ ?>
	<option value="<?php echo $tax[$i]['id']; ?>" <?php if($module['tax'] == $tax[$i]['id']) echo "selected='selected'"; ?>>
	<?php echo $tax[$i]['taxName']; ?>
	</option>
	<?php } ?>
	</select></td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
<p class="copyText">Shipping rates are worked out by weight/price.</p>
<p class="copyText">e.g. 1:1.29 (For a parcel of 1<?php echo $config['weightUnit']; ?> or under the shipping would be 1.29 <?php echo $config['defaultCurrency'];?>) </p>
</form>
<?php include("../../../includes/footer.inc.php"); ?>