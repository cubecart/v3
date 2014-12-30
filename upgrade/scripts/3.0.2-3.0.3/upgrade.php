<?php
if(isset($_GET['upgrade'])){

include_once("includes/global.inc.php");
include_once("includes/functions.inc.php");
include_once("admin/includes/functions.inc.php");

include_once("classes/db.inc.php");
$db = new db();

$db->misc("CREATE TABLE `".$glob['dbprefix']."CubeCart_cats_lang` (
  `id` int(11) NOT NULL auto_increment,
  `cat_master_id` int(11) NOT NULL default '0',
  `cat_lang` varchar(20) NOT NULL default '',
  `cat_name` varchar(255) NOT NULL default '',
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;");

?>
Thank you. Your store has been updated. Please now delete this upgrade script.
<?php
} else {

?>
<p>CubeCart Ltd provide this upgrade script without any warranty of any kind and by proceeding you are doing so entirely at your own risk. PLEASE TAKE A FULL BACK UP OF THE STORE AND ITS DATABASE BEFORE THIS IS DONE!</p>
<p align="center">&gt;&gt; <a href="?upgrade=1"><strong>UPGRADE NOW</strong></a> &lt;&lt; </p>
<?php
}
?>