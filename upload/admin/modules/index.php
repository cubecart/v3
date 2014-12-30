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
|	List Modules
+--------------------------------------------------------------------------
*/
include("../../../includes/ini.inc.php");
include("../../../includes/global.inc.php");
require_once("../../../classes/db.inc.php");
$db = new db();
include_once("../../../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../../includes/sslSwitch.inc.php");
include("../../includes/auth.inc.php");
include("../../includes/functions.inc.php");

if(permission("settings","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

include("../../includes/header.inc.php");
?>
<p class="pageTitle"><?php echo ucfirst($module); ?> Modules</p>

<table border="0" cellspacing="0" cellpadding="4" align="center" class="mainTable">
	<tr>
		<td class="tdTitle"><?php echo $lang['admin']['customers']['name']; ?></td>
	    <td align="center" class="tdTitle"><?php echo $lang['admin']['adminusers']['action']; ?></td>
	    <td align="center" class="tdTitle"><?php echo $lang['admin']['orders']['status']; ?></td>
	</tr>
<?php 
	$path = $GLOBALS['rootDir']."/admin/modules/".$module;
	$dirArray = listModules($path);
	if(is_array($dirArray)){

		$i = 0;
		
		foreach($dirArray as $folder) {
		$i++;
		
		$cellColor = "";
		$cellColor = cellColor($i);
?>
	<tr>
		<td align="left" valign="top" class="<?php echo $cellColor; ?>">
			<?php if(file_exists($path."/".$folder."/logo.gif")){ ?>
			<a href="<?php echo $folder; ?>/index.php?module=<?php echo $module; ?>&amp;folder=<?php echo $folder; ?>"><img src="<?php echo $folder; ?>/logo.gif" alt="<?php echo $folder; ?>" border="0" title="" /></a>
			<?php } else { ?> 
			<span class="copyText"><?php echo str_replace("_"," ",$folder); ?></span>
			<?php } ?>		</td>
        <td align="center" valign="middle" class="<?php echo $cellColor; ?>"><a href="<?php echo $folder; ?>/index.php?module=<?php echo $module; ?>&amp;folder=<?php echo $folder; ?>" class="txtLink">Configure</a></td>
	    <td align="center" valign="middle" class="<?php echo $cellColor; ?>">
		<?php
		$moduleStatus = fetchDbConfig($folder);

		if($moduleStatus['status']==1){
		?>
			<img src="../../images/1.gif" width="10" height="10" alt="" title="" />
		<?php
		} else {
		?>
			<img src="../../images/0.gif" width="10" height="10" alt="" title="" />
		<?php 
		} 
		unset($moduleStatus);
		?>
		
		</td>
	</tr>
<?php
	}
}
?>
</table>
<?php include("../../includes/footer.inc.php"); ?>