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
|	logout.php
|   ========================================
|	Admin Session Destroy	
+--------------------------------------------------------------------------
*/
include("../includes/ini.inc.php");
include("../includes/global.inc.php");
include_once("../classes/db.inc.php");
$db = new db();
include_once("../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../includes/sslSwitch.inc.php");

$sessionDomain = substr($GLOBALS['rootRel'],0, strlen($GLOBALS['rootRel'])-1);
@ini_set("session.cookie_path",$sessionDomain);
if($glob['rootRel']=="/"){
    $sessionName = "ccSID";
} else {
    $sessionName = "ccSID".md5($glob['rootRel']);
}

session_name($sessionName);
session_start();

unset($_SESSION['ccAdmin']);
unset($_SESSION['ccAdminPath']);

if(!isset($_SESSION['ccAdmin'])){
	header("Location: ".$GLOBALS['rootRel']."admin/login.php");
}
include("includes/header.inc.php"); 
?>
<p class="infoWarn"><?php echo $lang['admin']['other']['logout_failed'];?></p>
<?php include("includes/footer.inc.php"); ?>