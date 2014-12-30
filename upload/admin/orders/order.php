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
|	order.php
|   ========================================
|	Manage Single Order
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

if(isset($_GET['sendInvoice']) && $_GET['sendInvoice']==1){
	$cart_order_id = $_GET['cart_order_id'];
	include("../../includes/orderSuccess.inc.php");
}
if(isset($_GET['reset']) && $_GET['reset']>0){
		$record['noDownloads'] = 0;
		$record['expire'] = time()+$config['dnLoadExpire'];
		$where = "id = ".$_GET['reset'];
		$update = $db->update($glob['dbprefix']."CubeCart_Downloads", $record, $where);
}
if(isset($_POST['ship_date'])){

	$data['comments'] = $db->mySQLsafe($_POST['comments']);
	$data['status'] = $db->mySQLsafe($_POST['status']);
	$data['ship_date'] = $db->mySQLsafe($_POST['ship_date']);
	
	$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $data,"cart_order_id=".$db->mySQLsafe($_GET['cart_order_id']));
	
	if($_POST['inform']==1){

	// make email
		include("../../classes/htmlMimeMail.php");
		
		$mail = new htmlMimeMail();
        
		$text = sprintf($lang['admin']['orders']['order_email'],$_POST['name'],$_GET['cart_order_id'],orderStatus($_POST['status']));
		
		if(!empty($_POST['customerComments'])){
			$text .= sprintf($lang['admin']['orders']['email_staff_comments'],$_POST['customerComments']);
		}
		
		$text .= sprintf($lang['admin']['orders']['email_sent_from'],$glob['storeURL']);
		
		$mail->setText($text);
		$mail->setReturnPath($config['masterEmail']);
		$mail->setFrom($config['masterName'].' <'.$config['masterEmail'].'>');
		$mail->setSubject($lang['admin']['orders']['email_subj_status_change'].' '.$_GET['cart_order_id']);
		$mail->setHeader('X-Mailer', 'CubeCart Mailer');
		$result = $mail->send(array($_POST['email']), $config['mailMethod']);
	
	
	}
	
	if($_POST['status']==2){
	
		$msg = "<p class='infoText'>".$lang['admin']['orders']['send_invoice_q']."<a href='order.php?cart_order_id=".$_GET['cart_order_id']."&amp;sendInvoice=1' class='txtLink'>".$lang['admin']['orders']['click_here']."</a></p>\n";
	}
	
}

include("../includes/header.inc.php");

$result = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_order_sum INNER JOIN ".$glob['dbprefix']."CubeCart_customer ON ".$glob['dbprefix']."CubeCart_order_sum.customer_id = ".$glob['dbprefix']."CubeCart_customer.customer_id WHERE ".$glob['dbprefix']."CubeCart_order_sum.cart_order_id = ".$db->mySQLSafe($_GET['cart_order_id']));
?>

