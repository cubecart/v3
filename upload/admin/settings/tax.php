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
|	tax.php
|   ========================================
|	Setup Tax Types & Tax Zones	
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
include("../includes/functions.inc.php");

if(permission("settings","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}


if(isset($_POST['config'])){
	$config = fetchDbConfig("config");
	$msg = writeDbConf($_POST['config'],"config", $config, "config");
}
$config = fetchDbConfig("config");

if(isset($_POST['taxId'])){

	$record["taxName"] = $db->mySQLSafe($_POST['taxName']);		
	$record["percent"] = $db->mySQLSafe($_POST['percent']);

	if($_POST['taxId']>0){
								
		$where = "id = ".$db->mySQLSafe($_POST['taxId']);
	
		$update =$db->update($glob['dbprefix']."CubeCart_taxes", $record, $where);
		
		if($update == TRUE){
			$msgTaxType = "<p class='infoText'>'".$_POST['taxName']."' ".$lang['admin']['settings']['update_success']."</p>";
		} else {
			$msgTaxType = "<p class='warnText'>'".$_POST['taxName']."' ".$lang['admin']['settings']['update_fail']."</p>";
		}
	
	} else {
	
		$insert =$db->insert($glob['dbprefix']."CubeCart_taxes", $record);
		
		if($insert == TRUE){
			$msgTaxType = "<p class='infoText'>'".$_POST['taxName']."' ".$lang['admin']['settings']['add_success']."</p>";
		} else {
			$msgTaxType = "<p class='warnText'>'".$_POST['taxName']."' ".$lang['admin']['settings']['add_fail']."</p>";
		}
	
	}

} elseif(isset($_GET['delete'])) {

	$where = "id = ".$db->mySQLSafe($_GET['delete']);

	$delete = $db->delete($glob['dbprefix']."CubeCart_taxes", $where, ""); 

	if($delete == TRUE){
		$msgTaxType = "<p class='infoText'>".$lang['admin']['settings']['delete_success']."</p>";
	} else {
		$msgTaxType = "<p class='warnText'>".$lang['admin']['settings']['delete_failed']."</p>";
	}

}

$jsScript = jsGeoLocation("taxCountry", "taxCounty", "-- ".$lang['admin']['all']." --");
include("../includes/header.inc.php");
?>

<p class="pageTitle"><?php $lang['admin']['settings']['tax_Settings']; ?></p>
<?php
if(isset($msg)){ 
	echo stripslashes($msg); 
} else { 
?>
<p class="copyText"><?php $lang['admin']['settings']['edit_locale_below']; ?></p>
<?php } ?>
<form name="updateSettings" method="post" enctype="multipart/form-data" target="_self">
<table border="0" cellspacing="0" cellpadding="4" class="mainTable">
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['tax_only_to']; ?></strong></td>
	</tr>
	<tr>
	  <td class="tdText"><strong><?php echo $lang['admin']['settings']['country']; ?></strong></td>
	  <td align="left">
	  <?php 
	  $countries = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_countries"); 
	  ?>
	
	<select name="config[taxCountry]" id="taxCountry" onChange="updateCounty(this.form);">
	<?php
	for($i=0; $i<count($countries); $i++){
	?>
	<option value="<?php echo $countries[$i]['id']; ?>" <?php if($countries[$i]['id'] == $config['taxCountry']) echo "selected='selected'"; ?>><?php echo $countries[$i]['printable_name']; ?></option>
	<?php } ?>
	</select></td>
    </tr>
	<tr>
	  <td align="left" valign="top" class="tdText"><strong><?php echo $lang['admin']['settings']['zone'];?></strong></td>
	  <td align="left">
	  <?php 
	  $counties = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_counties WHERE countryId = '".$config['taxCountry']."'"); 
	  ?>
	  <select name="config[taxCounty]" id="taxCounty">
	  
	  <option value="" <?php if(empty($config['taxCounty'])){ ?>selected='selected'<?php } ?>>-- <?php echo $lang['admin']['all'];?> --</option>
	  
	  <?php for($i=0; $i<count($counties); $i++){ ?>
	  <option value="<?php echo $counties[$i]['id']; ?>" <?php if($counties[$i]['id']==$config['taxCounty']) echo "selected='selected'"; ?>><?php echo $counties[$i]['name']; ?></option>
	  <?php } ?>
      </select></td>
	</tr>
	<tr>
	  <td align="left" valign="top" class="tdText">&nbsp;</td>
	  <td align="left"><input name="submitTax" type="submit" class="submit" value="Update" /></td>
    </tr>
</table>
</form>
<?php
if(isset($msgTaxType)){ 
	echo $msgTaxType;
} else { 
?>
<p class="copyText"><?php $lang['admin']['settings']['manage_tax_below'];?></p>
<?php
}
$taxTypes = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_taxes");
?>
<form name="taxTypes" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="0" cellpadding="4" class="mainTable">
	<tr>
		<td class="tdTitle"><strong><?php echo $lang['admin']['settings']['tax_class2'];?></strong></td>
	    <td class="tdTitle"><strong><?php echo $lang['admin']['settings']['rate_per'];?></strong></td>
	    <td colspan="2" align="center" class="tdTitle"><strong><?php echo $lang['admin']['settings']['action'];?></strong></td>
	</tr>
	<?php if($taxTypes == TRUE){ ?>
		<?php for($i=0; $i<count($taxTypes);$i++){ ?>
			<tr>
			  <td class="tdText"><?php echo $taxTypes[$i]['taxName']; ?></td>
			  <td class="tdText"><?php echo $taxTypes[$i]['percent']; ?></td>
			  <td align="center"><a <?php if(permission("settings","edit")==TRUE){?>href="?edit=<?php echo $taxTypes[$i]['id']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['edit']; ?></a></td>
			  <td align="center">
			  <?php
			  // check for product dependancies
			  $noProducts = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory WHERE taxType=".$taxTypes[$i]['id']);
 
			  if($noProducts == FALSE){
			  ?>
			  <a <?php if(permission("settings","delete")==TRUE){?>href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $taxTypes[$i]['id']; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a>
			  <?php
			  } else {
			  ?>
			  <a href="javascript:;" class="txtNullLink"><?php echo $lang['admin']['delete'];?></a>
			  <?php
			  }
			  ?>
			  
			  </td>
			</tr>
		<?php } ?>
	<?php } else { ?>
	<tr>
	  <td class="tdText" colspan="4"><?php echo $lang['admin']['settings']['no_taxes_setup'];?></td>
	</tr>
	<?php } ?>
	<?php 
	if(isset($_GET['edit']) && $_GET['edit']>0){
		
		$editTax = $db->select("select * FROM ".$glob['dbprefix']."CubeCart_taxes WHERE id = ".$db->mySQLsafe($_GET['edit']));
	
	}
	?>
	<tr>
		<td><input name="taxName" class="textbox" type="text" maxlength="50" value="<?php if(isset($editTax[0]['taxName'])) echo $editTax[0]['taxName']; ?>" /></td>
		<td align="center" class="tdText"><input name="percent" type="text" class="textbox" value="<?php if(isset($editTax[0]['percent'])) echo $editTax[0]['percent']; ?>" size="6" /> 
		%</td>
		<td colspan="2" align="center"><input name="submit" type="submit" class="submit" id="submit" value="<?php if(isset($editTax) && $editTax==TRUE){ echo $lang['admin']['edit']; } else{ echo $lang['admin']['add']; } ?> <?php echo $lang['admin']['settings']['tax'];?>" /></td>
	</tr>
</table>
<input type="hidden" name="taxId" value="<?php echo $editTax[0]['id']; ?>" />
</form>
<?php include("../includes/footer.inc.php"); ?>