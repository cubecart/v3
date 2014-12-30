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
|	viewDoc.inc.php
|   ========================================
|	Displays a site document	
+--------------------------------------------------------------------------
*/
// query database

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$_GET['docId'] = treatGet($_GET['docId']);
if($lang_folder !== $config['defaultLang']){

$result = $db->select("SELECT doc_name, doc_content FROM ".$glob['dbprefix']."CubeCart_docs_lang WHERE doc_master_id = ".$db->mySQLSafe($_GET['docId'])." AND doc_lang=".$db->mySQLSafe($lang_folder));

}

if(!isset($result) || $result==FALSE) {

$result = $db->select("SELECT doc_name, doc_content FROM ".$glob['dbprefix']."CubeCart_docs WHERE doc_id = ".$db->mySQLSafe($_GET['docId'])); 

}

$view_doc=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/viewDoc.tpl");

if(isset($result) && $result == TRUE){
	
	$view_doc->assign("DOC_NAME",validHTML($result[0]['doc_name']));
	$view_doc->assign("DOC_CONTENT",(!get_magic_quotes_gpc ()) ? stripslashes($result[0]['doc_content']) : $result[0]['doc_content']);
	
	$meta['siteTitle'] = $config['siteTitle']." - ".$result[0]['doc_name'];
	$meta['metaDescription'] = substr(strip_tags($result[0]['doc_content']),0,35);

} else {
	
	$view_doc->assign("DOC_NAME",$lang['front']['viewDoc']['error']);
	$view_doc->assign("DOC_CONTENT",$lang['front']['viewDoc']['does_not_exist']);

}

$view_doc->parse("view_doc");
$page_content = $view_doc->text("view_doc");
?>