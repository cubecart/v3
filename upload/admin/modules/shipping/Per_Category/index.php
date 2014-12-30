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
|	Configure Shipping Per Category
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

<p class="pageTitle">Per Category </p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>
<p class="copyText">This shipping method is used to give shipping cost per category. With this enabled it will be possible to add/edit these costs in the categories section of admin. </p>

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
  <td align="left" class="tdText"><strong>National Countries:</strong><br />
    <span class="copyText">(List comma separated ISO codes)</span>  </td>
    <td class="tdText">
      <input type="text" name="module[national]" value="<?php echo $module['national']; ?>" class="textbox" size="45" /></td>
  </tr>
    <td align="left" class="tdText"><strong>International Countries:</strong><br />
    <span class="copyText">(List comma separated ISO codes)</span></td>
      <td class="tdText"><input type="text" name="module[international]" value="<?php echo $module['international']; ?>" class="textbox" size="45" /></td>
  </tr>
    <tr>
      <td align="left" class="tdText"><strong>Excluded Countries:</strong><br />
    <span class="copyText">(List comma separated ISO codes)</span> </td>
      <td class="tdText"><input type="text" name="module[excluded]" value="<?php echo $module['excluded']; ?>" class="textbox" size="45" /></td>
    </tr>
    <td align="left" class="tdText"><strong>Tax Class:</strong></td>
    <td class="tdText">
	<?php
	$tax = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_taxes");
	?>
	<select name="module[tax]">
	<?php for($i=0; $i<count($tax); $i++){ ?>
	<option value="<?php echo $tax[$i]['id']; ?>" <?php if($module['tax'] == $tax[$i]['id']) echo "selected='selected'"; ?>>
	<?php echo $tax[$i]['taxName']; ?>
	</option>
	<?php } ?>
	</select>
	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
<p class="copyText">Please select which countries to apply international shipping charges to:</p>
<p class="copyText">How is shipping calculated?<br />
  Shipping is calculated by category:</p>
<table border="0" cellpadding="4" cellspacing="0" class="copyText">
  <tbody>
    <tr>
      <td width="110" nowrap='nowrap'><strong>Category</strong></td>
      <td width="110" nowrap='nowrap'><strong>Per Shipment</strong></td>
      <td width="110" nowrap='nowrap'><strong>Per Item</strong></td>
      <td width="110" nowrap='nowrap'><strong>Per Shipment (International)</strong></td>
      <td width="110" nowrap='nowrap'><strong>Per Item (International)</strong></td>
    </tr>
    <tr>
      <td width="110">Gloves</td>
      <td width="110"> 1.20</td>
      <td width="110"> 0.50</td>
      <td width="110"> 6.50</td>
      <td width="110"> 3.45</td>
    </tr>
    <tr>
      <td width="110">Shoes</td>
      <td width="110"> 1.95</td>
      <td width="110"> 0.95</td>
      <td width="110"> 8.25</td>
      <td width="110"> 6.30</td>
    </tr>
  </tbody>
</table>

<p class="copyText">If a combination of items are being purchased the higher shipping rate shall apply:<br />
    e.g. 1 Pair of shoes + 1 Pair of gloves = 1.95 + 0.95 + 0.50 = 3.40<br />
    e.g. 1 Pair of shoes + 1 Pair of gloves = 8.25 + 6.30 + 3.45 = 18.00 (International) </p>
<span class="copyText">
Key:
<ul>
  <li><strong>Exclude:</strong> Countries you do not want to deliver to.</li>
  <li><strong>International:</strong> Countries to apply international shipping charge to. </li>
  <li><strong>National:</strong> Countries NOT to apply international shipping charge to.</li>
</ul>
</span>
<?php include("../../../includes/footer.inc.php"); ?>