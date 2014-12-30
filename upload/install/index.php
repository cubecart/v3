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
|	Installation Script	
+--------------------------------------------------------------------------
*/
session_start();

include("../includes/ini.inc.php");

// stop empty basket issue when add to basket
if(isset($_SESSION['ccUser'])){
	unset($_SESSION['ccUser']);
}

if(!isset($_GET['step'])){
	header("Location: index.php?step=1&l=en");
	exit;
}

$langFolder = preg_replace('/[^a-zA-Z0-9_\-\+]/', '',$_GET['l']);

include("../language/".$langFolder."/lang.inc.php");

function win() {

	if(PHP_OS=="WINNT" || PHP_OS=="WIN32"){
	
		return TRUE;
	
	} else {
	
		return FALSE;
	
	}

}

function randomPass() {
		$chars = array("a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J", "k","K","l","L","m","M","n","N","o","O","p","P","q","Q","r","R","s","S","t","T", "u","U","v","V","w","W","x","X","y","Y","z","Z","1","2","3","4","5","6","7","8","9","0");
	
		$max_chars = count($chars) - 1;
		srand((double)microtime()*1000000);
	
		for($i = 0; $i < 8; $i++)	{
			$newPass = ($i == 0) ? $chars[rand(0, $max_chars)] : $newPass . $chars[rand(0, $max_chars)];
		}
		
		return $newPass;
}
function randomUser() {
		$alphabet = array("ALPHA","NOVEMBER","BRAVO","OSCAR","CHARLIE","PAPA","DELTA","QUEBEC","ECHO","ROMEO","FOXTROT","SIERRA","GOLF","TANGO","HOTEL","UNIFORM","INDIA","VICTOR","JULIET","WHISKY","KILO","X-RAY","LIMA","YANKEE","MIKE","ZULU");
	
		$max_chars = count($alphabet) - 1;
		srand((double)microtime()*1000);
	
		for($i = 0; $i < 1; $i++)	{
			$user = ($i == 0) ? $alphabet[rand(0, $max_chars)] : $user . $chars[rand(0, $max_chars)];
		}
		
		$randNo = rand(0,1);
		
		if($randNo == 1){
			$user = strtolower($user);
		} 
		
		return $user.rand(10,99);
}
$stageName = "";
if($_GET['step']==2){
	$stageName = $lang['install']['stage2Name'];
	// attempt auto chmod
	@chmod("../images/uploads/",0777);
	@chmod("../images/uploads/thumbs/",0777);
	@chmod("../includes/global.inc.php",0777);

	
	if(!isset($_GET['skip'])){
	
		if(!isset($_POST['agree'])){
	
			$stepBack = 1;
			$error = $lang['install']['stage1Error'];
	
		} else {
	
			$noRepeat = TRUE;	
	
		}
	
	}

} elseif($_GET['step']==3){

	$stageName = $lang['install']['stage3Name'];
	
	$onclick = "onclick=\"YY_checkform('install','dbhost','#q','0','".$lang['install']['enterDBHostname']."','dbname','#q','0','".$lang['install']['enterDBName']."','dbuser','#q','0','".$lang['install']['enterDBUsername']."','username','#q','0','".$lang['install']['enteradminUsername']."','pass','#q','0','".$lang['install']['enteradminPassword']."','pass_conf','#pass','6','".$lang['install']['passwordMatch']."','email','S','2','".$lang['install']['enterValidEmail']."','fullName','#q','0','".$lang['install']['enterFullname']."');return document.MM_returnValue\"";
	
} elseif($_GET['step']==4){


if(!isset($_GET['skip'])){

	include("../admin/includes/functions.inc.php");

	if($_POST['installCountry']=="US"){
	
	$config['defaultCurrency'] = 'USD';
	$config['siteCountry'] = '226';
	$config['siteCounty'] = '57';
	$config['storeAddress'] = 'My Store Ltd,
Street,
City,
State.
USA 12345';
	$config['taxCountry'] = '226';
	$config['taxCounty'] = '57';
	
	} elseif($_POST['installCountry']=="UK"){
	
	$config['defaultCurrency'] = 'GBP';
	$config['siteCountry'] = '225';
	$config['siteCounty'] = '278';
	$config['storeAddress'] = 'My Store Ltd,
Street,
Town,
County.
UK SG42 9XX';
	$config['taxCountry'] = '225';
	$config['taxCounty'] = '';
	
	} elseif($_POST['installCountry']=="EU"){
	
	$config['defaultCurrency'] = 'EUR';
	$config['siteCountry'] = '160';
	$config['siteCounty'] = '';
	$config['storeAddress'] = 'My Store Ltd,
Street,
Town,
County.
NO 1234';
	$config['taxCountry'] = '160';
	$config['taxCounty'] = '';
	
	}
	
	if(win()==TRUE) {
	
	$config['filePerms'] = '0';
	
	} else {
	
	$config['filePerms'] = '1';
	
	}
	
	$config['dateFormat'] = 'l jS F Y';
	$config['defaultLang'] = 'en';
	$config['dirSymbol'] = '/';
	$config['displaycatRows'] = '2';
	$config['dnLoadExpire'] = '172800';
	$config['dnLoadTimes'] = '3';
	$config['gdmaxImgSize'] = '390';
	$config['gdquality'] = '80';
	$config['gdthumbSize'] = '75';
	$config['gdversion'] = $_POST['gdversion'];
	$config['mailMethod'] = 'mail';
	$config['masterEmail'] = $_POST['email'];
	$config['masterName'] = 'My Store';
	$config['maxImageUploadSize'] = '524288';
	$config['metaDescription'] = 'This is the meta description.';
	$config['metaKeyWords'] = 'keyword1, keyword2, keyword3.';
	$config['noPopularBoxItems'] = '10';
	$config['noSaleBoxItems'] = '10';
	$config['outofstockPurchase'] = '0';
	$config['priceIncTax'] = '0';
	$config['productPages'] = '10';
	$config['productPrecis'] = '120';
	$config['rootDir_SSL'] = '';
	$config['rootRel_SSL'] = '';
	$config['saleMode'] = '1';
	$config['salePercentOff'] = '20';
	$config['shipAddressLock'] = '1';
	$config['siteTitle'] = 'My Store Ltd';
	$config['skinDir'] = $_POST['skin'];
	$config['sqlSessionExpiry'] = '172800';
	$config['ssl'] = '0';
	$config['stockLevel'] = '1';
	$config['storeName'] = 'My Store Ltd';
	$config['storeURL_SSL'] = '';
	$config['timeFormat'] = '%b %d %Y, %H:%M %p';
	$config['timeOffset'] = '0';
	$config['weightUnit'] = 'Lbs';
	$config['installTime'] = time();
	$config['offLine'] = '0';
	$config['offLineContent'] = $lang['install']['storeOfflineText'];
	$config['offLineAllowAdmin'] = '1';
	$config['showLatestProds'] = '1';
	$config['noLatestProds'] = '3';
	$config['floodControl'] = '1';
	
	if(function_exists("gd_info")) {
		
		$gdArray = @gd_info();
		
		if($gdArray['GIF Create Support']==1){
			
			$config['gdGifSupport'] = '1';
		
		}
		
	} else {
	
		$config['gdGifSupport'] = '0';
	
	}
	
	$glob['dbdatabase'] = $_POST['dbname'];
	$glob['dbhost'] = $_POST['dbhost'];
	$glob['dbpassword'] = $_POST['dbpass'];
	$glob['dbprefix'] = $_POST['dbprefix'];
	$glob['dbusername'] = $_POST['dbuser'];
	$glob['installed'] = 1;
	$glob['rootDir'] = $_POST['rootDir'];
	$glob['rootRel'] = $_POST['rootRel'];
	$glob['storeURL'] = $_POST['storeURL'];

	
	if(writeConf($glob,$_POST['rootDir']."/includes/global.inc.php", $glob, "glob", FALSE) == TRUE){

		$errorWriting = FALSE;

	} else {

		$errorWriting = TRUE;
		$stepBack = 3;

	}

	if($errorWriting == FALSE){
	
		include("../includes/global.inc.php");
		require_once("../classes/db.inc.php");
	
		$db = new db();
		include("db/schema.inc.php");
		
		$noRepeat = TRUE;

	} else {
		$error = $lang['install']['configWriteError'];
		$stepBack = 3;
	}

}
	$stageName = $lang['install']['stage4Name'];

} elseif($_GET['step']==5){

	$stageName = $lang['install']['stage5Name'];
	include("../includes/global.inc.php");

} else {

	$stageName = $lang['install']['stage1Name'];
	$onclick = "onclick=\"YY_checkform('install','agree','#q','1','".$lang['install']['agreeToLicense']."');return document.MM_returnValue\"";

}

