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
|	Calculates the cost per category based on predefined line costs	
+--------------------------------------------------------------------------
*/
// per category shipping module
$module = fetchDbConfig("Per_Category");
if($module['status']==1){

$sum =  $perShipPrice + $lineShip;


$taxVal = taxRate($module['tax']);

if($taxVal>0){

	$val = ($taxVal / 100) * $sum;
	$sum = $sum + $val;
}


if($sum == 0){
	$sum = 0.00;
}

$shippingPrice .= "<option value='".$shipKey."'";

if($shipKey ==$basket['shipKey']){
	$shippingPrice .= " selected='selected'";
	
	if($shipZone == "n"){

		$worldZone = $lang['misc']['national'];

	} elseif($shipZone == "i"){
	
		$worldZone = $lang['misc']['international'];
	
	}
	
	$basket = $cart->setVar($lang['misc']['byCategory']." (".$worldZone.")","shipMethod");
	$basket = $cart->setVar(sprintf("%.2f",$sum),"shipCost");
}

$shippingPrice .= ">".priceFormat($sum)."</option>\r\n";
$shippingAvailable = TRUE;

$shipKey++;

unset($module, $taxVal);
}
?>