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
|	home.php
|   ========================================
|	Manage Homepage Content
+--------------------------------------------------------------------------
*/
include("../../includes/ini.inc.php");
include("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");

include("../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include("../../includes/sslSwitch.inc.php");
include("../includes/rte/fckeditor.php");
include("../includes/functions.inc.php");
include("../includes/auth.inc.php");


if(permission("homepage","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
if(!isset($_GET['homeLang'])){
	header("Location: home.php?homeLang=".$config['defaultLang']);
	exit;
}
include("../includes/header.inc.php");

// update file
if(isset($_POST['FCKeditor']) && !empty($_POST['FCKeditor'])){
	include("../../language/".preg_replace('/[^a-zA-Z0-9_\-\+]/', '',$_GET['homeLang'])."/home.inc.php");
	
	$postVars['enabled'] = $_POST['enabled'];
	$postVars['title'] = $_POST['title'];
	$postVars['copy'] = $_POST['FCKeditor'];
	$msg = writeConf($postVars,$GLOBALS['rootDir']."/language/".preg_replace('/[^a-zA-Z0-9_\-\+]/', '',$_GET['homeLang'])."/home.inc.php", $home, "home");
	
} // end if copy is set and not empty
// read file
include("../../language/".preg_replace('/[^a-zA-Z0-9_\-\+]/', '',$_GET['homeLang'])."/home.inc.php");
?>
<p class="pageTitle"><?php echo $lang['admin']['docs']['homepage']; ?></p>
<?php 
if(isset($config['filePerms']) && $config['filePerms']==1 && isset($msg)){ 
	echo stripslashes($msg); 
} else { ?>
<p class="copyText"><?php echo $lang['admin']['docs']['use_rich_text']; ?></p>
<?php } ?>
<?php if(permission("homepage","edit")==TRUE){ ?>
<form action="<?php echo $GLOBALS['rootRel'];?>admin/docs/home.php?homeLang=<?php echo $_GET['homeLang']; ?>" target="_self" method="post" language="javascript">
<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
  	<td colspan="2" class="tdTitle"><?php echo $lang['admin']['docs']['homepage']; ?></td>
  </tr>
  <tr>
    <td width="15%" class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['docs']['language']; ?></strong></span></td>
    <td class="tdRichText">
	<?php
	$path = $GLOBALS['rootDir']."/language";
	if ($dir = opendir($path)) {
		?>
		<select class="textbox" name="homeLang" onchange="jumpMenu('parent',this,0)">
		<?php
	
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi($folder,array(".",".."))){
			
			include($path."/".$folder."/config.inc.php");
			?>
				<option  value="home.php?homeLang=<?php echo $folder; ?>" <?php if($_GET['homeLang']==$folder) echo "selected='selected'"; ?>><?php echo $langName; ?></option>
			<?php 
			}
		} 
		?>
		</select>
		
	<?php } ?>
	</td>
  </tr>
  <tr>
    <td width="15%" class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['docs']['enabled']; ?></strong><br />
	<?php echo $lang['admin']['docs']['enabled_desc']; ?></span></td>
    <td class="tdRichText">
		<select name="enabled">
			<?php if($_GET['homeLang']!==$config['defaultLang']) { ?>
			<option value="0"><?php echo $lang['admin']['no']; ?></option>
			<?php } ?>
			<option value="1" <?php if($home['enabled']==1) { echo "selected='selected'"; } ?>><?php echo $lang['admin']['yes']; ?></option>
		</select>
	</td>
  </tr>
  <tr>
    <td width="15%" class="tdRichText"><span class="copyText"><strong><?php echo $lang['admin']['docs']['title']; ?></strong></span></td>
    <td class="tdRichText"><input name="title" class="textbox" type="text" value="<?php echo $home['title']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" class="tdRichText">
<?php
$oFCKeditor = new FCKeditor('FCKeditor');
$oFCKeditor->BasePath = $GLOBALS['rootRel'].'admin/includes/rte/';
$oFCKeditor->Value = stripslashes($home['copy']);
$oFCKeditor->Create();
?>
	</td>
  </tr>
  <tr>
    <td colspan="2" class="tdRichText"><input name="submit" type="submit" id="submit" class="submit" value="<?php echo $lang['admin']['docs']['update_homepage']; ?>" /></td>
  </tr>
</table>
</form>
<?php } else { ?>
<div><?php echo $contents; ?></div>
<?php } ?>
<?php include("../includes/footer.inc.php"); ?>