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
|	auth.inc.php
|   ========================================
|	Admin Authentication and Permissions
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$sessionDomain = substr($GLOBALS['rootRel'],0, strlen($GLOBALS['rootRel'])-1);
@ini_set("session.cookie_path",$sessionDomain);
if($glob['rootRel']=="/"){
    $sessionName = "ccSID";
} else {
    $sessionName = "ccSID".md5($glob['rootRel']);
}

session_name($sessionName);
session_start();

if(!isset($_SESSION['ccAdmin'])){
	
	header("Location: ".$GLOBALS['rootRel']."admin/login.php?goto=".currentPage());
	exit;

// check session path is correct
} elseif(strpos(dirname($_SERVER['PHP_SELF']), $_SESSION['ccAdminPath']) !== 0){
	
	header("Location: ".$GLOBALS['rootRel']."admin/login.php?goto=".currentPage());
	exit;
	
} else {
	// get session information as array
	include_once($GLOBALS['rootDir']."/classes/db.inc.php");
	$db = new db();
	$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_admin_users WHERE adminId = %s", $db->mySQLSafe($_SESSION['ccAdmin']));
	$ccAdminData = $db->select($query);
	
	// fimd permissions for those who are not super users
	if($ccAdminData[0]['isSuper']==0){
		
		$query = sprintf("SELECT ".$glob['dbprefix']."CubeCart_admin_sections.sectId, name, `read`, `write`, `edit`, `delete` FROM ".$glob['dbprefix']."CubeCart_admin_sections LEFT JOIN ".$glob['dbprefix']."CubeCart_admin_permissions ON ".$glob['dbprefix']."CubeCart_admin_sections.sectId = ".$glob['dbprefix']."CubeCart_admin_permissions.sectId WHERE adminId = %s", $db->mySQLSafe($_SESSION['ccAdmin']));
		$permissionArray = $db->select($query);
		
		if(is_array($permissionArray)){
			for($i=0; $i<count($permissionArray); $i++){
		
				foreach($permissionArray[$i] as $key => $value){
				
					$masterKey = $permissionArray[$i]['name'];
					$ccAdminData[$masterKey][$key] = $value;
				
				}
			}
		}
	}
}
unset($permissionArray);
?>