$noInstallSteps = 5;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo sprintf($lang['install']['installation'],$ini['ver']); ?></title>
<script language="javascript" src="js/library.js" type="text/javascript"></script>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main"><div style="padding: 20px 0px 10px 20px;"><img src="../images/logos/ccLogo.gif" alt="" width="280" height="55" title="" /></div>
<div class="mainPad">
<div class="subTitle"><?php echo sprintf($lang['install']['installation'],$ini['ver']); ?></div>
<?php if(isset($error)){?><div class="errorBar"><?php echo $error; ?></div><?php } ?>
<div> 
<table border="0" cellspacing="2" width="100%" cellpadding="0">
  <tr>
  	<td><?php echo sprintf($lang['install']['stepStatus'],$_GET['step'],$noInstallSteps);?>
	</td>
    <td height="13" width="13" <?php if($_GET['step']>0) echo "class='progressOn'"; else echo "class='progressOff'"; ?>>1</td>
    <td height="13" width="13" <?php if($_GET['step']>1) echo "class='progressOn'"; else echo "class='progressOff'"; ?>>2</td>
    <td height="13" width="13" <?php if($_GET['step']>2) echo "class='progressOn'"; else echo "class='progressOff'"; ?>>3</td>
    <td height="13" width="13" <?php if($_GET['step']>3) echo "class='progressOn'"; else echo "class='progressOff'";?>>4</td>
    <td height="13" width="13" <?php if($_GET['step']>4) echo "class='progressOn'"; else echo "class='progressOff'";?>>5</td>
  </tr>
