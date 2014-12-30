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
|	cart.inc.php
|   ========================================
|	Core Checkout & Cart Pages	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) {
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

// check the user is logged on
if(($_GET['act']=="step2" || $_GET['act']=="step3" || $_GET['act']=="step4") && $ccUserData[0]['customer_id']<1)
{
	header("Location: cart.php?act=step1");
	exit;
}

require_once("classes/cart.php");
$cart = new cart();
$basket = $cart->cartContents($ccUserData[0]['basket']);

//////////////////////////////////////////////////////
// SO: FIX TO MAKE SURE BASKET FLOW PROCESS IS CORRECT
//////////////////////////////////////////////////////

if($_GET['act']=="cart") {
   
    $basket = $cart->setVar(1,"currentStep");
    $basket = $cart->setVar(2,"stepLimit");
   
} if($_GET['act']=="step2") {

    if(isset($basket['stepLimit']) && $basket['stepLimit']<2) {
        header("Location: cart.php?act=step".$basket['currentStep']);
        exit;
    }
    $basket = $cart->setVar(2,"currentStep");
    $basket = $cart->setVar(3,"stepLimit");

} elseif($_GET['act']=="step3") {

    if(isset($basket['stepLimit']) && $basket['stepLimit']<3) {
        header("Location: cart.php?act=step".$basket['currentStep']);
        exit;
    }
    $basket = $cart->setVar(3,"currentStep");
    $basket = $cart->setVar(4,"stepLimit");
   
} elseif($_GET['act']=="step4") {

    if(isset($basket['stepLimit']) && $basket['stepLimit']<4){
        header("Location: cart.php?act=step".$basket['currentStep']);
        exit;
    }
    $basket = $cart->setVar(4,"currentStep");
    $basket = $cart->setVar(5,"stepLimit");
   
}

//////////////////////////////////////////////////////
// EO: FIX TO MAKE SURE BASKET FLOW PROCESS IS CORRECT
//////////////////////////////////////////////////////


if(isset($_POST['shipping'])){

	$basket = $cart->setVar(sprintf("%.2f",$_POST['shipping']),"shipCost");
	$headerLoc = "step4";

} elseif(isset($_POST['delInf'])){
	
	$basket = $cart->setVar($_POST['delInf'],"delInf");
	$headerLoc = "step4";
	
}

function headerRedir() {

	global $headerLoc;

	if(isset($headerLoc) && !empty($headerLoc)) {
		
		header("Location: cart.php?act=".$headerLoc);
	
	} elseif(isset($_GET['act']) && !empty($_GET['act'])){
		
		header("Location: cart.php?act=".$_GET['act']);
	
	} else {
		
		header("Location: cart.php?act=step2");
	
	}
	exit;

}

if(isset($_GET['remove'])){
	
	$basket = $cart->unsetVar("invArray");
	$basket = $cart->remove($_GET['remove']);
	headerRedir();
	
} elseif(isset($_POST['quan'])){

	$basket = $cart->unsetVar("invArray");
	
	foreach($_POST['quan'] as $key => $value){
		
		$basket = $cart->update($key,$value);

	}
	
	headerRedir();

} elseif(isset($_GET['mode']) && $_GET['mode']=="emptyCart"){
	
	$basket = $cart->emptyCart();
	
	headerRedir();

} elseif(isset($_POST['productCode']) && !empty($_POST['productCode'])) {
	
	$result = $db->select("SELECT productId FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productCode = ".$db->mySQLSafe($_POST['productCode']));
	
	if($result == TRUE) {
		
		// check for product options (if so go to view product page)
		$noOpts = $db->numrows("SELECT product FROM ".$glob['dbprefix']."CubeCart_options_bot WHERE product = ".$db->mySQLSafe($result[0]['productId']));
		
		if($noOpts>0){
		
			header("Location: index.php?act=viewProd&productId=".$result[0]['productId']);
			exit;
		
		} else {
			$basket = $cart->add($result[0]['productId'],1,"");
			headerRedir();
		
		}
	
	}

}
$view_cart = new XTemplate ("skins/".$config['skinDir']."/styleTemplates/content/cart.tpl");
$view_cart->assign("VAL_SKIN",$config['skinDir']);
$view_cart->assign("LANG_VIEW_CART",$lang['front']['cart']['view_cart']);
$view_cart->assign("LANG_CART",$lang['front']['cart']['cart']);
$view_cart->assign("LANG_ADDRESS",$lang['front']['cart']['address']);
$view_cart->assign("LANG_PAYMENT",$lang['front']['cart']['payment']);
$view_cart->assign("LANG_COMPLETE",$lang['front']['cart']['complete']);
$view_cart->assign("LANG_ADD_PRODCODE",$lang['front']['cart']['add_more']);
$view_cart->assign("LANG_ADD",$lang['front']['cart']['add']);
$view_cart->assign("LANG_QTY",$lang['front']['cart']['qty']);
$view_cart->assign("LANG_PRODUCT",$lang['front']['cart']['product']);
$view_cart->assign("LANG_CODE",$lang['front']['cart']['code']);
$view_cart->assign("LANG_STOCK",$lang['front']['cart']['stock']);
$view_cart->assign("LANG_PRICE",$lang['front']['cart']['price']);
$view_cart->assign("LANG_LINE_PRICE",$lang['front']['cart']['line_price']);
$view_cart->assign("LANG_DELETE",$lang['front']['cart']['delete']);
$view_cart->assign("LANG_REMOVE_ITEM",$lang['front']['cart']['remove']);

if($_GET['act']=="cart"){
	$view_cart->assign("CLASS_STEP2","class='txtcartProgressCurrent'");
	$view_cart->assign("CONT_VAL","cart.php?act=step1");

} elseif($_GET['act']=="step2"){
	
	$view_cart->assign("CLASS_STEP2","class='txtcartProgressCurrent'");
	$view_cart->assign("CONT_VAL","cart.php?act=step3");

} elseif($_GET['act']=="step3" OR $_GET['act']=="step4"){

	$view_cart->assign("CLASS_STEP3","class='txtcartProgressCurrent'");
	
	$view_cart->assign("LANG_INVOICE_ADDRESS",$lang['front']['cart']['invoice_address']);
	$view_cart->assign("LANG_DELIVERY_ADDRESS",$lang['front']['cart']['delivery_address']);
	
	$view_cart->assign("TXT_TITLE",$lang['front']['cart']['title']);
	$view_cart->assign("TXT_FIRST_NAME",$lang['front']['cart']['first_name']);
	$view_cart->assign("TXT_LAST_NAME",$lang['front']['cart']['last_name']);
	$view_cart->assign("TXT_ADD_1",$lang['front']['cart']['address2']);
	$view_cart->assign("TXT_ADD_2","");
	$view_cart->assign("TXT_TOWN",$lang['front']['cart']['town']);
	$view_cart->assign("TXT_COUNTY",$lang['front']['cart']['county']);
	$view_cart->assign("TXT_POSTCODE",$lang['front']['cart']['postcode']);
	$view_cart->assign("TXT_COUNTRY",$lang['front']['cart']['country']);
	
	// stick in delivery details
	
	if(isset($basket['delInf'])){
		
		$view_cart->assign("VAL_DEL_TITLE",$basket['delInf']['title']);
		$view_cart->assign("VAL_DEL_FIRST_NAME",$basket['delInf']['firstName']);
		$view_cart->assign("VAL_DEL_LAST_NAME",$basket['delInf']['lastName']);
		$view_cart->assign("VAL_DEL_ADD_1",$basket['delInf']['add_1']);
		$view_cart->assign("VAL_DEL_ADD_2",$basket['delInf']['add_2']);
		$view_cart->assign("VAL_DEL_TOWN",$basket['delInf']['town']);
		$view_cart->assign("VAL_DEL_COUNTY",$basket['delInf']['county']);
		$view_cart->assign("VAL_DEL_POSTCODE",$basket['delInf']['postcode']);
		$view_cart->assign("VAL_DEL_COUNTRY",countryName($basket['delInf']['country']));
	
	} else {
	
		$view_cart->assign("VAL_DEL_TITLE",$ccUserData[0]['title']);
		$view_cart->assign("VAL_DEL_FIRST_NAME",$ccUserData[0]['firstName']);
		$view_cart->assign("VAL_DEL_LAST_NAME",$ccUserData[0]['lastName']);
		$view_cart->assign("VAL_DEL_ADD_1",$ccUserData[0]['add_1']);
		$view_cart->assign("VAL_DEL_ADD_2",$ccUserData[0]['add_2']);
		$view_cart->assign("VAL_DEL_TOWN",$ccUserData[0]['town']);
		$view_cart->assign("VAL_DEL_COUNTY",$ccUserData[0]['county']);
		$view_cart->assign("VAL_DEL_POSTCODE",$ccUserData[0]['postcode']);
		$view_cart->assign("VAL_DEL_COUNTRY",countryName($ccUserData[0]['country']));
	
	} 

	// stick in invoice details
	$view_cart->assign("VAL_TITLE",$ccUserData[0]['title']);
	$view_cart->assign("VAL_FIRST_NAME",$ccUserData[0]['firstName']);
	$view_cart->assign("VAL_LAST_NAME",$ccUserData[0]['lastName']);
	$view_cart->assign("VAL_ADD_1",$ccUserData[0]['add_1']);
	$view_cart->assign("VAL_ADD_2",$ccUserData[0]['add_2']);
	$view_cart->assign("VAL_TOWN",$ccUserData[0]['town']);
	$view_cart->assign("VAL_COUNTY",$ccUserData[0]['county']);
	$view_cart->assign("VAL_POSTCODE",$ccUserData[0]['postcode']);
	$view_cart->assign("VAL_COUNTRY",countryName($ccUserData[0]['country']));
	
	$view_cart->assign("LANG_CHANGE_INV_ADD",$lang['front']['cart']['edit_invoice_address']);
	$view_cart->assign("VAL_BACK_TO",$_GET['act']);

} 

if($_GET['act']=="step3") {

	
	if($config['shipAddressLock'] == 1){
	
		$delInf['title'] = $ccUserData[0]['title'];
		$delInf['firstName'] = $ccUserData[0]['firstName'];
		$delInf['lastName'] = $ccUserData[0]['lastName'];
		$delInf['add_1'] = $ccUserData[0]['add_1'];
		$delInf['add_2'] = $ccUserData[0]['add_2'];
		$delInf['town'] = $ccUserData[0]['town'];
		$delInf['county'] = $ccUserData[0]['county'];
		$delInf['postcode'] = $ccUserData[0]['postcode'];
		$delInf['country'] = $ccUserData[0]['country'];
		
		$basket = $cart->setVar($delInf,"delInf");
		header("Location: cart.php?act=step4");
		exit;
	
	}
	
	
	$view_cart->assign("CONT_VAL","javascript:submitDoc('cart');");
	
	$countries = $db->select("SELECT id, printable_name FROM ".$glob['dbprefix']."CubeCart_iso_countries ORDER BY printable_name"); 

	for($i=0; $i<count($countries); $i++){

		
			if(($countries[$i]['id'] == $basket['delInf']['country']) || ($countries[$i]['id']==$ccUserData[0]['country'] && !isset($basket['delInf']['country']))){
				
				$view_cart->assign("COUNTRY_SELECTED","selected='selected'");
			
			} else {
				
				$view_cart->assign("COUNTRY_SELECTED","");
			
			}
		
			$view_cart->assign("VAL_DEL_COUNTRY_ID",$countries[$i]['id']);
	
			$countryName = "";
			$countryName = $countries[$i]['printable_name'];
	
			if(strlen($countryName)>20){
	
				$countryName = substr($countryName,0,20)."&hellip;";
	
			}
	
			$view_cart->assign("VAL_DEL_COUNTRY_NAME",$countryName);
			
			$view_cart->parse("view_cart.cart_true.step_3.country_opts");
		
		}
	
		$view_cart->parse("view_cart.cart_true.step_3");
	
	

} elseif($_GET['act']=="step4") {

	if($config['shipAddressLock'] == 0){
	
	$view_cart->assign("LANG_CHANGE_DEL_ADD",$lang['front']['cart']['edit_delivery_address']);
	$view_cart->parse("view_cart.cart_true.step_4.edit_btn");
	
	}
	$view_cart->assign("CONT_VAL","cart.php?act=step5");
	
	$view_cart->parse("view_cart.cart_true.step_4");

}

if($basket['conts'] == TRUE) {

	$tax = 0;
	$taxCustomer = 0;
	// work out if customer is obliged to pay tax or not
	if($ccUserData[0]['country']==$config['taxCountry']){
	
		if($config['taxCounty']==0){
			// tax customer
			$taxCustomer = 1;
		} elseif($config['taxCounty']==$ccUserData[0]['zoneId']){
			// tax customer
			$taxCustomer = 1;
		}
	
	}
	
	$totalWeight = "";
	$i = 0;
	$subTotal = 0;
	$shipCost = 0;
	$grandTotal = 0;
	
	foreach($basket['conts'] as $key => $value){
		
		$i++;
		$productId = $cart->getProductId($key);
		// get product details
		
		// if shipping by category is enabled we need to get the values too
		$module = fetchDbConfig("Per_Category");
		$shipByCat = $module['status'];
		
		$extraJoin = "";
		
		if($shipByCat==1 && $_GET['act']=="step4"){
			$extraJoin = "INNER JOIN ".$glob['dbprefix']."CubeCart_category ON ".$glob['dbprefix']."CubeCart_inventory.cat_id = ".$glob['dbprefix']."CubeCart_category.cat_id";
		}
		
		$product = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory INNER JOIN ".$glob['dbprefix']."CubeCart_taxes ON ".$glob['dbprefix']."CubeCart_taxes.id = taxType ".$extraJoin." WHERE productId=".$db->mySQLSafe($productId));
		
		// FIX FOR DELETED TAX BANDS PRE 3.0.5
		if($product == FALSE){
		
			$product = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productId=".$db->mySQLSafe($productId));
			$product[0]['percent'] = 0;
		
		}
		
		if(($val = prodAltLang($product[0]['productId'])) == TRUE){
			
			$product[0]['name'] = $val['name'];
		
		}
	
		$view_cart->assign("TD_CART_CLASS",cellColor($i, $tdEven="tdcartEven", $tdOdd="tdcartOdd"));

		$view_cart->assign("VAL_PRODUCT_ID",$productId);
		$view_cart->assign("VAL_CURRENT_STEP",$_GET['act']);
		$view_cart->assign("VAL_PRODUCT_KEY",$key);
		
		if(empty($product[0]["image"])){
			
			$view_cart->assign("VAL_IMG_SRC","skins/".$config['skinDir']."/styleImages/thumb_nophoto.gif");
		
		} else {
		
			$view_cart->assign("VAL_IMG_SRC","images/uploads/thumbs/thumb_".$product[0]["image"]);
		
		}
		
		
		// only calculate shipping IF the product is tangible
		if($product[0]["digital"]==0){
			$orderTangible = TRUE;
		}
		
		$view_cart->assign("VAL_PRODUCT_NAME",validHTML($product[0]["name"]));
		$view_cart->assign("VAL_PRODUCT_CODE",$product[0]["productCode"]);  
		
		// build the product options
		$optionKeys = $cart->getOptions($key);
		
		$optionsCost = 0;
		$plainOpts = "";
		
		if(!empty($optionKeys)){
		
			$options = explode("|",$optionKeys);
			
			foreach($options as $value)
			{
				// look up options in database
				$option = $db->select("SELECT ".$glob['dbprefix']."CubeCart_options_bot.option_id, ".$glob['dbprefix']."CubeCart_options_bot.value_id, option_price, option_symbol, value_name, option_name, assign_id FROM `".$glob['dbprefix']."CubeCart_options_bot` INNER JOIN `".$glob['dbprefix']."CubeCart_options_mid` ON ".$glob['dbprefix']."CubeCart_options_mid.value_id = ".$glob['dbprefix']."CubeCart_options_bot.value_id INNER JOIN `".$glob['dbprefix']."CubeCart_options_top` ON ".$glob['dbprefix']."CubeCart_options_bot.option_id = ".$glob['dbprefix']."CubeCart_options_top.option_id WHERE assign_id = ".$db->mySQLSafe($value));
				 
				$view_cart->assign("VAL_OPT_NAME",validHTML($option[0]['option_name']));
				$view_cart->assign("VAL_OPT_VALUE",$option[0]['value_name']);
				
				$plainOpts .= $option[0]['option_name']." - ".$option[0]['value_name']."\r\n";
				
				if($option[0]['option_price']>0){ 
					
					if($option[0]['option_symbol']=="+"){
				
						$optionsCost = $optionsCost + $option[0]['option_price'];
			
					} elseif($option[0]['option_symbol']=="-"){
			
						$optionsCost = $optionsCost - $option[0]['option_price'];
			
					} elseif($option[0]['option_symbol']=="~"){
					
						$optionsCost = 0;
					
					}
					
				}
				$view_cart->parse("view_cart.cart_true.repeat_cart_contents.options");
			}
			
		}
	
		if($product[0]["useStockLevel"]==1 && $config['stockLevel']==1){
			
			$view_cart->assign("VAL_INSTOCK",$product[0]["stock_level"]);
		
		} else {
		
			$view_cart->assign("VAL_INSTOCK","&infin;");
		
		}
		
		if(($config['outofstockPurchase']==1) && ($product[0]["stock_level"]<$cart->cartArray['conts'][$key]["quantity"]) && ($product[0]["useStockLevel"]==1)) {
		
			$view_cart->assign("VAL_STOCK_WARN",$lang['front']['cart']['stock_warn']);
			
			$quantity = $cart->cartArray['conts'][$key]["quantity"];
			$view_cart->parse("view_cart.repeat_cart_contents.stock_warn");
		
		} elseif(($config['outofstockPurchase']==0) && ($product[0]["stock_level"]<$cart->cartArray['conts'][$key]["quantity"]) && ($product[0]["useStockLevel"]==1)) {
		
			$view_cart->assign("VAL_STOCK_WARN",$lang['front']['cart']['amount_capped']." ".$product[0]["stock_level"].".");
			
			$quantity = $product[0]["stock_level"];
			
			$basket = $cart->update($key,$quantity);
			
			$view_cart->parse("view_cart.cart_true.repeat_cart_contents.stock_warn");
		
		} else {
			
			$quantity = $cart->cartArray['conts'][$key]["quantity"];
		
		}
		
		$view_cart->assign("VAL_QUANTITY",$quantity);
		
		if(salePrice($product[0]['price'], $product[0]['sale_price'])==FALSE){
			
			$price = $product[0]['price'];
		
		} else {
			
			$price = salePrice($product[0]['price'], $product[0]['sale_price']);
		
		}
		
		$price = $price + ($optionsCost);
		
		if(isset($_GET['act']) && $_GET['act']!=="step4"){
			$view_cart->assign("TEXT_BOX_CLASS","textbox");
		}
		
		if(isset($_GET['act']) && $_GET['act']=="step4"){
			// set live vars for order inv and its the last step
			$view_cart->assign("QUAN_DISABLED","disabled");
			$view_cart->assign("TEXT_BOX_CLASS","textboxDisabled");
			$basket = $cart->setVar($productId,"productId","invArray",$i);
			$basket = $cart->setVar($product[0]['name'],"name","invArray",$i);
			$basket = $cart->setVar($product[0]['productCode'],"productCode","invArray",$i);
			$basket = $cart->setVar($plainOpts,"prodOptions","invArray",$i);
			$basket = $cart->setVar(sprintf("%.2f",$price*$quantity),"price","invArray",$i);
			$basket = $cart->setVar($quantity,"quantity","invArray",$i);
			$basket = $cart->setVar($product[0]['digital'],"digital","invArray",$i);
		}  else {
			$basket = $cart->unsetVar("invArray");
		}
		
		$view_cart->assign("VAL_IND_PRICE",priceFormat($price));
		
		$view_cart->assign("VAL_LINE_PRICE",priceFormat($price*$quantity));
		
		if($shipByCat==1 && $_GET['act']=="step4"){
			// calculate the line category shipping price
			include("modules/shipping/Per_Category/line.inc.php");
		
		}
		
		$subTotal = $subTotal + ($price * $quantity);
		
		$view_cart->parse("view_cart.cart_true.repeat_cart_contents");
		
		// work out weight
		if($product[0]['prodWeight']>0 && $product[0]['digital']==0){
		
		$totalWeight = ($product[0]['prodWeight'] * $quantity) + $totalWeight;
		
		}
		
		// work out tax
		if($config['priceIncTax']==0 && $taxCustomer==1){
		
			$lineTax = ($product[0]['percent'] / 100) * ($price * $quantity);
			$tax = $tax + $lineTax;
		
		}

	}
	
	// calculate shipping when we have reached step4 or over
	if($_GET['act']=="step4" && $orderTangible==TRUE) {

		$shippingModules = $db->select("SELECT folder FROM ".$glob['dbprefix']."CubeCart_Modules WHERE module='shipping' AND status = 1");
		
		$noItems = $cart->noItems();
		$sum = 0;

		if($shippingModules == TRUE){
			
			$shippingPrice = "<select name='shipping' onchange=\"submitDoc('cart');\">";
			
			$shipKey = 0;
			
			// if selected key has not been set, set it 
			if(isset($_GET['s']) && $_GET['s']==1) {
			
				$basket = $cart->setVar(1,"shipKey");
			
			} elseif(isset($_POST['shipping']) && $_POST['shipping']>0) {
			
				$basket = $cart->setVar($_POST['shipping'],"shipKey");
			
			} elseif(!isset($basket['shipKey'])) {
			
				$basket = $cart->setVar(1,"shipKey");
			
			}
			
			for($i=0; $i<count($shippingModules); $i++){
				
				$shipKey++;
				// Bug fix for missing default shipping by convict -->
				if (strpos($shippingPrice,"selected")===FALSE && $basket['shipKey']<$shipKey) {
				$basket = $cart->setVar($shipKey,"shipKey");
				}
				// <-- Bug fix for missing default shipping by convict
				include("modules/shipping/".$shippingModules[$i]['folder']."/calc.php");
			
			}
		
			$shippingPrice .= "</select>";
			
			
			// if no shipping method is available go to error page
			if($shippingAvailable!==TRUE && $overWeight == TRUE){
			
				header("Location: cart.php?act=overWeight");
				exit;
			
			// if no shipping is available show error
			} elseif($shippingAvailable!==TRUE){
			
				header("Location: cart.php?act=noShip");
				exit;
			
			}
			
			// if shipping key is greater than those available redirect and set to 1!!
			if($basket['shipKey']>$shipKey){
				header("Location: cart.php?act=step4&s=1");
				exit;
			}
			
			
		} else {
			
			$shippingPrice .= "<select name='shipping' onchange=\"submitDoc('cart');\">\r\n<option value='0.00'>".$lang['front']['cart']['free_shipping']."</option>\r\n</select>";
			$basket = $cart->setVar($lang['front']['cart']['free_shipping'],"shipMethod");
		
		}
	
	} else {
	
		$shippingPrice = $lang['front']['cart']['na'];
		// Bug fix for incorrect total by Estelle - reset shipping cost
 		$basket = $cart->setVar(0.00,"shipCost");
	
	}
	
	$view_cart->assign("LANG_SHIPPING",$lang['front']['cart']['shipping']);
	
	$view_cart->assign("VAL_SHIPPING",$shippingPrice);
	
	$view_cart->assign("LANG_TAX",$lang['front']['cart']['tax']);
	
	if($tax>0){
		
		$view_cart->assign("VAL_TAX",priceFormat($tax));
	
	} else {
		
		$view_cart->assign("VAL_TAX",$lang['front']['cart']['na']);
	
	}

	$view_cart->assign("LANG_SUBTOTAL",$lang['front']['cart']['subtotal']);
	$view_cart->assign("VAL_SUBTOTAL",priceFormat($subTotal));
	
	$grandTotal = $subTotal + $tax + $basket['shipCost'];
	
	$view_cart->assign("LANG_CART_TOTAL",$lang['front']['cart']['cart_total']);
	$view_cart->assign("VAL_CART_TOTAL",priceFormat($grandTotal));
	
	if(isset($_GET['act']) && $_GET['act']=="step4"){
		
		// build array of price vars in session data
		$basket = $cart->setVar(sprintf("%.2f",$subTotal),"subTotal");
		$basket = $cart->setVar(sprintf("%.2f",$tax),"tax");
		$basket = $cart->setVar(sprintf("%.2f",$grandTotal),"grandTotal");
	
	}
	
	
	$view_cart->assign("LANG_UPDATE_CART_DESC",$lang['front']['cart']['if_changed_quan']);
	
	$view_cart->assign("LANG_UPDATE_CART",$lang['front']['cart']['update_cart']);
	
	$view_cart->assign("LANG_CHECKOUT",$lang['front']['cart']['continue']);
	
	$view_cart->assign("VAL_FORM_ACTION",currentPage());
	
	$view_cart->parse("view_cart.cart_true");
	
} else {

	$view_cart->assign("LANG_CART_EMPTY",$lang['front']['cart']['cart_empty']);
	$view_cart->parse("view_cart.cart_false");

} 
$view_cart->parse("view_cart");
$page_content = $view_cart->text("view_cart");
?>