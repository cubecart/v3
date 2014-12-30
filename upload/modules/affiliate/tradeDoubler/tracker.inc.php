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
|	Tracking code for tradeDoubler	
+--------------------------------------------------------------------------
*/
$module = fetchDbConfig("tradeDoubler");

if($affVar['testMode'] == 1){
$testVar = "&testonly=1";
} else {
$testVar = "";
}

$affCode = "<!-- begin tradeDoubler Affiliate Tracker -->\r\n";
$affCode .= "<img src='http://www.awin1.com/sale.php?sale=".sprintf("%.2f",$order[0]['prod_total'])."&extra=".$basket['cart_order_id']."&type=s&mid=".$module['acNo'].$testVar."' />\r\n";
$affCode .= "<!-- end tradeDoubler Affiliate Tracker -->\r\n";
?>