<?php
/*********************************************************
Basic IPN script to be used  on your server to receive IPN POSTed (back) 
from AsianPay payments.

This script is provided "as is" with NO WARRANTY OF ANY KIND, INCLUDING
THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
PURPOSE


**********************************************************/

include("../../../includes/ini.inc.php");
include("../../../includes/global.inc.php");
require_once("../../../classes/db.inc.php");
$db = new db();
include_once("../../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../../language/".$config['defaultLang']."/lang.inc.php");
include("../../../includes/currencyVars.inc.php");

$module = fetchDbConfig("AsianPay");

$secret_code = "";
$asianpayid = "";

// Get the IP address of the server calling your script

$IP = $_SERVER['REMOTE_ADDR'];


// Verify which is the kind of transaction ( Buy Now - Subscriptions - Donation)
$TransactionType = $_POST['type'];

/*********************************************

For Buy Now Single Or Advanced and Shopping Cart

**********************************************/

//IPN for Buy Now Buttons
if($TransactionType=="Purchase")
{



// Collect and assign variables to all the variables sent from AsianPay IPn POSTed (back).


$merchant_send = $_POST['senderid'];  //  Unique AsianPay ID for the sender
$merchant_receive = $_POST['receiverid']; // Unique AsianPay ID for the receiver
$payer_name = $_POST['sendername']; // Full name ( business anme ) of the sender
$payee_name = $_POST['receivername'];// Full name ( business name) of the receiver


$amount = $_POST['total']; // gross amount of this transaction
$total_fees = $_POST['total_fees']; // amount of fees charged to this transactins

$net_amount = $amount - $total_fees; // Generate the amount that has been credited to the receiver AsianPay account

/*******************************************************************
If you are using our advanced Buy Now buttons you maybe need to receive also these fields
*/

$prod_price = $_POST['prod_price']; // product price 
$ship_price = $_POST['ship_price'];  // shipping costs if any
$tax = $_POST['tax'];                     // tax amount if any

/***********************/

// Unique product ID generated from AsianPay when you created the code or from you if using the customized form ( prod_code)
$itemid = $_POST['productid']; 

$itemcode = $_POST['prodcode'];  // received only if using the standard form. not present in the advanced form.
$itemname = $_POST['prodname']; // Name/Title of the product as settled from you in your form
$payee_email = $_POST['paidto'];  // receiver email as registered in asianpay database
$payer_email = $_POST['paidby'];  //sender email as registered in AsianPay database
$TransactionID = $_POST['batch'];  // unique transaction ID generated from AsianPay

 // member status ( unverified or certified ) - You can use this information to diversify your actions related to this transaction
$Member = $_POST['memberstatus']; 

$TransactionStatus = $_POST['status'];  // transaction status:  0 = pending  1 = complete
$TransactionTime = $_POST['time'];   // timer the transaction occurred
$secret = $_POST['secretcode'];  // Your secret code as registered in Asianpay database.

/**********************************************
If the IPn is coming from the shopping cart you can use the above for your cart order id and the list_item to get the list of the products
**********************************************/
if (isset($_POST['cart_order_id'])) {
$cart_order_id = $_POST['cart_order_id']; }

/// We break down the list of items in the email message. Yu can do our own choice to fit your database needs.

/************************************************
All your custom fields are collected if present in the POST
************************************************/

if (isset($_POST['custom_1'])) {
$custom_1 = $_POST['custom_1']; }

if (isset($_POST['custom_2'])) {
$custom_2 = $_POST['custom_2']; }

if (isset($_POST['custom_3'])) {
$custom_3 = $_POST['custom_3']; }

if (isset($_POST['custom_4'])) {
$custom_4 = $_POST['custom_4']; }

if (isset($_POST['custom_5'])) {
$custom_5 = $_POST['custom_5']; }

if (isset($_POST['custom_6'])) {
$custom_6 = $_POST['custom_6']; }

if (isset($_POST['custom_7'])) {
$custom_7 = $_POST['custom_7']; }

if (isset($_POST['custom_8'])) {
$custom_8 = $_POST['custom_8']; }

if (isset($_POST['custom_9'])) {
$custom_9 = $_POST['custom_9']; }

if (isset($_POST['custom_10'])) {
$custom_10 = $_POST['custom_10']; }


//make all the check you need to verify that the transaction is correct
// but at least the followings
// Verify Secret Code
// Verify that the receiver email ( your email ) is the correct one

if(($secret==$secret_code)&&($payee_email==$asianpayid))
{


// At this point you can also verify if the transaction is complete or pending and if the member is certified or not
$summary = $db->select("SELECT prod_total, comments FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE cart_order_id = "
.$db->mySQLsafe($_POST['productid']));

if($_POST['status']!=="Complete"){
				$fail = TRUE;

$ppComment = "";
				
				switch($_POST['status']){
					
					case "Pending":
					$ppComment = "Pending - The payment is pending";
					break;
					
					default:
					$ppComment = "Unspecified Error.";
					break;
					
				}
				
				if(empty($summary[0]['comment'])){
					$updateComment['comments'] = "'AsianPay Comment: ".$ppComment."'";
				} else {
					$updateComment['comments'] = "'".$summary[0]['comments']."\r\n\r\nAsianPay Comment: ".$ppComment."'";
				}
				$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateComment,"cart_order_id=".$db->mySQLSafe($_POST['productid']));
				
			}

// check that transaction has not been previously processed
			$Trans_ID = $db->select("SELECT * FROM ".$glob['dbprefix']."CubeCart_order_sum WHERE sec_order_id = ".$db->mySQLsafe($_POST['batch']));
			
			
			if($Trans_ID == TRUE){
				
				$fail = TRUE;
				
			} else {
				
				$updateOrderTxn['sec_order_id'] = $db->mySQLSafe($_POST['batch']);
				
				$update = $db->update($glob['dbprefix']."CubeCart_order_sum", $updateOrderTxn,"cart_order_id=".$db->mySQLSafe($_POST['productid']));
			
			}

if($fail==FALSE){
				$cart_order_id = $_POST['productid'];
				include("../../../includes/orderSuccess.inc.php");


}
}
else
{
        // Send email to admin about payment!
        $Subject = "[$sitename] Fraudolent Transaction!!";
        
        $TextBody = "Hello Admin,\n\n"
         . "An attempt to illegaly deposit with AsianPay has been done by $merchant_send - $payer_name ($payer_email)\n\n"
         . "\n\n"
         . "Additional info:\n"
         . "\n\n"
         . "From AsianPay Account: $payer_email\n"
         . "AsianPay Transaction ID (if any ): $batch\n"
         . "From IP Address: $IP\n"
         . "Secret Code: $secret\n"
         . "\n\n"
         . "Sincerely\n\n"
         . "HouseOfMatrix - Account Manager";
        $HTMLBody = "<HTML><BODY>Hello <B>Admin</B>,<P>"
         . "An attempt to illegaly deposit with AsianPay has been done by merchant_send - $payer_name ($payer_email)<BR>"
         . "<P>"
         . "Additional info:<BR>"
         . "<P>"
         . "<B>From AsianPay Account: $payer_email<BR>"
         . "<B>AsianPay Transaction ID (if any ): $batch</B<BR>"
         . "<B>From IP Address: $IP</B> <BR>"
         . "<B>Secret Code: $secret</B> <BR>"
         . "<P>"
         . "Sincerely"
         . "<P>"
         . "<I><B>$sitename - Account Manager</B></I></BODY></HTML>";

$Body = GenerateMailBody($TextBody, $HTMLBody);

$EmailTo = "";
$from = "";
$fromb = "";
$from1 = "";

$Header	= ""
			. "From: $from\n"
			. "Reply-To: $from\n"
			. "Content-Type: multipart/alternative;\n"
			. "\tboundary=\"=_NextPart_000_002C_01BFABBF.4A7D6BA0\"\n"
			. "X-Mailer: PHP/ . $phpversion()\n"
			. "\nThis is a multi-part message in MIME format.";

mail("$EmailTo","$Subject","$Body","$Header","-f $fromb");
  }
}

function GenerateMailBody ($TextBody, $HTMLBody)
{
	$body 	= "--=_NextPart_000_002C_01BFABBF.4A7D6BA0\n"
			 ."Content-Type: text/plain; charset=\"iso-8859-1\"\n"
			 ."Content-Transfer-Encoding: 7bit\n\n"
			 ."$TextBody\n\n"
			 ."--=_NextPart_000_002C_01BFABBF.4A7D6BA0\n"
			 ."Content-Type: text/html; charset=\"iso-8859-1\"\n"
			 ."Content-Transfer-Encoding: 7bit\n\n"
			 ."$HTMLBody\n\n"
			 ."--=_NextPart_000_002C_01BFABBF.4A7D6BA0--";
			 
	$body1 = "------=_NextPart_000_002C_01BFABBF.4A7D6BA0\nContent-Type: text/plain;\ncharset=\"iso-8859-1\"\n"
 ."$TextBody\n"
 ."------=_NextPart_000_002C_01BFABBF.4A7D6BA0\n"
 ."Content-Type: text/html;\n"
 ."charset=\"iso-8859-1\"\n"
 ."$HTMLBody\n"
 ."------=_NextPart_000_002C_01BFABBF.4A7D6BA0--";
	return $body;
}
?>