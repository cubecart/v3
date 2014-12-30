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
|	geo.php
|   ========================================
|	Manage Geographical Zones	
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

include("../../includes/global.inc.php");

if(isset($_POST['mode']) && $_POST['mode']=='country'){
	
	$record["iso"] = $db->mySQLSafe($_POST['iso']);  
	$record["printable_name"] = $db->mySQLSafe($_POST['printable_name']);
	$record["iso3"] = $db->mySQLSafe($_POST['iso3']);
	$record["numcode"] = $db->mySQLSafe($_POST['numcode']); 

	if($_POST['countryId']>0){
								
		$where = "id = ".$db->mySQLSafe($_POST['countryId']);
	
		$update =$db->update($glob['dbprefix']."CubeCart_iso_countries", $record, $where);
		
		if($update == TRUE){
			$msgCountry = "<p class='infoText'>'".$_POST['printable_name']."' ".$lang['admin']['settings']['update_success']."</p>";
		} else {
			$msgCountry = "<p class='warnText'>'".$_POST['printable_name']."' ".$lang['admin']['settings']['update_fail']."</p>";
		}
	
	} else {
	
		$insert =$db->insert($glob['dbprefix']."CubeCart_iso_countries", $record);
		
		if($insert == TRUE){
			$msgCountry = "<p class='infoText'>'".$_POST['printable_name']."' ".$lang['admin']['settings']['add_success']."</p>";
		} else {
			$msgCountry = "<p class='warnText'>'".$_POST['printable_name']."' ".$lang['admin']['settings']['add_fail']."</p>";
		}
	
	}

} elseif(isset($_GET['deleteCountry'])) {

	$where = "id = ".$db->mySQLSafe($_GET['deleteCountry']);
	$delete = $db->delete($glob['dbprefix']."CubeCart_iso_countries", $where, ""); 

	if($delete == TRUE){
		$msgCountry = "<p class='infoText'>".$lang['admin']['settings']['delete_success']."</p>";
	} else {
		$msgCountry = "<p class='warnText'>".$lang['admin']['settings']['delete_failed']."</p>";
	}
	
	$where = "countryId = ".$db->mySQLSafe($_GET['deleteCountry']);
	$delete = $db->delete($glob['dbprefix']."CubeCart_iso_counties", $where, "");

}

if(isset($_POST['mode']) && $_POST['mode']=='county'){
	
	$record["countryId"] = $db->mySQLSafe($_POST['countryId']);  
	$record["abbrev"] = $db->mySQLSafe($_POST['abbrev']);
	$record["name"] = $db->mySQLSafe($_POST['name']);

	if($_POST['countyId']>0){
								
		$where = "id = ".$db->mySQLSafe($_POST['countyId']);
	
		$update =$db->update($glob['dbprefix']."CubeCart_iso_counties", $record, $where);
		
		if($update == TRUE){
			$msgCounty = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['settings']['update_success']."</p>";
		} else {
			$msgCounty = "<p class='warnText'>'".$_POST['name']."' ".$lang['admin']['settings']['update_fail']."</p>";
		}
	
	} else {
	
		$insert =$db->insert($glob['dbprefix']."CubeCart_iso_counties", $record);
		
		if($insert == TRUE){
			$msgCounty = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['settings']['add_success']."</p>";
		} else {
			$msgCounty = "<p class='warnText'>'".$_POST['name']."' ".$lang['admin']['settings']['add_fail']."</p>";
		}
	
	}

} elseif(isset($_GET['deleteCounty'])) {

	$where = "id = ".$db->mySQLSafe($_GET['deleteCounty']);
	$delete = $db->delete($glob['dbprefix']."CubeCart_iso_counties", $where, ""); 

	if($delete == TRUE){
		$msgCounty = "<p class='infoText'>".$lang['admin']['settings']['delete_success']."</p>";
	} else {
		$msgCounty = "<p class='warnText'>".$lang['admin']['settings']['delete_fail']."</p>";
	}

}

	$countriesPagination = "";
	$countiesPagination = "";
	$counties = "";
	$countriesPerPage = 20;
	$countiesPerPage = 20;

