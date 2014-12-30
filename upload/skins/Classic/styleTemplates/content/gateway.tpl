<!-- BEGIN: gateway -->
<div class="boxContent">
			<span class="txtContentTitle">{LANG_PAYMENT}</span>
			<div style="text-align: center; height: 25px;">
				<div class="cartProgress">
				{LANG_CART} --- {LANG_ADDRESS} --- <span class="txtcartProgressCurrent">{LANG_PAYMENT}</span> --- {LANG_COMPLETE}
				</div>
			</div>
			
			<!-- BEGIN: cart_false -->
            <p>{LANG_CART_EMPTY}</p>
			<!-- END: cart_false -->
			<!-- BEGIN: cart_true -->
			<div style="text-align: center">
			<form action="{VAL_FORM_ACTION}" method="{VAL_FORM_METHOD}" name="gateway" target="{VAL_TARGET}">
				
				<!-- BEGIN: choose_gate -->
				<p>{LANG_CHOOSE_GATEWAY}</p>
				<table width="150" border="0" align="center" cellspacing="0" cellpadding="3">
					<!-- BEGIN: gateways_true -->
					<tr>
						<td class="{TD_CART_CLASS}">{VAL_GATEWAY_DESC}</td>
					  	<td width="50" align="center" class="{TD_CART_CLASS}">
						<input name="gateway" type="radio" value="{VAL_GATEWAY_FOLDER}" {VAL_CHECKED} />
						</td>
					</tr>
					<!-- END: gateways_true -->
					<tr>
						<td colspan="2" align="left">{LANG_COMMENTS}</td>
				  	</tr>
					<tr align="right">
					  <td colspan="2"><textarea name="customer_comments" cols="35" rows="3" class="textbox">{VAL_CUSTOMER_COMMENTS}</textarea></td>
				  	</tr>
					<!-- BEGIN: gateways_flase -->
					<tr>
						<td>{LANG_GATEWAYS_FALSE}</td>
					</tr>
					<!-- END: gateways_false -->
				</table>
				<!-- END: choose_gate -->
				
				<!-- BEGIN: transfer -->
					<!-- BEGIN: auto_submit-->
					<p>{LANG_TRANSFERRING}</p>
					<p><img src="skins/{VAL_SKIN}/styleImages/progress.gif"  alt="" title="" onload="submitDoc('gateway')" /></p>
					<!-- END: auto_submit-->
					<!-- BEGIN: manual_submit-->
					<p align="left">{LANG_FORM_TITLE}</p>
					{FORM_TEMPLATE}
					<!-- END: manual_submit-->
					{FORM_PARAMETERS}
				<!-- END: transfer -->
				<p><a href="javascript:submitDoc('gateway');" class="txtCheckout">{LANG_CHECKOUT}</a></p>
				
			</form>
			</div>
			<!-- END: cart_true -->
</div>
<!-- END: gateway -->