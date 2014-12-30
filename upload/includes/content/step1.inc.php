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
|	step1.inc.php
|   ========================================
|	Step 1 Of the Checkout Pages	
+--------------------------------------------------------------------------
*/
if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$enableSSl = 1;
require_once("classes/cart.php");
$cart = new cart();
$basket = $cart->cartContents($ccUserData[0]['basket']);

if($_GET['act']=="step1") {
   
    $basket = $cart->setVar(1,"currentStep");
    $basket = $cart->setVar(2,"stepLimit");
}

if($ccUserData[0]['customer_id']>0){

header("Location: cart.php?act=step2");

}

$login_register = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/step1.tpl");

if($basket == FALSE) {

	$login_register->assign("LANG_CART_EMPTY",$lang['front']['step1']['lang_empty_cart']);
	$login_register->parse("session_page.cart_false");
	
	} else {
	
	$login_register->assign("LANG_LOGIN_TITLE",$lang['front']['step1']['allready_customer']);
	$login_register->assign("LANG_LOGIN_BELOW",$lang['front']['step1']['login_below']);
	$login_register->assign("VAL_SELF",base64_encode((currentPage())));
	$login_register->assign("LANG_USERNAME",$lang['front']['step1']['username']);
	
	if(isset($_POST['username'])){
		$login_register->assign("VAL_USERNAME",$_POST['username']);
	}
	
	$login_register->assign("LANG_PASSWORD",$lang['front']['step1']['password']);
	$login_register->assign("LANG_REMEMBER",$lang['front']['step1']['remember_me']);
	$login_register->assign("TXT_LOGIN",$lang['front']['step1']['login']);
	$login_register->assign("LANG_FORGOT_PASS",$lang['front']['step1']['forgot_pass_q']);
	
	
	$login_register->assign("LANG_EXPRESS_REGISTER",$lang['front']['step1']['need_register']);
	$login_register->assign("LANG_CONT_REGISTER",$lang['front']['step1']['express_register']);
	$login_register->assign("LANG_REGISTER_BUTN",$lang['front']['step1']['reg_and_cont']);
	
	$login_register->assign("LANG_CONT_SHOPPING",$lang['front']['step1']['cont_shopping_q']);
	$login_register->assign("LANG_CONT_SHOPPING_BTN",$lang['front']['step1']['cont_shopping']);
	$login_register->assign("LANG_CONT_SHOPPING_DESC",$lang['front']['step1']['cont_browsing']);
	
	$login_register->parse("session_page.cart_true");

} 

$login_register->parse("session_page");
$page_content = $login_register->text("session_page");
?>