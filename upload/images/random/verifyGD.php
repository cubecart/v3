<?php
if(isset($_GET['esc']))
{
	include("../../includes/global.inc.php");
	include("../../classes/gd.inc.php");
	// initiate db class
	include_once("../../classes/db.inc.php");
	$db = new db();	
	include_once("../../includes/functions.inc.php");
	
	$spamCode = fetchSpamCode($_GET['esc']);
	
	$config = fetchDbConfig("config");
	$img = new thumbnail($glob['rootDir']."/images/random/verify.jpg",240,30);
	$img->randImage($spamCode['SpamCode']);
}
?>