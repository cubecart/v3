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
|	Calculates the Royal Mail postage value based on weight	
+--------------------------------------------------------------------------
*/

// per category shipping module
$module = fetchDbConfig("Royal_Mail");
if($module['status']==1){

// get the delivery ISO
$countryISO = countryIso($basket['delInf']['country']);

// build array of ISO Codes
$zones['1'] = explode(",",str_replace(" ","",strtoupper($module['zone1Countries'])));
$zones['2'] = explode(",",str_replace(" ","",strtoupper($module['zone2Countries'])));
$zones['3'] = explode(",",str_replace(" ","",strtoupper($module['zone3Countries'])));
$zones['4'] = explode(",",str_replace(" ","",strtoupper($module['zone4Countries'])));



// find the country
foreach ($zones as $key => $value){

	foreach($zones[$key] as $no => $iso){
	 
		if($iso == $countryISO){
		
			$shipZone = $key;
		
		}
	
	}

}

// work out cost
$shipBands = explode(",",str_replace(" ","",$module['zone'.$shipZone.'Rates']));
$noBands = count($shipBands);

for($j=0; $j<count($shipBands);$j++){

	$wheightCost = explode(":",str_replace(" ","",$shipBands[$j]));
	
	if($totalWeight<=$wheightCost[0]){
		
		$sum = $wheightCost[1]+$module['zone'.$shipZone.'Handling'];
		break;
		
	} elseif($totalWeight>$wheightCost[0] && $j+1==$noBands){
	
		$overWeight = TRUE;
	
	}

}

if($sum>0)
{
	$shippingPrice .= "<option value='".$shipKey."'";
	
	if($shipKey==$basket['shipKey'])
	{
		$shippingPrice .= " selected='selected'";
		$basket = $cart->setVar("Royal Mail","shipMethod");
		$basket = $cart->setVar(sprintf("%.2f",$sum),"shipCost");
	}

	$shippingPrice .= ">".priceFormat($sum)."</option>\r\n";
	$shippingAvailable = TRUE;
}

$shipKey++;
unset($module, $taxVal);
}
?>