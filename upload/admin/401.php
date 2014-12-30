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
|	401.php
|   ========================================
|	Admin Access Denied Page	
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
include("includes/auth.inc.php");
include("includes/header.inc.php"); ?>
<p class="warnText"><?php echo $lang['admin']['other']['401']; ?></p>
<p align="center"><img src="images/largeWarning.gif" alt="" width="220" height="192" title="" /></p>
<?php include("includes/footer.inc.php"); ?>