// get countries
 	$query ="SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_countries ORDER BY printable_name ASC";
	
	if(isset($_GET['countriesPage'])){
		$countriesPage = $_GET['countriesPage'];
	} else {
		$countriesPage = 0;
	}
	
	$countries = $db->select($query, $countriesPerPage, $countriesPage);
	$numrows = $db->numrows($query);
	$countriesPagination = $db->paginate($numrows, $countriesPerPage, $countriesPage, "countriesPage");

// get counties
 	$query = "SELECT ".$glob['dbprefix']."CubeCart_iso_counties.id, countryId, abbrev, name, iso, printable_name, iso3, numcode FROM ".$glob['dbprefix']."CubeCart_iso_counties INNER JOIN ".$glob['dbprefix']."CubeCart_iso_countries ON ".$glob['dbprefix']."CubeCart_iso_counties.countryId = ".$glob['dbprefix']."CubeCart_iso_countries.id ORDER BY printable_name, name  ASC";
	
	if(isset($_GET['countiesPage'])){
		$countiesPage = $_GET['countiesPage'];
	} else {
		$countiesPage = 0;
	}
	
	$counties = $db->select($query, $countiesPerPage, $countiesPage);
	$numrows = $db->numrows($query);
	$countiesPagination = $db->paginate($numrows, $countiesPerPage, $countiesPage, "countiesPage");

