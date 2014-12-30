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
|	download.php
|   ========================================
|	Gathers the customers digital download	
+--------------------------------------------------------------------------
*/
	include_once("includes/ini.inc.php");
	include_once("includes/global.inc.php");

	// initiate db class
	include_once("classes/db.inc.php");
	$db = new db();
	
	include_once("includes/functions.inc.php");
	$config = fetchDbConfig("config");
	
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_Downloads INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON ".$glob['dbprefix']."CubeCart_Downloads.productId =  ".$glob['dbprefix']."CubeCart_inventory.productId WHERE cart_order_id = ".$db->mySQLSafe(base64_decode($_GET['oid']))." AND ".$glob['dbprefix']."CubeCart_Downloads.productId = ".$db->mySQLSafe($_GET['pid'])." AND accessKey = ".$db->mySQLSafe($_GET['ak'])." AND noDownloads<".$config['dnLoadTimes']." AND  expire>".time();
	
	$download = $db->select($query);
	
	if($download == TRUE){
	
		if(eregi("ftp://",$download[0]['digitalDir']) || eregi("http://",$download[0]['digitalDir']) || eregi("https://",$download[0]['digitalDir'])){
		
			$record['noDownloads'] = "noDownloads + 1";
			$where = "cart_order_id = ".$db->mySQLSafe(base64_decode($_GET['oid']))." AND productId = ".$db->mySQLSafe($_GET['pid'])." AND accessKey = ".$db->mySQLSafe($_GET['ak']);
			$update = $db->update($glob['dbprefix']."CubeCart_Downloads", $record, $where);
			
			header("Location: ".$download[0]['digitalDir']);
			exit;
		
		} else {
		
			$record['noDownloads'] = "noDownloads + 1";
			$where =  "cart_order_id = ".$db->mySQLSafe(base64_decode($_GET['oid']))." AND ".$glob['dbprefix']."CubeCart_Downloads.productId = ".$db->mySQLSafe($_GET['pid'])." AND accessKey = ".$db->mySQLSafe($_GET['ak']);
			
			$update = $db->update($glob['dbprefix']."CubeCart_Downloads", $record, $where);
			
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Content-Type: application/octet-stream");
			header("Content-Length: " . filesize($download[0]['digitalDir']));
			$filename = explode("/",$download[0]['digitalDir']);
			$parts = count($filename);
			header("Content-Disposition: attachment; filename=".$filename[$parts-1]);
			
			function readfile_chunked ($filename) {
              $chunksize = 1*(1024*1024); // how many bytes per chunk
              $buffer = '';
              $handle = fopen($filename, 'rb');
              if ($handle === false) {
               return false;
              }
              while (!feof($handle)) {
               $buffer = fread($handle, $chunksize);
               print $buffer;
              }
              return fclose($handle);
            }

            readfile_chunked($download[0]['digitalDir']);
			
			exit;
		
		}
	
	
	} else {
	
		header("Location: index.php?act=dnExpire");
		exit;
	
	}
	
?>