<?php
include("../../language/".$_GET['l']."/lang.inc.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $lang['install']['installHelp']; ?> <?php echo $lang['install']['helpAdvanced']; ?></title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-color:#FFFFFF;">
<div style="position:absolute; bottom: 0px; width: 500px;" align="center"><a href="javascript:window.close();"><?php echo $lang['install']['closeWindow']; ?></a> <?php if(isset($_GET['os'])) { ?>| <a href="<?php echo $_SERVER['PHP_SELF']; ?>?l=<?php echo $_GET['l']; ?>"><?php echo $lang['install']['prevPage']; ?></a><?php } ?></div>
<div style="font-size: 16px; color: #0971CE; font-weight: bold; padding-top: 5px; padding-bottom: 5px;">
<strong><?php echo $lang['install']['advancedSettings']; ?></strong></div>
<?php echo $lang['install']['advancedSettingsDesc']; ?>
</body>
</html>