</table>
<br />
<form name="install" action="index.php?step=<?php echo $_GET['step']+1; ?>&amp;l=<?php echo $langFolder; ?>" method="post" enctype="multipart/form-data">
<table width="100%"  border="0" cellspacing="0" cellpadding="3" class="formTable">
  <tr>
    <td colspan="4" class="blueHead"><?php echo $lang['install']['step']; ?> <?php echo $_GET['step'];?> - <?php echo $stageName; ?></td>
  </tr>
  <?php
  switch($_GET['step']){
  case 1;
  ?>
   <!--
   <tr>
     <td colspan="4" style="text-align:center;">
	 <strong>
	 <?php 
	 echo $lang['install']['chooseLang']; 
	 ?>
	 </strong>
	 <select name="langSwitch" class="dropDown" onchange="jumpMenu('parent',this,0)">
	 <?php
	 $path = "../language";
	if ($dir = opendir($path)) {
		
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi("[.]", $folder)){
			
			include($path."/".$folder."/config.inc.php");

				?><option value="index.php?step=1&amp;l=<?php echo $folder; ?>" <?php if($langFolder==$folder){ echo "selected='selected'"; } ?> onmouseover="javascript:getImage('../language/<?php echo $folder; ?>/flag.gif');"><?php echo $langName; ?></option> 
				<?php 
			
			}
		
		} 
		
	}
	 ?> 
	 </select>
	 <img src="../language/<?php echo $langFolder; ?>/flag.gif" alt="" width="21" height="14" id="img" title="" />
	 </td>
     </tr>
	 -->
   <tr>
    <td colspan="4">
	<div class="license"><?php include("../docs/license.htm"); ?></div>	</td>
    </tr>
	<tr>
    <td colspan="4" style="color: red;">
	<?php echo $lang['install']['iagreetoLic']; ?> <input name="agree" type="checkbox" value="1" />	</td>
    </tr>
  <?php
  break;
  case 2;
  ?>
  <tr>
    <td colspan="4"><?php echo $lang['install']['checkFilePerms'];?></td>
    </tr>
  <tr>
    <td><strong><?php echo $lang['install']['fileFolder'];?></strong></td>
    <td><strong><?php echo $lang['install']['currentPermission'];?></strong></td>
    <td colspan="2"><strong><?php echo $lang['install']['requiredPermission'];?></strong></td>
    </tr>
  <tr>
    <td>images/uploads/</td>
    <td align="center">
	<?php 
	$fileperms = substr(sprintf('%o', fileperms('../images/uploads/')), -4);
	
	if(win()==TRUE) {
		echo "<span class='greenTxt'>".$lang['install']['na']."</span>";
	} elseif($fileperms == 777){
		echo "<span class='greenTxt'>".$fileperms."</span>";
		
	} else {
		echo "<span class='redTxt'>".$fileperms."</span>";
		$error = TRUE;
		$stepBack = 2;
	}
	?>	</td>
    <td align="center">
	<?php
	if(win()==TRUE) {

		echo $lang['install']['na'];

	} else {

		echo "0777";

	}
	?>	</td>
    <td rowspan="3" align="center"><a href="javascript:;"><img src="images/helpIcon.gif" alt="<?php echo $lang['install']['help']; ?>" width="30" height="28" border="0" title="" onclick="MM_openBrWindow('help/filePerms.php?l=<?php echo $langFolder; ?>','','width=500,height=500')" /></a></td>
  </tr>
  <tr>
    <td>images/uploads/thumbs/</td>
    <td align="center">
	<?php 
	$fileperms = substr(sprintf('%o', fileperms('../images/uploads/thumbs')), -4);
	
	if(win()==TRUE) {

		echo "<span class='greenTxt'>".$lang['install']['na']."</span>";

	} elseif($fileperms == 777){

		echo "<span class='greenTxt'>".$fileperms."</span>";
		
	} else {
		echo "<span class='redTxt'>".$fileperms."</span>";
		$error = TRUE;
		$stepBack = 2;
	}
	?>	</td>
    <td align="center">
	<?php
	if(win()==TRUE) {

		echo $lang['install']['na'];

	} else {

		echo "0777";

	}
	?>	</td>
    </tr>
  <tr>
    <td>includes/global.inc.php</td>
    <td align="center">
	<?php 
	$fileperms = substr(sprintf('%o', fileperms('../includes/global.inc.php')), -4);
	
	if(win()==TRUE) {

		echo "<span class='greenTxt'>".$lang['install']['na']."</span>";

	} elseif($fileperms == 777){
		echo "<span class='greenTxt'>".$fileperms."</span>";
		
	} else {
		echo "<span class='redTxt'>".$fileperms."</span>";
		$error = TRUE;
		$stepBack = 2;
	}
	?>  </td>
    <td align="center">
	<?php
	if(win()==TRUE) {

		echo $lang['install']['na'];

	} else {

		echo "0777";

	}
	?>	</td>
    </tr>
  <?php
  if($error==FALSE){
  ?>
  <tr><td colspan="4"><div class="infoBar"><?php echo $lang['install']['congratsFilePerms']; ?> </div></td></tr>
  <?php
  } else {
  ?>
  <tr><td colspan="4"><div class="errorBar"><?php echo $lang['install']['filePermsNotCorrect']; ?></div></td></tr>
  <?php
  }
  ?>
  <?php
  break;
  case 3;
  ?>
  <tr>
    <td colspan="4"><strong><a href="javascript:;"><img src="images/helpIcon.gif" alt="<?php echo $lang['install']['help']; ?>" width="30" height="28" border="0" align="right" title="" onclick="MM_openBrWindow('help/db.php?l=<?php echo $langFolder; ?>','','width=500,height=500')" /></a><?php echo $lang['install']['dbSettings']; ?></strong> <br />
      <?php echo $lang['install']['fromProvider']; ?></td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['dbhostname']; ?></td>
    <td><input type="text" name="dbhost" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> localhost</td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['dbName']; ?></td>
    <td><input type="text" name="dbname" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> cubecart_database </td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['dbUsername']; ?></td>
    <td><input type="text" name="dbuser" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?>  database_user </td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['dbPassword']; ?></td>
    <td><input type="password" name="dbpass" class="textbox" /> </td>
    <td colspan="2" nowrap="nowrap">&nbsp;</td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['dbPrefix']; ?><br />
    <?php echo $lang['install']['dbPrefixOptional']; ?></td>
    <td><input type="text" name="dbprefix" class="textbox" />     </td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> store1_ </td>
  </tr>
  <tr>
    <td class="borderBot"><?php echo $lang['install']['dropifExist']; ?></td>
    <td class="borderBot"><input name="dropTables" type="checkbox" value="1" checked="CHECKED" /></td>
    <td colspan="2" class="borderBot"><?php echo $lang['install']['previousInstallLost']; ?></td>
  </tr>
  <tr>
    <td colspan="4"><strong><?php echo $lang['install']['localeSettings']; ?></strong></td>
    </tr>
  <tr>
    <td class="borderBot"><?php echo $lang['install']['storeCountry']; ?></td>
    <td class="borderBot"><select name="installCountry" class="textbox">
      <option value="US"><?php echo $lang['install']['US']; ?></option>
      <option value="UK"><?php echo $lang['install']['UK']; ?></option>
	  <option value="EU"><?php echo $lang['install']['EU']; ?></option>
    </select></td>
    <td colspan="2" class="borderBot"><?php echo $lang['install']['currenciesAccord']; ?></td>
    </tr>
  <tr>
    <td colspan="4"><a href="javascript:;"><img src="images/helpIcon.gif" alt="<?php echo $lang['install']['help']; ?>" width="30" height="28" border="0" align="right" title="" onclick="MM_openBrWindow('help/admin.php?l=<?php echo $langFolder; ?>','','width=500,height=500')" /></a><strong><?php echo $lang['install']['administratorSettings']; ?></strong><br />
