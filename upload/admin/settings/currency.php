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
|	currency.php
|   ========================================
|	Manage Store Currencies	
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

if(isset($_POST['currencyId'])){
	
	$record["code"] = $db->mySQLSafe($_POST['code']);
	$record["name"] = $db->mySQLSafe($_POST['name']);  
	$record["symbolLeft"] = $db->mySQLSafe(validHTML($_POST['symbolLeft']));
	$record["symbolRight"] = $db->mySQLSafe(validHTML($_POST['symbolRight']));
	$record["value"] = $db->mySQLSafe($_POST['value']);
	$record["decimalPlaces"] = $db->mySQLSafe($_POST['decimalPlaces']);
	$record["lastUpdated"] = $db->mySQLSafe(time());

	if($_POST['currencyId']>0){
								
		$where = "currencyId = ".$db->mySQLSafe($_POST['currencyId']);
	
		$update = $db->update($glob['dbprefix']."CubeCart_currencies", $record, $where);
		
		if($update == TRUE){
			$msg = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['settings']['update_success']."</p>";
		} else {
			$msg = "<p class='warnText'>'".$_POST['name']."' ".$lang['admin']['settings']['update_fail']."</p>";
		}
	
	} else {
	
		$insert =$db->insert($glob['dbprefix']."CubeCart_currencies", $record);
		
		if($insert == TRUE){
			$msg = "<p class='infoText'>'".$_POST['name']."' ".$lang['admin']['settings']['add_success']."</p>";
		} else {
			$msg = "<p class='warnText'>'".$_POST['name']."' ".$lang['admin']['settings']['add_fail']."</p>";
		}
	
	}

} elseif(isset($_GET['deleteCurrency'])) {

	$where = "currencyId = ".$db->mySQLSafe($_GET['deleteCurrency']);
	$delete = $db->delete($glob['dbprefix']."CubeCart_currencies", $where, ""); 

	if($delete == TRUE){
		$msg = "<p class='infoText'>".$lang['admin']['settings']['delete_success']."</p>";
	} else {
		$msg = "<p class='warnText'>".$lang['admin']['settings']['delete_failed']."</p>";
	}
	
	$where = "currencyId = ".$db->mySQLSafe($_GET['deleteCurrency']);
	$delete = $db->delete($glob['dbprefix']."CubeCart_currencies", $where, "");

} elseif(isset($_GET['active']) && $_GET['currencyId']>0){

	$record["active"] = $_GET['active'];

	$where = "currencyId = ".$db->mySQLSafe($_GET['currencyId']);
	
	$update =$db->update($glob['dbprefix']."CubeCart_currencies", $record, $where);

}

	$currenciesPerPage = 20;

// get countries
 	$query ="SELECT * FROM ".$glob['dbprefix']."CubeCart_currencies ORDER BY name ASC";
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 0;
	}
	
	$currencies = $db->select($query, $currenciesPerPage, $page);
	$numrows = $db->numrows($query);
	$pagination = $db->paginate($numrows, $currenciesPerPage, $page, "page");


