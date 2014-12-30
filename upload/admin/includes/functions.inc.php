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
|	functions.inc.php
|   ========================================
|	Admin Functions
+--------------------------------------------------------------------------
*/



function writeConf($new = "", $path, $prevArray, $arrayName = "config", $output = TRUE)
	{
	global $lang;
		
		if (!is_array($new)){
			$msg = "<div class='warnText'>".$lang['admin']['incs']['error_editing']."</div>";
		}
		
		if (count($new) < 1){
			return "";
			exit;
		}
		
		// add old config vars not in $new array
		if(is_array($prevArray)){
			
			foreach($prevArray as $key => $value) {
				
				if($new[$key]!==$prevArray[$key]){
				
					$value = preg_replace("/\r/", ""   , $value);
				
					$newConfig[$key] = $value;
					
				}
			
			}
			
		}
		
		// build new config vars from $new array
		foreach($new as $key => $value) {			

			$value = preg_replace("/\r/", ""   , $value);
			
			$newConfig[$key] = $value;
		}
		
		@chmod($path,0777);
		@rename($path, $path.".bak");
		@chmod($path.".bak", 0644);
		
		$content = "<?php\n";
		// sort keys
		ksort($newConfig);
		foreach($newConfig as $key => $value){
			// strip quotes if already in
			$value = str_replace(array("\'","'"),"&#39;",$value);
			
			if (!get_magic_quotes_gpc()) {
			   $value = addslashes($value);
			}
			
			$content .= "\$".$arrayName."['".$key."'] = '".$value."';\n";
		
		}
		
		$content .= "?>";   
		if($handle = @fopen($path, "w")){
		
			fwrite($handle, $content, strlen($content));
			fclose($handle);
			$msg = "<span class='infoText'>".$lang['admin']['incs']['config_updated']."</span>";
			$returnVal = TRUE;
		
		} else {
			
			$msg = "<div class='warnText'>".sprintf($lang['admin']['incs']['cant_write'],$path)."</div>";
			$returnVal = FALSE;
		
		}
		
		@chmod($path,0644);
		
		if($output == TRUE){
			return $msg;
		} else {
			return $returnVal;
		}
		
	}


function writeDbConf($new = "", $confName, $prevArray, $output = TRUE) {
	global $lang, $db, $glob;
		
		if (!is_array($new)){
			$msg = "<div class='warnText'>".$lang['admin']['incs']['error_editing']."</div>";
		}
		
		if (count($new) < 1){
			return "";
			exit;
		}
		
		// add old config vars not in $new array
		if(is_array($prevArray)){
			
			foreach($prevArray as $key => $value) {
				
				if($new[$key]!==$prevArray[$key]){
				
					$newConfig[$key] = $value;
					
				}
			
			}
			
		}
		
		// build new config vars from $new array
		if(is_array($new)){
		
			foreach($new as $key => $value) {			
				
				$newConfig[$key] = $value;
				
			}
			
		}
		
		// serialise the array for DB storage bas64 encode to stop serialize bug
		foreach($newConfig as $key => $value) {
			$value = str_replace(array("\'","'"),"&#39;",$value);
			$newConfigBase64[base64_encode($key)] = base64_encode($value);

		}
		
		
		$configText = serialize($newConfigBase64);
   
   		// see if database config exists
		$result = $db->numrows("SELECT * FROM ".$glob['dbprefix']."CubeCart_config WHERE name = ".$db->mySQLSafe($confName));
		
		if($result>0){
			$array['array'] = $db->mySQLSafe($configText);
			$store = $db->update($glob['dbprefix']."CubeCart_config",$array,"name = ".$db->mySQLSafe($confName));
		} else {
			$array['name'] = $db->mySQLSafe($confName);
			$array['array'] = $db->mySQLSafe($configText);
			$store = $db->insert($glob['dbprefix']."CubeCart_config",$array);
		}
		
		
		if($store == TRUE){
		
			$msg = "<span class='infoText'>".$lang['admin']['incs']['db_config_updated']."</span>";
			$returnVal = TRUE;
		
		} else {
			
			$msg = "<div class='warnText'>".sprintf($lang['admin']['incs']['db_cant_write'],$path)."</div>";
			$returnVal = FALSE;
		
		}
		
		
		if($output == TRUE){
		
			return $msg;
		
		} else {
			
			return $returnVal;
		
		}
		
}
	
function jsGeoLocation($countryVar, $countyVar, $nullText){

	global $config, $db, $lang, $glob;

	// get iso counties
$isoCounties = $db->select("SELECT * FROM  ".$glob['dbprefix']."CubeCart_iso_counties");

$jsScript = "<!--
function resetZoneSelected(theForm) {
  if (theForm.state.value != '') {
    theForm.".$countyVar.".selectedIndex = '0';
    if (theForm.".$countyVar.".options.length > 0) {
      theForm.state.value = '-- ".$lang['admin']['incs']['select_above']." --';
    }
  }
}

function updateCounty(theForm) {
  var NumState = theForm.".$countyVar.".options.length;
  var CurrentCountry = \"\";

  while(NumState > 0) {
    NumState--;
    theForm.".$countyVar.".options[NumState] = null;
  }         

  CurrentCountry = theForm.".$countryVar.".options[theForm.".$countryVar.".selectedIndex].value;";

  for($i=0; $i<count($isoCounties); $i++){
  
  if($i==0){
		
		$optionKey = 0;
		
		$jsScript .= "if (CurrentCountry == \"".$isoCounties[$i]['countryId']."\") {"; 
		$jsScript .= "\r\ntheForm.".$countyVar.".options[".$optionKey."] = new Option(\"".$nullText."\", \"\");\r\n";

		
  } elseif($oldCountryId !== $isoCounties[$i]['countryId']) {
  		
		$optionKey = 0;
		
		$jsScript .= "\r\n} else if (CurrentCountry == \"".$isoCounties[$i]['countryId']."\") {\r\n";
		$jsScript .= "\r\ntheForm.".$countyVar.".options[".$optionKey."] = new Option(\"".$nullText."\", \"\");\r\n";
		
		
  }
  $optionKey++;  
   
   $jsScript .= "\r\ntheForm.".$countyVar.".options[".$optionKey."] = new Option(\"".$isoCounties[$i]['name']."\", \"".$isoCounties[$i]['id']."\");\r\n";
   
   $oldCountryId = $isoCounties[$i]['countryId'];
  }
    
  $jsScript .= "\r\n } else { \r\n theForm.".$countyVar.".options[0] = new Option(\"".$nullText."\", \"\"); \r\n } \r\n } \r\n //-->";
  
  return $jsScript;

}
?>