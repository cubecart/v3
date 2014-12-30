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
|	customers.php
|   ========================================
|	Manage Customers Accounts
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

if(permission("customers","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

include("../includes/header.inc.php");

$rowsPerPage = 25;

if(isset($_GET["delete"]) && $_GET["delete"]>0){
// instantiate db class
$where = "customer_id=".$db->mySQLSafe($_GET["delete"]);
$delete = $db->delete($glob['dbprefix']."CubeCart_customer", $where);
		
		if($delete == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['customers']['delete_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['customers']['delete_success']."</p>";
		}

} elseif(isset($_POST['customer_id'])) {
// instantiate db class

	$record["title"] = $db->mySQLSafe($_POST['title']);		
	$record["firstName"] = $db->mySQLSafe($_POST['firstName']);	
	$record["lastName"] = $db->mySQLSafe($_POST['lastName']);
	$record["email"] = $db->mySQLSafe($_POST['email']);  
	$record["add_1"] = $db->mySQLSafe($_POST['add_1']); 
	$record["add_2"] = $db->mySQLSafe($_POST['add_2']); 
	$record["town"] = $db->mySQLSafe($_POST['town']);
	$record["postcode"] = $db->mySQLSafe($_POST['postcode']);
	$record["county"] = $db->mySQLSafe($_POST['county']);
	$record["country"] = $db->mySQLSafe($_POST['country']);
	$record["phone"] = $db->mySQLSafe($_POST['phone']);
	
	$zoneId = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_counties WHERE (abbrev LIKE ".$db->mySQLSafe($_POST['county'])." OR name LIKE ".$db->mySQLSafe($_POST['county']).")");
		
	if($zoneId[0]['id']>0){

		$record["zoneId"] = $zoneId[0]['id'];

	} else {
	
		$record["zoneId"] = 0;
		
	}
	
	$where = "customer_id=".$db->mySQLSafe($_POST['customer_id']);
	$update = $db->update($glob['dbprefix']."CubeCart_customer", $record, $where);
	
	if($update == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['customers']['update_success']."</p>";
	} else {
			$msg = "<p class='warnText'>".$lang['admin']['customers']['update_fail']."</p>";
	}

}

	if(isset($_GET['edit']) && $_GET['edit']>0){
		
		$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_customer WHERE customer_id = %s AND type = 1", $db->mySQLSafe($_GET['edit'])); 
	
	} elseif(isset($_GET['searchStr'])) {
		
		
	$searchwords = split ( "[ ,]", $_GET['searchStr']);   
	foreach($searchwords as $word){
		$searchArray[]=$word;
	}

	$noKeys = count($searchArray);
	
	$like = "";
	
	for ($i=0; $i<$noKeys;$i++) {
		
		$ucSearchTerm = strtoupper($searchArray[$i]);
		if(($ucSearchTerm!=="AND")AND($ucSearchTerm!=="OR")){
			
			$like .= "(email LIKE '%".$searchArray[$i]."%' OR title LIKE '%".$searchArray[$i]."%' OR  firstName LIKE '%".$searchArray[$i]."%' OR lastName LIKE '%".$searchArray[$i]."%' OR add_1 LIKE '%".$searchArray[$i]."%' OR  add_2 LIKE '%".$searchArray[$i]."%' OR town LIKE '%".$searchArray[$i]."%' OR county LIKE '%".$searchArray[$i]."%' OR  postcode LIKE '%".$searchArray[$i]."%' OR country LIKE '%".$searchArray[$i]."%' OR phone LIKE '%".$searchArray[$i]."%' OR  ipAddress LIKE '%".$searchArray[$i]."%') OR ";
			
		} else {
			$like = substr($like,0,strlen($like)-3);
			$like .= $ucSearchTerm;
		}  

	}
	$like = substr($like,0,strlen($like)-3);
	
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_customer WHERE type = 1 AND ".$like;
	
	} else {
		
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_customer WHERE type = 1 ORDER BY regTime DESC";
	
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
?>
<p class="pageTitle"><?php echo $lang['admin']['customers']['customers']; ?></p>
<?php if(isset($msg)){ echo stripslashes($msg); }?>
<?php
if(!isset($_GET['mode']) && !isset($_GET['edit'])){
?>

<form name="filter" method="get" action="<?php echo $GLOBALS['rootRel'];?>admin/customers/index.php">
 	<p align="right" class="copyText">
	<?php echo $lang['admin']['customers']['search_term']; ?>
    <input type="text" name="searchStr" class="textbox" value="<?php if(isset($_GET['searchStr'])) echo $_GET['searchStr']; ?>" />    
    <input type="submit" name="Submit" class="submit" value="Filter" />
    <input name="Button" type="button" onclick="MM_goToURL('parent','index.php');return document.MM_returnValue" value="<?php echo $lang['admin']['customers']['reset']; ?>" class="submit" />
	</p>
</form>


<p class="copyText"><?php echo $pagination; ?></p>
<table width="100%" border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr align="center">
    <td align="left" class="tdTitle"><?php echo $lang['admin']['customers']['name']; ?></td>
    <td align="left" class="tdTitle"><?php echo $lang['admin']['customers']['email']; ?></td>
    <td align="left" class="tdTitle"><?php echo $lang['admin']['customers']['invoice_add']; ?></td>
    <td align="left" class="tdTitle"><?php echo $lang['admin']['customers']['phone']; ?></td>
    <td align="left" class="tdTitle"><?php echo $lang['admin']['customers']['reg_ip']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['customers']['no_orders']; ?></td>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['customers']['action']; ?></td>
  </tr>
<?php 
if($results == TRUE){ 
	
	for ($i=0; $i<count($results); $i++){ 
	
	$cellColor = cellColor($i);
?>
  <tr>
    <td class="<?php echo $cellColor; ?>"><span class="tdText"><?php echo $results[$i]['title']; ?> <?php echo $results[$i]['firstName']; ?> <?php echo $results[$i]['lastName']; ?></span></td>
    <td class="<?php echo $cellColor; ?>"><a href="mailto:<?php echo $results[$i]['email']; ?>" class="txtLink"><?php echo $results[$i]['email']; ?></a></td>
    <td class="<?php echo $cellColor; ?>">
	<span class="tdText"><?php 
	if(!empty($results[$i]['add_1'])) echo $results[$i]['add_1'].", "; 
	if(!empty($results[$i]['add_2'])) echo $results[$i]['add_2'].", "; 
	if(!empty($results[$i]['town'])) echo $results[$i]['town'].", ";
	if(!empty($results[$i]['county'])) echo $results[$i]['county'].", ";
	if(!empty($results[$i]['postcode'])) echo $results[$i]['postcode'].", "; 	
	if(!empty($results[$i]['country'])) echo countryName($results[$i]['country']);
	?>
	</span></td>
    <td class="<?php echo $cellColor; ?>"><span class="tdText"><?php echo $results[$i]['phone']; ?></span></td>
    <td nowrap='nowrap' class="<?php echo $cellColor; ?>"><span class="tdText">
		<?php echo formatTime($results[$i]['regTime']); ?><br />
		<a href="javascript:;" class="txtLink" onclick="openPopUp('../misc/lookupip.php?ip=<?php echo $results[$i]['ipAddress']; ?>','misc',300,120)"><?php echo $results[$i]['ipAddress']; ?></a></span>
	</td>
    <td align="center" class="<?php echo $cellColor; ?>">
	<?php if($results[$i]['noOrders']>0) { ?>
	<a href="../orders/index.php?customer_id=<?php echo $results[$i]['customer_id']; ?>" class="txtLink"><?php echo $results[$i]['noOrders']; ?></a>
	<?php } else { ?>
	<span class="tdText"><?php echo $results[$i]['noOrders']; ?></span>
	<?php } ?>
	</td>
    <td class="<?php echo $cellColor; ?>"><a <?php if(permission("customers","edit")==TRUE){?>href="?edit=<?php echo $results[$i]['customer_id']; ?>" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['edit']; ?></a></td>
    <td align="center" width="10%" class="<?php echo $cellColor; ?>"><a <?php if(permission("customers","delete")==TRUE){?>href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $results[$i]['customer_id']; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete']; ?></a></td>
  </tr>
<?php 
  		} // end loop  
	} else { ?>
   <tr>
    <td colspan="6" class="tdText"><?php echo $lang['admin']['customers']['no_cust_exist']; ?></td>
  </tr>
<?php
  } 
?>
</table>
<p class="copyText"><?php echo $pagination; ?></p>
<?php } elseif($_GET["mode"]=="new" OR $_GET["edit"]>0){ ?>
<form name="editCustomer" method="post" action="<?php echo $GLOBALS['rootRel'];?>admin/customers/index.php">
<table  border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['customers']['edit_below']; ?></td>
    </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['title']; ?></td>
    <td width="175">
      <input name="title" type="text" id="title" value="<?php echo $results[0]['title']; ?>" class="textbox" />
    </td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['first_name']; ?></td>
    <td width="175"><input name="firstName" type="text" id="firstName" value="<?php echo $results[0]['firstName']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['last_name']; ?></td>
    <td width="175"><input name="lastName" type="text" id="lastName" value="<?php echo $results[0]['lastName']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['email2']; ?></td>
    <td width="175"><input name="email" type="text" id="email" value="<?php echo $results[0]['email']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['address']; ?></td>
    <td width="175"><input name="add_1" type="text" id="add_1" value="<?php echo $results[0]['add_1']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175">&nbsp;</td>
    <td width="175"><input name="add_2" type="text" id="add_2" value="<?php echo $results[0]['add_2']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['town']; ?></td>
    <td width="175"><input name="town" type="text" id="town" value="<?php echo $results[0]['town']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['county']; ?></td>
    <td width="175"><input name="county" type="text" id="county" value="<?php echo $results[0]['county']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['postcode']; ?></td>
    <td width="175"><input name="postcode" type="text" id="postcode" value="<?php echo $results[0]['postcode']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['country']; ?></td>
    <td width="175">
	<?php 
	  $countries = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_countries"); 
	  ?>
	
	<select name="country">
	<?php
	for($i=0; $i<count($countries); $i++){
	?>
	<option value="<?php echo $countries[$i]['id']; ?>" <?php if($countries[$i]['id'] == $results[0]['country']) echo "selected='selected'"; ?>><?php echo $countries[$i]['printable_name']; ?></option>
	<?php } ?>
	</select>
	</td>
  </tr>
  <tr>
    <td width="175" class="tdText"><?php echo $lang['admin']['customers']['phone2']; ?></td>
    <td width="175"><input name="phone" type="text" id="phone" value="<?php echo $results[0]['phone']; ?>" class="textbox" /></td>
  </tr>
  <tr>
    <td width="175">&nbsp;</td>
    <td width="175">
	<input type="hidden" name="customer_id" value="<?php echo $results[0]['customer_id']; ?>" />
	<input type="submit" name="Submit" class="submit" value="<?php echo $lang['admin']['customers']['edit_customer']; ?>" />
	</td>
  </tr>
</table>
</form>
<?php } ?>

<?php include("../includes/footer.inc.php"); ?>