<p class="pageTitle"><?php echo $lang['admin']['orders']['order_no2'];?> <?php echo $_GET['cart_order_id']; ?></p>
<p><input type="button" class="submit" onclick="openPopUp('print.php?cart_order_id=<?php echo $_GET['cart_order_id']; ?>', 'PrintSlip', 600, 550, 1)" value="<?php echo $lang['admin']['orders']['print_packing_slip'];?>" />
</p>
<?php
if(isset($msg)){
 echo stripslashes($msg);
}
?>
<table border="0" width="100%" cellspacing="0" cellpadding="4" class="mainTable">
  <tr>
      <td colspan="2"  class="tdTitle"><?php echo $lang['admin']['orders']['customer_info']; ?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="copyText">
	  <strong><?php echo $lang['admin']['orders']['invoice_address']; ?></strong>
      <div style="padding: 10px;"><?php echo $result[0]['name']; ?><br/>
	  <?php echo $result[0]['add_1']; ?><br/>
	  <?php if(!empty($result[0]['add_2'])) echo $result[0]['add_2']."<br/>"; ?>
	  <?php echo $result[0]['town']; ?>, <?php echo $result[0]['county']; ?><br/>
	  <?php echo $result[0]['postcode']; ?><br/>
	  <?php echo countryName($result[0]['country']); ?></div>
	  </td>
      <td align="left" valign="top" class="copyText">
	  <strong><?php echo $lang['admin']['orders']['delivery_address']; ?></strong>
      <div style="padding: 10px;"><?php echo $result[0]['name_d']; ?><br/>
	  <?php echo $result[0]['add_1_d']; ?><br/>
	  <?php if(!empty($result[0]['add_2_d'])) { echo $result[0]['add_2_d']."<br />"; } ?>
	  <?php echo $result[0]['town_d']; ?>, <?php echo $result[0]['county_d']; ?><br/>
	  <?php echo $result[0]['postcode_d']; ?><br/>
	  <?php echo $result[0]['country_d']; ?></div>
	  </td>
    </tr>

    <tr>
      <td align="left" valign="top" class="copyText"><strong><?php echo $lang['admin']['orders']['contact_info'];?></strong>
      <table border="0" cellspacing="0" cellpadding="3" style="padding: 7px;">
	  <tr>
		<td width="100"><?php echo $lang['admin']['orders']['tel'];?></td>
		<td><?php echo $result[0]['phone']; ?></td>
	  </tr>
	  <tr>
		<td width="100"><?php echo $lang['admin']['orders']['mobile'];?></td>
		<td><?php echo $result[0]['mobile']; ?></td>
	  </tr>
	  <tr>
		<td width="100"><?php echo $lang['admin']['orders']['email'];?></td>
		<td><a href="mailto:<?php echo $result[0]['email']; ?>" class="txtLink"><?php echo $result[0]['email']; ?></a></td>
	  </tr>
	</table>
	  </td>
      <td align="left" valign="top" class="copyText"><strong><?php echo $lang['admin']['orders']['customer_comments'];?></strong>        <div style="padding: 10px;"><?php if(empty($result[0]['customer_comments'])) { echo $lang['admin']['orders']['no_comments_left']; } else { echo "&quot;".$result[0]['customer_comments']."&quot;"; } ?></div>
	  
	  </td>
    </tr>
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['orders']['order_summary'];?></td>
  </tr>
  <?php 
  if($result == TRUE){	
  ?>
  <tr>
    <td colspan="2" align="left" valign="bottom" style="padding: 0px;">
	<?php
	$results = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_order_inv WHERE cart_order_id = ".$db->mySQLSafe($_GET['cart_order_id']));
	?>
	<table width="100%" border="0" cellpadding="7" cellspacing="0" style="padding: 7px;">
      <tr>
        <td class="subHead"><strong><?php echo $lang['admin']['orders']['product'];?></strong></td>
        <td class="subHead"><strong><?php echo $lang['admin']['orders']['code'];?></strong></td>
        <td class="subHead"><strong><?php echo $lang['admin']['orders']['quantity'];?></strong></td>
        <td align="right" class="subHead"><strong><?php echo $lang['admin']['orders']['price'];?></strong></td>
      </tr>
	 <?php 
	 for ($i=0; $i<count($results);$i++){
	 $cellColor = "";
	 $cellColor = cellColor($i);
	 
	 // if the product isn't digital we need to lower the stock if not done so already ;)
	$useStock = $db->select("SELECT useStockLevel FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productId = ".$db->mySQLSafe($results[$i]['productId']));
	 
	 if($_POST['status']==2 && $results[$i]['digital']==0  && $useStock[0]['useStockLevel']==1 && $results[$i]['stockUpdated']==0){
				
		$query = "UPDATE ".$glob['dbprefix']."CubeCart_inventory SET stock_level = stock_level - ".$results[$i]['quantity']." WHERE productId = ".$results[$i]['productId'];
		$update = $db->misc($query);
		
		$query = "UPDATE ".$glob['dbprefix']."CubeCart_order_inv SET stockUpdated =  1 WHERE productId = ".$results[$i]['productId']." AND  product_options = '".$results[$i]['product_options']."' AND cart_order_id = '".$results[$i]['cart_order_id']."'";
	$update = $db->misc($query);
			
	} elseif($_POST['status']==1 && $results[$i]['digital']==0  && $useStock[0]['useStockLevel']==1 && $results[$i]['stockUpdated']==1) {
	
	$query = "UPDATE ".$glob['dbprefix']."CubeCart_inventory SET stock_level = stock_level + ".$results[$i]['quantity']." WHERE productId = ".$results[$i]['productId'];
	$update = $db->misc($query);
	
	$query = "UPDATE ".$glob['dbprefix']."CubeCart_order_inv SET stockUpdated =  0 WHERE productId = ".$results[$i]['productId']." AND  product_options = '".$results[$i]['product_options']."' AND cart_order_id = '".$results[$i]['cart_order_id']."'";
	$update = $db->misc($query);
	
	
	}
	 
	 ?>
	  <tr>
        <td class="<?php echo $cellColor; ?>">
		<span class="copyText"><?php echo $results[$i]['name']; ?><br />
		<?php echo nl2br($results[$i]['product_options']); ?>
		<?php if($results[$i]['digital']==1){ ?>
		
		<?php
		// get digital info 
		$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_Downloads INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON ".$glob['dbprefix']."CubeCart_Downloads.productId =  ".$glob['dbprefix']."CubeCart_inventory.productId WHERE cart_order_id = ".$db->mySQLSafe($_GET['cart_order_id'])." AND ".$glob['dbprefix']."CubeCart_Downloads.productId = ".$db->mySQLSafe($results[$i]['productId']);
	
		$download = $db->select($query);

		?>
		<br /><strong><?php echo $lang['admin']['orders']['download_link']; ?></strong> [<a href="order.php?cart_order_id=<?php echo $_GET['cart_order_id']; ?>&amp;reset=<?php echo $download[0]['id'];?>" class="txtLink" onclick="alert('<?php echo $lang['admin']['orders']['warn_reset'];?>')"><?php echo $lang['admin']['orders']['reset_link'];?></a>]
		<br />
		<?php echo $glob['storeURL']."/download.php?pid=".$download[0]['productId']."&oid=".base64_encode($_GET['cart_order_id'])."&ak=".$download[0]['accessKey'];?>
		  <br />
		 <i><?php echo sprintf($lang['admin']['orders']['download_stats'],$download[0]['noDownloads'],formatTime($download[0]['expire'])); ?></i>
		<?php } ?>
		</span>
		
		</td>
        <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['productCode']; ?></span></td>
        <td class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo $results[$i]['quantity']; ?></span></td>
        <td align="right" class="<?php echo $cellColor; ?>"><span class="copyText"><?php echo priceFormat($results[$i]['price']); ?></span></td>
      </tr>
	  <?php } ?>
	  <tr>
	    <td rowspan="4" align="left" valign="bottom" class="btmSubNav" style="padding: 0px;"><table border="0" cellspacing="0" cellpadding="3" class="copyText">
          <tr>
            <td><?php echo $lang['admin']['orders']['ip_address2'];?></td>
            <td><a href="javascript:;" class="txtLink" onclick="openPopUp('../misc/lookupip.php?ip=<?php echo $result[0]['ip'];?>','misc',300,120)"><?php echo $result[0]['ip'];?></a></td>
          </tr>
          <tr>
            <td><?php echo $lang['admin']['orders']['order_date_time'];?></td>
            <td><?php echo formatTime($result[0]['time']);?></td>
          </tr>
          <tr>
            <td><?php echo $lang['admin']['orders']['payment_method'];?></td>
            <td><?php echo str_replace("_"," ",$result[0]['gateway']);?></td>
          </tr>
		  <tr>
            <td><?php echo $lang['admin']['orders']['ship_method'];?></td>
            <td><?php echo str_replace("_"," ",$result[0]['shipMethod']);?></td>
          </tr>
        </table></td>
	    <td rowspan="4" class="btmSubNav">&nbsp;</td>
	    <td class="btmSubNav"><span class="copyText"><?php echo $lang['admin']['orders']['subtotal'];?></span></td>
	    <td align="right" class="btmSubNav">
		<span class="copyText"><?php echo priceFormat($result[0]['subtotal']);?></span>
		</td>
	  </tr>
	  <tr>
	    <td><span class="copyText"><?php echo $lang['admin']['orders']['total_tax'];?></span></td>
	    <td align="right">
		<span class="copyText"><?php echo priceFormat($result[0]['total_tax']);?></span>
		</td>
	    </tr>
	  <tr>
	    <td><span class="copyText"><?php echo $lang['admin']['orders']['shipping'];?></span></td>
	    <td align="right">
		<span class="copyText"><?php echo priceFormat($result[0]['total_ship']);?></span>
		</td>
	    </tr>
	  <tr>
	    <td style="border-top: 1px solid #000000;"><span class="copyText"><strong><?php echo $lang['admin']['orders']['grand_total'];?></strong></span></td>
	    <td align="right" class="btmSubNav" style="border-top: 1px solid #000000;">
		<span class="copyText"><strong><?php echo priceFormat($result[0]['prod_total']);?></strong></span></td>
	    </tr>
	  
    </table></td>
  </tr>
      <?php
  } else { ?>
   <tr>
    <td colspan="2" class="tdText"><?php echo sprintf($lang['admin']['orders']['order_notfound'],$_GET['cart_order_id']);?></td>
  </tr>
  <?php } ?>
