<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2005 - 2014. All rights reserved.
|   CubeCart Limited,
|   5 Bridge Street,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 2JU
|   UNITED KINGDOM
|   http://www.CubeCart.com
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Friday, 15 April 2005
|   Email: info@cubecart.com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	calc.php
|   ========================================
|	Calculates free shipping based on order amount
+--------------------------------------------------------------------------
*/
$module = fetchDbConfig("By_Price");
if($module['status']==1){

if($subTotal>=$module['level']){
$sum = 0.00;
$shippingPrice .= "<option value='".$shipKey."'";

	if($shipKey == $basket['shipKey']){
		$shippingPrice .= " selected='selected'";
		$basket = $cart->setVar($lang['misc']['freeForOrdOver']." ".$module['level'],"shipMethod");
		$basket = $cart->setVar(sprintf("%.2f",$sum),"shipCost");
	}

$shippingPrice .= ">".$lang['misc']['freeShipping']."</option>\r\n";
$shippingAvailable = TRUE;

$shipKey++;

} else {

$sum = $module['amount'];

$shippingPrice .= "<option value='".$shipKey."'";

	if($shipKey ==$basket['shipKey']){
		$shippingPrice .= " selected='selected'";
		$basket = $cart->setVar($lang['misc']['freeForOrdOver']." ".$module['level'],"shipMethod");
		$basket = $cart->setVar(sprintf("%.2f",$sum),"shipCost");
	}

$shippingPrice .= ">".priceFormat($sum)."</option>\r\n";
$shippingAvailable = TRUE;
$shipKey++;

}

unset($module, $taxVal);
}
?>