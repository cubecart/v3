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
|	email.php
|   ========================================
|	Email Customers
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
include("../includes/auth.inc.php");

if(permission("customers","write")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

if(isset($_GET['action']) && $_GET['action']=="download"){

	$query = "SELECT title, email, firstName, lastName, type FROM ".$glob['dbprefix']."CubeCart_customer WHERE optIn1st = 1";
	$results = $db->select($query);

	if($results==TRUE) {

		$emailList = "";
		
		for($i=0; $i<count($results); $i++){

			if($_POST['incName']==1 && $results[$i]['type']==1){
				$emailList .=  $results[$i]['title']." ".$results[$i]['firstName']." ".$results[$i]['lastName']." <".$results[$i]['email'].">";
			} else {
				$emailList .=  $results[$i]['email'];
			}
		
			$emailList .=  "\r\n";
		}

	$filename="CustomerEmails_".date("dMy").".txt";
	header('Pragma: private');
	header('Cache-control: private, must-revalidate');
	header("Content-Disposition: attachment; filename=".$filename);
	header("Content-type: text/plain");
	header("Content-type: application/octet-stream");
	header("Content-length: ".strlen($emailList));
	header("Content-Transfer-Encoding: binary");
	echo $emailList;
	exit;
		
	} else {
		$msg = $lang['admin']['customers']['no_download_email'];
	}
exit;
}

include("../includes/header.inc.php");
?>
<p class="pageTitle"><?php echo $lang['admin']['customers']['email_customers']; ?></p>

<?php if(isset($_GET['action']) && $_GET['action']=="send"){ ?>
<form name="form1" method="post" action="<?php echo $GLOBALS['rootRel'];?>admin/customers/send.php" target="_self" enctype="multipart/form-data">
<table width="100%"  border="0" cellspacing="0" cellpadding="3" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['customers']['create_email']; ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tdRichText">
	<?php
	include("../includes/rte/fckeditor.php");
	$oFCKeditor = new FCKeditor('FCKeditor') ;
	$oFCKeditor->BasePath = $GLOBALS['rootRel'].'admin/includes/rte/';
		
		if(isset($_POST['FCKeditor'])){
		
			$oFCKeditor->Value = stripslashes($_POST['FCKeditor']);
			
		} else {
		
			$oFCKeditor->Value = "";
		
		}
	
	$oFCKeditor->Create();
	?>
</td>
  </tr>
  <tr>
    <td class="tdRichText"><span class="tdText"><em><strong><?php echo $lang['admin']['customers']['hint']; ?></strong> </em></span></td>
    <td class="tdRichText"><span class="tdText"><em><?php echo $lang['admin']['customers']['click_source']; ?></em></span></td>
  </tr>
  <tr>
    <td valign="top" class="tdRichText"><span class="tdText"><em><strong><?php echo $lang['admin']['customers']['important']; ?></strong></em></span></td>
    <td class="tdRichText"><span class="tdText"><em><?php echo $lang['admin']['customers']['absolute_links']; ?></em> </span>
        <input name="unsubscribe" type="text" class="textbox" value="<?php echo $GLOBALS['storeURL']."/index.php?act=unsubscribe"; ?>" size="30" />
   </td>
  </tr>
  <tr>
    <td width="110" class="tdText"><strong><?php echo $lang['admin']['customers']['email_subject']; ?></strong>      </td>
    <td class="tdText"><input name="subject" type="text" id="subject" class="textbox" value="<?php if(isset($_POST['subject'])) echo $_POST['subject']; ?>" /></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['customers']['senders_name']; ?></strong></td>
    <td class="tdText"><input name="fromName" type="text" class="textbox" id="fromName" value="<?php if(isset($_POST['fromName'])) echo 
	$_POST['fromName']; ?>" /></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['customers']['senders_email']; ?></strong></td>
    <td class="tdText"><input name="fromEmail" type="text" class="textbox" id="fromEmail" value="<?php if(isset($_POST['fromEmail'])) echo $_POST['fromEmail']; ?>" /></td>
  </tr>
  <tr>
    <td class="tdText"><strong><?php echo $lang['admin']['customers']['return_path']; ?></strong></td>
    <td class="tdText"><input name="returnPath" type="text" class="textbox" id="returnPath" value="<?php if(isset($_POST['returnPath'])) echo $_POST['returnPath']; ?>" /> 
      <?php echo $lang['admin']['customers']['bounce_desc']; ?></td>
  </tr>
  <tr>
    <td width="110" class="tdText"><strong><?php echo $lang['admin']['customers']['send_test']; ?></strong></td>
    <td class="tdText">
	<?php echo $lang['admin']['yes']; ?>      
      <input name="test" type="radio" value="1" <?php if(isset($_POST['test']) && $_POST['test']=="1") echo "checked='checked'"; elseif(!isset($_POST['test'])) echo "checked='checked'"; ?> /> 
	<?php echo $lang['admin']['no']; ?> 
      <input name="test" type="radio" value="0" <?php if(isset($_POST['test']) && $_POST['test'] =="0") echo "checked='checked'"; ?> /> 
      <strong><?php echo $lang['admin']['customers']['test_email_recip']; ?></strong>
	  <input name="testEmail" type="text" id="testEmail" value="<?php if(isset($_POST['testEmail'])) echo $_POST['testEmail']; else echo $ccAdminData[0]['email']; ?>" /></td>
  </tr>
  <tr>
    <td class="tdText">&nbsp;</td>
    <td class="tdText"><input type="submit" value="<?php echo $lang['admin']['customers']['send_email']; ?>" class="submit" /></td>
  </tr>
</table>
</form>
<?php } else { ?>
<?php if(isset($msg)) { ?> <p class="warnText"><?php echo stripslashes($msg); ?></p><?php } ?>
<p class="copyText"><?php echo $lang['admin']['customers']['download_or_send']; ?></p>
<table width="450" border="0" align="center" cellpadding="4" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['customers']['please_choose']; ?></td>
  </tr>
  <tr>
    <td width="50%" valign="top" class="copyText"><?php echo $lang['admin']['customers']['used_to_download']; ?></td>
    <td width="50%" valign="top" class="copyText"><?php echo $lang['admin']['customers']['bulk_to_subscribed']; ?></td>
  </tr>
  <tr align="center">
    <td valign="bottom" class="copyText">
    <form name="download" method="post" action="<?php echo $GLOBALS['rootRel'];?>admin/customers/email.php?action=download">
      <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td><?php echo $lang['admin']['customers']['include_name']; ?></td>
          <td>
		  <?php echo $lang['admin']['yes']; ?>
            <input name="incName" type="radio" value="1" checked='checked' />
		  <?php echo $lang['admin']['no']; ?>
<input name="incName" type="radio" value="0" /></td>
        </tr>
        <tr align="center">
          <td height="30" colspan="2"><input name="download" type="submit" id="download" value="<?php echo $lang['admin']['customers']['download_email']; ?>" class="submit" /></td>
          </tr>
      </table>
    </form></td>
    <td valign="bottom" class="copyText">
	<form name="download" method="post" action="<?php echo $GLOBALS['rootRel'];?>admin/customers/email.php?action=send" enctype="multipart/form-data">
	  <input name="send" type="submit" id="send" value="<?php echo $lang['admin']['customers']['send_email'];?>" class="submit" />
	</form>
	</td>
  </tr>
</table>
<?php } ?>
<?php include("../includes/footer.inc.php"); ?>