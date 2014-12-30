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
|	index.php
|   ========================================
|	Manage Orders
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
include("../includes/rte/fckeditor.php");
include("../includes/auth.inc.php");
include("../../includes/currencyVars.inc.php");
if(permission("orders","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
include("../includes/header.inc.php");

// delete document
if(isset($_GET['delete']) && $_GET['delete']>0){

$record['noOrders'] = "noOrders - 1";
$where = "customer_id = ".$_GET['customer_id'];
$update = $db->update($glob['dbprefix']."CubeCart_customer", $record, $where);

$where = "cart_order_id = ".$db->mySQLSafe($_GET['delete']);

$delete = $db->delete($glob['dbprefix']."CubeCart_order_sum", $where, "");
$delete = $db->delete($glob['dbprefix']."CubeCart_order_inv", $where, ""); 

	if($delete == TRUE){
		$msg = "<p class='infoText'>".$lang['admin']['orders']['delete_success']."</p>";
	} else {
		$msg = "<p class='infoText'>".$lang['admin']['orders']['delete_fail']."</p>";
	}
}


$sqlQuery = "";
if(isset($_GET['oid']) && !isset($_GET['delete'])){
	$sqlQuery = "WHERE cart_order_id = ".$db->mySQLsafe($_GET['oid']);
} elseif(isset($_GET['customer_id']) && $_GET['customer_id']>0){
	$sqlQuery = "WHERE ".$glob['dbprefix']."CubeCart_customer.customer_id = ".$db->mySQLsafe($_GET['customer_id']);
}
 

	// query database
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 0;
	}
	
	$ordersPerPage = 25;
	
	$query = "SELECT ".$glob['dbprefix']."CubeCart_customer.customer_id, status, cart_order_id, time, title, firstName, lastName, ip, prod_total, ".$glob['dbprefix']."CubeCart_customer.email FROM ".$glob['dbprefix']."CubeCart_order_sum INNER JOIN ".$glob['dbprefix']."CubeCart_customer ON ".$glob['dbprefix']."CubeCart_order_sum.customer_id = ".$glob['dbprefix']."CubeCart_customer.customer_id ".$sqlQuery." ORDER BY time DESC";
	
	$results = $db->select($query, $ordersPerPage, $page);
	$numrows = $db->numrows($query);
	$pagination = $db->paginate($numrows, $ordersPerPage, $page, "page");

?>
<p class="pageTitle"><?php echo $lang['admin']['orders']['orders']; ?></p>

<?php
if(isset($msg)){
 echo stripslashes($msg);
}
?>
<p class="copyText"><?php echo $lang['admin']['orders']['all_orders']; ?></p>
<p class="copyText"><?php echo $pagination; ?></p>
<table border="0" width="100%" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
    <td class="tdTitle"><?php echo $lang['admin']['orders']['order_no']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['orders']['status']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['orders']['date_time']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['orders']['customer']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['orders']['ip_address']; ?></td>
    <td class="tdTitle"><?php echo $lang['admin']['orders']['cart_total']; ?></td>
    <td class="tdTitle" align="center"><?php echo $lang['admin']['orders']['action']; ?></td>
  </tr>
  <?php 
  if($results == TRUE){
  	for ($i=0; $i<count($results); $i++){ 
  	
	$cellColor = "";
	$cellColor = cellColor($i);
	
  ?>
  <tr>
    <td class="<?php echo $cellColor; ?>"><a href="order.php?cart_order_id=<?php echo $results[$i]['cart_order_id']; ?>" class="txtLink"><?php echo $results[$i]['cart_order_id']; ?></a></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php 
	$state = $results[$i]['status'];
	echo $lang['orderState'][$state];
	?></span></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo formatTime($results[$i]['time']); ?></span></td>
    <td class="<?php echo $cellColor; ?>"><a href="../customers/index.php?searchStr=<?php echo urlencode($results[$i]['email']); ?>" class="txtLink"><?php echo $results[$i]['title']; ?> <?php echo $results[$i]['firstName']; ?> <?php echo $results[$i]['lastName']; ?></a></td>
    <td class="<?php echo $cellColor; ?>"><a href="javascript:;" class="txtLink" onclick="openPopUp('../misc/lookupip.php?ip=<?php echo $results[$i]['ip']; ?>','misc',300,120)"><?php echo $results[$i]['ip']; ?></a></td>
    <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo priceFormat($results[$i]['prod_total']); ?></span></td>
    <td align="center" class="<?php echo $cellColor; ?>"><a <?php if(permission("orders","delete")==TRUE){ ?>href="javascript:decision('<?php echo $lang['admin']['delete_q']; ?>','?delete=<?php echo $results[$i]['cart_order_id']; ?>&customer_id=<?php echo $results[$i]['customer_id']; ?>');" class="txtLink" <?php } else { echo $link401; } ?>><?php echo $lang['admin']['delete']; ?></a></td>
  </tr>
  <?php } // end loop
  } else { ?>
   <tr>
    <td colspan="7" class="tdText"><?php echo $lang['admin']['orders']['no_orders_in_db']; ?></td>
  </tr>
  <?php } ?>
</table>
<p class="copyText"><?php echo $pagination; ?></p>
<?php include("../includes/footer.inc.php"); ?>