include("../includes/header.inc.php");
?>
<p class="pageTitle"><?php echo $lang['admin']['settings']['currencies'];?></p>
<?php
if(isset($msg)){ 
	echo stripslashes($msg);
} else { 
?>
<p class="copyText"><?php echo $lang['admin']['settings']['currencies_desc'];?></p>
<?php } ?>
<form name="countries" method="post" enctype="multipart/form-data" target="_self" action="<?php echo $GLOBALS['rootRel'];?>admin/settings/currency.php">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['c_code'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['settings']['c_name'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['c_value'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['symbol_left'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['symbol_right'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['decimal_places'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['last_updated'];?></td>
    <td align="center" class="tdTitle"><?php echo $lang['admin']['settings']['c_status'];?></td>
    <td colspan="3" align="center" class="tdTitle"><?php echo $lang['admin']['settings']['action'];?></td>
    </tr>
  <?php 
  if($currencies == TRUE){ 
  
    for ($i=0; $i<count($currencies); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
  
  ?>
  <tr>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $currencies[$i]['code']; ?></span></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $currencies[$i]['name']; ?></span></td>
    <td align="right" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $currencies[$i]['value']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $currencies[$i]['symbolLeft']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $currencies[$i]['symbolRight']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $currencies[$i]['decimalPlaces']; ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo formatTime($currencies[$i]['lastUpdated']); ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><img src="../images/<?php echo $currencies[$i]['active']; ?>.gif" alt="" title="" /></td>
    <td align="center" class="<?php echo $cellColor; ?>">	 <?php if($currencies[$i]['active']>0){ ?>
	<a <?php if(permission("settings","edit")==TRUE){ ?>href="?currencyId=<?php echo $currencies[$i]['currencyId']; ?>&amp;active=0" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['settings']['disable'];?></a>
	<?php } else { ?>
	<a <?php if(permission("settings","edit")==TRUE){ ?>href="?currencyId=<?php echo $currencies[$i]['currencyId']; ?>&amp;active=1" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['settings']['enable'];?></a>
	<?php } ?>
	</td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("settings","edit")==TRUE){ ?>href="?editCurrency=<?php echo $currencies[$i]['currencyId']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['edit'];?></a></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("settings","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q'];?>','?deleteCurrency=<?php echo $currencies[$i]['currencyId']; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a></td>
  </tr>
  <?php
  	}
  } else {
  ?>
  <tr>
    <td colspan="11" class="tdText"><?php echo $lang['admin']['settings']['no_currencies'];?></td>
  </tr>
  <?php } ?>
    <?php
  	if(isset($_GET['editCurrency']) && $_GET['editCurrency']>0){
		
		$editCurrency = $db->select("select * FROM ".$glob['dbprefix']."CubeCart_currencies WHERE currencyId = ".$db->mySQLsafe($_GET['editCurrency']));
	
	}
	?>
  <tr>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="code" type="text" class="textbox" id="code" value="<?php if(isset($editCurrency[0]['code'])) echo $editCurrency[0]['code']; ?>" size="4" /></td>
    <td class="<?php echo $cellColor; ?>"><input name="name" type="text" class="textbox" id="name" value="<?php if(isset($editCurrency[0]['name'])) echo $editCurrency[0]['name']; ?>" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="value" type="text" class="textbox" id="value" value="<?php if(isset($editCurrency[0]['value'])) echo $editCurrency[0]['value']; ?>" size="8" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="symbolLeft" type="text" class="textbox" id="symbolLeft" value="<?php if(isset($editCurrency[0]['symbolLeft'])) echo $editCurrency[0]['symbolLeft']; ?>" size="4" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="symbolRight" type="text" class="textbox" id="symbolRight" value="<?php if(isset($editCurrency[0]['symbolRight'])) echo $editCurrency[0]['symbolRight']; ?>" size="4" /></td>
    <td align="center" class="<?php echo $cellColor; ?>"><input name="decimalPlaces" type="text" class="textbox" id="decimalPlaces" value="<?php if(isset($editCurrency[0]['decimalPlaces'])) echo $editCurrency[0]['decimalPlaces']; ?>" size="4" /></td>
    <td align="center" class="<?php echo $cellColor; ?>">&nbsp;</td>
    <td colspan="4" align="left" class="<?php echo $cellColor; ?>"><input name="submit" class="submit" type="submit" id="submit" value="<?php if(isset($editCurrency) && $editCurrency == TRUE) { echo $lang['admin']['edit']; } else { echo $lang['admin']['add']; } ?> <?php echo $lang['admin']['settings']['currency'];?>" />
	<input type="hidden" name="currencyId" value="<?php if(isset($editCurrency[0]['currencyId'])) echo $editCurrency[0]['currencyId']; ?>" />
	</td>
    </tr>
</table>
<p class="copyText"><?php echo $pagination; ?></p>

</form>
<?php include("../includes/footer.inc.php"); ?>