<?php echo $lang['install']['adminSetDesc']; ?>    </td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['username']; ?></td>
    <td><input type="text" name="username" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> <?php echo randomUser();?></td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['password'];?></td>
    <td><input type="password" name="pass" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> <?php echo randomPass();?></td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['confPass']; ?></td>
    <td><input type="password" name="pass_conf" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap">&nbsp;</td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['emailAddress']; ?></td>
    <td><input type="text" name="email" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> yourname@yourdomain.com</td>
  </tr>
  <tr>
    <td class="borderBot"><?php echo $lang['install']['fullName']; ?></td>
    <td class="borderBot"><input type="text" name="fullName" class="textbox" /></td>
    <td colspan="2" nowrap="nowrap" class="borderBot"><?php echo $lang['install']['eg']; ?> Rachel Taylor</td>
  </tr>
  <tr>
    <td colspan="4"><strong><?php echo $lang['install']['skin']; ?></strong> - <?php echo $lang['install']['clickForLarger']; ?><br />
      <?php echo $lang['install']['changedAnytime'];?> </td>
  </tr>
  <tr>
    <td colspan="4" class="borderBot"><table width="100%"  border="0" cellspacing="0" cellpadding="2">
      <tr align="center">
        <td width="33%"><a href="javascript:;"><img src="images/screenshots/thumbClassic.gif" alt="Classic" width="150" height="107" border="0" title="" onclick="MM_openBrWindow('help/viewImg.php?img=Classic&l=<?php echo $_GET['l']; ?>','skin','width=500,height=358')" /></a></td>
        <td width="33%"><a href="javascript:;"><img src="images/screenshots/thumbLegend.gif" alt="Legend" width="150" height="107" border="0" title="" onclick="MM_openBrWindow('help/viewImg.php?img=Legend&l=<?php echo $_GET['l']; ?>','skin','width=500,height=358')" /></a></td>
        <td width="33%"><a href="javascript:;"><img src="images/screenshots/thumbKiller.gif" alt="Killer" width="150" height="107" title=""border="0" onclick="MM_openBrWindow('help/viewImg.php?img=Killer&l=<?php echo $_GET['l']; ?>','skin','width=500,height=358')" /></a></td>
      </tr>
      <tr align="center">
        <td width="33%">
		<input name="skin" type="radio" value="Classic" checked="checked" />
          <br />
        <?php echo $lang['install']['classic'];?></td>
        <td width="33%">
		<input type="radio" name="skin" value="Legend" />
          <br />
		<?php echo $lang['install']['legend'];?></td>
        <td width="33%">
		<input type="radio" name="skin" value="Killer" />
          <br />
		<?php echo $lang['install']['killer'];?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4"><a href="javascript:;"><img src="images/helpIcon.gif" alt="<?php echo $lang['install']['help']; ?>" width="30" height="28" border="0" align="right" title="" onclick="MM_openBrWindow('help/advanced.php?l=<?php echo $langFolder; ?>','','width=500,height=500')" /></a>
	<strong><?php echo $lang['install']['advancedSettings'];?></strong> <br />
    <?php echo $lang['install']['leaveIfUnsure'];?></td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['storeURL']; ?></td>
    <td>
	<input type="text" name="storeURL" class="textbox" value="http://<?php echo $_SERVER['HTTP_HOST'].str_replace("/install/index.php","",$_SERVER['PHP_SELF']); ?>" /></td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> http://www.domain.com/store </td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['serverRoot']; ?></td>
    <td><input type="text" name="rootDir" class="textbox" value="<?php echo str_replace(array("/install","\install"),"",dirname(__FILE__)); ?>" /></td>
    <td colspan="2" nowrap="nowrap">
	<?php 
	if(win()==TRUE){
	?>
	<?php echo $lang['install']['eg']; ?> d:\path\to\your\store
	<?php
	} else { 
	?>
	<?php echo $lang['install']['eg']; ?> /path/to/your/store
	<?php 
	} 
	?>	</td>
  </tr>
  <tr>
    <td><?php echo $lang['install']['siteRootRel']; ?></td>
    <td><input type="text" name="rootRel" class="textbox" value="<?php echo str_replace("install/index.php","",$_SERVER['PHP_SELF']); ?>" />      </td>
    <td colspan="2" nowrap="nowrap"><?php echo $lang['install']['eg']; ?> /store/ (Including End Slash) </td>
  </tr>
  <tr>
    <td>
	<?php echo $lang['install']['gdVersion']; ?><br />
    <?php echo $lang['install']['phpinfoLink']; ?>	</td>
    <td>
	<select name="gdversion">
		<option value="2">2</option>
		<option value="1">1</option>
		<option value="0"><?php echo $lang['install']['none']; ?></option>
	</select>	</td>
    <td colspan="2"><?php echo $lang['install']['clickLink']; ?></td>
  </tr>
  <?php
  break;
  case 4;
  ?>
