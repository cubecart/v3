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
|	options.php
|   ========================================
|	Product Options	
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
include("../../includes/currencyVars.inc.php");
include("../includes/auth.inc.php");
if(permission("products","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

////////////////////////////////////////
// if master and slave productId is set
/////////
if(isset($_POST['masterProduct']) && $_POST['masterProduct']>0 && $_POST['slaveProduct']>0) {
	
	// duplicate the attributes of the masterProduct into the slave product
	$masterArray = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_options_bot WHERE product=".$db->mySQLSafe($_POST['masterProduct']));
	
	for ($i=0; $i<count($masterArray); $i++){
	
		$data['product'] = $db->mySQLSafe($_POST['slaveProduct']);
		$data['option_id'] = $db->mySQLSafe($masterArray[$i]['option_id']);
		$data['value_id'] = $db->mySQLSafe($masterArray[$i]['value_id']);
		$data['option_price'] = $db->mySQLSafe($masterArray[$i]['option_price']);
		$data['option_symbol'] = $db->mySQLSafe($masterArray[$i]['option_symbol']);
		
		$db->insert($glob['dbprefix']."CubeCart_options_bot", $data);
	
		unset($data);
	
	}
	
}

////////////////////////////////////////
// if delete get variable is set
/////////

$delete = "";
$where = "";

if(isset($_GET['delOption']) && $_GET['delOption']>0){
		
		$where = "option_id  = ".$db->mySQLSafe($_GET["delOption"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_options_bot", $where);

		$where = "father_id  = ".$db->mySQLSafe($_GET["delOption"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_options_mid", $where);
		
		$where = "option_id = ".$db->mySQLSafe($_GET["delOption"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_options_top", $where);	
		
		header("Location: ".urldecode($_GET['redir']));
	
} elseif(isset($_GET['delAttribute']) && isset($_GET['optId']) && $_GET['delAttribute']>0 && $_GET['optId']>0) {

		$where = "value_id =".$db->mySQLSafe($_GET["delAttribute"])." AND option_id = ".$db->mySQLSafe($_GET["optId"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_options_bot", $where);

		$where = "value_id =".$db->mySQLSafe($_GET["delAttribute"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_options_mid", $where);
		
		header("Location: ".urldecode($_GET['redir']));
		
} elseif(isset($_GET['delAssigned']) && $_GET['delAssigned']>0) {

		$where = "assign_id =".$db->mySQLSafe($_GET["delAssigned"]);
		$delete = $db->delete($glob['dbprefix']."CubeCart_options_bot", $where);

		header("Location: ".urldecode($_GET['redir']));
}
////////////////////////////////////////
// if add post variable is set
/////////
if(isset($_POST['add']) && $_POST['add']=="option"){

	$record['option_name'] = $db->mySQLSafe($_POST["option"]);
	
	$insert = $db->insert($glob['dbprefix']."CubeCart_options_top", $record);
	
		if($insert == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['products']['opt_add_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['products']['opt_add_fail']."</p>";
		}

} elseif(isset($_POST['add']) && $_POST['add']=="attribute") {

	$record['value_name'] = $db->mySQLSafe($_POST["attribute"]);
	$record['father_id'] = $db->mySQLSafe($_POST["option"]);
	
	$insert = $db->insert($glob['dbprefix']."CubeCart_options_mid", $record);
	
		if($insert == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['products']['att_add_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['products']['att_add_fail']."</p>";
		}

} elseif(isset($_POST['add']) && $_POST['add']=="assign"){

	$record['product'] = $db->mySQLSafe($_POST["productId"]);
	$record['option_id'] = $db->mySQLSafe($_POST["option"]);
	$record['value_id'] = $db->mySQLSafe($_POST["attribute"]);
	$record['option_price'] = $db->mySQLSafe($_POST["price"]);
	$record['option_symbol'] = $db->mySQLSafe($_POST["sign"]);
	
	$insert = $db->insert($glob['dbprefix']."CubeCart_options_bot", $record);
	
		if($insert == TRUE){
			$msg = "<p class='infoText'>".$lang['admin']['products']['assign_success']."</p>";
		} else {
			$msg = "<p class='warnText'>".$lang['admin']['products']['assign_fail']."</p>";
		}

}
////////////////////////////////////////
// if edit post variable is set
/////////
if(isset($_POST['edit']) && $_POST['edit']=="option") {
	
	$record['option_name'] = $db->mySQLSafe($_POST["option"]);
	$where = "option_id = ".$db->mySQLSafe($_POST["option_id"]);
	
	$update = $db->update($glob['dbprefix']."CubeCart_options_top", $record, $where);
		
	header("Location: ".urldecode($_POST['redir']));
	
} elseif(isset($_POST['edit']) && $_POST['edit']=="attribute") {

	$record['value_name'] = $db->mySQLSafe($_POST["attribute"]);
	$record['father_id'] = $db->mySQLSafe($_POST["option"]);
	
	$where = "value_id = ".$db->mySQLSafe($_POST["value_id"]);
	
	$update = $db->update($glob['dbprefix']."CubeCart_options_mid", $record, $where);
	
	header("Location: ".urldecode($_POST['redir']));

} elseif(isset($_POST['edit']) && $_POST['edit']=="assigned"){
	
	$record['product'] = $db->mySQLSafe($_POST["productId"]);
	$record['option_id'] = $db->mySQLSafe($_POST["option"]);
	$record['value_id'] = $db->mySQLSafe($_POST["attribute"]);
	$record['option_price'] = $db->mySQLSafe($_POST["price"]);
	$record['option_symbol'] = $db->mySQLSafe($_POST["sign"]);
	
	$where = "assign_id = ".$db->mySQLSafe($_POST["assign_id"]);
	
	$update = $db->update($glob['dbprefix']."CubeCart_options_bot", $record, $where);
		
	header("Location: ".urldecode($_POST['redir']));
		
}

////////////////////////////////////////
// get recordsets for all required data
/////////
	$optionsPerPage = "";
	$attributesPerPage = "";
	$existingOptionsPerPage = "";
	
	$optionsPerPage = 10;
	$attributesPerPage = 10;
	$existingOptionsPerPage = 10;
	
	// products
	$query = "SELECT productId,  ".$glob['dbprefix']."CubeCart_inventory.cat_id, name, cat_name FROM ".$glob['dbprefix']."CubeCart_inventory INNER JOIN  ".$glob['dbprefix']."CubeCart_category ON  ".$glob['dbprefix']."CubeCart_inventory.cat_id =  ".$glob['dbprefix']."CubeCart_category.cat_id ORDER BY cat_name ASC";
	$products = $db->select($query);
	
	// options
	if(isset($_GET['editOption']) && $_GET['editOption']>0) {
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_options_top WHERE option_id = ".$db->mySQLSafe($_GET['editOption'])." ORDER BY option_name ASC";
	} else {
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_options_top ORDER BY option_name ASC";
	}
	
	if(isset($_GET['optPage'])){
		$optPage = $_GET['optPage'];
	} else {
		$optPage = 0;
	}
	
	$options = $db->select($query, $optionsPerPage, $optPage);
	$optionsPaginate = "";
	$optionsPaginate = $db->paginate($db->numrows($query), $optionsPerPage, $optPage, "optPage");
	
	// attributes
	if(isset($_GET['editAttribute']) && $_GET['editAttribute']>0){
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_options_mid INNER JOIN  ".$glob['dbprefix']."CubeCart_options_top ON father_id = option_id WHERE value_id = ".$db->mySQLSafe($_GET['editAttribute'])." ORDER BY option_name, value_name ASC";
	} else { 
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_options_mid INNER JOIN  ".$glob['dbprefix']."CubeCart_options_top ON father_id = option_id ORDER BY option_name, value_name ASC";
	}
	
	
	if(isset($_GET['attPage'])){
		$attPage = $_GET['attPage'];
	} else {
		$attPage = 0;
	}
	
	$attributes = $db->select($query, $attributesPerPage, $attPage);
	$fullAttributes = $db->select($query);
	for ($i=0; $i<count($fullAttributes); $i++){
		$idKey = $fullAttributes[$i]['value_id'];
		$optionValues[$idKey] = $fullAttributes[$i]['value_name'];
	}
	$attributesPaginate = "";
	$attributesPaginate = $db->paginate($db->numrows($query), $attributesPerPage, $attPage, "attPage");	
	
	// existing options
	if(isset($_GET['editAssigned']) && $_GET['editAssigned']>0){
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_options_bot INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON product = productId WHERE assign_id = ".$db->mySQLSafe($_GET['editAssigned'])." ORDER BY name, value_id ASC";	
	} else { 
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_options_bot INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON product = productId ORDER BY name, option_id, value_id ASC";
	}
	
	if(isset($_GET['exiPage'])){
		$exiPage = $_GET['exiPage'];
	} else {
		$exiPage = 0;
	}
	
	$existingOptions = $db->select($query, $existingOptionsPerPage, $exiPage);
	$existingOptionsPaginate = "";
	$existingOptionsPaginate = $db->paginate($db->numrows($query), $existingOptionsPerPage, $exiPage, "exiPage");

$currentPage = "";
$currentPage = urlencode(currentPage());
include("../includes/header.inc.php"); 
?>

<p class="pageTitle"><?php echo $lang['admin']['products']['product_options'];?></p>
<?php if(isset($msg)){ echo stripslashes($msg); }?>
<?php if($products == TRUE){ ?>
<table width="100%"  border="0" cellspacing="5" cellpadding="0">
  <?php
  // get master products
	$masterProducts = $db->select("SELECT DISTINCT product, name FROM ".$glob['dbprefix']."CubeCart_options_bot INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON product = productId ORDER BY name ASC");
  
  //get array of product ID's to miss out of slaves
  for ($i=0; $i<count($masterProducts); $i++){
  	$key = $masterProducts[$i]['product'];
	$masterKey[$key] = $masterProducts[$i]['product'];
  }
  
  // get slave products
	$slaveProducts = $db->select("SELECT DISTINCT productId, name FROM ".$glob['dbprefix']."CubeCart_options_bot RIGHT JOIN ".$glob['dbprefix']."CubeCart_inventory ON product = productId ORDER BY name ASC");
   
  if($masterProducts == TRUE && $slaveProducts == TRUE) { 
  ?>
  <tr>
  	<td colspan="2">
<form name="quickAssign" method="post" action="<?php echo urldecode($currentPage); ?>">
	<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td class="tdTitle"><strong><?php echo $lang['admin']['products']['quick_assign'];?></strong></td>
    <td class="copyText"><?php echo $lang['admin']['products']['prod_opts_of'];?></td>
    <td>
		<select name="masterProduct">
		<?php for ($i=0; $i<count($masterProducts); $i++){ ?>
		<option value="<?php echo $masterProducts[$i]['product']; ?>"><?php echo $masterProducts[$i]['name']; ?></option>
		<?php } ?>
		</select>
	</td>
    <td class="copyText"><?php echo $lang['admin']['products']['to'];?></td>
    <td>
		<select name="slaveProduct">
		<?php
		$noOpts = 0; 
		for ($i=0; $i<count($slaveProducts); $i++){ 
			$key = $slaveProducts[$i]['productId'];
			if(!isset($masterKey[$key])){
			
			$noOpts++;
		?>
		<option value="<?php echo $slaveProducts[$i]['productId']; ?>"><?php echo $slaveProducts[$i]['name']; ?></option>
		<?php 
			}
		} 
		if ($noOpts == 0){
		?>
		<option value="0"><?php echo $lang['admin']['na']; ?></option>
		<?php } ?>
		</select>
	</td>
    <td><input name="submit" type="submit" value="<?php echo $lang['admin']['products']['go'];?>" class="submit" /></td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <?php } ?>
  <tr>
    <td width="50%" valign="top" class="tdText"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25"><strong><?php echo $lang['admin']['products']['opt_step1'];?></strong></td>
        <td height="25" align="right"><?php echo $optionsPaginate; ?></td>
      </tr>
    </table>      
      <form name="form1" method="post" action="<?php echo urldecode($currentPage); ?>">
	 <table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
      <tr align="center">
        <td class="tdTitle"><?php echo $lang['admin']['products']['opt_id'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['opt_name'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['action'];?></td>
      </tr>
      <?php if($options == TRUE) { ?>
	  <?php for ($i=0; $i<count($options); $i++){ ?>
	  <?php
	   $cellColor = ""; 
	   $cellColor = cellColor($i); 
	  
	  $idKey = "";
	  $idKey = $options[$i]['option_id'];
	  $optionNames[$idKey] = $options[$i]['option_name'];
	  ?>
	  <?php if(!isset($_GET['editOption'])) { ?>
	  <tr align="center">
        <td class="<?php echo $cellColor; ?>"><?php echo $options[$i]['option_id']; ?></td>
        <td class="<?php echo $cellColor; ?>"><?php echo $options[$i]['option_name']; ?></td>
        <td class="<?php echo $cellColor; ?>"><a <?php if(permission("products","edit")==TRUE){ ?>href="?editOption=<?php echo $options[$i]['option_id'];?>&amp;redir=<?php echo $currentPage; ?>"<?php } else { echo $link401; } ?> class="txtLink"><?php echo $lang['admin']['edit'];?></a> | <a <?php if(permission("products","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['products']['warn_remove_opt'];?>','?delOption=<?php echo $options[$i]['option_id']; ?>&amp;redir=<?php echo $currentPage; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a> </td>
      </tr>
	  <?php } // end if get variable not set ?>
	  <?php } ?>
	  <?php } else { ?>
	  <tr align="left">
        <td colspan="3"><?php echo $lang['admin']['products']['no_options_made'];?></td>
      </tr>
	  <?php } ?>
	  <tr align="center">
        <td>&nbsp;</td>
        <td>
          <input name="option" type="text" id="option" <?php if(isset($_GET['editOption'])){ ?>value="<?php echo $options[0]['option_name']; ?>"<?php } ?> class="textbox" />
        </td>
        <td><input type="submit" name="Submit" value="<?php if(isset($_GET['editOption'])){ echo $lang['admin']['edit']; } else {  echo $lang['admin']['add']; } echo " ".$lang['admin']['products']['option'];?>" class="submit" /></td>
      </tr>
    </table>
	
	<?php if(isset($_GET['editOption'])){ ?>
	<input type="hidden" name="option_id" value="<?php echo $_GET['editOption']; ?>" />
	<input type="hidden" name="edit" value="option" />
	<input type="hidden" name="redir" value="<?php echo $_GET['redir']; ?>" />
	<?php } else { ?>
	<input type="hidden" name="add" value="option" />
	<?php } ?>
	</form></td>
    <td width="50%" valign="top" class="tdText">
	<?php if($options == TRUE) { ?>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25"><strong><?php echo $lang['admin']['products']['opt_step2'];?></strong></td>
        <td height="25" align="right"><?php echo $attributesPaginate; ?></td>
      </tr>
    </table>       
	<form name="form2" method="post" action="<?php echo urldecode($currentPage); ?>">
	<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
      <tr align="center">
        <td class="tdTitle"><?php echo $lang['admin']['products']['opt_id'];?></td> 
		<td class="tdTitle"><?php echo $lang['admin']['products']['opt_name'];?></td> 
		<td class="tdTitle"><?php echo $lang['admin']['products']['option_attribute'];?></td> 
		<td class="tdTitle"><?php echo $lang['admin']['products']['action'];?></td>
      </tr>
      <?php if($attributes == TRUE) { ?>
	  <?php for ($i=0; $i<count($attributes); $i++){ ?>
	  <?php
	   $cellColor = ""; 
	   $cellColor = cellColor($i); 
	  
	  	$idKey = $attributes[$i]['value_id'];
	  	//$optionValues[$idKey] = $attributes[$i]['value_name'];
	  ?>
	  <?php if(!isset($_GET['editAttribute'])){ ?>
	  <tr align="center">
        <td class="<?php echo $cellColor; ?>"><?php echo $attributes[$i]['value_id']; ?></td>
        <td class="<?php echo $cellColor; ?>"><?php echo $attributes[$i]['option_name']; ?></td>
		<td class="<?php echo $cellColor; ?>"><?php echo $attributes[$i]['value_name']; ?></td>
        <td class="<?php echo $cellColor; ?>"><a <?php if(permission("products","edit")==TRUE){ ?>href="?editAttribute=<?php echo $attributes[$i]['value_id']; ?>&amp;redir=<?php echo $currentPage; ?>"<?php } else { echo $link401; } ?> class="txtLink"><?php echo $lang['admin']['edit'];?></a> | <a <?php if(permission("products","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['products']['warn_remove_att'];?>','?delAttribute=<?php echo $attributes[$i]['value_id']; ?>&amp;optId=<?php echo $attributes[$i]['father_id']; ?>&amp;redir=<?php echo $currentPage; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a> </td>
      </tr>
	  <?php } // end if not set edit attribute ?>
	  <?php } ?>
	  	  <?php } else { ?>
	  <tr align="left">
        <td colspan="4"><?php echo $lang['admin']['products']['no_attributes_made'];?></td>
      </tr>
	  <?php } ?>
      <tr align="center">
        <td>&nbsp;</td>
        <td>
		  <select name="option" id="option" class="textbox">
		  <?php for ($i=0; $i<count($options); $i++){ ?>
		  <option value="<?php echo $options[$i]['option_id'];?>" <?php if($options[$i]['option_id']==$attributes[0]['father_id']){ echo "selected='selected'";}?>><?php echo $options[$i]['option_name'];?></option>
		  <?php } ?>
          </select>
        </td>
        <td><input name="attribute" type="text" id="attribute" class="textbox" value="<?php if(isset($attributes[0]['value_name']) && isset($_GET['editAttribute'])) echo $attributes[0]['value_name'];?>" /></td>
        <td><input type="submit" name="Submit" value="<?php if(isset($_GET['editAttribute'])){ echo $lang['admin']['edit']; } else {  echo $lang['admin']['add']; } echo " ".$lang['admin']['products']['attribute'];?>" class="submit" /></td>
      </tr>
    </table>
	<?php if(isset($_GET['editAttribute'])){ ?>
	<input type="hidden" name="edit" value="attribute" />
	<input type="hidden" name="value_id" value="<?php echo $attributes[0]['value_id']; ?>" />
	<input type="hidden" name="redir" value="<?php echo $_GET['redir']; ?>" />
	<?php } else { ?>
	<input type="hidden" name="add" value="attribute" />
	<?php } ?>
	</form>
	<?php } else { ?>&nbsp;<?php } ?>
	</td>
  </tr>
  <tr valign="top">
    <td colspan="2" class="tdText">
	<?php if($attributes == TRUE) { ?>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25"><strong><?php echo $lang['admin']['products']['opt_step3'];?></strong> </td>
          <td height="25" align="right"><?php echo $existingOptionsPaginate; ?></td>
        </tr>
      </table> 
	<form name="form3" method="post" action="<?php echo urldecode($currentPage); ?>">
	<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
      <tr align="center">
        <td class="tdTitle"><?php echo $lang['admin']['products']['opt_id'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['product'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['opt_name'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['option_attribute'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['option_price'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['add_subtract'];?></td>
        <td class="tdTitle"><?php echo $lang['admin']['products']['action'];?></td>
      </tr>
	   <?php 
	   if($existingOptions == TRUE) {
	   for ($i=0; $i<count($existingOptions); $i++){ ?>
	   <?php
	   $cellColor = ""; 
	   $cellColor = cellColor($i); 
	   ?>
      <?php if(!isset($_GET['editAssigned'])){ ?>
	  <tr align="center">
        <td class="<?php echo $cellColor; ?>"><?php echo $existingOptions[$i]['assign_id']; ?></td>
        <td class="<?php echo $cellColor; ?>"><?php echo $existingOptions[$i]['name']; ?></td>
        <td class="<?php echo $cellColor; ?>">
			<?php 
			$idKey = $existingOptions[$i]['option_id']; 
			echo $optionNames[$idKey]; 
			?>
		</td>
        <td class="<?php echo $cellColor; ?>">
			<?php 
			$idKey = $existingOptions[$i]['value_id']; 
			echo  $optionValues[$idKey];
			?>
		</td>
        <td class="<?php echo $cellColor; ?>">
		<?php
		if($existingOptions[$i]['option_price']>0){
			echo priceFormat($existingOptions[$i]['option_price']); 
		} else {
			echo $lang['admin']['na'];
		}
		?></td>
        <td class="<?php echo $cellColor; ?>">
		<?php 
		if($existingOptions[$i]['option_symbol']=="~"){
			echo $lang['admin']['na'];
		} else {
			echo $existingOptions[$i]['option_symbol'];
		} 
		?>
		</td>
        <td class="<?php echo $cellColor; ?>"><a <?php if(permission("products","edit")==TRUE){ ?>href="?editAssigned=<?php echo $existingOptions[$i]['assign_id']; ?>&amp;redir=<?php echo $currentPage; ?>"<?php } else { echo $link401; } ?> class="txtLink"><?php echo $lang['admin']['edit'];?></a> | <a <?php if(permission("products","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['products']['remove_opt_prod'];?>','?delAssigned=<?php echo $existingOptions[$i]['assign_id']; ?>&amp;redir=<?php echo $currentPage; ?>');" class="txtLink"<?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete'];?></a></td>
      </tr>
	  <?php } //end if not set edit assigned ?>
<?php } // end loop ?>
	  
	  
	  
	  <?php } else { ?>
	  <tr>
	  	<td colspan="7"><?php echo $lang['admin']['products']['no_assigned_opts'];?></td>
	</tr>
	  <?php } ?>
      <tr align="center">
        <td>&nbsp;</td>
        <td>
		<select name="productId" id="productId" class="textbox">
        <?php for ($i=0; $i<count($products); $i++){ ?>
		
		<?php if($products[$i]['cat_id']!==$products[$i-1]['cat_id']){ ?>
		<optgroup label="<?php echo $products[$i]['cat_name']; ?>"></optgroup>
		<?php } ?>
		
		<option value="<?php echo $products[$i]['productId']; ?>" <?php if($products[$i]['productId']==$existingOptions[0]['product']) echo "selected='selected'"; ?>><?php echo $products[$i]['name']; ?></option>
		<?php } ?>
		
		</select>
        </td>
        <td>
		<select name="option" id="option" class="textbox">
        <?php for ($i=0; $i<count($options); $i++){ ?>
		  <option value="<?php echo $options[$i]['option_id'];?>" <?php if($options[$i]['option_id']==$existingOptions[0]['option_id']) echo "selected='selected'"; ?>><?php echo $options[$i]['option_name'];?></option>
		  <?php } ?>   
		</select>
		</td>
        <td>
			<select name="attribute" id="attribute" class="textbox">
        	<?php for ($i=0; $i<count($fullAttributes); $i++){ ?>
		  <option value="<?php echo $fullAttributes[$i]['value_id'];?>" <?php if($fullAttributes[$i]['value_id']==$existingOptions[0]['value_id']) echo "selected='selected'"; ?>><?php echo $fullAttributes[$i]['value_name'];?></option>
		  <?php } ?>    
			</select>
		</td>
        <td><input name="price" type="text" class="textbox" id="price" size="7" <?php if(isset($_GET['editAssigned'])){ ?>value="<?php echo $existingOptions[0]['option_price'];?>"<?php } ?> /></td>
        <td><select name="sign" id="sign" class="textbox">
          <option value="+" <?php if($existingOptions[0]['option_symbol']=="+") echo "selected='selected'"; ?>>+</option>
          <option value="~" <?php if($existingOptions[0]['option_symbol']=="~") echo "selected='selected'"; ?>><?php echo $lang['admin']['na']; ?></option>
		  <option value="-" <?php if($existingOptions[0]['option_symbol']=="-") echo "selected='selected'"; ?>>-</option>
                </select></td>
        <td><input type="submit" name="Submit" value="<?php if(isset($_GET['editAssigned'])){ ?><?php echo $lang['admin']['edit'];?><?php } else { ?><?php echo $lang['admin']['add'];?><?php }  ?> <?php echo $lang['admin']['products']['product_option'];?>" class="submit" /></td>
      </tr>
    </table>
	<?php if(isset($_GET['editAssigned'])){ ?>
	<input type="hidden" name="edit" value="assigned" />
	<input type="hidden" name="assign_id" value="<?php echo $_GET['editAssigned']; ?>" />
	<input type="hidden" name="redir" value="<?php echo $_GET['redir']; ?>" />
	<?php } else { ?>
	<input type="hidden" name="add" value="assign" />
	<?php } ?>
	</form>
	<?php } else { ?>&nbsp;<?php } ?>
	</td>
  </tr>
</table>
<?php } else { ?>
<p class="copyText"><?php echo $lang['admin']['products']['prods_made_1st'];?></p>
<?php } ?>

<?php include("../includes/footer.inc.php"); ?>