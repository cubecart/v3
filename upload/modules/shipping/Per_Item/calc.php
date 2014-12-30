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
|	Shipping cost based on individual item costs	
+--------------------------------------------------------------------------
*/
// per item shipping module
$module = fetchDbConfig("Per_Item");
if($module['status']==1){

$sum =  $module['handling'] + ($module['cost'] * $noItems);

$taxVal = taxRate($module['tax']);

if($taxVal>0){

	$val = ($taxVal / 100) * $sum;
	$sum = $sum + $val;
	
}

$shippingPrice .= "<option value='".$shipKey."'";

if($shipKey ==$basket['shipKey']){
	$shippingPrice .= " selected='selected'";
	$basket = $cart->setVar($lang['misc']['perItem'],"shipMethod");
	$basket = $cart->setVar(sprintf("%.2f",$sum),"shipCost");
}

$shippingPrice .= ">".priceFormat($sum)."</option>\r\n";
$shippingAvailable = TRUE;

$shipKey++;
unset($module, $taxVal);
}
?>