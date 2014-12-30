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
|	header.inc.php
|   ========================================
|	Admin Header
+--------------------------------------------------------------------------
*/
if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charsetIso; ?>" />
<link href="<?php echo $GLOBALS['rootRel']; ?>admin/styles/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo $GLOBALS['rootRel']; ?>admin/js/jslibrary.js"></script>
<?php 
if(isset($jsScript)) { 
?>
<script language="javascript">
<?php echo $jsScript; ?>
</script>
<?php } ?>
<title>CubeCart&trade; - <?php echo $lang['admin']['incs']['administration'];?></title>
</head>
<body>
<?php 
if(isset($_SESSION['ccAdmin']) && strpos(dirname($_SERVER['PHP_SELF']), $_SESSION['ccAdminPath']) == 0){ ?>
<!-- start wrapping table -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" width="180" rowspan="3" class="tdNav">
<?php include($GLOBALS['rootDir']."/admin/includes/navigation.inc.php"); ?> 
	</td>
  </tr>
  <tr>
  <td valign="top" class="tdContent">
<!-- end wrapping table -->
<div id="topBar">
<div id="loginBar">
	<span class="txtLogin"><?php echo $lang['admin']['incs']['logged_in_as'];?> <strong><?php echo $ccAdminData[0]['username']; ?></strong> [ </span><a href="<?php echo $GLOBALS['rootRel']; ?>admin/logout.php" class="txtLink"><?php echo $lang['admin']['incs']['logout'];?></a> <span class="txtLogin">|</span> <a href="<?php echo $GLOBALS['rootRel'];?>admin/adminusers/changePass.php" class="txtLink"><?php echo $lang['admin']['incs']['change_pass'];?></a> <span class="txtLogin">]</span>
</div>

<div id="dateBar">
	<span class="txtLogin"><?php echo formatTime(time(),$strftime); ?></span>
</div>
</div>
<!-- start of admin content -->
<div id="contentPad">
<?php } ?>