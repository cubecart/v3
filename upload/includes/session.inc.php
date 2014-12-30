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

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

if(($config['offLine']==1 && isset($_SESSION['ccAdmin']) && $config['offLineAllowAdmin']==0) || ($config['offLine']==1 && !isset($_SESSION['ccAdmin']))) {
	header("Location: offLine.php");
	exit;
}

$sessData["location"] = $db->mySQLSafe(currentPage());
$lkParsed = "PC9ib2R5Pg==";

if( !isset($_SESSION['ccUser']) && (isset($_COOKIE['ccUser']) || isset($_GET['ccUser'])) ){

	if(isset($_COOKIE['ccUser'])){

		$sessId = base64_decode(treatGet($_COOKIE['ccUser']));
	
	} elseif(isset($_GET['ccUser'])){

		$sessId = treatGet($_GET['ccUser']);
	
	}
	## remove possible CRLF injection
	$sessId = str_replace(array('%0d', '%0a'), '', $sessId);
	
	// see if session is still in db
	$query = "SELECT sessId FROM ".$glob['dbprefix']."CubeCart_sessions WHERE sessId=".$db->mySQLSafe($sessId);
	$results = $db->select($query);
	
	if($results == TRUE){

	
		$sessData["timeLast"] = $db->mySQLSafe(time());
		
		if(!isset($_COOKIE['ccRemember'])) { $sessData["customer_id"] = 0; }
		
		$update = $db->update($glob['dbprefix']."CubeCart_sessions", $sessData,"sessId=".$db->mySQLSafe($results[0]['sessId']));
		
		$_SESSION['ccUser'] = $results[0]['sessId'];
		// set cookie to extend expire time meaning if the visitor visits regularly they stay logged in
		setcookie("ccUser", base64_encode($sessId),time()+$config['sqlSessionExpiry'], $sessionDomain);
	
	}
	
}

if(!isset($_SESSION['ccUser']) && $results == FALSE) {
	
	
	$sessId = makeSessId();
	$_SESSION['ccUser'] = $sessId;
	
	// insert sessionId into db
	
	$sessData["sessId"] = $db->mySQLSafe($_SESSION['ccUser']);		
	$timeNow = $db->mySQLSafe(time());
	$sessData["timeStart"] = $timeNow;	
	$sessData["timeLast"] = $timeNow;
	$sessData["customer_id"] = 0;

	$insert = $db->insert($glob['dbprefix']."CubeCart_sessions", $sessData);
	
	// set cookie
	setcookie("ccUser", base64_encode($sessId),time()+$config['sqlSessionExpiry'], $sessionDomain);
	
	// delete sessions older than time set in config file
	$expiredSessTime = time() - $config['sqlSessionExpiry'];
	$delete = $db->delete($glob['dbprefix']."CubeCart_sessions", "timeLast<".$expiredSessTime);

} else {
	
	$sessData["timeLast"] = $db->mySQLSafe(time());

	$update = $db->update($glob['dbprefix']."CubeCart_sessions", $sessData,"sessId=".$db->mySQLSafe($_SESSION['ccUser']));

}

// get userdata
$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_sessions LEFT JOIN ".$glob['dbprefix']."CubeCart_customer ON ".$glob['dbprefix']."CubeCart_sessions.customer_id = ".$glob['dbprefix']."CubeCart_customer.customer_id WHERE sessId = ".$db->mySQLSafe($_SESSION['ccUser']);
$ccUserData = $db->select($query);

// We have a session issue :-/ (e.g. session but no matching DB value)
if($ccUserData==FALSE)
{
	// reset session and reload current page
	unset($_SESSION['ccUser'],$_COOKIE['ccUser'],$_COOKIE['ccRemember']);
	header("Location: ".str_replace("&amp;","&",currentPage()));
	exit;
}
?>