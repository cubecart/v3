<!-- BEGIN: view_cart -->
<div class="boxContent">
			<span class="txtContentTitle">{LANG_VIEW_CART}</span>
			<div style="text-align: center; height: 25px;">
				<div class="cartProgress">
				<span {CLASS_STEP2}>{LANG_CART}</span> &raquo; <span {CLASS_STEP3}>{LANG_ADDRESS}</span> &raquo; {LANG_PAYMENT} &raquo; {LANG_COMPLETE}
				</div>
			</div>
			<form action="{VAL_FORM_ACTION}" method="post" class="quickBuy" style="padding: 4px;">
			  {LANG_ADD_PRODCODE}
			  <input name="productCode" type="text" size="5" class="textbox" /> <input name="submit" type="submit" class="submit" value="{LANG_ADD}" /></form>
			  <!-- BEGIN: cart_false -->
			  <p>{LANG_CART_EMPTY}</p>
			  <!-- END: cart_false -->
			  <!-- BEGIN: cart_true -->
			  <form name="cart" method="post" id="cart" action="{VAL_FORM_ACTION}">
			  <!-- BEGIN: step_3 -->
			  <table width="100%"  border="0" cellspacing="0" cellpadding="3" style="margin-bottom: 10px;">
			  <tr>
				<td width="50%" class="tdcartTitle">{LANG_INVOICE_ADDRESS}</td>
				<td colspan="2" class="tdcartTitle">{LANG_DELIVERY_ADDRESS}</td>
				</tr>
			  <tr>
				<td width="50%">{VAL_TITLE} {VAL_FIRST_NAME} {VAL_LAST_NAME}</td>
				<td><strong>{TXT_TITLE}</strong></td>
				<td><input name="delInf[title]" type="text" class="textbox" id="title" value="{VAL_DEL_TITLE}" size="7" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>{VAL_ADD_1}</td>
			    <td><strong>{TXT_FIRST_NAME}</strong></td>
			    <td><input name="delInf[firstName]" type="text" class="textbox" id="firstName" value="{VAL_DEL_FIRST_NAME}" maxlength="100" /></td>
			    </tr>
			  <tr>
			    <td>{VAL_ADD_2}</td>
			    <td><strong>{TXT_LAST_NAME}</strong></td>
			    <td><input name="delInf[lastName]" type="text" class="textbox" id="lastName" value="{VAL_DEL_LAST_NAME}" maxlength="100" /></td>
			    </tr>
			  <tr>
			    <td width="50%">{VAL_TOWN}</td>
			    <td><strong>{TXT_ADD_1}</strong></td>
			    <td><input name="delInf[add_1]" type="text" class="textbox" id="add_1" value="{VAL_DEL_ADD_1}" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td width="50%">{VAL_COUNTY}, {VAL_POSTCODE}</td>
			    <td><strong>{TXT_ADD_2}</strong></td>
			    <td><input name="delInf[add_2]" type="text" class="textbox" id="add_2" value="{VAL_DEL_ADD_2}" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td width="50%">{VAL_COUNTRY}</td>
			    <td><strong>{TXT_TOWN}</strong></td>
			    <td><input name="delInf[town]" type="text" class="textbox" id="town" value="{VAL_DEL_TOWN}" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td width="50%" rowspan="3" align="left" valign="bottom"><a href="index.php?act=profile&amp;f={VAL_BACK_TO}" class="txtUpdate">{LANG_CHANGE_INV_ADD}</a></td>
			    <td><strong>{TXT_COUNTY}</strong></td>
			    <td><input name="delInf[county]" type="text" class="textbox" id="county" value="{VAL_DEL_COUNTY}" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td><strong>{TXT_POSTCODE}</strong></td>
			    <td><input name="delInf[postcode]" type="text" class="textbox" id="postcode" value="{VAL_DEL_POSTCODE}" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td><strong>{TXT_COUNTRY}</strong></td>
			    <td><select name="delInf[country]" id="country" class="textbox">
                  <!-- BEGIN: country_opts -->
                  <option value="{VAL_DEL_COUNTRY_ID}" {COUNTRY_SELECTED}>{VAL_DEL_COUNTRY_NAME}</option>
                  <!-- END: country_opts -->
                </select></td>
			  </tr>
			</table>
			<!-- END: step_3 -->
			<!-- BEGIN: step_4 -->
			  <table width="100%"  border="0" cellspacing="0" cellpadding="3" style="margin-bottom: 10px;">
			  <tr>
				<td width="50%" class="tdcartTitle">{LANG_INVOICE_ADDRESS}</td>
				<td class="tdcartTitle">{LANG_DELIVERY_ADDRESS}</td>
				</tr>
			  <tr>
				<td width="50%">{VAL_TITLE} {VAL_FIRST_NAME} {VAL_LAST_NAME}</td>
				<td>{VAL_DEL_TITLE} {VAL_DEL_FIRST_NAME} {VAL_DEL_LAST_NAME}</td>
				</tr>
			  <tr>
			    <td>{VAL_ADD_1}</td>
			    <td>{VAL_DEL_ADD_1}</td>
			    </tr>
			  <tr>
			    <td>{VAL_ADD_2}</td>
			    <td>{VAL_DEL_ADD_2}</td>
			    </tr>
			  <tr>
			    <td width="50%">{VAL_TOWN}</td>
			    <td>{VAL_DEL_TOWN}</td>
			    </tr>
			  <tr>
			    <td width="50%">{VAL_COUNTY}, {VAL_POSTCODE}</td>
			    <td>{VAL_DEL_COUNTY}, {VAL_DEL_POSTCODE}</td>
			    </tr>
			  <tr>
			    <td width="50%">{VAL_COUNTRY}</td>
			    <td>{VAL_DEL_COUNTRY}</td>
			    </tr>
			  <tr>
			    <td width="50%"><a href="index.php?act=profile&amp;f={VAL_BACK_TO}" class="txtUpdate">{LANG_CHANGE_INV_ADD}</a></td>
			    <td>
				<!-- BEGIN: edit_btn -->
				<a href="cart.php?act=step3" class="txtUpdate">{LANG_CHANGE_DEL_ADD}</a>
				<!-- END: edit_btn -->
				</td>
			  </tr>
			</table>
			<!-- END: step_4 -->
			<table width="100%" border="0" cellpadding="3" cellspacing="0">
				<tr>
					<td class="tdcartTitle">&nbsp;</td>
					<td align="center" class="tdcartTitle">{LANG_QTY}</td>
					<td align="center" class="tdcartTitle">&nbsp;</td>
					<td class="tdcartTitle">{LANG_PRODUCT}</td>
					<td align="center" class="tdcartTitle">{LANG_CODE}</td>
					<td align="center" class="tdcartTitle">{LANG_STOCK}</td>
					<td class="tdcartTitle" align="right">{LANG_PRICE}</td>
					<td width="80" align="right" nowrap='nowrap' class="tdcartTitle">{LANG_LINE_PRICE}</td>
				</tr>
				<!-- BEGIN: repeat_cart_contents -->
				<tr>
					<td align="center" class="{TD_CART_CLASS}"><a href="cart.php?act={VAL_CURRENT_STEP}&amp;remove={VAL_PRODUCT_KEY}"><img src="skins/{VAL_SKIN}/styleImages/del.gif" alt="{LANG_DELETE}" width="12" height="12" border="0" title="{LANG_DELETE}" /></a></td>
					<td align="center" class="{TD_CART_CLASS}"><input name="quan[{VAL_PRODUCT_KEY}]" type="text" value="{VAL_QUANTITY}" size="2" class="{TEXT_BOX_CLASS}" style="text-align:center;" {QUAN_DISABLED} /></td>
					<td align="center" class="{TD_CART_CLASS}"><img src="{VAL_IMG_SRC}" alt="" title="" /></td>
					<td class="{TD_CART_CLASS}">
					{VAL_PRODUCT_NAME}
					<!-- BEGIN: options -->
					<br /><strong>{VAL_OPT_NAME}</strong>: {VAL_OPT_VALUE} 
					<!-- END: options -->
					</td>
					<td align="center" class="{TD_CART_CLASS}">{VAL_PRODUCT_CODE}</td>
					<td align="center" class="{TD_CART_CLASS}">{VAL_INSTOCK}</td>
					<td align="right" class="{TD_CART_CLASS}">{VAL_IND_PRICE}</td>
					<td width="80" align="right" class="{TD_CART_CLASS}">{VAL_LINE_PRICE}</td>
				</tr>
				<!-- BEGIN: stock_warn -->
				<tr>
				  <td align="center" class="{TD_CART_CLASS}">&nbsp;</td>
				  <td colspan="7" align="left" class="{TD_CART_CLASS}"><span class="txtStockWarn">{VAL_STOCK_WARN}</span></td>
			  	</tr>
				<!-- END: stock_warn -->
				<!-- END: repeat_cart_contents -->
				<tr>
					<td align="center" class="tdCartSubTotal"><img src="skins/{VAL_SKIN}/styleImages/del.gif" alt="{LANG_DELETE}" width="12" height="12" title="{LANG_DELETE}" /></td>
					<td colspan="5" class="tdCartSubTotal">- {LANG_REMOVE_ITEM}</td>
					<td align="right" class="tdCartSubTotal">{LANG_SUBTOTAL}</td>
					<td width="80" align="right" class="tdCartSubTotal">{VAL_SUBTOTAL}</td>
				</tr>
				<tr>
				  <td colspan="7" align="right">{LANG_TAX}</td>
				  <td width="80" align="right">{VAL_TAX}</td>
			  </tr>
			  </table>
			  
			  <table width="100%"  border="0" cellspacing="0" cellpadding="3">
				<tr>
				  <td align="right">{LANG_SHIPPING}</td>
				  <td width="80" align="right">{VAL_SHIPPING}</td>
			  </tr>
			  </table>
			  <table width="100%"  border="0" cellspacing="0" cellpadding="3">
				<tr>
					<td align="right"><strong>{LANG_CART_TOTAL}</strong></td>
					<td width="80" align="right"><strong>{VAL_CART_TOTAL}</strong></td>
				</tr>
		  </table>
<div style="float: left; line-height: 22px; margin-bottom: 3px;"><a href="javascript:submitDoc('cart');" class="txtUpdate">{LANG_UPDATE_CART}</a> {LANG_UPDATE_CART_DESC}</div><div style="text-align: right; margin-top: 4px; margin-bottom: 3px;"><a href="{CONT_VAL}" class="txtCheckout">{LANG_CHECKOUT}</a></div>
</form>
			<!-- END: cart_true -->
</div>
<!-- END: view_cart -->