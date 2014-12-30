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
|	Tracking code for clixGalore	
+--------------------------------------------------------------------------
*/
$module = fetchDbConfig("clixGalore");
$affCode = "<!--begin clixGalore code copyright 2004 -->\r\n";
$affCode .= "<img 
src='https://www.clixGalore.com/AdvTransaction.aspx?AdID=".$module['acNo']."&SV=".sprintf("%.2f", $order[0]['prod_total'])."&OID=".$basket['cart_order_id']."' height='0' width='0' border='0' />\r\n";
$affCode .= "<!--end clixGalore code -->\r\n";
?>