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
|	switch.php
|   ========================================
|	Switch between language and currency vars	
+--------------------------------------------------------------------------
*/
	include_once("includes/ini.inc.php");
	
	// INCLUDE CORE VARIABLES & FUNCTIONS
	include_once("includes/global.inc.php");
	include_once("includes/functions.inc.php");

	// initiate db class
	include_once("classes/db.inc.php");
	$db = new db();
	include_once("includes/functions.inc.php");
	$config = fetchDbConfig("config");

	// get session data
	include_once("includes/sessionStart.inc.php");
	include_once("includes/session.inc.php");
	
	// change language if necessary making sure it is cleaned against cross site scripting!!! Or else there'd be truble!!
	if( (isset($_GET['lang'])) && (!empty($_GET['lang'])) && (isset($_SESSION['ccUser'])) ){
		$sessData['lang'] = "'".preg_replace('/[^a-zA-Z0-9_\-\+]/', '',$_GET['lang'])."'";
		$update = $db->update($glob['dbprefix']."CubeCart_sessions", $sessData,"sessId=".$db->mySQLSafe($_SESSION['ccUser']));
		
		// detect possible spoofing URL's
		if(!eregi("http://",$_GET['r']) && !eregi("ftp://",$_GET['r']) && !eregi("https://",$_GET['r'])){
			header("Location: ".str_replace("amp;","",treatGet($_GET['r'])));
		} else {
			header("Location: index.php");
		}
		exit;
		
	} elseif((isset($_GET['currency'])) && !empty($_GET['currency']) && (isset($_SESSION['ccUser']))){
	
		$sessData['currency'] = "'".preg_replace('/[^a-zA-Z0-9_\-\+]/', '',$_GET['currency'])."'";
		$update = $db->update($glob['dbprefix']."CubeCart_sessions", $sessData,"sessId=".$db->mySQLSafe($_SESSION['ccUser']));
		
		// detect possible spoofing URL's
		if(!eregi("http://",$_GET['r']) && !eregi("ftp://",$_GET['r']) && !eregi("https://",$_GET['r'])){
			header("Location: ".str_replace("amp;","",treatGet($_GET['r'])));
		} else {
			header("Location: index.php");
		}
		exit;
	
	} else {
		header("Location: index.php");
		exit;
	}
?>