<tr>
    <td colspan="4"><?php echo $lang['install']['filepermsBack']; ?>	</td>
    </tr>
  <tr>
 	<td><strong><?php echo $lang['install']['fileFolder'];?></strong></td>
    <td><strong><?php echo $lang['install']['currentPermission'];?></strong></td>
    <td colspan="2"><strong><?php echo $lang['install']['requiredPermission'];?></strong></td>
  </tr>
  <tr>
    <td>includes/global.inc.php</td>
    <td>
	<?php 
	$fileperms = substr(sprintf('%o', fileperms('../includes/global.inc.php')), -4);
	
	if(win()==TRUE) {

		echo "<span class='greenTxt'>".$lang['install']['na']."</span>";

	} elseif($fileperms == 644){

		echo "<span class='greenTxt'>".$fileperms."</span>";
		
	} else {

		echo "<span class='redTxt'>".$fileperms."</span>";
		$error = TRUE;

	}
	?>  </td>
    <td>	
	<?php
	if(win()==TRUE) {

		echo $lang['install']['na'];

	} else {

		echo "0644";

	}
	?>	</td>
    <td align="center"><a href="javascript:;"><img src="images/helpIcon.gif" alt="<?php echo $lang['install']['help']; ?>" width="30" height="28" border="0" title="" onclick="MM_openBrWindow('help/filePerms.php?l=<?php echo $langFolder; ?>','','width=500,height=500')" /></a></td>
  </tr>
  <?php
  if($error==FALSE){
  ?>
  <tr><td colspan="4"><div class="infoBar"><?php echo $lang['install']['congratsFilePerms']; ?></div></td></tr>
  <?php
  } else {
  ?>
  <tr><td colspan="4"><div class="errorBar"><?php echo $lang['install']['filePermsNotCorrect']; ?></div></td></tr>
  <?php
	  $stepBack = 4;
  }
  ?>
  <?php
  break;
  case 5;
  ?>
  <tr>
    <td colspan="4">
	<div class="infoBar"><?php echo $lang['install']['congratulations']; ?></div>
	<?php echo $lang['install']['congratulationsSub']; ?>
	<div style="padding-left: 100px;">
	<ul>
	<li><a href="<?php echo $glob['storeURL'];?>/admin/"><?php echo $lang['install']['adminHomepage']; ?></a><br />
	  <?php echo $glob['storeURL'];?>/admin/</li>
	<li><a href="<?php echo $glob['storeURL'];?>/"><?php echo $lang['install']['storeHomepage']; ?></a><br />
	<?php echo $glob['storeURL'];?>/</li>
	</ul>
	</div>
	<strong><?php echo $lang['install']['important']; ?></strong> <?php echo $lang['install']['deleteInstall']; ?>	</td>
  </tr>
  <?php
  break;
  }
 ?>
 <tr>
    <td width="33%">&nbsp;</td>
    <td colspan="3">
 <?php
 if($stepBack>0){
 ?>
  <input name="button" type="button" class="submit" onclick="MM_goToURL('parent','index.php?step=<?php echo $stepBack; if($noRepeat==TRUE || $_GET['skip']==1) { echo "&amp;skip=1"; }?>&amp;l=<?php echo $langFolder; ?>');return document.MM_returnValue" value="<?php echo $lang['install']['tryAgain']; ?>" />
  
 <?php
 } elseif($_GET['step']<5) {
 ?>
 <input name="submit" type="submit" class="submit" value="<?php echo sprintf($lang['install']['contToStep'],$_GET['step']+1); ?> &raquo;" <?php if(isset($onclick)) { echo $onclick; } ?> />
 <?php
 } 
 ?> </td>
  </tr>
</table>
</form>
<div style="float: right; padding-bottom: 8px;">Copyright <a href="http://www.CubeCart.com" target="_blank" class="txtLink">CubeCart Limited</a> 2014. All rights reserved.</div>
</div>
</div>
<br clear="all" />
</div>
</body>
</html>
