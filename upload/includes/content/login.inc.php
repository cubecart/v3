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
|	login.inc.php
|   ========================================
|	Start the session	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$_GET['act'] = treatGet($_GET['act']); 


if($_GET['act']=="login" && isset($_POST['username']) && isset($_POST['password'])){

	$_POST['username'] = treatGet($_POST['username']);
	$_POST['password'] = treatGet($_POST['password']);
	
	$query = "SELECT customer_id FROM ".$glob['dbprefix']."CubeCart_customer WHERE email=".$db->mySQLSafe($_POST['username'])." AND password = ".$db->mySQLSafe(md5($_POST['password']))." AND type>0";
	
	$customer = $db->select($query);
	
	if($customer==FALSE) {
		
		if($db->blocker($_POST['username'],$ini['bfattempts'],$ini['bftime'],FALSE,"f")==TRUE)
		{
			$blocked = TRUE; 	
		}
	
	} elseif($customer[0]['customer_id']>0) {
		
		if($db->blocker($_POST['username'],$ini['bfattempts'],$ini['bftime'],TRUE,"f")==TRUE)
		{
			$blocked = TRUE; 
		}
		else
		{
		
			$customerData["customer_id"] = $customer[0]['customer_id'];
			$update = $db->update($glob['dbprefix']."CubeCart_sessions", $customerData,"sessId=".$db->mySQLSafe($_SESSION['ccUser']));
			
			$_POST['remember'] = treatGet($_POST['remember']);
			if($_POST['remember']==1){
				setcookie("ccRemember","1",time()+$config['sqlSessionExpiry'], $GLOBALS['rootRel']);
			}
			
			$redir = treatGet(base64_decode($_GET['redir']));
		
			if(eregi("^http://|^https://",$redir) && !eregi("^".$glob['storeURL']."|^".$config['storeURL_SSL'],$redir)){
				die("Redirect URL not allowed!");
			}
			
			// redirect
			// "login","reg","unsubscribe","forgotPass"
			if(isset($_GET['redir']) && !empty($_GET['redir']) && !eregi("logout|login|forgotPass|changePass",base64_decode($_GET['redir']))){
				
				header("Location: ".str_replace("amp;","",$redir));
				exit;
			
			} else {
	
				header("Location: ".$GLOBALS['rootRel']."index.php");
				exit;
			
			}
			
		}
		
	}
	elseif(eregi("step1",base64_decode($_GET['redir'])))
	{
		header("Location: ".$GLOBALS['rootRel']."cart.php?act=step1");
		exit;	
	} 

}


$login = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/login.tpl");

$login->assign("LANG_LOGIN_TITLE",$lang['front']['login']['login']);

$login->assign("VAL_SELF",treatGet($_GET['redir']));
$login->assign("LANG_USERNAME",$lang['front']['login']['username']);

if(isset($_POST['username'])){
	$login->assign("VAL_USERNAME",$_POST['username']);
}

$login->assign("LANG_PASSWORD",$lang['front']['login']['password']);
$login->assign("LANG_REMEMBER",$lang['front']['login']['remember_me']);
$login->assign("TXT_LOGIN",$lang['front']['login']['login']);
$login->assign("LANG_FORGOT_PASS",$lang['front']['login']['forgot_pass']);

if(isset($_POST['remember']) && $_POST['remember']==1) $login->assign("CHECKBOX_STATUS","checked='checked'");


if($ccUserData[0]['customer_id'] > 0 &&  isset($_POST['submit'])){
	
	$login->assign("LOGIN_STATUS",$lang['front']['login']['login_success']);

} elseif($ccUserData[0]['customer_id'] > 0 &&  !isset($_POST['submit'])) {

	$login->assign("LOGIN_STATUS",$lang['front']['login']['already_logged_in']);

} elseif($ccUserData[0]['customer_id'] == 0 && isset($_POST['submit'])) {

	if($blocked == TRUE)
	{
		$login->assign("LOGIN_STATUS",sprintf($lang['front']['login']['blocked'],sprintf("%.0f",$ini['bftime']/60)));
	}
	else
	{
		$login->assign("LOGIN_STATUS",$lang['front']['login']['login_failed']);
	}
	$login->parse("login.form");

} else {

	$login->assign("LOGIN_STATUS",$lang['front']['login']['login_below']);
	$login->parse("login.form");

}

$login->parse("login");
$page_content = $login->text("login");
?>