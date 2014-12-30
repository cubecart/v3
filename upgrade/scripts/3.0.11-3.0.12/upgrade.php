<?php
include_once("includes/global.inc.php");
if(isset($_GET['upgrade'])){
include_once("includes/functions.inc.php");
include_once("admin/includes/functions.inc.php");

include_once("classes/db.inc.php");
$db = new db();
$db->misc("CREATE TABLE `".$glob['dbprefix']."CubeCart_SpamBot` (`uniqueId` varchar(32) NOT NULL, `spamCode` varchar(5) NOT NULL, `userIp` varchar(15) NOT NULL,`time` int(10) NOT NULL default '0', PRIMARY KEY  (`uniqueId`), UNIQUE KEY `uniqueId` (`uniqueId`) ) ENGINE=MyISAM");

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
echo "CREATE TABLE `".$glob['dbprefix']."CubeCart_SpamBot` (`uniqueId` varchar(32) NOT NULL, `spamCode` varchar(5) NOT NULL, `userIp` varchar(15) NOT NULL,`time` int(10) NOT NULL default '0', PRIMARY KEY  (`uniqueId`), UNIQUE KEY `uniqueId` (`uniqueId`) ) ENGINE=MyISAM";
?>
<hr />
</p>
<?php
}
?>