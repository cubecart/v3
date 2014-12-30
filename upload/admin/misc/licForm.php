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
|	licForm.php
|   ========================================
|	Used For Licensing CubeCart
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

if(!empty($_SERVER['HTTP_HOST']) && !empty($_SERVER['PHP_SELF'])) {

	if($config['ssl']==1){
	
		$currentUrl = "https://";
	
	} else {
	
		$currentUrl = "http://";
	
	}
	
	$currentUrl .= $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
	
} else {
	
	$currentUrl = $GLOBALS['storeURL']."/admin/misc/licForm.php";
	
}

$header = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$charsetIso."\" />
<title>".$lang['admin']['misc']['license_form']."</title>
<link href=\"../styles/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body style=\"margin: 0px; padding: 0px; background: #EAEAEA;\">";
$footer = "</body>\r\n</html>";
 
if(isset($_GET['r']) && $_GET['r']=="T" && isset($_GET['l']) && !empty($_GET['l'])){

	$licVars['lkv'] = 1;
	$licVars['lk'] = base64_decode($_GET['l']);
	
	$result = writeDbConf($licVars,"config", $config, "config", $output = FALSE);
	
	if ($result == TRUE) {
	
		header("Location: https://www.cubecart.com/external/licVer.php?step=2&licKey=".$_GET['l']);
		exit;
	
	} else {

		echo $header;
?>
<div class="warnText"><?php echo $lang['admin']['misc']['write_error']; ?></div><p><a href="licForm.php" class="txtLink" target="_self"><?php echo $lang['admin']['misc']['try_again'];  ?></a></p>

<?php
echo $footer;

	}	
	
} elseif(isset($_GET['r']) && $_GET['r']=="F"){

	echo $header;

?>
<table width="100%" border="0" cellpadding="4" cellspacing="0" class="mainTable">
  <tr>
    <td class="tdTitle"><?php echo $lang['admin']['misc']['purchase_cubecart']; ?></td>
  </tr>
  <tr>
    <td><p class="copyText"><?php echo $lang['admin']['misc']['invalid_key']; ?></p>
    <p><a href="https://www.cubecart.com/site/purchase/" class="txtLink" target="_blank"><?php echo $lang['admin']['misc']['purchase_license_key']; ?></a> | <a href="licForm.php" class="txtLink" target="_self"><?php echo $lang['admin']['misc']['try_again']; ?></a></p></td>
  </tr>
</table>
<?php
	
	echo $footer;

} else {

	echo $header;

?>
<form name="licForm" method="post" action="https://www.cubecart.com/external/licVer.php?step=1" style="padding: 0px; margin: 0px;"><table width="100%" border="0" cellpadding="4" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['misc']['purchase_cubecart']; ?></td>
  </tr>
  <tr>
    <td colspan="2"><p class="copyText"><?php echo $lang['admin']['misc']['run_unlicensed']; ?></p>
    <p><a href="https://www.cubecart.com/site/purchase/" class="txtLink" target="_blank"><?php echo $lang['admin']['misc']['purchase_license_key']; ?></a></p></td>
  </tr>
  <tr>
    <td><span  class="tdText"><?php echo $lang['admin']['misc']['license_key']; ?></span></td>
    <td> 
		<input type="text" name="licKey" size="30" class="textbox" />
		<input type="hidden" name="domain" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
		<input type="hidden" name="reDir" value="<?php echo base64_encode($currentUrl); ?>" />
		<input name="submit" type="submit" id="submit" value="<?php echo $lang['admin']['misc']['submit_key']; ?>" class="submit" /> 
	</td>
  </tr>
</table></form>
<?php 
	echo $footer;
} 
?>