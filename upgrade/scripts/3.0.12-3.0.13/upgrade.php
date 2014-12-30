<?php
if(is_array($_COOKIE))
{
	foreach($_COOKIE as $k=>$v)
	{
		unset($_COOKIE[$k]);
	}
}

include_once("includes/global.inc.php");
if(isset($_GET['upgrade'])){
include_once("includes/functions.inc.php");
include_once("admin/includes/functions.inc.php");

include_once("classes/db.inc.php");
$db = new db();

$db->misc("ALTER TABLE `".$glob['dbprefix']."CubeCart_admin_users` ADD `failLevel` INT( 1 ) NOT NULL DEFAULT '0',
ADD `blockTime` INT( 10 ) NOT NULL DEFAULT '0', ADD `lastTime` INT( 10 ) NOT NULL DEFAULT '0';");

$db->misc("CREATE TABLE `".$glob['dbprefix']."CubeCart_blocker` (
  `id` int(11) NOT NULL auto_increment,
  `browser` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `blockTime` int(10) NOT NULL default '0',
  `blockLevel` int(1) NOT NULL default '0',
  `loc` char(1) NOT NULL,
  `lastTime` int(10) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;");

?>
Thank you. Your store has been updated. Please now delete this upgrade script.
<?php
} else {

?>
<p>CubeCart Ltd provide this upgrade script without any warranty of any kind and by proceeding you are doing so entirely at your own risk. PLEASE TAKE A FULL BACK UP OF THE STORE AND ITS DATABASE BEFORE THIS IS DONE!</p>
<p>WARNING: DOING THIS WILL DELETE ANY ALTERNATIVE LANGUAGES FOR PRODUCTS TO FIX A DATABASE STRUCTURE BUG.</p>
<p align="center">&gt;&gt; <a href="?upgrade=1"><strong>CLICK HERE TO UPGRADE NOW</strong></a> &lt;&lt; </p>
<p align="left">
MySQL Query Executed by this script: (If you prefer you can execute this manually)
<hr />
<?php 
echo "ALTER TABLE `".$glob['dbprefix']."CubeCart_admin_users` ADD `failLevel` INT( 1 ) NOT NULL DEFAULT '0',
ADD `blockTime` INT( 10 ) NOT NULL DEFAULT '0', ADD `lastTime` INT( 10 ) NOT NULL DEFAULT '0';";
?>
<br />
<?php 
echo "CREATE TABLE `".$glob['dbprefix']."CubeCart_blocker` (<br />
		  `id` int(11) NOT NULL auto_increment,
		  `browser` text NOT NULL,
		  `ip` varchar(15) NOT NULL,
		  `username` varchar(50) NOT NULL,
		  `blockTime` int(10) NOT NULL default '0',
		  `blockLevel` int(1) NOT NULL default '0',
		  `loc` char(1) NOT NULL,
		  `lastTime` int(10) NOT NULL,
		  KEY `id` (`id`)<br />
		) ENGINE=MyISAM AUTO_INCREMENT=1 ;";
?>

<hr />
</p>
<?php
}
?>