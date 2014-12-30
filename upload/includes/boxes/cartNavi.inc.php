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
|	cartNavi.inc.php
|   ========================================
|	Cart Pages Navigation Links Box	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$box_content=new XTemplate ("skins/".$config['skinDir']."/styleTemplates/boxes/cartNavi.tpl");

$box_content->assign("LANG_LINKS",$lang['front']['boxes']['lang_links']);

if(isset($links)){
	unset($links);
}

switch ($_GET['act']) {
	case "step1":
	$links[] = array (
		'link' => "cart.php?act=reg&amp;redir=%2Fcart.php%3Fact%3Dstep1",
		'text' => $lang['front']['boxes']['reg_and_checkout']);
	$links[] = array (
		'link' => "index.php",
		'text' => $lang['front']['boxes']['cont_shopping']);
	break;
	
	case "step4":
	if($config['shipAddressLock']==0){
	$links[] = array (
		'link' => "cart.php?act=step3",
		'text' => $lang['front']['boxes']['edit_del_add']);
	}
	case "step3":
	$links[] = array (
		'link' => "index.php?act=profile&amp;f=".treatGet($_GET['act']),
		'text' => $lang['front']['boxes']['edit_inv_add']);
	
	case "step2":
	$links[] = array (
		'link' => "cart.php?act=".treatGet($_GET['act'])."&amp;mode=emptyCart",
		'text' => $lang['front']['boxes']['empty_cart']);
	break;

	case "cart":
	$links[] = array (
		'link' => "cart.php?act=".treatGet($_GET['act'])."&amp;mode=emptyCart",
		'text' => $lang['front']['boxes']['empty_cart']);
	break;

}
if(!empty($_SERVER['HTTP_REFERER'])){
	$links[] = array (
		'link' => str_replace("&","&amp;",$_SERVER['HTTP_REFERER']),
		'text' => $lang['front']['boxes']['prev_page']);
}
$links[] = array (
		'link' => "index.php",
		'text' => $lang['front']['boxes']['homepage']);

for($i=0;$i<count($links);$i++){
	$box_content->assign("VAL_LINK",$links[$i]['link']);
	$box_content->assign("TXT_LINK",$links[$i]['text']);
	$box_content->parse("links.repeat_region");
}

$box_content->parse("links");

$box_content = $box_content->text("links");
?> 