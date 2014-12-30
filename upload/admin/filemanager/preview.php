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
|	preview.php
|   ========================================
|	Preview Image
+--------------------------------------------------------------------------
*/
include("../../includes/ini.inc.php");
include("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../language/".$config['defaultLang']."/lang.inc.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $lang['admin']['filemanager']['prev_file'];?></title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="greyBg">
<?php if(isset($_GET['file'])){ ?>
<div class="imgPreview" align="center" style="width:<?php echo treatGet($_GET['x']);?>px; height:<?php echo treatGet($_GET['y']);?>px;"><a href="javascript:window.close();"><img src="<?php echo treatGet($_GET['file']); ?>" alt="<?php echo $lang['admin']['filemanager']['close_window'];?>" title="<?php echo $lang['admin']['filemanager']['close_window'];?>" border="0" /></a></div>
<?php } else { ?>
<span class="copyText"><?php echo $lang['admin']['filemanager']['no_image_selected'];?></span>
<?php } ?>
</body>
</html>
