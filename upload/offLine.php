<?php 
include_once("includes/ini.inc.php");
include("includes/global.inc.php"); 
include_once("classes/db.inc.php");
$db = new db();
include_once("includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("language/".$config['defaultLang']."/lang.inc.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charsetIso; ?>" />
<title><?php echo $config['siteTitle']; ?></title>
</head>

<body>
<?php echo stripslashes($config['offLineContent']); ?>
</body>
</html>