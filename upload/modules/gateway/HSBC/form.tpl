<!-- BEGIN: form -->
<table width="100%" cellpadding="3" cellspacing="0" border="0">
	<tr align="left">
		<td colspan="4" class="tdcartTitle"><strong>Credit Card Information</strong></td>
	</tr>
	<tr align="left">
		<td><strong>First Name:</strong></td>
	  <td>{VAL_FIRST_NAME}<input type="hidden" name="firstName" value="{VAL_FIRST_NAME}" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>Last Name:</strong></td>
	  <td>{VAL_LAST_NAME}<input type="hidden" name="lastName" value="{VAL_LAST_NAME}" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>Card Type<font color=red>*</font>:</strong>
	  <td colspan="3">
		<select name="cardType">
			<option value="1">Visa</option>		
			<option value="2">MasterCard</option>
			<option value="10">Maestro (UK Issued)</option>
			<option value="10">Maestro (Other)</option>
			<option value="10">Switch</option>
			<option value="9">Solo</option>
			<option value="11">Visa Electron (UK Issued)</option>
			<option value="11">Visa Electron (Other)</option>
		</select>
	</td>
	</tr>
	<tr align="left">
		<td><strong>Card Number<font color=red>*</font>:</strong>
	  <td colspan="3"><input type="text" name="cardNumber" value="" size="19" maxlength="19" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>Start Date [mm/yy]:</strong></td>
		<td colspan="3"><input type="text" name="startMonth" value="" size="2" maxlength="2" class="textbox" /> / <input type="text" name="startYear" value="" size="2" maxlength="2" class="textbox" />
	</tr>
	<tr align="left">
		<td><strong>Expire Date [mm/yy]<font color=red>*</font>:</strong></td>
		<td colspan="3"><input type="text" name="expirationMonth" value="" size="2" maxlength="2" class="textbox" /> / <input type="text" name="expirationYear" value="" size="2" maxlength="2" class="textbox" />
	</tr>
	<tr align="left">
		<td><strong>Issue Number:</strong></td>
		<td colspan="3"><input type="text" name="issueNumber" value="" size="3" maxlength="3" class="textbox" />
	</tr>
	<tr align="left">
		<td><strong>Verification Code:</strong>
	  <td colspan="3"><input type="text" name="cvc2" value="" size="3" maxlength="3" class="textbox" /></td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr align="left">
		<td colspan="4" class="tdcartTitle"><strong>Customer Information</strong></td>
	</tr>		
	
	<tr align="left">
		<td><strong>E-Mail: </strong>
	  <td colspan="3"><input type="text" name="emailAddress" value="{VAL_EMAIL_ADDRESS}" size="50" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>Address: </strong>
	  <td colspan="3"><input type="text" name="addr1" value="{VAL_ADD_1}" size="50" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>Address 2: </strong>
	  <td colspan="3"><input type="text" name="addr2" value="{VAL_ADD_2}" size="50" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td>
		<strong>City:</strong> 
		</td>
		<td colspan="3">
		<input type="text" name="city" value="{VAL_CITY}" class="textbox" />
	  </td>
  </tr>
		<tr align="left">
		<td>
		<strong>State:</strong>
		</td>
		<td colspan="3">
		<input type="text" name="state" value="{VAL_COUNTY}" size="2" class="textbox" />
		</td>
		</tr>
		<tr align="left">
		<td>
		<strong>Postal Code:</strong>
		</td>
		<td colspan="3">
		<input type="text" name="postalCode" value="{VAL_POST_CODE}" size="10" maxlength="10" class="textbox" />
	  </td>
	</tr>
		<tr align="left">
		<td>
		<strong>Phone Number:</strong>
		</td>
		<td colspan="3">
		<input type="text" name="phoneNumber" value="{VAL_PHONE}" size="10" maxlength="15" class="textbox" />
	  </td>
	</tr>
	<tr align="left">
		<td><strong>Country: </strong>
		<td colspan="3">
		<!--<input type="hidden" name="country" value="{VAL_COUNTRY_ISO}" size="10" maxlength="15" class="textbox" />-->

			<select name="country" class="textbox">
				<!-- BEGIN: repeat_countries -->
					<option value="{VAL_COUNTRY_ISO}" {COUNTRY_SELECTED}>{VAL_COUNTRY_NAME}</option>
				<!-- END: repeat_countries -->
			</select> 
	  </td>
	</tr>
</table>
<input type="hidden" name="cart_order_id" value="{VAL_CART_ORDER_ID}" />
<input type="hidden" name="amount" value="{VAL_GRAND_TOTAL}" />
<input type="hidden" name="gateway" value="HSBC" />
<!-- END: form -->
