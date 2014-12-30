<!-- BEGIN: view_orders -->
<div class="boxContent">
	
	<span class="txtContentTitle">{LANG_YOUR_VIEW_ORDERS}</span>
	
	<!-- BEGIN: session_true -->
	<div>	
		<!-- BEGIN: orders_true -->
		<p>{LANG_ORDER_LIST}</p>
		<table width="100%" border="0" cellpadding="3" cellspacing="0" style="margin-bottom: 25px;">
		  <tr>
		    <td class="tdcartTitle">{LANG_ORDER_NO}</td>
			<td class="tdcartTitle">{LANG_STATUS}</td>
			<td class="tdcartTitle">{LANG_DATE_TIME}</td>
			<td class="tdcartTitle">{LANG_ACTION}</td>
		  </tr>
		  <!-- BEGIN: repeat_orders -->
		  <tr>
		    <td class="{TD_CART_CLASS}"><a href="cart.php?act=viewOrder&amp;cart_order_id={DATA.cart_order_id}" class="txtLink">{DATA.cart_order_id}</a></td>
			<td class="{TD_CART_CLASS}">{DATA.state}</td>
			<td class="{TD_CART_CLASS}">{VAL_DATE_TIME}</td>
			<td align="center" class="{TD_CART_CLASS}"><a href="cart.php?act=viewOrder&amp;cart_order_id={DATA.cart_order_id}" class="txtLink">{LANG_VIEW_ORDER}</a></td>
		  </tr>
		  <!-- END: repeat_orders -->
		</table>

		<!-- END: orders_true -->
		
		<!-- BEGIN: orders_false -->
		<p>{LANG_NO_ORDERS}</p>
		<!-- END: orders_false -->
	</div>
	<!-- END: session_true -->
	
	<!-- BEGIN: session_false -->
	<p>{LANG_LOGIN_REQUIRED}</p>
	<!-- END: session_false -->
			
</div>
<!-- END: view_orders -->