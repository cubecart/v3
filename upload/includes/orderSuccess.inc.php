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
|	orderSuccess.inc.php
|   ========================================
|	Fulfill the order	
+--------------------------------------------------------------------------
*/

if (eregi(".inc.php",$HTTP_SERVER_VARS['PHP_SELF']) || eregi(".inc.php",$_SERVER['PHP_SELF'])) { 
	echo "<html>\r\n<head>\r\n<title>Forbidden 403</title>\r\n</head>\r\n<body><h3>Forbidden 403</h3>\r\nThe document you are requesting is forbidden.\r\n</body>\r\n</html>";
	exit;
}

$cart_order_id = treatGet($cart_order_id);

// get exchange rates etc
if(isset($cart_order_id) && !empty($cart_order_id)){
	// build thank you and confirmation email
	include_once($glob['rootDir']."/classes/htmlMimeMail.php");
	$mail = new htmlMimeMail();
	
	// update order status to payment received
	$data['status'] = 2;
	$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $data,"cart_order_id=".$db->mySQLSafe($cart_order_id));
	
	$query = "SELECT * FROM ".$glob['dbprefix']."CubeCart_order_sum INNER JOIN ".$glob['dbprefix']."CubeCart_customer ON ".$glob['dbprefix']."CubeCart_order_sum.customer_id = ".$glob['dbprefix']."CubeCart_customer.customer_id WHERE ".$glob['dbprefix']."CubeCart_order_sum.cart_order_id = ".$db->mySQLSafe($cart_order_id);
	
	$order = $db->select($query);
	
	include_once($glob['rootDir']."/includes/currencyVars.inc.php");
	
	$text = sprintf($lang['front']['orderSuccess']['inv_email_body_1'],
				$order[0]['name'],
				$cart_order_id,
				formatTime($order[0]['time']),
				$order[0]['name'],
				priceFormat($order[0]['subtotal']),
				priceFormat($order[0]['total_ship']),
				priceFormat($order[0]['total_tax']),
				priceFormat($order[0]['prod_total']),
				$order[0]['name'],
				$order[0]['add_1'],
				$order[0]['add_2'],
				$order[0]['town'],
				$order[0]['county'],
				$order[0]['postcode'],
				countryName($order[0]['country']),
				$order[0]['name_d'],
				$order[0]['add_1_d'],
				$order[0]['add_2_d'],
				$order[0]['town_d'],
				$order[0]['county_d'],
				$order[0]['postcode_d'],
				$order[0]['country_d'],
				str_replace("_"," ",$order[0]['gateway']),
				str_replace("_"," ",$order[0]['shipMethod']));
	
	if(!empty($order[0]['customer_comments'])){
		$text .= sprintf($lang['front']['orderSuccess']['inv_email_body_2'],
					$order[0]['customer_comments']);
	}
	
	$text .= $lang['front']['orderSuccess']['inv_email_body_3'];
	
	$products = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_order_inv WHERE cart_order_id = ".$db->mySQLSafe($cart_order_id));
	
	if($products==TRUE){
	
		for($i=0;$i<count($products); $i++){
		
			// if the product isn't digital we need to lower the stock if not done so already ;)
			$useStock = $db->select("SELECT useStockLevel FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productId = ".$db->mySQLSafe($products[$i]['productId']));
			
			if($products[$i]['digital']==0  && $useStock[0]['useStockLevel']==1 && $products[$i]['stockUpdated']==0){
				
				$query = "UPDATE ".$glob['dbprefix']."CubeCart_inventory SET stock_level = stock_level - ".$products[$i]['quantity']." WHERE productId = ".$products[$i]['productId'];
				$update = $db->misc($query);
				
				$query = "UPDATE ".$glob['dbprefix']."CubeCart_order_inv SET stockUpdated =  1 WHERE productId = ".$products[$i]['productId']." AND  product_options = '".$products[$i]['product_options']."' AND cart_order_id = '".$products[$i]['cart_order_id']."'";
				$update = $db->misc($query);
			
			}
		
			$text .= sprintf($lang['front']['orderSuccess']['inv_email_body_4'],
						$products[$i]['name']);
			
			if(!empty($products[$i]['product_options'])){
			$text .= sprintf($lang['front']['orderSuccess']['inv_email_body_5'],
						str_replace(array("\r","\n")," ",$products[$i]['product_options']));
			}
			
			
			
			$text .= sprintf($lang['front']['orderSuccess']['inv_email_body_6'],
						$products[$i]['quantity'],
						$products[$i]['productCode'],
						priceFormat($products[$i]['price']));
			
		
		}
	
	}
	
	if(isset($emailText) && !empty($emailText)) {
		$text .= sprintf($lang['front']['orderSuccess']['inv_email_body_7'],$emailText);
	}
	
	$mail->setText($text);
	$mail->setReturnPath($config['masterEmail']);
	$mail->setFrom($config['masterName'].' <'.$config['masterEmail'].'>');
	$mail->setSubject($lang['front']['orderSuccess']['inv_email_subject'].$cart_order_id);
	$mail->setHeader('X-Mailer', 'CubeCart Mailer');
	$send = $mail->send(array($order[0]['email']), $config['mailMethod']);
	
	// Send Email To Access the Digital Download IF Applicable ;o)
	$digitalProducts = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_Downloads INNER JOIN ".$glob['dbprefix']."CubeCart_inventory ON ".$glob['dbprefix']."CubeCart_Downloads.productId =  ".$glob['dbprefix']."CubeCart_inventory.productId WHERE cart_order_id = ".$db->mySQLSafe($cart_order_id));
	
	if($digitalProducts == TRUE){
	$mail = new htmlMimeMail();
	// build email with access details
	$text = sprintf($lang['front']['orderSuccess']['digi_email_body1'],
				$order[0]['name'],
				$cart_order_id,
				formatTime($order[0]['time']),
				formatTime($digitalProducts[0]['expire']),
				$config['dnLoadTimes']);
		
		for($i=0;$i<count($digitalProducts); $i++){
		$text .= sprintf($lang['front']['orderSuccess']['digi_email_body2'],
					$digitalProducts[$i]['name'],
					$glob['storeURL'],
					$digitalProducts[$i]['productId'],
					base64_encode($cart_order_id),
					$digitalProducts[$i]['accessKey']);
		}
		
	$mail->setText($text);
	$mail->setReturnPath($config['masterEmail']);
	$mail->setFrom($config['masterName'].' <'.$config['masterEmail'].'>');
	$mail->setSubject($lang['front']['orderSuccess']['digi_subject'].$cart_order_id);
	$mail->setHeader('X-Mailer', 'CubeCart Mailer');
	$send = $mail->send(array($order[0]['email']), $config['mailMethod']);
	
	}
	// empty basket
	$emptyBasket['basket'] = "''";
	$where = "basket LIKE '%".$cart_order_id."%'";
	$delete = $db->update($glob['dbprefix']."CubeCart_sessions",$emptyBasket ,$where);
}
?>