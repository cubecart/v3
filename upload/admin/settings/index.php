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
|	settings.php
|   ========================================
|	Manage Main Store Settings	
+--------------------------------------------------------------------------
*/
include("../../includes/ini.inc.php");
include("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../includes/sslSwitch.inc.php");
include("../includes/auth.inc.php");
include("../includes/functions.inc.php");

if(permission("settings","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

if(isset($_POST['config'])){
	$config = fetchDbConfig("config");
	$msg = writeDbConf($_POST['config'],"config", $config, "config");
}
$config = fetchDbConfig("config");

$jsScript = jsGeoLocation("siteCountry", "siteCounty", "-- ".$lang['admin']['na']." --");
  
include("../includes/header.inc.php");
?>
<p class="pageTitle"><?php echo $lang['admin']['settings']['store_settings']; ?></p>
<?php
if(isset($msg)){ 
	echo stripslashes($msg); 
} else { 
?>
<p class="copyText"><?php echo $lang['admin']['settings']['edit_below']; ?></p>
<?php } ?>

<form name="updateSettings" method="post" enctype="multipart/form-data" target="_self" action="index.php">
<table border="0" cellspacing="0" cellpadding="4" class="mainTable">
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['meta_data']; ?></strong></td>
	</tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['browser_title']; ?></strong></td>
	  <td align="left"><input name="config[siteTitle]" type="text" size="35" class="textbox" value="<?php echo $config['siteTitle']; ?>" /></td>
    </tr>
	<tr>
	  <td width="30%" align="left" valign="top" class="tdText"><strong><?php echo $lang['admin']['settings']['meta_desc'];?></strong></td>
	  <td align="left"><textarea name="config[metaDescription]" cols="35" rows="3" class="textbox"><?php echo $config['metaDescription']; ?></textarea></td>
    </tr>
	<tr>
	  <td width="30%" align="left" valign="top" class="tdText"><strong><?php echo $lang['admin']['settings']['meta_keywords'];?></strong> <?php echo $lang['admin']['settings']['comma_separated'];?></td>
	  <td align="left"><textarea name="config[metaKeyWords]" cols="35" rows="3" class="textbox"><?php echo $config['metaKeyWords']; ?></textarea></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['store_co_name'];?></strong></td>
	  <td><input name="config[storeName]" type="text" size="35" class="textbox" value="<?php echo $config['storeName']; ?>" /></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['store_address'];?></strong></td>
	  <td><textarea name="config[storeAddress]" cols="35" rows="3" class="textbox"><?php echo $config['storeAddress']; ?></textarea></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['country'];?></strong></td>
      <td>
	  <?php 
	  $countries = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_countries"); 
	  ?>
	
	<select name="config[siteCountry]" id="siteCountry" onChange="updateCounty(this.form);">
	<?php
	for($i=0; $i<count($countries); $i++){
	?>
	<option value="<?php echo $countries[$i]['id']; ?>" <?php if($countries[$i]['id'] == $config['siteCountry']) echo "selected='selected'"; ?>><?php echo $countries[$i]['printable_name']; ?></option>
	<?php } ?>
	</select>	  </td>
	</tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['zone'];?></strong></td>
	  <td>
	  <?php 
	  $counties = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_iso_counties WHERE countryId = '".$config['siteCountry']."'"); 
	  ?>
	  <select name="config[siteCounty]" id="siteCounty">
	  <option value="" <?php if(empty($config['siteCounty'])) echo "selected='selected'"; ?>>-- <?php echo $lang['admin']['na'];?> --</option>
	  <?php
	  if($counties == TRUE){
	  ?>
	  <?php for($i=0; $i<count($counties); $i++){ ?>
	  <option value="<?php echo $counties[$i]['id']; ?>" <?php if($counties[$i]['id']==$config['siteCounty']) echo "selected='selected'"; ?>><?php echo $counties[$i]['name']; ?></option>
	  <?php } ?>
	  <?php } ?>
      </select></td>
    </tr>
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['dirs_folders'];?></strong></td>
	</tr>
	<!--
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['rootRel'];?></strong> <?php echo $lang['admin']['settings']['include_slash'];?></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[rootRel]" value="<?php echo $glob['rootRel']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['storeURL'];?></strong> <?php echo $lang['admin']['settings']['include_slash'];?><br />
	  <?php echo $lang['admin']['settings']['eg_domain_com'];?> </td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[storeURL]" value="<?php echo $glob['storeURL']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['rootDir'];?></strong><br />
	  <?php echo $lang['admin']['settings']['eg_root_path'];?>
	</td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[rootDir]" value="<?php echo $glob['rootDir']; ?>" /></td>
	</tr>
	-->
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['rootRel_SSL'];?></strong> <br />
<?php echo $lang['admin']['settings']['include_slash'];?> </td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[rootRel_SSL]" value="<?php echo $config['rootRel_SSL']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['storeURL_SSL'];?></strong> <br />
	  <?php echo $lang['admin']['settings']['eg_domain_SSL'];?></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[storeURL_SSL]" value="<?php echo $config['storeURL_SSL']; ?>" /></td>
	</tr>
	<!--
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['rootDir_SSL'];?></strong><br />
	  <?php echo $lang['admin']['settings']['eg_root_path_secure'];?></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[rootDir_SSL]" value="<?php echo $config['rootDir_SSL']; ?>" /></td>
	</tr>
	-->
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['enable_ssl'];?></strong><br />
      <?php echo $lang['admin']['settings']['ssl_warn'];?> </td>
	  <td align="left">
	  <select name="config[ssl]" class="textbox">
		<option value="1" <?php if($config['ssl']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
		<option value="0" <?php if($config['ssl']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
	  </select></td>
    </tr>
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['digital_downloads'];?></strong></td>
	</tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['download_expire_time'];?></strong><br/>
      <?php echo $lang['admin']['settings']['seconds'];?></td>
	  <td align="left"><input type="text" size="35" class="textbox" name="config[dnLoadExpire]" value="<?php echo $config['dnLoadExpire']; ?>" /></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['download_attempts'];?></strong><br />
      <?php echo $lang['admin']['settings']['attempts_desc'];?></td>
	  <td align="left"><input type="text" size="35" class="textbox" name="config[dnLoadTimes]" value="<?php echo $config['dnLoadTimes']; ?>" /></td>
    </tr>
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['styles_misc'];?></strong></td>
	</tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['default_language'];?></strong></td>
	  <td align="left">
	  <?php
	$path = $GLOBALS['rootDir']."/language";
	if ($dir = opendir($path)) {
		?>
		<select class="textbox" name="config[defaultLang]">
		<?php
	
		while (false !== ($folder = readdir($dir))) {
			
			if(!eregi($folder,array(".",".."))){
			
			include($path."/".$folder."/config.inc.php");
			?>
				<option value="<?php echo $folder; ?>" <?php if($config['defaultLang']==$folder) echo "selected='selected'"; ?>><?php echo $langName; ?></option>
			<?php 
			}
		} 
		?>
		</select>
		
	<?php } ?>	  </td>
    </tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['store_skin'];?></strong></td>
		<td align="left">
	<?php
	$path = $GLOBALS['rootDir']."/skins";
	if ($dir = opendir($path)) {
		?>
		<select class="textbox" name="config[skinDir]">
		<?php
	
		while (false !== ($file = readdir($dir))) {
			
			if(!eregi($file,array(".",".."))){
			?>
				<option value="<?php echo $file; ?>" <?php if($file==$config['skinDir']) { echo "selected='selected'"; } ?>><?php echo $file; ?></option>
			<?php 
			}
		} 
		?>
		  </select>
		
	<?php } ?>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['show_latest'];?></strong></td>
		<td align="left">
		<select class="textbox" name="config[showLatestProds]">
			<option value="0" <?php if($config['showLatestProds']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
			<option value="1" <?php if($config['showLatestProds']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
		</select>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['no_latest'];?></strong></td>
		<td align="left">
		<input type="text" class="textbox" size="3" name="config[noLatestProds]" value="<?php echo $config['noLatestProds']; ?>" />		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['no_cats_per_row'];?></strong></td>
		<td align="left"><input type="text" size="3" class="textbox" name="config[displaycatRows]" value="<?php echo $config['displaycatRows']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['dir_symbol'];?></strong></td>
		<td align="left"><input type="text" size="20" class="textbox" name="config[dirSymbol]" value="<?php echo $config['dirSymbol']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['prods_per_page'];?></strong></td>
		<td align="left"><input type="text" size="3" class="textbox" name="config[productPages]" value="<?php echo $config['productPages']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['precis_length'];?></strong><?php echo $lang['admin']['settings']['chars'];?></td>
		<td align="left"><input type="text" size="3" class="textbox" name="config[productPrecis]" value="<?php echo $config['productPrecis']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['no_sale_items'];?></strong></td>
		<td align="left"><input type="text" size="3" class="textbox" name="config[noSaleBoxItems]" value="<?php echo $config['noSaleBoxItems']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['no_pop_prod'];?></strong></td>
		<td align="left"><input type="text" size="3" class="textbox" name="config[noPopularBoxItems]" value="<?php echo $config['noPopularBoxItems']; ?>" /></td>
	</tr>

	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['email_name'];?></strong><br />
	  <?php echo $lang['admin']['settings']['email_name_desc'];?></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[masterName]" value="<?php echo $config['masterName']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['email_address'];?></strong><br />
	<?php echo $lang['admin']['settings']['email_address_desc'];?></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[masterEmail]" value="<?php echo $config['masterEmail']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['mail_method'];?></strong><br />
	  <?php echo $lang['admin']['settings']['mail_recommended'];?> </td>
		<td align="left">
			<select name="config[mailMethod]" class="textbox">
				<option value="mail" <?php if($config['mailMethod']=="mail") echo "selected='selected'"; ?>>mail()</option>
				<option value="smtp" <?php if($config['mailMethod']=="smtp") echo "selected='selected'"; ?>>SMTP</option>
			</select>		</td>
	</tr>
	<tr>
	  <td class="tdText"><?php echo $lang['admin']['settings']['smtpHost'];?></td>
	  <td align="left" class="tdText"><input type="text" size="25" class="textbox" name="config[smtpHost]" value="<?php echo $config['smtpHost']; ?>" /> 
	     <?php echo $lang['admin']['settings']['defaultHost'];?></td>
    </tr>
		<tr>
		  <td class="tdText"><?php echo $lang['admin']['settings']['smtpPort'];?></td>
		  <td align="left" class="tdText"><input type="text" size="3" class="textbox" name="config[smtpPort]" value="<?php echo $config['smtpPort']; ?>" />
	      <?php echo $lang['admin']['settings']['defaultPort'];?></td>
    </tr>
		<tr>
		  <td class="tdText"><?php echo $lang['admin']['settings']['smtpAuth'];?></td>
		  <td align="left" class="tdText"><select name="config[smtpAuth]" class="textbox">
            <option value="TRUE" <?php if($config['smtpAuth']=="TRUE") echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
            <option value="FALSE" <?php if($config['smtpAuth']=="FALSE") echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
          </select> 
		  <?php echo $lang['admin']['settings']['defaultAuth'];?></td>
    </tr>
		<tr>
		  <td class="tdText"><?php echo $lang['admin']['settings']['smtpUsername'];?></td>
		  <td align="left"><input type="text" size="25" class="textbox" name="config[smtpUsername]" value="<?php echo $config['smtpUsername']; ?>" /></td>
    </tr>
		<tr>
		  <td class="tdText"><?php echo $lang['admin']['settings']['smtpPassword'];?></td>
		  <td align="left"><input type="text" size="25" class="textbox" name="config[smtpPassword]" value="<?php echo $config['smtpPassword']; ?>" /></td>
    </tr>
		<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['max_upload_size'];?></strong><br />
	  <?php echo $lang['admin']['settings']['under_x_recom'];?></td>
		<td align="left"><input type="text" size="10" class="textbox" name="config[maxImageUploadSize]" value="<?php echo $config['maxImageUploadSize']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['max_sess_length'];?></strong><br />
	  <?php echo $lang['admin']['settings']['seconds'];?></td>
	  <td align="left"><input type="text" size="10" class="textbox" name="config[sqlSessionExpiry]" value="<?php echo $config['sqlSessionExpiry']; ?>" /></td>
	</tr>
	
	
	<tr>
	<td width="30%" class="tdText"><?php echo $lang['admin']['settings']['spambot'];?></td>
	  <td align="left">
	  <select name="config[floodControl]" class="textbox">
			<option value="0" <?php if($config['floodControl']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no']; ?></option>
			<option value="1" <?php if($config['floodControl']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes']; ?></option>
		</select></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong>RSS to Dashboard Newsfeed:</strong></td>
	  <td align="left"><input type="text" class="textbox" size="30" name="config[rssURL]" value="<?php if(!isset($config['rssURL'])) { echo "http://forums.cubecart.com/index.php?act=rssout&id=1"; } else { echo $config['rssURL']; } ?>" /></td>
	</tr>
	
	<!-- REMOVED IN FINAL DUE TO HOW CONFIG IS STORED
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['db_settings'];?></strong></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['db_host'];?></strong></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[dbhost]" value="<?php echo $config['dbhost']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['db_username'];?></strong></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[dbusername]" value="<?php echo $config['dbusername']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['db_password'];?></strong></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[dbpassword]" value="<?php echo $config['dbpassword']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['db_name'];?></strong></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[dbdatabase]" value="<?php echo $config['dbdatabase']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['db_prefix'];?></strong></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[dbprefix]" value="<?php echo $glob['dbprefix']; ?>" /></td>
	</tr>
	END OF REMOVED SECTION -->
	<tr>
		<td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['gd_settings'];?></strong></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['gd_ver'];?></strong></td>
		<td align="left">
			<select name="config[gdversion]" class="textbox">
				<option value="2" <?php if($config['gdversion']==2) echo "selected='selected'"; ?>>2</option>
				<option value="1" <?php if($config['gdversion']==1) echo "selected='selected'"; ?>>1</option>
				<option value="0" <?php if($config['gdversion']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['na']; ?></option>
			</select>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['gd_gif_support'];?></strong></td>
		<td align="left">
			<select name="config[gdGifSupport]" class="textbox">
				<option value="0" <?php if($config['gdGifSupport']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
				<option value="1" <?php if($config['gdGifSupport']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
			</select>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['gd_thumb_size'];?></strong></td>
		<td align="left"><input type="text" size="4" class="textbox" name="config[gdthumbSize]" value="<?php echo $config['gdthumbSize']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['gd_max_img_size'];?></strong></td>
		<td align="left"><input type="text" size="4" class="textbox" name="config[gdmaxImgSize]" value="<?php echo $config['gdmaxImgSize']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['gd_img_quality'];?></strong><br />
<?php echo $lang['admin']['settings']['recom_quality'];?></td>
		<td align="left"><input type="text" size="3" class="textbox" name="config[gdquality]" value="<?php echo $config['gdquality']; ?>" /></td>
	</tr>
		<tr>
		  <td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['stock_settings'];?></strong></td>
    </tr>
		<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['use_stock'];?></strong></td>
		<td align="left">
			<select name="config[stockLevel]" class="textbox">
				<option value="1" <?php if($config['stockLevel']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
				<option value="0" <?php if($config['stockLevel']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
			</select>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['allow_out_of_stock_purchases'];?></strong></td>
		<td align="left">
			<select name="config[outofstockPurchase]" class="textbox">
				<option value="1" <?php if($config['outofstockPurchase']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
				<option value="0" <?php if($config['outofstockPurchase']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
			</select>		</td>
	</tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['weight_unit'];?></strong></td>
	  <td align="left"><select name="config[weightUnit]" class="textbox">
        <option value="Lbs" <?php if($config['weightUnit']=="Lb") echo "selected='selected'"; ?>>Lbs</option>
        <option value="Kg" <?php if($config['weightUnit']=="Kg") echo "selected='selected'"; ?>>Kg</option>
      </select></td>
    </tr>
			<tr>
		  <td colspan="2" class="tdTitle"><strong><?php echo $lang['admin']['settings']['time_and_date'];?></strong></td>
    </tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['time_format'];?></strong><br />
	  <?php echo $lang['admin']['settings']['time_format_desc'];?></td>
		<td align="left"><input type="text" size="20" class="textbox" name="config[timeFormat]" value="<?php echo $config['timeFormat']; ?>" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['time_offset'];?></strong><br />
	  <?php echo $lang['admin']['settings']['time_offset_desc'];?></td>
		<td align="left"><input name="config[timeOffset]" type="text" class="textbox" value="<?php echo $config['timeOffset']; ?>" size="20" /></td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['date_format'];?></strong><br />	  
	  <?php echo $lang['admin']['settings']['date_format_desc'];?></td>
		<td align="left"><input type="text" size="35" class="textbox" name="config[dateFormat]" value="<?php echo $config['dateFormat']; ?>" /></td>
	</tr>
	<tr>
	  <td colspan="2" class="tdTitle"><?php echo $lang['admin']['settings']['locale_settings'];?></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['default_currency'];?></strong></td>
	  <td align="left">
	  <?php
	  $currencies = $db->select("SELECT name, code FROM ".$glob['dbprefix']."CubeCart_currencies WHERE active = 1 ORDER BY name ASC");
		?>
		<select name="config[defaultCurrency]">
		<?php
		for($i=0; $i<count($currencies); $i++){
		?>
		<option value="<?php echo $currencies[$i]['code']; ?>" <?php if($currencies[$i]['code']==$config['defaultCurrency']) echo "selected='selected'"; ?>><?php echo $currencies[$i]['name']; ?></option>
		<?php
		}
	  ?>
	  </select>	  </td>
    </tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['inc_tax_prices'];?></strong></td>
		<td align="left">
			<select name="config[priceIncTax]" class="textbox">
				<option value="1" <?php if($config['priceIncTax']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
				<option value="0" <?php if($config['priceIncTax']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
			</select>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['sale_mode'];?></strong></td>
		<td align="left">
			<select name="config[saleMode]" class="textbox">
				<option value="2" <?php if($config['saleMode']==2) echo "selected='selected'"; ?>><?php echo $lang['admin']['settings']['percent_of_all'];?></option>
				<option value="1" <?php if($config['saleMode']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['settings']['ind_sale_per_item'];?></option>
				<option value="0" <?php if($config['saleMode']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['settings']['sale_mode_off'];?></option>
			</select>		</td>
	</tr>
	<tr>
	<td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['sale_per_off'];?></strong><br />
	  <?php echo $lang['admin']['settings']['sale_per_off_desc'];?></td>
		<td align="left"><input type="text" size="5" class="textbox" name="config[salePercentOff]" value="<?php echo $config['salePercentOff']; ?>" /></td>
	</tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['diff_dispatch'];?></strong></td>
	  <td align="left">
	  <select name="config[shipAddressLock]" class="textbox">
        <option value="0" <?php if($config['shipAddressLock']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
        <option value="1" <?php if($config['shipAddressLock']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
      </select></td>
    </tr>
	
	<tr>
	  <td colspan="2" class="tdTitle"><?php echo $lang['admin']['settings']['off_line_settings'];?></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['off_line'];?></strong></td>
	  <td align="left">
	  <select name="config[offLine]" class="textbox">
        <option value="1" <?php if($config['offLine']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
        <option value="0" <?php if($config['offLine']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
      </select></td>
    </tr>
	<tr>
	  <td width="30%" class="tdText"><strong><?php echo $lang['admin']['settings']['off_line_allow_admin'];?></strong></td>
	  <td align="left">
	  <select name="config[offLineAllowAdmin]" class="textbox">
        <option value="1" <?php if($config['offLineAllowAdmin']==1) echo "selected='selected'"; ?>><?php echo $lang['admin']['yes'];?></option>
        <option value="0" <?php if($config['offLineAllowAdmin']==0) echo "selected='selected'"; ?>><?php echo $lang['admin']['no'];?></option>
      </select></td>
    </tr>
	<tr>
	  <td width="30%" valign="top" class="tdText"><strong><?php echo $lang['admin']['settings']['off_line_content'];?></strong></td>
	  <td align="left">
	  <?php
	  	include("../includes/rte/fckeditor.php");
		$oFCKeditor = new FCKeditor('config[offLineContent]');
		$oFCKeditor->BasePath = $GLOBALS['rootRel'].'admin/includes/rte/';
		$oFCKeditor->Value = stripslashes($config['offLineContent']);
		$oFCKeditor->Create();
	  ?>	  </td>
    </tr>
	
	<tr>
	<td width="30%" class="tdText">&nbsp;</td>
	  <td align="left">	  
	  <input name="submit" type="submit" class="submit" id="submit" value="<?php echo $lang['admin']['settings']['update_settings'];?>" /></td>
	</tr>
</table>
</form>
<?php include("../includes/footer.inc.php"); ?>