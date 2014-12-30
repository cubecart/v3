<?
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
|	lookupip.php
|   ========================================
|	Look up IP Hostname
+--------------------------------------------------------------------------
*/
include("../../includes/ini.inc.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $_GET['ip']; ?></title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p class="pageTitle"><?php echo $_GET['ip']; ?></p>
<p class="copyText"><?php echo gethostbyaddr($_GET['ip']); ?></p>
<p align="center" class="copyText"><strong>[<a href="javascript:window.close();" class="txtLink">x</a>]</strong></p>
</body>
</html>
