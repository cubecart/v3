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
|	stats.php
|   ========================================
|	Store Statistics	
+--------------------------------------------------------------------------
*/
include("../../includes/ini.inc.php");
include_once("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../includes/sslSwitch.inc.php");
include_once("../includes/auth.inc.php");
if(permission("statistics","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}
include_once("../includes/header.inc.php");
include_once("../../classes/db.inc.php");
$rowsPerPage = 25;

if(isset($_GET['page'])){
	$page = $_GET['page'];
} else {
	$page = 0;
}
?>
<p class="pageTitle"><?php echo $lang['admin']['stats']['store_stats'];?></p>

<table width="100%" border="0" cellpadding="4" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['stats']['choose_view'];?></td>
  </tr>
  <tr>
    <td colspan="2">
	<ul>
	<li><a href="?stats=searchTerms"  class="txtLink"><?php echo $lang['admin']['stats']['search_terms'];?></a></li>
	<li><a href="?stats=prodPopularity"  class="txtLink"><?php echo $lang['admin']['stats']['product_pop'];?></a></li>
	<li><a href="?stats=online"  class="txtLink"><?php echo $lang['admin']['stats']['cust_online'];?></a></li>
	</ul>
	</td>
  </tr>
</table>

<?php 
switch ($_GET['stats']) { 
	case "searchTerms"; 
	// pull out db info
	$db = new db();
	// make sql query
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_search ORDER BY hits DESC";
	// query database
	
	$results = $db->select($query, $rowsPerPage, $page);
	$numrows = $db->numrows($query);
	$totalHits = $db->select("SELECT sum(hits) as totalHits FROM  ".$glob['dbprefix']."CubeCart_search");
	$totalHits = $totalHits[0]['totalHits'];
?>
<br />

<table width="100%" border="0" cellpadding="3" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="3" class="tdTitle"><?php echo $lang['admin']['stats']['search_terms_order_by'];?></td>
  </tr>
  <?php if($results==TRUE) {
  		
			for ($i=0; $i<count($results); $i++){
			
			$percentage = 100*($results[$i]['hits'] / $totalHits);
			
			$rank = ($page * $rowsPerPage) + ($i + 1);
  
  
  			$cellColor = cellColor($i);
  ?>
  <tr>
    <td class="<?php echo $cellColor; ?>" width="15"><span class="copyText"><?php echo $rank; ?>.</span></td>
    <td class="<?php echo $cellColor; ?>" width="100" nowrap='nowrap'><span class="copyText"><?php echo $results[$i]['searchstr']; ?></span></td>
    <td class="<?php echo $cellColor; ?>" nowrap='nowrap'><span class="copyText"><img src="../images/statsBar.gif" alt="" width="<?php echo sprintf("%.0f",$percentage); ?>%" height="10" title="" /> <?php echo sprintf("%.2f",$percentage); ?>%</span></td>
  </tr>
		<?php } ?>
  <?php	} else { ?>
  <tr>
    <td colspan="3"><span class="copyText"><?php echo $lang['admin']['stats']['sorry_no_data'];?></span></td>
  </tr>  
  <?php } ?>
</table>
<p class="copyText"><?php echo $db->paginate($numrows, $rowsPerPage, $page, "page"); ?></p>


<?php 
	break;
	case "prodPopularity";
// pull out db info
	$db = new db();
	// make sql query
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_inventory ORDER BY popularity DESC";
	// query database
	$results = $db->select($query, $rowsPerPage, $page);
	$numrows = $db->numrows($query);
	$totalHits = $db->select("SELECT sum(popularity) as totalHits FROM  ".$glob['dbprefix']."CubeCart_inventory");
	$totalHits = $totalHits[0]['totalHits']; 
?>
<br />

<table width="100%" border="0" cellpadding="3" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="3" class="tdTitle"><?php echo $lang['admin']['stats']['product_pop_ordered_by'];?></td>
  </tr>
  <?php if($results==TRUE) {
  		
			for ($i=0; $i<count($results); $i++){
			
			$percentage = 100*($results[$i]['popularity'] / $totalHits);
			
			$rank = ($page * $rowsPerPage) + ($i + 1);
			
			$cellColor = cellColor($i);
  ?>
  <tr>
    <td class="<?php echo $cellColor; ?>" width="15"><span class="copyText"><?php echo $rank; ?>.</span></td>
    <td class="<?php echo $cellColor; ?>" width="100" nowrap='nowrap'><a href="<?php echo $GLOBALS['rootRel']; ?>index.php?act=viewProd&amp;productId=<?php echo $results[$i]['productId']; ?>" target="_blank" class="txtLink"><?php echo $results[$i]['name']; ?></a></td>
    <td class="<?php echo $cellColor; ?>" nowrap='nowrap'><span class="copyText"><img src="../images/statsBar.gif" alt="" width="<?php echo sprintf("%.0f",$percentage); ?>%" height="10" title="" /> <?php echo sprintf("%.2f",$percentage); ?>%</span></td>
  </tr>
		<?php } ?>
  <?php	} else { ?>
  <tr>
    <td colspan="3"><span class="copyText"><?php echo $lang['admin']['stats']['sorry_no_data'];?></span></td>
  </tr>  
  <?php } ?>
</table>
<p class="copyText"><?php echo $db->paginate($numrows, $rowsPerPage, $page, "page"); ?></p>
<?php  break; ?>
<?php 
	case "online";
// pull out db info
	$db = new db();
	// make sql query
	$timeLimit = time() - 900;
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_sessions LEFT JOIN ".$glob['dbprefix']."CubeCart_customer ON ".$glob['dbprefix']."CubeCart_sessions.customer_id = ".$glob['dbprefix']."CubeCart_customer.customer_id WHERE timeLast>".$timeLimit." ORDER BY timeLast DESC";
	// query database
	$results = $db->select($query, $rowsPerPage, $page);
	$numrows = $db->numrows($query);
?>
<p class="copyText"><?php echo $lang['admin']['stats']['cust_active'];?></p>

<table width="100%" border="0" cellpadding="3" cellspacing="0" class="mainTable">
  <tr>
    <td class="tdTitle"><?php echo $lang['admin']['stats']['hash'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['stats']['customer'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['stats']['location'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['stats']['sess_start_time'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['stats']['last_click_time'];?></td>
    <td class="tdTitle"><?php echo $lang['admin']['stats']['sess_length'];?></td>
  </tr>
  <?php if($results==TRUE) {
  		
			for ($i=0; $i<count($results); $i++){
		
			$rank = ($page * $rowsPerPage) + ($i + 1);
			
			$cellColor = cellColor($i);
  ?>

  <tr>
    <td class="<?php echo $cellColor; ?>" width="15"><span class="copyText"><?php echo $rank; ?>.</span></td>
    <td class="<?php echo $cellColor; ?>" width="100" nowrap='nowrap'>
	<span class="copyText">
	<?php if($results[$i]['customer_id']==0){ 
	echo $lang['admin']['stats']['geust'];
	} else {
	echo $results[$i]['title']." ".$results[$i]['firstName']." ".$results[$i]['lastName'];
	} ?>
	</span></td>
	<td class="<?php echo $cellColor; ?>" width="100" nowrap='nowrap'><a href="<?php echo $results[$i]['location']; ?>" class="txtLink"><?php echo $results[$i]['location']; ?></a></td>
    <td class="<?php echo $cellColor; ?>" nowrap='nowrap'><span class="copyText"><?php echo formatTime($results[$i]['timeStart']); ?></span></td>
	<td class="<?php echo $cellColor; ?>" nowrap='nowrap'><span class="copyText"><?php echo formatTime($results[$i]['timeLast']); ?></span></td>
    <td class="<?php echo $cellColor; ?>" nowrap='nowrap'><span class="copyText"><?php echo sprintf("%.2f",($results[$i]['timeLast']-$results[$i]['timeStart'])/60); ?> Mins</span></td>
  </tr>
		<?php } ?>
  <?php	} else { ?>
  <tr>
    <td colspan="3"><span class="copyText"><?php echo $lang['admin']['stats']['sorry_no_data'];?></span></td>
  </tr>  
  <?php } ?>
</table>

<?php } // end switch ?>
<?php include("../includes/footer.inc.php"); ?>