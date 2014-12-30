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
|	Configure Shipping Per Item
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



<p><a href="http://www.ups.com/"><img src="logo.gif" alt="" border="0" title="" /></a></p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>

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
    </select>
	</td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Store Post/Zip Code:</strong></td>
    <td class="tdText"><input type="text" name="module[postcode]" value="<?php echo $module['postcode']; ?>" class="textbox" size="10" /></td>
  </tr>
  <tr>
    <td  class="tdText"><strong>Packaging Code:</strong><br />
      Customer Packaging (CP) <br />
      UPS Letter Envelope (ULE) <br />      
      UPS Tube (UT) <br />      
      Express Box (UEB)<br />      
      Worldwide 25 kilo (UW25)
<br />
 Worldwide 10 kilo (UW10)</td>
    <td valign="top"  class="tdText">
      <input type="text" name="module[container]" value="<?php echo $module['container']; ?>" class="textbox" size="4
	  " />
    </td>
  </tr>
  <tr>
    <td class="tdText"><strong>Rate:</strong></td>
    <td>
      <select name="module[rate]">
      <option value="RDP" <?php if($module['rate']=="RDP") echo "selected='selected'"; ?>>Regular Daily Pickup</option>        
<option value="OCA" <?php if($module['rate']=="OCA") echo "selected='selected'"; ?>>On Call Air</option>        
<option value="OTP" <?php if($module['rate']=="OTP") echo "selected='selected'"; ?>>One Time Pickup</option>        
<option value="LC" <?php if($module['rate']=="LC") echo "selected='selected'"; ?>>Letter Center</option>         
<option value="CC" <?php if($module['rate']=="CC") echo "selected='selected'"; ?>>Customer Counter</option>
	  </select>
    </td>
  </tr>
  <tr>
    <td class="tdText"><strong>Address Type:</strong> (Destination) </td>
    <td>
      <select name="module[rescom]">
        <option value="RES" <?php if($module['rescom']=="RES") echo "selected='selected'"; ?>>Residential</option>
        <option value="COM" <?php if($module['rescom']=="COM") echo "selected='selected'"; ?>>Commercial</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="tdTitle">UPS Products</td>
  </tr>
    <td align="left" class="tdText"><strong>Next Day Air Early AM</strong></td>
      <td class="tdText"><select name="module[product_1DM]">
        <option value="1" <?php if($module['product_1DM']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_1DM']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr><tr>
      <td align="left" class="tdText"><strong>Next Day Air</strong></td>
      <td class="tdText"><select name="module[product_1DA]">
        <option value="1" <?php if($module['product_1DA']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_1DA']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>Next Day Air Saver</strong></td>
      <td class="tdText"><select name="module[product_1DP]">
        <option value="1" <?php if($module['product_1DP']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_1DP']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>2nd Day Air Early AM</strong></td>
      <td class="tdText"><select name="module[product_2DM]">
        <option value="1" <?php if($module['product_2DM']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_2DM']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>2nd Day Air</strong></td>
      <td class="tdText"><select name="module[product_2DA]">
        <option value="1" <?php if($module['product_2DA']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_2DA']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>3 Day Select</strong></td>
      <td class="tdText"><select name="module[product_3DS]">
        <option value="1" <?php if($module['product_3DS']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_3DS']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>Ground</strong></td>
      <td class="tdText"><select name="module[product_GND]">
        <option value="1" <?php if($module['product_GND']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_GND']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>Canada Standard</strong></td>
      <td class="tdText"><select name="module[product_STD]">
        <option value="1" <?php if($module['product_STD']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_STD']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>Worldwide Express</strong></td>
      <td class="tdText"><select name="module[product_XPR]">
        <option value="1" <?php if($module['product_XPR']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_XPR']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>Worldwide Express Plus</strong></td>
      <td class="tdText"><select name="module[product_XDM]">
        <option value="1" <?php if($module['product_XDM']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_XDM']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>Worldwide Expedited</strong></td>
      <td class="tdText"><select name="module[product_XPD]">
        <option value="1" <?php if($module['product_XPD']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['product_XPD']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
    </tr>
  <td align="left" class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
<?php include("../../../includes/footer.inc.php"); ?>