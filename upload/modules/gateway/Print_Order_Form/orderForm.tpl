<!-- BEGIN: order_form -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{VAL_STORE_URL}</title>
<meta http-equiv="Content-Type" content="text/html; charset={VAL_ISO}" />
<style type="text/css">
<!--
.copyText {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;}
.txtCopyright, a.txtCopyright {color:#FFFFFF; font-size: 6px;}
-->
</style>
</head>
<body onload="window.print();">
<div style="margin: auto; width: 550px; border: 2px solid #cccccc; background-color:#FFFFFF;">
<table border="0" width="550" align="center" cellpadding="4" cellspacing="0">
    <tr>
      <td colspan="2" align="left" valign="top" class="copyText"><span style="font-weight: bold;">{VAL_STORE_NAME}</span> <br />
{VAL_STORE_URL}</td>
    </tr>
    <tr>
      <td align="left" valign="top" class="copyText">
	  <strong>{LANG_INVOICE_TO}</strong>
      <div style="padding: 10px;">
	  {VAL_INVOICE_NAME}<br/>
	  {VAL_INVOICE_ADD1}<br/>
	  {VAL_INVOICE_ADD2}<br/>
	  {VAL_INVOICE_TOWN}, {VAL_INVOICE_STATE}<br/>
	  {VAL_INVOICE_POSTCODE}<br/>
	  {VAL_INVOICE_COUNTRY}</div>
	  </td>
      <td align="left" valign="top" class="copyText">
	  <strong>{LANG_DELIVER_TO}</strong>
      <div style="padding: 10px;">
	  {VAL_DELIVER_NAME}<br/>
	  {VAL_DELIVER_ADD1}<br/>
	  {VAL_DELIVER_ADD2}<br/>
	  {VAL_DELIVER_TOWN}, {VAL_DELIVER_STATE}<br/>
	  {VAL_DELIVER_POSTCODE}<br/>
	  {VAL_DELIVER_COUNTRY}</div>
	  </td>
    </tr>
  <tr>
    <td align="left" valign="top" class="copyText">
	<strong>{LANG_INVOICE_RECIEPT_FOR}</strong><br />
	{LANG_ORDER_OF_TIME} {VAL_TIME_DATE}
	</td>
    <td align="left" valign="top" class="copyText">
	<strong>{LANG_CART_ORDER_ID}</strong> {VAL_CART_ORDER_ID}</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="bottom" style="padding: 0px;">
	<table width="100%" border="0" cellpadding="7" cellspacing="0" style="padding: 7px;">
      <tr>
        <td class="copyText"><strong>{LANG_PRODUCT}</strong></td>
        <td class="copyText"><strong>{LANG_PRODUCT_CODE}</strong></td>
        <td class="copyText"><strong>{LANG_QUANTITY}</strong></td>
        <td align="right" class="copyText"><strong>{LANG_PRICE}</strong></td>
      </tr>
	  <!-- BEGIN: repeat_order_inv --> 
	  <tr>
        <td class="copyText">
		{VAL_PRODUCT_NAME}<br />
		{VAL_PRODUCT_OPTS}
		</td>
        <td class="copyText">{VAL_PRODUCT_CODE}</td>
        <td class="copyText">{VAL_PRODUCT_QUANTITY}</td>
        <td align="right" class="copyText">{VAL_PRODUCT_PRICE}</td>
      </tr>
	  <!-- END: repeat_order_inv -->
	  <tr>
	    <td rowspan="4" align="left" valign="top" class="copyText">
		{LANG_SHIPPING_METHOD} {VAL_SHIPPING_METHOD}
		</td>
	    <td rowspan="4">&nbsp;</td>
	    <td class="copyText">{LANG_SUBTOTAL}</td>
	    <td align="right" class="copyText">{VAL_SUBTOTAL}</td>
	  </tr>
	  <tr>
	    <td class="copyText">{LANG_TOTAL_TAX}</td>
	    <td align="right" class="copyText">{VAL_TOTAL_TAX}</td>
	    </tr>
	  <tr>
	    <td class="copyText">{LANG_SHIPPING}</td>
	    <td align="right" class="copyText">{VAL_SHIPPING}</td>
	    </tr>
	  <tr>
	    <td style="border-top: 1px solid #000000;" class="copyText"><strong>{LANG_GRAND_TOTAL}</strong></td>
	    <td align="right" style="border-top: 1px solid #000000;" class="copyText"><strong>{VAL_GRAND_TOTAL}</strong></td>
	    </tr>
    </table>
	</td>
  </tr>
</table>
<table width="550" border="0" align="center" cellpadding="7" cellspacing="0">
<!-- BEGIN: check_true -->
  <tr class="copyText">
    <td><strong>{LANG_PAY_BY_CHEQUE}</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr class="copyText">
    <td colspan="2">{VAL_MAKE_CHEQUES_PAYABLE_TO}</td>
  </tr>
<!-- END: check_true -->
<!-- BEGIN: card_true -->
  <tr class="copyText">
    <td><strong>{LANG_PAY_BY_CARD}</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr class="copyText">
    <td valign="top">{LANG_CARD_TYPE}</td>
    <td>
	<!-- BEGIN: repeat_card -->
	<img src="images/box.gif" alt="" /> {VAL_CARD_NAME}<br />
	<!-- END: repeat_card --></td>
  </tr>
  <tr class="copyText">
    <td>{LANG_CARD_NO}</td>
    <td>________________________</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_3_DIG_ID}</td>
    <td>______</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_EXPIRE_DATE}</td>
    <td>____________</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_ISSUE_DATE}</td>
    <td>____________</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_ISSUE_NUMBER}</td>
    <td>___</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_SIGNATURE}</td>
    <td>________________________</td>
  </tr>
<!-- END: card_true -->
<!-- BEGIN: bank_true -->
  <tr class="copyText">
    <td colspan="2"><strong>{LANG_PAY_BY_WIRE}</strong></td>
  </tr>
  <tr class="copyText">
    <td>{LANG_BANK_NAME}</td>
    <td>{VAL_BANK_NAME}</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_ACCOUNT_NAME}</td>
    <td>{VAL_ACCOUNT_NAME}</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_SORT_CODE}</td>
    <td>{VAL_SORT_CODE}</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_AC_NO}</td>
    <td>{VAL_AC_NO}</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_SWIFT_CODE}</td>
    <td>{VAL_SWIFT_CODE}</td>
  </tr>
  <tr class="copyText">
    <td>{LANG_ADDRESS}</td>
    <td>{VAL_ADDRESS}</td>
  </tr>
<!-- END: bank_true -->
<!-- BEGIN: cust_notes -->
  <tr class="copyText">
    <td colspan="2">{VAL_CUST_NOTES}</td>
  </tr>
<!-- END: cust_notes -->
</table>
<p align="center" class="copyText" style="font-size: 16px;">{LANG_THANK_YOU}</p>
<p align="center" class="copyText">{LANG_SEND_TO} {VAL_STORE_ADDRESS}</p>
</div>
</body>
</html>
<!-- END: order_form -->