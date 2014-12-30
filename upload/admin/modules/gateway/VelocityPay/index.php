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
|   Date: Thursday, 13 October 2005
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	index.php
|   ========================================
|	Configure VelocityPay
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
<p><a href="http://www.velocitypay.co.uk/"><img src="logo.gif" alt="" border="0" title="" /></a></p>
<?php 
if(isset($msg)){ 
	echo stripslashes($msg); 
} 
?>
<p class="copyText">&quot;The UK's No.1 Online Payment Service Provider.&quot;</p>

<form action="<?php echo $GLOBALS['rootRel'];?>admin/modules/<?php echo $_GET['module']; ?>/<?php echo $_GET['folder']; ?>/index.php?module=<?php echo $_GET['module']; ?>&amp;folder=<?php echo $_GET['folder']; ?>" method="post" enctype="multipart/form-data">
<table border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle">Configuration Settings </td>
  </tr>
  <tr>
    <td align="left" class="tdText"><strong>Status:</strong></td>
    <td class="tdText">
	<select name="module[status]">
		<option value="1" <?php if($module['status']==1) echo "selected='selected'"; ?>>Enabled</option>
		<option value="0" <?php if($module['status']==0) echo "selected='selected'"; ?>>Disabled</option>
    </select>
	</td>
  </tr>
   <tr>
  	<td align="left" class="tdText"><strong>Description:</strong>
	</td>
    <td class="tdText"><input type="text" name="module[desc]" value="<?php echo $module['desc']; ?>" class="textbox" size="30" /></td>
  </tr>
  <tr>

     <td align="left" class="tdText"><strong>Currency Code:</strong></td>
    <td class="tdText">
        <!-- Select Code --->


            <select name="module[VPCurrencyCode]">
            <option value=020<? if ($module['VPCurrencyCode']==020) { echo " selected"; } ?>>ADP (Andorra)</option>
            <option value=784<? if ($module['VPCurrencyCode']==784) { echo " selected"; } ?>>AED (United Arab Emirates)</option>

            <option value=004<? if ($module['VPCurrencyCode']==004) { echo " selected"; } ?>>AFA (Afghanistan)</option>
            <option value=008<? if ($module['VPCurrencyCode']==008) { echo " selected"; } ?>>ALL (Albania)</option>
            <option value=051<? if ($module['VPCurrencyCode']==051) { echo " selected"; } ?>>AMD (Armenia)</option>
            <option value=530<? if ($module['VPCurrencyCode']==530) { echo " selected"; } ?>>ANG (Netherlands Antilles)</option>
            <option value=024<? if ($module['VPCurrencyCode']==024) { echo " selected"; } ?>>AOK (Angola)</option>
            <option value=032<? if ($module['VPCurrencyCode']==032) { echo " selected"; } ?>>ARA (Argentina)</option>
            <option value=040<? if ($module['VPCurrencyCode']==040) { echo " selected"; } ?>>ATS (Austria)</option>
            <option value=036<? if ($module['VPCurrencyCode']==036) { echo " selected"; } ?>>AUD (Australia)</option>
            <option value=166<? if ($module['VPCurrencyCode']==166) { echo " selected"; } ?>>AUD (Cocos (Keeling) Islands)</option>

            <option value=162<? if ($module['VPCurrencyCode']==162) { echo " selected"; } ?>>AUD (Christmas Island)</option>
            <option value=334<? if ($module['VPCurrencyCode']==334) { echo " selected"; } ?>>AUD (Heard Island and McDonald Islands)</option>
            <option value=296<? if ($module['VPCurrencyCode']==296) { echo " selected"; } ?>>AUD (Kiribati)</option>
            <option value=574<? if ($module['VPCurrencyCode']==574) { echo " selected"; } ?>>AUD (Norfolk Island)</option>
            <option value=520<? if ($module['VPCurrencyCode']==520) { echo " selected"; } ?>>AUD (Nauru)</option>
            <option value=798<? if ($module['VPCurrencyCode']==798) { echo " selected"; } ?>>AUD (Tuvalu)</option>
            <option value=533<? if ($module['VPCurrencyCode']==533) { echo " selected"; } ?>>AWG (Aruba)</option>
            <option value=031<? if ($module['VPCurrencyCode']==031) { echo " selected"; } ?>>AZM (Azerbaijan)</option>
            <option value=070<? if ($module['VPCurrencyCode']==070) { echo " selected"; } ?>>BAD (Bosnia and Herzegovina)</option>

            <option value=052<? if ($module['VPCurrencyCode']==052) { echo " selected"; } ?>>BBD (Barbados)</option>
            <option value=050<? if ($module['VPCurrencyCode']==050) { echo " selected"; } ?>>BDT (Bangladesh)</option>
            <option value=056<? if ($module['VPCurrencyCode']==056) { echo " selected"; } ?>>BEC (Belgium)</option>
            <option value=854<? if ($module['VPCurrencyCode']==854) { echo " selected"; } ?>>BFF (Burkina Faso)</option>
            <option value=100<? if ($module['VPCurrencyCode']==100) { echo " selected"; } ?>>BGL (Bulgaria)</option>
            <option value=048<? if ($module['VPCurrencyCode']==048) { echo " selected"; } ?>>BHD (Bahrain)</option>
            <option value=108<? if ($module['VPCurrencyCode']==108) { echo " selected"; } ?>>BIF (Burundi)</option>
            <option value=060<? if ($module['VPCurrencyCode']==060) { echo " selected"; } ?>>BMD (Bermuda)</option>
            <option value=096<? if ($module['VPCurrencyCode']==096) { echo " selected"; } ?>>BND (Brunei)</option>

            <option value=068<? if ($module['VPCurrencyCode']==068) { echo " selected"; } ?>>BOB (Bolivia)</option>
            <option value=076<? if ($module['VPCurrencyCode']==076) { echo " selected"; } ?>>BRC (Brazil Federative)</option>
            <option value=044<? if ($module['VPCurrencyCode']==044) { echo " selected"; } ?>>BSD (Bahamas)</option>
            <option value=064<? if ($module['VPCurrencyCode']==064) { echo " selected"; } ?>>BTN (Bhutan)</option>
            <option value=072<? if ($module['VPCurrencyCode']==072) { echo " selected"; } ?>>BWP (Botswana)</option>
            <option value=112<? if ($module['VPCurrencyCode']==112) { echo " selected"; } ?>>BYR (Belarus)</option>
            <option value=084<? if ($module['VPCurrencyCode']==084) { echo " selected"; } ?>>BZD (Belize)</option>
            <option value=124<? if ($module['VPCurrencyCode']==124) { echo " selected"; } ?>>CAD (Canada)</option>
            <option value=180<? if ($module['VPCurrencyCode']==180) { echo " selected"; } ?>>CDZ (Congo)</option>

            <option value=756<? if ($module['VPCurrencyCode']==756) { echo " selected"; } ?>>CHF (Switzerland)</option>
            <option value=438<? if ($module['VPCurrencyCode']==438) { echo " selected"; } ?>>CHF (Liechtenstein)</option>
            <option value=152<? if ($module['VPCurrencyCode']==152) { echo " selected"; } ?>>CLF (Chile)</option>
            <option value=156<? if ($module['VPCurrencyCode']==156) { echo " selected"; } ?>>CNY (China People's)</option>
            <option value=170<? if ($module['VPCurrencyCode']==170) { echo " selected"; } ?>>COP (Colombia)</option>
            <option value=188<? if ($module['VPCurrencyCode']==188) { echo " selected"; } ?>>CRC (Costa Rica)</option>
            <option value=192<? if ($module['VPCurrencyCode']==192) { echo " selected"; } ?>>CUP (Cuba)</option>
            <option value=132<? if ($module['VPCurrencyCode']==132) { echo " selected"; } ?>>CVE (Cape Verde)</option>
            <option value=196<? if ($module['VPCurrencyCode']==196) { echo " selected"; } ?>>CYP (Cyprus)</option>

            <option value=203<? if ($module['VPCurrencyCode']==203) { echo " selected"; } ?>>CZK (Czech Republic)</option>
            <option value=276<? if ($module['VPCurrencyCode']==276) { echo " selected"; } ?>>DEM (Germany)</option>
            <option value=262<? if ($module['VPCurrencyCode']==262) { echo " selected"; } ?>>DJF (Djibouti)</option>
            <option value=208<? if ($module['VPCurrencyCode']==208) { echo " selected"; } ?>>DKK (Denmark)</option>
            <option value=234<? if ($module['VPCurrencyCode']==234) { echo " selected"; } ?>>DKK (Faroe Islands)</option>
            <option value=304<? if ($module['VPCurrencyCode']==304) { echo " selected"; } ?>>DKK (Greenland)</option>
            <option value=214<? if ($module['VPCurrencyCode']==214) { echo " selected"; } ?>>DOP (Dominican Republic)</option>
            <option value=012<? if ($module['VPCurrencyCode']==012) { echo " selected"; } ?>>DZD (Algeria)</option>
            <option value=218<? if ($module['VPCurrencyCode']==218) { echo " selected"; } ?>>ECS (Ecuador)</option>

            <option value=233<? if ($module['VPCurrencyCode']==233) { echo " selected"; } ?>>EEK (Estonia)</option>
            <option value=818<? if ($module['VPCurrencyCode']==818) { echo " selected"; } ?>>EGP (Egypt)</option>
            <option value=232<? if ($module['VPCurrencyCode']==232) { echo " selected"; } ?>>ERN (Eritrea)</option>
            <option value=724<? if ($module['VPCurrencyCode']==724) { echo " selected"; } ?>>ESP (Spain)</option>
            <option value=732<? if ($module['VPCurrencyCode']==732) { echo " selected"; } ?>>ESP (Western Sahara)</option>
            <option value=231<? if ($module['VPCurrencyCode']==231) { echo " selected"; } ?>>ETB (Ethiopia)</option>
            <option value=978<? if ($module['VPCurrencyCode']==978) { echo " selected"; } ?>>EUR (Euro)</option>
            <option value=372<? if ($module['VPCurrencyCode']==372) { echo " selected"; } ?>>EUR (Ireland)</option>
            <option value=246<? if ($module['VPCurrencyCode']==246) { echo " selected"; } ?>>FIM (Finland)</option>

            <option value=242<? if ($module['VPCurrencyCode']==242) { echo " selected"; } ?>>FJD (Fiji)</option>
            <option value=238<? if ($module['VPCurrencyCode']==238) { echo " selected"; } ?>>FKP (Falkland Islands (Malvinas))</option>
            <option value=312<? if ($module['VPCurrencyCode']==312) { echo " selected"; } ?>>FRF (Guadaloupe)</option>
            <option value=254<? if ($module['VPCurrencyCode']==254) { echo " selected"; } ?>>FRF (French Guiana)</option>
            <option value=250<? if ($module['VPCurrencyCode']==250) { echo " selected"; } ?>>FRF (France)</option>
            <option value=249<? if ($module['VPCurrencyCode']==249) { echo " selected"; } ?>>FRF (France)</option>
            <option value=474<? if ($module['VPCurrencyCode']==474) { echo " selected"; } ?>>FRF (Martinique)</option>
            <option value=492<? if ($module['VPCurrencyCode']==492) { echo " selected"; } ?>>FRF (Monaco)</option>
            <option value=175<? if ($module['VPCurrencyCode']==175) { echo " selected"; } ?>>FRF (Mayotte)</option>

            <option value=666<? if ($module['VPCurrencyCode']==666) { echo " selected"; } ?>>FRF (Saint Pierre and Miquelon)</option>
            <option value=638<? if ($module['VPCurrencyCode']==638) { echo " selected"; } ?>>FRF (R�union)</option>
            <option value=260<? if ($module['VPCurrencyCode']==260) { echo " selected"; } ?>>FRF (French Southern Territories)</option>
            <option value=092<? if ($module['VPCurrencyCode']==092) { echo " selected"; } ?>>GBP (Virgin Islands, British)</option>
            <option value=239<? if ($module['VPCurrencyCode']==239) { echo " selected"; } ?>>GBP (South Georgia and the South Sandwich Islands)</option>
            <option value=086<? if ($module['VPCurrencyCode']==086) { echo " selected"; } ?>>GBP (British Indian Ocean Territory)</option>
            <option value=826<? if ($module['VPCurrencyCode']==826) { echo " selected"; } ?>>GBP (United Kingdom)</option>
            <option value=268<? if ($module['VPCurrencyCode']==268) { echo " selected"; } ?>>GEL (Georgia)</option>
            <option value=288<? if ($module['VPCurrencyCode']==288) { echo " selected"; } ?>>GHC (Ghana)</option>

            <option value=292<? if ($module['VPCurrencyCode']==292) { echo " selected"; } ?>>GIP (Gibraltar)</option>
            <option value=270<? if ($module['VPCurrencyCode']==270) { echo " selected"; } ?>>GMD (Gambia)</option>
            <option value=324<? if ($module['VPCurrencyCode']==324) { echo " selected"; } ?>>GNS (Guinea)</option>
            <option value=226<? if ($module['VPCurrencyCode']==226) { echo " selected"; } ?>>GQE (Equatorial Guinea)</option>
            <option value=300<? if ($module['VPCurrencyCode']==300) { echo " selected"; } ?>>GRD (Greece)</option>
            <option value=320<? if ($module['VPCurrencyCode']==320) { echo " selected"; } ?>>GTQ (Guatemala)</option>
            <option value=624<? if ($module['VPCurrencyCode']==624) { echo " selected"; } ?>>GWP (Guinea-Bissau)</option>
            <option value=328<? if ($module['VPCurrencyCode']==328) { echo " selected"; } ?>>GYD (Guyana)</option>
            <option value=344<? if ($module['VPCurrencyCode']==344) { echo " selected"; } ?>>HKD (Hong Kong)</option>

            <option value=340<? if ($module['VPCurrencyCode']==340) { echo " selected"; } ?>>HNL (Honduras)</option>
            <option value=191<? if ($module['VPCurrencyCode']==191) { echo " selected"; } ?>>HRD (Croatia)</option>
            <option value=332<? if ($module['VPCurrencyCode']==332) { echo " selected"; } ?>>HTG (Haiti)</option>
            <option value=348<? if ($module['VPCurrencyCode']==348) { echo " selected"; } ?>>HUF (Hungary)</option>
            <option value=360<? if ($module['VPCurrencyCode']==360) { echo " selected"; } ?>>IDR (Indonesia)</option>
            <option value=372<? if ($module['VPCurrencyCode']==372) { echo " selected"; } ?>>IEP (Ireland)</option>
            <option value=376<? if ($module['VPCurrencyCode']==376) { echo " selected"; } ?>>ILS (Israel)</option>
            <option value=356<? if ($module['VPCurrencyCode']==356) { echo " selected"; } ?>>INR (India)</option>
            <option value=368<? if ($module['VPCurrencyCode']==368) { echo " selected"; } ?>>IQD (Iraq)</option>

            <option value=364<? if ($module['VPCurrencyCode']==364) { echo " selected"; } ?>>IRR (Iran)</option>
            <option value=352<? if ($module['VPCurrencyCode']==352) { echo " selected"; } ?>>ISK (Iceland)</option>
            <option value=380<? if ($module['VPCurrencyCode']==380) { echo " selected"; } ?>>ITL (Italy)</option>
            <option value=336<? if ($module['VPCurrencyCode']==336) { echo " selected"; } ?>>ITL (Vatican City State)</option>
            <option value=674<? if ($module['VPCurrencyCode']==674) { echo " selected"; } ?>>ITL (San Marino)</option>
            <option value=388<? if ($module['VPCurrencyCode']==388) { echo " selected"; } ?>>JMD (Jamaica)</option>
            <option value=400<? if ($module['VPCurrencyCode']==400) { echo " selected"; } ?>>JOD (Jordan)</option>
            <option value=392<? if ($module['VPCurrencyCode']==392) { echo " selected"; } ?>>JPY (Japan)</option>
            <option value=404<? if ($module['VPCurrencyCode']==404) { echo " selected"; } ?>>KES (Kenya)</option>

            <option value=417<? if ($module['VPCurrencyCode']==417) { echo " selected"; } ?>>KGS (Kyrgyzstan)</option>
            <option value=116<? if ($module['VPCurrencyCode']==116) { echo " selected"; } ?>>KHR (Cambodia)</option>
            <option value=174<? if ($module['VPCurrencyCode']==174) { echo " selected"; } ?>>KMF (Comoros)</option>
            <option value=408<? if ($module['VPCurrencyCode']==408) { echo " selected"; } ?>>KPW (Korea)</option>
            <option value=410<? if ($module['VPCurrencyCode']==410) { echo " selected"; } ?>>KRW (Korea)</option>
            <option value=414<? if ($module['VPCurrencyCode']==414) { echo " selected"; } ?>>KWD (Kuwait)</option>
            <option value=136<? if ($module['VPCurrencyCode']==136) { echo " selected"; } ?>>KYD (Cayman Islands)</option>
            <option value=398<? if ($module['VPCurrencyCode']==398) { echo " selected"; } ?>>KZT (Kazakhstan)</option>
            <option value=418<? if ($module['VPCurrencyCode']==418) { echo " selected"; } ?>>LAK (Lao)</option>

            <option value=422<? if ($module['VPCurrencyCode']==422) { echo " selected"; } ?>>LBP (Lebanon)</option>
            <option value=144<? if ($module['VPCurrencyCode']==144) { echo " selected"; } ?>>LKR (Sri Lanka)</option>
            <option value=430<? if ($module['VPCurrencyCode']==430) { echo " selected"; } ?>>LRD (Liberia)</option>
            <option value=426<? if ($module['VPCurrencyCode']==426) { echo " selected"; } ?>>LSL (Lesotho)</option>
            <option value=440<? if ($module['VPCurrencyCode']==440) { echo " selected"; } ?>>LTL (Lithuania)</option>
            <option value=442<? if ($module['VPCurrencyCode']==442) { echo " selected"; } ?>>LUF (Luxembourg)</option>
            <option value=428<? if ($module['VPCurrencyCode']==428) { echo " selected"; } ?>>LVL (Latvia)</option>
            <option value=434<? if ($module['VPCurrencyCode']==434) { echo " selected"; } ?>>LYD (Libyan Arab Jamahiriya)</option>
            <option value=504<? if ($module['VPCurrencyCode']==504) { echo " selected"; } ?>>MAD (Morocco)</option>

            <option value=498<? if ($module['VPCurrencyCode']==498) { echo " selected"; } ?>>MDL (Moldova)</option>
            <option value=450<? if ($module['VPCurrencyCode']==450) { echo " selected"; } ?>>MGF (Madagascar)</option>
            <option value=807<? if ($module['VPCurrencyCode']==807) { echo " selected"; } ?>>MKD (Macedonia)</option>
            <option value=466<? if ($module['VPCurrencyCode']==466) { echo " selected"; } ?>>MLF (Mali)</option>
            <option value=104<? if ($module['VPCurrencyCode']==104) { echo " selected"; } ?>>MMK (Myanmar)</option>
            <option value=496<? if ($module['VPCurrencyCode']==496) { echo " selected"; } ?>>MNT (Mongolia)</option>
            <option value=446<? if ($module['VPCurrencyCode']==446) { echo " selected"; } ?>>MOP (Macau)</option>
            <option value=478<? if ($module['VPCurrencyCode']==478) { echo " selected"; } ?>>MRO (Mauritania Islamic)</option>
            <option value=470<? if ($module['VPCurrencyCode']==470) { echo " selected"; } ?>>MTL (Malta)</option>

            <option value=480<? if ($module['VPCurrencyCode']==480) { echo " selected"; } ?>>MUR (Mauritius)</option>
            <option value=462<? if ($module['VPCurrencyCode']==462) { echo " selected"; } ?>>MVR (Maldives)</option>
            <option value=454<? if ($module['VPCurrencyCode']==454) { echo " selected"; } ?>>MWK (Malawi)</option>
            <option value=484<? if ($module['VPCurrencyCode']==484) { echo " selected"; } ?>>MXN (Mexico)</option>
            <option value=458<? if ($module['VPCurrencyCode']==458) { echo " selected"; } ?>>MYR (Malaysia)</option>
            <option value=508<? if ($module['VPCurrencyCode']==508) { echo " selected"; } ?>>MZM (Mozambique)</option>
            <option value=516<? if ($module['VPCurrencyCode']==516) { echo " selected"; } ?>>NAD (Namibia)</option>
            <option value=566<? if ($module['VPCurrencyCode']==566) { echo " selected"; } ?>>NGN (Nigeria)</option>
            <option value=558<? if ($module['VPCurrencyCode']==558) { echo " selected"; } ?>>NIC (Nicaragua)</option>

            <option value=528<? if ($module['VPCurrencyCode']==528) { echo " selected"; } ?>>NLG (Netherlands)</option>
            <option value=578<? if ($module['VPCurrencyCode']==578) { echo " selected"; } ?>>NOK (Norway)</option>
            <option value=074<? if ($module['VPCurrencyCode']==074) { echo " selected"; } ?>>NOK (Bouvet Island)</option>
            <option value=010<? if ($module['VPCurrencyCode']==010) { echo " selected"; } ?>>NOK (Antarctica)</option>
            <option value=744<? if ($module['VPCurrencyCode']==744) { echo " selected"; } ?>>NOK (Svalbard and Jan Mayen)</option>
            <option value=524<? if ($module['VPCurrencyCode']==524) { echo " selected"; } ?>>NPR (Nepal)</option>
            <option value=570<? if ($module['VPCurrencyCode']==570) { echo " selected"; } ?>>NZD (Niue)</option>
            <option value=554<? if ($module['VPCurrencyCode']==554) { echo " selected"; } ?>>NZD (New Zealand)</option>
            <option value=184<? if ($module['VPCurrencyCode']==184) { echo " selected"; } ?>>NZD (Cook Islands)</option>

            <option value=612<? if ($module['VPCurrencyCode']==612) { echo " selected"; } ?>>NZD (Pitcairn)</option>
            <option value=772<? if ($module['VPCurrencyCode']==772) { echo " selected"; } ?>>NZD (Tokelau)</option>
            <option value=512<? if ($module['VPCurrencyCode']==512) { echo " selected"; } ?>>OMR (Oman)</option>
            <option value=591<? if ($module['VPCurrencyCode']==591) { echo " selected"; } ?>>PAB (Panama)</option>
            <option value=604<? if ($module['VPCurrencyCode']==604) { echo " selected"; } ?>>PEI (Peru)</option>
            <option value=598<? if ($module['VPCurrencyCode']==598) { echo " selected"; } ?>>PGK (Papua New Guinea)</option>
            <option value=608<? if ($module['VPCurrencyCode']==608) { echo " selected"; } ?>>PHP (Philippines)</option>
            <option value=586<? if ($module['VPCurrencyCode']==586) { echo " selected"; } ?>>PKR (Pakistan)</option>
            <option value=616<? if ($module['VPCurrencyCode']==616) { echo " selected"; } ?>>PLN (Poland)</option>

            <option value=620<? if ($module['VPCurrencyCode']==620) { echo " selected"; } ?>>PTE (Portugal)</option>
            <option value=600<? if ($module['VPCurrencyCode']==600) { echo " selected"; } ?>>PYG (Paraguay)</option>
            <option value=634<? if ($module['VPCurrencyCode']==634) { echo " selected"; } ?>>QAR (Qatar)</option>
            <option value=642<? if ($module['VPCurrencyCode']==642) { echo " selected"; } ?>>ROL (Romania)</option>
            <option value=643<? if ($module['VPCurrencyCode']==643) { echo " selected"; } ?>>RUR (Russian Federation)</option>
            <option value=646<? if ($module['VPCurrencyCode']==646) { echo " selected"; } ?>>RWF (Rwanda)</option>
            <option value=682<? if ($module['VPCurrencyCode']==682) { echo " selected"; } ?>>SAR (Saudi Arabia)</option>
            <option value=090<? if ($module['VPCurrencyCode']==090) { echo " selected"; } ?>>SBD (Solomon Islands)</option>
            <option value=690<? if ($module['VPCurrencyCode']==690) { echo " selected"; } ?>>SCR (Seychelles)</option>

            <option value=736<? if ($module['VPCurrencyCode']==736) { echo " selected"; } ?>>SDD (Sudan)</option>
            <option value=752<? if ($module['VPCurrencyCode']==752) { echo " selected"; } ?>>SEK (Sweden)</option>
            <option value=702<? if ($module['VPCurrencyCode']==702) { echo " selected"; } ?>>SGD (Singapore)</option>
            <option value=654<? if ($module['VPCurrencyCode']==654) { echo " selected"; } ?>>SHP (Saint Helena)</option>
            <option value=705<? if ($module['VPCurrencyCode']==705) { echo " selected"; } ?>>SIT (Slovenia)</option>
            <option value=703<? if ($module['VPCurrencyCode']==703) { echo " selected"; } ?>>SKK (Slovakia)</option>
            <option value=694<? if ($module['VPCurrencyCode']==694) { echo " selected"; } ?>>SLL (Sierra Leone)</option>
            <option value=706<? if ($module['VPCurrencyCode']==706) { echo " selected"; } ?>>SOS (Somalia)</option>
            <option value=740<? if ($module['VPCurrencyCode']==740) { echo " selected"; } ?>>SRG (Suriname)</option>

            <option value=678<? if ($module['VPCurrencyCode']==678) { echo " selected"; } ?>>STD (S�o Tom� and Pr�ncipe Democratic)</option>
            <option value=222<? if ($module['VPCurrencyCode']==222) { echo " selected"; } ?>>SVC (El Salvador)</option>
            <option value=760<? if ($module['VPCurrencyCode']==760) { echo " selected"; } ?>>SYP (Syrian Arab Republic)</option>
            <option value=748<? if ($module['VPCurrencyCode']==748) { echo " selected"; } ?>>SZL (Swaziland)</option>
            <option value=764<? if ($module['VPCurrencyCode']==764) { echo " selected"; } ?>>THB (Thailand)</option>
            <option value=762<? if ($module['VPCurrencyCode']==762) { echo " selected"; } ?>>TJR (Tajikistan)</option>
            <option value=795<? if ($module['VPCurrencyCode']==795) { echo " selected"; } ?>>TMM (Turkmenistan)</option>
            <option value=788<? if ($module['VPCurrencyCode']==788) { echo " selected"; } ?>>TND (Tunisia)</option>
            <option value=776<? if ($module['VPCurrencyCode']==776) { echo " selected"; } ?>>TOP (Tonga)</option>

            <option value=626<? if ($module['VPCurrencyCode']==626) { echo " selected"; } ?>>TPE (East Timor)</option>
            <option value=792<? if ($module['VPCurrencyCode']==792) { echo " selected"; } ?>>TRL (Turkey)</option>
            <option value=780<? if ($module['VPCurrencyCode']==780) { echo " selected"; } ?>>TTD (Trinidad and Tobago)</option>
            <option value=158<? if ($module['VPCurrencyCode']==158) { echo " selected"; } ?>>TWD (Taiwan,)</option>
            <option value=834<? if ($module['VPCurrencyCode']==834) { echo " selected"; } ?>>TZS (Tanzania)</option>
            <option value=804<? if ($module['VPCurrencyCode']==804) { echo " selected"; } ?>>UAH (Ukraine)</option>
            <option value=800<? if ($module['VPCurrencyCode']==800) { echo " selected"; } ?>>UGS (Uganda)</option>
            <option value=581<? if ($module['VPCurrencyCode']==581) { echo " selected"; } ?>>USD (United States Minor Outlying Islands)</option>
            <option value=840<? if ($module['VPCurrencyCode']==840) { echo " selected"; } ?>>USD (United States)</option>

            <option value=850<? if ($module['VPCurrencyCode']==850) { echo " selected"; } ?>>USD (Virgin Islands, U.S.)</option>
            <option value=796<? if ($module['VPCurrencyCode']==796) { echo " selected"; } ?>>USD (Turks and Caicos Islands)</option>
            <option value=585<? if ($module['VPCurrencyCode']==585) { echo " selected"; } ?>>USD (Palau)</option>
            <option value=630<? if ($module['VPCurrencyCode']==630) { echo " selected"; } ?>>USD (Puerto Rico)</option>
            <option value=580<? if ($module['VPCurrencyCode']==580) { echo " selected"; } ?>>USD (Northern Mariana Islands)</option>
            <option value=584<? if ($module['VPCurrencyCode']==584) { echo " selected"; } ?>>USD (Marshall Islands)</option>
            <option value=316<? if ($module['VPCurrencyCode']==316) { echo " selected"; } ?>>USD (Guam)</option>
            <option value=583<? if ($module['VPCurrencyCode']==583) { echo " selected"; } ?>>USD (Micronesia)</option>
            <option value=016<? if ($module['VPCurrencyCode']==016) { echo " selected"; } ?>>USD (American Samoa)</option>

            <option value=858<? if ($module['VPCurrencyCode']==858) { echo " selected"; } ?>>UYU (Uruguay Eastern)</option>
            <option value=860<? if ($module['VPCurrencyCode']==860) { echo " selected"; } ?>>UZS (Uzbekistan)</option>
            <option value=862<? if ($module['VPCurrencyCode']==862) { echo " selected"; } ?>>VEB (Venezuela)</option>
            <option value=704<? if ($module['VPCurrencyCode']==704) { echo " selected"; } ?>>VND (Vietnam)</option>
            <option value=548<? if ($module['VPCurrencyCode']==548) { echo " selected"; } ?>>VUV (Vanuatu)</option>
            <option value=882<? if ($module['VPCurrencyCode']==882) { echo " selected"; } ?>>WST (Samoa)</option>
            <option value=562<? if ($module['VPCurrencyCode']==562) { echo " selected"; } ?>>XAF (Niger)</option>
            <option value=148<? if ($module['VPCurrencyCode']==148) { echo " selected"; } ?>>XAF (Chad)</option>
            <option value=686<? if ($module['VPCurrencyCode']==686) { echo " selected"; } ?>>XAF (Senegal)</option>

            <option value=768<? if ($module['VPCurrencyCode']==768) { echo " selected"; } ?>>XAF (Togo)</option>
            <option value=384<? if ($module['VPCurrencyCode']==384) { echo " selected"; } ?>>XAF (C�te d'Ivoire)</option>
            <option value=140<? if ($module['VPCurrencyCode']==140) { echo " selected"; } ?>>XAF (Central African Republic)</option>
            <option value=178<? if ($module['VPCurrencyCode']==178) { echo " selected"; } ?>>XAF (Congo)</option>
            <option value=204<? if ($module['VPCurrencyCode']==204) { echo " selected"; } ?>>XAF (Benin)</option>
            <option value=120<? if ($module['VPCurrencyCode']==120) { echo " selected"; } ?>>XAF (Cameroon)</option>
            <option value=266<? if ($module['VPCurrencyCode']==266) { echo " selected"; } ?>>XAF (Gabon)</option>
            <option value=308<? if ($module['VPCurrencyCode']==308) { echo " selected"; } ?>>XCD (Grenada)</option>
            <option value=212<? if ($module['VPCurrencyCode']==212) { echo " selected"; } ?>>XCD (Dominica)</option>

            <option value=028<? if ($module['VPCurrencyCode']==028) { echo " selected"; } ?>>XCD (Antigua and Barbuda)</option>
            <option value=660<? if ($module['VPCurrencyCode']==660) { echo " selected"; } ?>>XCD (Anguilla)</option>
            <option value=500<? if ($module['VPCurrencyCode']==500) { echo " selected"; } ?>>XCD (Montserrat)</option>
            <option value=659<? if ($module['VPCurrencyCode']==659) { echo " selected"; } ?>>XCD (Saint Kitts and Nevis)</option>
            <option value=662<? if ($module['VPCurrencyCode']==662) { echo " selected"; } ?>>XCD (Saint Lucia)</option>
            <option value=670<? if ($module['VPCurrencyCode']==670) { echo " selected"; } ?>>XCD (Saint Vincent and the Grenadines)</option>
            <option value=876<? if ($module['VPCurrencyCode']==876) { echo " selected"; } ?>>XPF (Wallis and Futuna)</option>
            <option value=258<? if ($module['VPCurrencyCode']==258) { echo " selected"; } ?>>XPF (French Polynesia)</option>
            <option value=540<? if ($module['VPCurrencyCode']==540) { echo " selected"; } ?>>XPF (New Caledonia)</option>

            <option value=887<? if ($module['VPCurrencyCode']==887) { echo " selected"; } ?>>YER (Yemen)</option>
            <option value=891<? if ($module['VPCurrencyCode']==891) { echo " selected"; } ?>>YUD (Yugoslavia Federal Republic of Yugoslavia)</option>
            <option value=710<? if ($module['VPCurrencyCode']==710) { echo " selected"; } ?>>ZAL (South Africa)</option>
            <option value=894<? if ($module['VPCurrencyCode']==894) { echo " selected"; } ?>>ZMK (Zambia)</option>
            <option value=716<? if ($module['VPCurrencyCode']==716) { echo " selected"; } ?>>ZWD (Zimbabwe)</option>

            </select>


        <!-- End Select -->
    
    </td>
  </tr>
  <tr> 
  <td align="left" class="tdText"><strong>VPMerchantID:</strong></td>
    <td class="tdText"><input type="text" name="module[VPMerchantID]" value="<?php echo $module['VPMerchantID']; ?>" class="textbox" size="30" /></td>
  </tr>

      <tr> 
  <td align="left" class="tdText"><strong>VPMerchantPassword:</strong></td>
    <td class="tdText"><input type="text" name="module[VPMerchantPassword]" value="<?php echo $module['VPMerchantPassword']; ?>" class="textbox" size="30" /></td>
  </tr>
  <?php
    if ((!isset($module['secureDir']))||($module['secureDir']==""))
    {
        $useSecureDir = "velocitypay";
    }
    else
    {
        $useSecureDir = $module['secureDir'];
    }
  ?>
  <tr>
  <td align="left" class="tdText"><strong>Secure Directory Name:</strong></td>
    <td class="tdText"><input type="text" name="module[secureDir]" value="<?php echo $useSecureDir; ?>" class="textbox" size="30" /></td>
  </tr>
  <tr>
      <td align="left" class="tdText"><strong>Test mode?</strong></td>
      <td class="tdText"><select name="module[testMode]">
        <option value="1" <?php if($module['testMode'] == 1) echo "selected='selected'"; ?>>Yes</option>
        <option value="0" <?php if($module['testMode'] == 0) echo "selected='selected'"; ?>>No</option>
      </select></td>
    </tr>
  <td align="left" class="tdText"><strong>Default:</strong></td>
      <td class="tdText">
	<select name="module[default]">
		<option value="1" <?php if($module['default'] == 1) echo "selected='selected'"; ?>>Yes</option>
		<option value="0" <?php if($module['default'] == 0) echo "selected='selected'"; ?>>No</option>
	</select>
	</td>
  </tr>
  <tr>
    <td align="right" class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" class="submit" value="Edit Config" /></td>
  </tr>
</table>
<p class="copyText">Note: Setting Test Mode to 'Yes' will use the Velocity Pay test username and password.</p>
</form>
<?php include("../../../includes/footer.inc.php"); ?>