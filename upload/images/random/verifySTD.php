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
	$filename = "chars/".substr($spamCode['SpamCode'],$_GET['n']-1,1).".gif";
	
	@header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
	@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	@header("Cache-Control: no-store, no-cache, must-revalidate");
	@header("Cache-Control: post-check=0, pre-check=0", false);
	@header("Pragma: no-cache");
	@header("Content-Type: image/gif");
	
	$fp = fopen($filename, 'rb');
	fpassthru($fp);
	fclose($filename);
	exit;
}
?>