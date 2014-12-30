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
|	status.php
|   ========================================
|	Manage Module State
+--------------------------------------------------------------------------
*/
$query = sprintf("SELECT * FROM ".$glob['dbprefix']."CubeCart_Modules WHERE module = %s AND folder = %s", $db->mySQLSafe($_GET['module']), $db->mySQLSafe($_GET['folder']));
$moduleState = $db->select($query);

$data['status'] = $db->mySQLSafe($_POST['module']['status']);
$data['default'] = $db->mySQLSafe($_POST['module']['default']);

if($_POST['module']['default']==1){

	$resetData['default'] = 0;
	$where = "module = ".$db->mySQLSafe($_GET['module']);
	$update = $db->update($glob['dbprefix']."CubeCart_Modules", $resetData, $where);

}

if($moduleState == TRUE){

	$where = "module = ".$db->mySQLSafe($_GET['module'])." AND folder = ".$db->mySQLSafe($_GET['folder']);
	$update = $db->update($glob['dbprefix']."CubeCart_Modules", $data, $where);

} else {

	$data['folder'] = $db->mySQLSafe($_GET['folder']);
	$data['module'] = $db->mySQLSafe($_GET['module']);
	$insert = $db->insert($glob['dbprefix']."CubeCart_Modules", $data);

}
?>