include("../includes/header.inc.php");
?>
<p class="pageTitle"><?php echo $lang['admin']['settings']['countries'];?></p>
<?php
if(isset($msgCountry)){ 
	echo $msgCountry;
} else { 
?>
<p class="copyText"><?php echo $lang['admin']['settings']['edit_countries_below'];?></p>
<?php } ?>
<form name="countries" method="post" enctype="multipart/form-data" target="_self" action="<?php echo $GLOBALS['rootRel'];?>admin/settings/geo.php">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['adminusers']['id'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['iso'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['settings']['iso_name'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['iso3'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['num_code'];?></td>
    <td colspan="2" align="center" class="tdTitle"><?php echo $lang['admin']['settings']['action'];?></td>
  </tr>
  <?php 
  if($countries == TRUE){ 
  
    for ($i=0; $i<count($countries); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
  
  ?>
  <tr>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $countries[$i]['id']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $countries[$i]['iso']; ?></span></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $countries[$i]['printable_name']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $countries[$i]['iso3']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $countries[$i]['numcode']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("settings","edit")==TRUE){ ?>href="?editCountry=<?php echo $countries[$i]['id']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['edit'];?></a></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("settings","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['settings']['warn_del_country'];?>','?deleteCountry=<?php echo $countries[$i]['id']; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a></td>
  </tr>
  <?php
  	}
  } else {
  ?>
  <tr>
    <td colspan="7" class="tdText"><?php echo $lang['admin']['settings']['no_countries_in_db'];?></td>
  </tr>
  <?php } ?>
    <?php
  	if(isset($_GET['editCountry']) && $_GET['editCountry']>0){
		
		$editCountry = $db->select("select * FROM ".$glob['dbprefix']."CubeCart_iso_countries WHERE id = ".$db->mySQLsafe($_GET['editCountry']));
	
	}
	?>
  <tr>
    <td colspan="2" align="center" class="<?php echo $cellColor; ?>"><input name="iso" type="text" class="textbox" id="iso" value="<?php if (isset($editCountry[0]['iso'])) echo $editCountry[0]['iso']; ?>" size="4" /></td>
    <td class="<?php echo $cellColor; ?>"><input name="printable_name" type="text" class="textbox" id="printable_name" value="<?php if(isset($editCountry[0]['printable_name'])) echo $editCountry[0]['printable_name']; ?>" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="iso3" type="text" class="textbox" id="iso3" value="<?php if(isset($editCountry[0]['iso3'])) echo $editCountry[0]['iso3']; ?>" size="4" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="numcode" type="text" class="textbox" id="numcode" value="<?php if(isset($editCountry[0]['numcode'])) echo $editCountry[0]['numcode']; ?>" size="4" /></td>
    <td colspan="2" align="left" class="<?php echo $cellColor; ?>"><input name="submit" class="submit" type="submit" id="submit" value="<?php if(isset($editCountry) && $editCountry == TRUE) { echo "Edit"; } else { ?>Add<?php } ?> Country" />
	<input type="hidden" name="countryId" value="<?php if(isset($editCountry[0]['id'])) echo $editCountry[0]['id']; ?>" />
	<input type="hidden" name="mode" value="country" />	</td>
    </tr>
</table>
<p class="copyText"><?php echo $countriesPagination; ?></p>

</form>
<p class="pageTitle"><?php echo $lang['admin']['settings']['zone'];?></p>
<?php
if(isset($msgCounty) && !empty($msgCounty)){ 
	echo $msgCounty;
} else { 
?>
<p class="copyText"><?php echo $lang['admin']['settings']['edit_counties'];?></p>
<?php } ?>
<form name="counties" method="post" enctype="multipart/form-data" target="_self" action="<?php echo $GLOBALS['rootRel'];?>admin/settings/geo.php?county=1">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td align="left" class="tdTitle"><?php echo $lang['admin']['settings']['country'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['settings']['iso_name'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['iso'];?></td>
    <td colspan="2" align="center" class="tdTitle"><?php echo $lang['admin']['settings']['action'];?></td>
  </tr>
  <?php 
  if($counties == TRUE){ 
  
    for ($i=0; $i<count($counties); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
  
  ?>
  <tr>
    <td align="left" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $counties[$i]['printable_name']; ?></span></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $counties[$i]['name']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $counties[$i]['abbrev']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("settings","edit")==TRUE){ ?>href="?editCounty=<?php echo $counties[$i]['id']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['edit'];?></a></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("settings","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q'];?>','?deleteCounty=<?php echo $counties[$i]['id']; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a></td>
  </tr>
  <?php
  	}
  } else {
  ?>
  <tr>
    <td colspan="5" class="tdText"><?php echo $lang['admin']['settings']['no_counties_in_db'];?></td>
  </tr>
  <?php } ?>
    <?php
  	if(isset($_GET['editCounty']) && $_GET['editCounty']>0){
		
		$editCounty = $db->select("select * FROM ".$glob['dbprefix']."CubeCart_iso_counties WHERE id = ".$db->mySQLsafe($_GET['editCounty']));
	
	}
	?>
  <tr>
    <td align="center" class="<?php echo $cellColor; ?>">
		<?php
		$allCountries = $db->select("SELECT printable_name, id FROM ".$glob['dbprefix']."CubeCart_iso_countries ORDER BY printable_name ASC");
		?>
		
		<select name="countryId">
		<?php for($i=0; $i<count($allCountries); $i++){ ?>
		<option value="<?php echo $allCountries[$i]['id']; ?>" <?php if(isset($editCounty[0]['countryId']) && $allCountries[$i]['id']==$editCounty[0]['countryId']) echo "selected='selected'"; ?>><?php echo $allCountries[$i]['printable_name']; ?></option>
		<?php } ?>
		</select>
	</td>
    <td class="<?php echo $cellColor; ?>"><input name="name" type="text" class="textbox" id="name" value="<?php if(isset($editCounty[0]['name'])) echo $editCounty[0]['name']; ?>" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="abbrev" type="text" class="textbox" id="abbrev" value="<?php if(isset($editCounty[0]['abbrev'])) echo $editCounty[0]['abbrev']; ?>" size="4" /></td>
    <td colspan="2" align="left" class="<?php echo $cellColor; ?>"><input name="submit" class="submit" type="submit" id="submit" value="<?php if(isset($editCounty) && $editCounty == TRUE) { echo "Edit"; } else { ?>Add<?php } ?> County" />
	<input type="hidden" name="countyId" value="<?php if(isset($editCounty[0]['id'])) echo $editCounty[0]['id']; ?>" />
	<input type="hidden" name="mode" value="county" />
	</td>
    </tr>
</table>
<p class="copyText"><?php echo $countiesPagination; ?></p>
</form>

<?php include("../includes/footer.inc.php"); ?>