</table>

<br />
<form method="post" action="<?php echo $GLOBALS['rootRel'];?>admin/orders/order.php?cart_order_id=<?php echo $_GET['cart_order_id']; ?>" name="modify" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="3" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['orders']['order_status'];?></td>
    </tr>
  <tr>
    <td width="250" class="copyText"><strong><?php echo $lang['admin']['orders']['shipping_date'];?></strong></td>
    <td class="copyText"><input name="ship_date" type="text" value="<?php echo $result['0']['ship_date']; ?>" class="textbox" id="ship_date" size="35" /> 
      <br />
      <?php echo $lang['admin']['orders']['ship_today'];?> 
      <input name="shipToday" type="checkbox" id="shipToday" value="checkbox" onclick="document.modify.ship_date.value = '<?php echo strip_tags(date($config['dateFormat'])); ?>';" /></td>
  </tr>
  <tr>
    <td width="250" class="copyText">
	<strong><?php echo $lang['admin']['orders']['modify_status'];?></strong><br />
	<?php echo $lang['admin']['orders']['send_invoice_desc']; ?>
	</td>
    <td class="copyText">
	<select name="status">
	<?php
	foreach($lang['orderState'] as $key => $value){
	?>
	<option value="<?php echo $key; ?>" <?php if($result['0']['status'] == $key) echo "selected='selected'"; ?>><?php echo $value; ?></option>
	<?php
	}
	?>
	</select> 
	
	</td>
  </tr>
  <tr>
    <td width="250" class="copyText"><strong><?php echo $lang['admin']['orders']['staff_comments'];?></strong><br />
    <?php echo $lang['admin']['orders']['info_not_sent_customer'];?> 
	</td>
    <td><textarea name="comments" cols="40" rows="5" class="textbox" id="comments"><?php echo $result['0']['comments']; ?></textarea></td>
  </tr>
  <tr>
    <td width="250" class="copyText"><strong><?php echo $lang['admin']['orders']['inform_customer'];?></strong><br />
    <?php echo $lang['admin']['orders']['customer_notified'];?> 
	</td>
    <td><input name="inform" class="textbox" type="checkbox" id="inform" value="1" /></td>
  </tr>
  <tr>
    <td class="copyText"><strong><?php echo $lang['admin']['orders']['comments_2_customer'];?></strong><br />
<?php echo $lang['admin']['orders']['comments_2_customer_desc'];?> </td>
    <td><textarea name="customerComments" cols="40" rows="5" class="textbox" id="customerComments"></textarea></td>
  </tr>
  <tr>
    <td width="250" class="copyText">&nbsp;</td>
    <td>
	<input type="hidden" name="email" value="<?php echo $result[0]['email']; ?>" />
	<input type="hidden" name="name" value="<?php echo $result[0]['name']; ?>" />
	<input type="submit" name="Submit" value="<?php echo $lang['admin']['orders']['save_order_status'];?>" class="submit" /></td>
  </tr>
</table>
</form>
<?php include("../includes/footer.inc.php"); ?>