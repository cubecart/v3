<?php
include("../../includes/global.inc.php");
$sessionDomain = substr($GLOBALS['rootRel'],0, strlen($GLOBALS['rootRel'])-1);

if($glob['rootRel']=="/"){
	$sessionName = "ccSID";
} else {
	$sessionName = "ccSID".md5($glob['rootRel']);
}

session_name($sessionName);
@ini_set("session.cookie_path",$sessionDomain);
session_start();

if(isset($_SESSION['ccAdmin'])){
echo phpinfo();
}
?>