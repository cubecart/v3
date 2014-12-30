<?php

/************************************************
* HSBC API Module by Adam Harris @ XOMY Limited *
* http://www.xomy.com | adam@xomy.com           *
*                                               *
* Before making any modifications, please       *
* contact me at the above email so that we can  *
* discuss the implications and advantages for   *
* the module.                                   *
*                                               *
* This module is released for the benefit of    *
* the community and should not be sold.         *
*                                               *
* This module is not released under GPL and     *
* cannot be redistributed without permission    *
* from myself.                                  *
************************************************/

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

<p><a href="https://secure-epayments.hsbc.com/" target="_blank"><img src="logo.gif" alt="" border="0" /></a></p>
<?php 
if(isset($msg)){ 
	echo $msg; 
} 
?>

<form action="<?php echo $GLOBALS['rootRel'];?>admin/modules/<?php echo $_GET['module']; ?>/<?php echo $_GET['folder']; ?>/index.php?module=<?php echo $_GET['module']; ?>&amp;folder=<?php echo $_GET['folder']; ?>" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="3" class="tdTitle">Configuration Settings </td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Status:</strong></td>
    <td class="tdText">
	<select name="module[status]">
		<option value="1" <?php if($module['status']==1) echo "selected='selected'"; ?>>Enabled</option>
		<option value="0" <?php if($module['status']==0) echo "selected='selected'"; ?>>Disabled</option>
    </select>
	</td>
	<td></td>
  </tr>
    <tr>
  <td align="left" class="tdText"><strong>Default:</strong></td>
      <td class="tdText">
	<select name="module[default]">
		<option value="1" <?php if($module['default'] == 1) echo "selected='selected'"; ?>>Yes</option>
		<option value="0" <?php if($module['default'] == 0) echo "selected='selected'"; ?>>No</option>
	</select>
	</td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Test Mode:</strong></td>
      <td class="tdText">
	<select name="module[test]">
		<option value="1" <?php if($module['test'] == 1) echo "selected='selected'"; ?>>On (Approved)</option>
		<option value="2" <?php if($module['test'] == 2) echo "selected='selected'"; ?>>On (Declined)</option>
		<option value="0" <?php if($module['test'] == 0) echo "selected='selected'"; ?>>Off</option>
	</select>
	</td>
  </tr>
  <tr><td colspan="3"><hr /></td></tr>
  <tr>
  <td align="left" class="tdText"><strong>Description:</strong></td>
    <td class="tdText"><input type="text" name="module[desc]" value="<?php echo $module['desc']; ?>" class="textbox" size="30" /></td>
    <td class="tdText">This is the description for the payment option offered to the client</td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>Client ID:</strong></td>
    <td class="tdText"><input type="text" name="module[acNo]" value="<?php echo $module['acNo']; ?>" class="textbox" size="30" /></td>
    <td class="tdText">This is your HSBC Client ID found in the header of Secure ePayments after logging in</td>
  </tr>
  <tr>
  <td align="left" class="tdText"><strong>User ID:</strong></td>
    <td class="tdText"><input type="text" name="module[userID]" value="<?php echo $module['userID']; ?>" class="textbox" size="30" /></td>
    <td class="tdText">This is your HSBC User ID as used to login to Secure ePayments</td>
  </tr>
    <tr>
  <td align="left" class="tdText"><strong>Password:</strong></td>
    <td class="tdText"><input type="text" name="module[passPhrase]" value="<?php echo $module['passPhrase']; ?>" class="textbox" size="30" /></td>
    <td class="tdText">This is your HSBC Password as used to login to Secure ePayments</td>
  </tr>
    <tr>
      <td align="left" class="tdText"><strong>Gateway Path: </strong></td>
      <td class="tdText"><input type="text" name="module[url]" value="<?php echo $module['url']; ?>" class="textbox" size="30" /></td>
      <td class="tdText">This should be set to: www.secure-epayments.apixml.hsbc.com</td>
    </tr>
    <tr><td colspan="3"><hr /></td></tr>
    <tr>
      <td align="left" class="tdText"><strong>PAS Path: </strong></td>
      <td class="tdText"><input type="text" name="module[pas]" value="<?php echo $module['pas']; ?>" class="textbox" size="30" /></td>
      <td class="tdText">This should be set to: www.ccpa.hsbc.com/ccpa</td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>AVS Check: </strong></td>
      <td class="tdText">
	<select name="module[avs]">
		<option value="1" <?php if($module['avs'] == 1) echo "selected='selected'"; ?>>On</option>
		<option value="0" <?php if($module['avs'] == 0) echo "selected='selected'"; ?>>Off</option>
	</select>
      </td>
      <td class="tdText">It is advised to only ship goods to the cardholder's address. Enabling this function increases security by checking the card against the supplied address and postcode.</td>
    </tr>
    <tr>
      <td align="left" class="tdText"><strong>AVS Message: </strong></td>
      <td class="tdText"><textarea name="module[avstext]"><?php echo $module['avstext']; ?></textarea></td>
      <td class="tdText">Example:<br /><br />Please Note: We can only ship your order to the Card Holder's Registered Address. Should you wish to ship to another location (e.g. your office), you will need to call us on 0845-123-4567 to complete your order.</td>
    </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
</form>
<?php include("../../../includes/footer.inc.php"); ?>
