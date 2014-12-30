<?php
$module = fetchDbConfig("UPS");
if($module['status']==1){
    
	require("ups.php");
	
	foreach($module as $key => $value){
	
		if(ereg("product_",$key) && $value==1){
	
			$productCode = substr($key,8,3);

			$rate = new Ups;
			$rate->upsProduct($productCode);   // See upsProduct() function for codes
			$rate->origin($module['postcode'], countryIso($config['siteCountry'])); // Use ISO country codes!
			$rate->dest($basket['delInf']['postcode'], countryIso($basket['delInf']['country']));   // Use ISO country codes!
			
			if(!isset($module['rate']))
			{
				$rate->rate("RDP");     // See the rate() function for codes
			}
			else
			{
				$rate->rate(strtoupper($module['rate']));     // See the rate() function for codes
			}
			
			$rate->container($module['container']); // See the container() function for codes
			$rate->weight($totalWeight);
			
			if(!isset($module['rescom']))
			{
				$rate->rescom("RES");   // See the rescom() function for codes
			}
			else
			{
				$rate->rescom(strtoupper($module['rescom']));   // See the rescom() function for codes
			}
			
			switch ($productCode) {

				case "1DM":
				$desc = $lang['misc']['nextDayEarlyAm'];
				break;
				
				case "1DA":
				$desc = $lang['misc']['nextDayAir'];
				break; 
				
				case "1DP":
				$desc = $lang['misc']['nextDayAirSaver'];
				break;
				
				case "2DM":
				$desc = $lang['misc']['2ndDayEarlyAm'];
				break; 
				
				case "2DA":
				$desc = $lang['misc']['2ndDayAir'];
				break;
				
				case "3DS":
				$desc = $lang['misc']['3daySelect'];
				break; 
				
				case "GND":
				$desc = $lang['misc']['ground'];
				break;
				
				case "STD":
				$desc = $lang['misc']['canadaStandard'];
				break;
				
				case "XPR":
				$desc = $lang['misc']['worldwideExpress'];
				break;
				
				case "XDM":
				$desc = $lang['misc']['worldwideExpressPlus'];
				break;
				
				case "XPD":
				$desc = $lang['misc']['worldwideExpedited'];
				break;
				
			}
			$quote = $rate->getQuote();
			
			if($quote>0){
				
				$sum = $quote;
				$shippingPrice .= $rate->getOpt($sum,$productCode,$desc);
				$shippingAvailable = TRUE;
			
			}
			
		
		}
		
	}
	
}

unset($module);
?>