<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   (c) 2005 CubeCart Limited
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
|   Date: Tuesday, 17th July 2007
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	index.php
|   ========================================
|	Configure United States Postal Service
| Reworked Sunday, 26th November 2005 by Sir William
+--------------------------------------------------------------------------
*/
include("../../../../includes/ini.inc.php");
include("../../../../includes/global.inc.php");
require_once("../../../../classes/db.inc.php");
$db = new db();
include_once("../../../../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../../../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../../../includes/sslSwitch.inc.php");
include("../../../includes/auth.inc.php");
include("../../../includes/header.inc.php");

if(permission("settings","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

if(isset($_POST['module'])){
	include("../../status.php");
	include("../../../includes/functions.inc.php");
	$module = fetchDbConfig($_GET['folder']);
	$msg = writeDbConf($_POST['module'], $_GET['folder'], $module);
	
}
$module = fetchDbConfig($_GET['folder']);
?>




<p><a href="http://www.usps.com/"><img src="logo.gif" alt="" border="0" title="" /></a></p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>

<form action="<?php echo $GLOBALS['rootRel'];?>admin/modules/<?php echo $_GET['module']; ?>/<?php echo $_GET['folder']; ?>/index.php?module=<?php echo $_GET['module']; ?>&amp;folder=<?php echo $_GET['folder']; ?>" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="10" class="tdTitle">Configuration Settings </td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Status:</strong></td>
    <td class="tdText" colspan="9">
	<select name="module[status]">
		<option value="1" <?php if($module['status']==1) echo "selected='selected'"; ?>>Enabled</option>
		<option value="0" <?php if($module['status']==0) echo "selected='selected'"; ?>>Disabled</option>
    </select>
    </td> 
    </tr>
<!-- ### Removed by Sir William Test Mode No Longer Necessary ###
  <tr>
  <td align="left" class="tdText"><strong>Test Mode:</strong></td>
    <td class="tdText"><select name="module[test]">
      <option value="1" <!?php if($module['test']==1) echo "selected='selected'"; ?>>Enabled</option>
      <option value="0" <!?php if($module['test']==0) echo "selected='selected'"; ?>>Disabled</option>
    </select></td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    </tr>
-->
    <tr>
      <td  class="tdText"><strong>Debugging: </strong></td>
      <td  class="tdText"><select name="module[debug]">
        <option value="1" <?php if($module['debug']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['debug']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
      <td  class="tdText">&nbsp;</td>
    </tr>
    <tr>
      <td  class="tdText"><strong>Service Type</strong></td>
      <td  class="tdText"><strong>Status</strong></td>
      <td  class="tdText"><strong>Package Size</strong></td>
      <td  class="tdText"><strong>Container/Mail Types</strong></td>
      <td  class="tdText"><strong>Weight Limit</strong></td>
      <td  class="tdText"><strong>Machinable</strong></td>
      <td  class="tdText"><strong>Length<br />
      </strong>(Rectangular &amp; Non Rectangular)</td>
      <td  class="tdText"><strong>Width<br />
      </strong>(Rectangular &amp; Non Rectangular)</td>
      <td  class="tdText"><strong>Height<br />
      </strong>(Rectangular &amp; Non Rectangular)</td>
      <td  class="tdText"><strong>Girth <br />
      </strong>(Non Rectangular Only) </td>
    </tr>
    <tr>
      <td  class="tdText">Express  Mail  </td>
      <td valign="top"  class="tdText">
	  <select name="module[serviceExpress]">
        <option value="1" <?php if($module['serviceExpress']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['serviceExpress']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select>	  </td>
      <td valign="top"  class="tdText">
        <select name="module[expressSize]">
        <option value="REGULAR" <?php if($module['expressSize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
		<option value="LARGE" <?php if($module['expressSize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
		</select>      </td>
      <td valign="top"  class="tdText">
	
	  <select name="module[expressContainer]">
        <option value="Flat Rate Envelope" <?php if($module['expressContainer']=="Flat Rate Envelope") echo "selected='selected'"; ?>>Flat Rate Envelope</option>
		<option value="Variable" <?php if($module['expressContainer']=="Variable") echo "selected='selected'"; ?>>Variable</option>
      </select></td>
      <td valign="top"  class="tdText">70 lbs.</td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
    </tr>
    <tr>
      <td  class="tdText">First Class</td>
      <td valign="top"  class="tdText">
	  <select name="module[serviceFirstClass]">
        <option value="1" <?php if($module['serviceFirstClass']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['serviceFirstClass']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select>	  </td>
      <td valign="top"  class="tdText">
	  <!--
	  <select name="module[FirstClassSize]">
        <option value="REGULAR" <?php if($module['FirstClassSize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
        <option value="LARGE" <?php if($module['FirstClassSize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
      </select>
	  -->
	  N/A</td>
      <td valign="top"  class="tdText">
	  
	  <select name="module[FirstClassMailType]">
        <option value="LETTER" <?php if($module['FirstClassMailType']=="LETTER") echo "selected='selected'"; ?>>Letter</option>
		<option value="FLAT" <?php if($module['FirstClassMailType']=="FLAT") echo "selected='selected'"; ?>>Flat</option>
		<option value="PARCEL" <?php if($module['FirstClassMailType']=="PARCEL") echo "selected='selected'"; ?>>Parcel</option>
      </select>	  </td>
      <td valign="top"  class="tdText">13 oz.</td>
      <td valign="top"  class="tdText">
	  <select name="module[FirstClassMachineable]">
        <option value="TRUE" <?php if($module['FirstClassMachineable']=="TRUE") echo "selected='selected'"; ?>>True</option>
        <option value="FALSE" <?php if($module['FirstClassMachineable']=="FALSE") echo "selected='selected'"; ?>>False</option>
      </select></td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
    </tr>
    <tr>
      <td  class="tdText">Priority Mail </td>
      <td valign="top"  class="tdText">
	  <select name="module[servicePriority]">
        <option value="1" <?php if($module['servicePriority']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['servicePriority']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select>	  </td>
      <td valign="top"  class="tdText"><select name="module[prioritySize]">
        <option value="REGULAR" <?php if($module['prioritySize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
        <option value="LARGE" <?php if($module['prioritySize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
      </select></td>
      <td valign="top"  class="tdText">
	
	  <select name="module[priorityContainer]">
	  	<option value="Variable" <?php if($module['priorityContainer']=="Variable") echo "selected='selected'"; ?>>Variable Rate</option>
		<option value="RECTANGULAR" <?php if($module['priorityContainer']=="RECTANGULAR") echo "selected='selected'"; ?>>Rectangular</option>
		<option value="NONRECTANGULAR" <?php if($module['priorityContainer']=="NONRECTANGULAR") echo "selected='selected'"; ?>>Non Rectangular</option>
        <option value="Flat Rate Envelope" <?php if($module['priorityContainer']=="Flat Rate Envelope") echo "selected='selected'"; ?> >Flat Rate Envelope</option>
		<option value="Flat Rate Box" <?php if($module['priorityContainer']=="Flat Rate Box") echo "selected='selected'"; ?>>Flat Rate Box</option>
      </select>	  </td>
      <td valign="top"  class="tdText">70 lbs.</td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText"><input name="module[priorityLength]" type="text" size="5" value="<?php echo $module['priorityLength'];?>" /></td>
      <td valign="top"  class="tdText"><input name="module[priorityWidth]" type="text" size="5" value="<?php echo $module['priorityWidth'];?>" /></td>
      <td valign="top"  class="tdText"><input name="module[priorityHeight]" type="text" size="5" value="<?php echo $module['priorityHeight'];?>" /></td>
      <td valign="top"  class="tdText"><input name="module[priorityGirth]" type="text" size="5" value="<?php echo $module['priorityGirth'];?>" /></td>
    </tr>
    <tr>
      <td  class="tdText">Parcel Post </td>
      <td valign="top"  class="tdText">
	  <select name="module[serviceParcel]">
        <option value="1" <?php if($module['serviceParcel']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['serviceParcel']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select>	  </td>
      <td valign="top"  class="tdText"><select name="module[parcelSize]">
        <option value="REGULAR" <?php if($module['parcelSize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
        <option value="LARGE" <?php if($module['parcelSize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
		<option value="OVERSIZE" <?php if($module['parcelSize']=="OVERSIZE") echo "selected='selected'"; ?>>Oversize</option>
      </select></td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">70 lbs.</td>
      <td valign="top"  class="tdText"><select name="module[parcelMachineable]">
        <option value="TRUE" <?php if($module['parcelMachineable']=="TRUE") echo "selected='selected'"; ?>>True</option>
        <option value="FALSE" <?php if($module['parcelMachineable']=="FALSE") echo "selected='selected'"; ?>>False</option>
      </select></td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
    </tr>
    <tr>
      <td  class="tdText">BPM (Bound Printed Matter)</td>
      <td valign="top"  class="tdText">
	  <select name="module[serviceBPM]">
        <option value="1" <?php if($module['serviceBPM']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['serviceBPM']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select>	  </td>
      <td valign="top"  class="tdText"><select name="module[BPMSize]">
         <option value="REGULAR" <?php if($module['BPMSize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
        <option value="LARGE" <?php if($module['BPMSize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
      </select></td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">15 lbs.</td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
    </tr>
    <tr>
      <td  class="tdText">Library</td>
      <td valign="top"  class="tdText">
	  <select name="module[serviceLibrary]">
        <option value="1" <?php if($module['serviceLibrary']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['serviceLibrary']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select>	 </td>
      <td valign="top"  class="tdText"><select name="module[LibrarySize]">
        <option value="REGULAR" <?php if($module['LibrarySize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
        <option value="LARGE" <?php if($module['LibrarySize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
      </select></td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">70 lbs.</td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
    </tr>
    <tr>
      <td  class="tdText">Media</td>
      <td valign="top"  class="tdText"><select name="module[serviceMedia]">
        <option value="1" <?php if($module['serviceMedia']==1) echo "selected='selected'"; ?>>Enabled</option>
        <option value="0" <?php if($module['serviceMedia']==0) echo "selected='selected'"; ?>>Disabled</option>
      </select></td>
      <td valign="top"  class="tdText"><select name="module[MediaSize]">
        <option value="REGULAR" <?php if($module['MediaSize']=="REGULAR") echo "selected='selected'"; ?>>Regular</option>
        <option value="LARGE" <?php if($module['MediaSize']=="LARGE") echo "selected='selected'"; ?>>Large</option>
      </select></td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">70 lbs.</td>
      <td valign="top"  class="tdText">N/A</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
      <td valign="top"  class="tdText">&nbsp;</td>
    </tr>
    <tr>
		<td  class="tdText"><strong>Origin Zip Code:</strong><br />      </td>
		<td valign="top"  class="tdText">
		  <input type="text" name="module[ziporigin]" value="<?php echo $module['ziporigin']; ?>" class="textbox" />    </td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
		<td valign="top"  class="tdText">&nbsp;</td>
    </tr>
  <tr>
    <td  class="tdText"><strong>USPS Username:</strong><br />      </td>
    <td valign="top"  class="tdText">
      <input type="text" name="module[username]" value="<?php echo $module['username']; ?>" class="textbox" />    </td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
    <td valign="top"  class="tdText">&nbsp;</td>
  </tr>
      <tr><td align="left" class="tdText"><strong>USPS Password:</strong></td>
    <td class="tdText"><input type="text" name="module[password]" value="<?php echo $module['password']; ?>" class="textbox" /></td>
    <td class="tdText" colspan="8">&nbsp;&lt;-- Currently unused. Must simply be NOT empty.</td>
    </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
    <td class="tdText">&nbsp;</td>
  </tr>
</table>
<p><strong>Important Notes:</strong><br />
To get this shipping method to work you must first sign up for an account here <a href="http://www.uspswebtools.com/registration/" class="txtLink">http://www.uspswebtools.com/registration/</a>.</p>
<p>After you have registered please email <a href="mailto:icustomercare@usps.com" class="txtLink">icustomercare@usps.com</a> or
call USPS on <strong>1-800-344-7779</strong> (7:00 AM to 11:00 PM EST daily) and ask them to activate your account so that it can access the "production server".</p>
</form>
<?php include("../../../includes/footer.inc.php"); ?>