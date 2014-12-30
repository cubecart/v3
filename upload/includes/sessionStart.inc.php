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
|	session.php
|   ========================================
|	Core Session Management	
+--------------------------------------------------------------------------
*/
$sessionDomain = substr($GLOBALS['rootRel'],0, strlen($GLOBALS['rootRel'])-1);

if($glob['rootRel']=="/"){
	$sessionName = "ccSID";
} else {
	$sessionName = "ccSID".md5($glob['rootRel']);
}

session_name($sessionName);
@ini_set("session.cookie_path",$sessionDomain);
session_start();
?>