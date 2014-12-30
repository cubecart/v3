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
|	siteDocs.inc.php
|   ========================================
|	Build Links to Site Docs	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// query database
$results = $db->select("SELECT doc_id, doc_name FROM ".$glob['dbprefix']."CubeCart_docs ORDER BY doc_name ASC");

$resultsForeign = $db->select("SELECT doc_master_id as doc_id, doc_name FROM ".$glob['dbprefix']."CubeCart_docs_lang WHERE doc_lang = '".$lang_folder."'"); 

$box_content = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/siteDocs.tpl");

// build attributes
if($results == TRUE){

	// start loop
	for ($i=0; $i<count($results); $i++){
 	
		if($i<count($results)-1){
			$box_content->parse("site_docs.a.sep");
		}
		
		
		if(is_array($resultsForeign)){
			
			for ($k=0; $k<count($resultsForeign); $k++){
		
				if($resultsForeign[$k]['doc_id'] == $results[$i]['doc_id']){
				
					$results[$i]['doc_name'] = $resultsForeign[$k]['doc_name'];
				
				}
				
			}
		
		}
		
		$results[$i]['doc_name'] = validHTML($results[$i]['doc_name']);
		$box_content->assign("DATA",$results[$i]);
		$box_content->parse("site_docs.a");
	
	} // end loop 
}
$box_content->parse("site_docs");
$box_content = $box_content->text("site_docs");
?>