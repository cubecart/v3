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
|	calc.php
|   ========================================
|	Sets shipping to be free!!	
+--------------------------------------------------------------------------
*/
// free shipping
$module = fetchDbConfig("Free_Shipping");

if($module['status']==1){
$sum = 0;
$shippingPrice .= "<option value='".$shipKey."'";

if($shipKey ==$basket['shipKey']){
	$shippingPrice .= " selected='selected'";
	$basket = $cart->setVar($lang['misc']['freeShipping'],"shipMethod");
	$basket = $cart->setVar(sprintf("%.2f",$sum),"shipCost");
}

$shippingPrice .= ">".$lang['misc']['free']." (".priceFormat("0.00").")</option>\r\n";
$shippingAvailable = TRUE;
$shipKey++;
unset($module, $taxVal);
}
?>