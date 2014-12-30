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
|	tracker.php
|   ========================================
|	Tracking code for iDevAffiliate	
+--------------------------------------------------------------------------
*/
$module = fetchDbConfig("iDevAffiliate");
$affCode = "<!-- begin iDevAffiliate Affiliate Tracker -->\r\n";
$affCode .= "<img border='0' src='".$module['URL']."sale.php?idev_cube_1=".sprintf("%.2f", $order[0]['prod_total'])."&idev_cube_2=".$basket['cart_order_id']."' width='0' height='0'' />\r\n";
$affCode .= "<!-- end iDevAffiliate Affiliate Tracker -->\r\n";
?>