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
|   Date: Tuesday, 17th July 2007
|   Email: info (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	tracker.php
|   ========================================
|	Tracking code for JROX.COM Affiliate Manager 	
+--------------------------------------------------------------------------
*/
$module = fetchDbConfig("JROX");
$affCode = "<!-- begin JAM Affiliate Tracker -->\r\n";
$affCode .= "<img border='0' src='".$module['URL']."/sale.php?amount=".sprintf("%.2f", $order[0]['prod_total'])."&trans_id=".$basket['cart_order_id']."' width='0' height='0'' />\r\n";
$affCode .= "<!-- end JAM Affiliate Tracker -->\r\n";
?>
