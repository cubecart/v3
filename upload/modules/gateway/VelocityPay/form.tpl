<!-- BEGIN: form -->
<table width="100%" cellpadding="3" cellspacing="0" border="0">
	<tr align="left">
		<td colspan="4" class="tdcartTitle"><strong>{LANG_CC_INFO_TITLE}</strong></td>
	</tr>
	<tr align="left">
		<td><strong>{LANG_FIRST_NAME}</strong></td>
	  <td><input type="text" name="firstName" value="{VAL_FIRST_NAME}" class="textbox" /></td>
		<td><strong>{LANG_LAST_NAME}</strong></td>
	  <td><input type="text" name="lastName" value="{VAL_LAST_NAME}" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>{LANG_CARD_NUMBER}</strong>
	  <td colspan="3"><input type="text" name="cardNumber" value="" size="20" maxlength="30" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>{LANG_EXPIRES}</strong></td>
		<td colspan="3"><input type="text" name="expirationMonth" value="" size="2" maxlength="2" class="textbox" /> / <input type="text" name="expirationYear" value="" size="2" maxlength="2" class="textbox" /> {LANG_MMYY}
  </tr>
  <tr align="left">
		<td><strong>Start Date:</strong></td>
		<td colspan="3"><input type="text" name="startDateMM" value="" size="2" maxlength="2" class="textbox" /> / <input type="text" name="startDateYY" value="" size="2" maxlength="2" class="textbox" /> {LANG_MMYY}
  </tr>
  <tr align="left">
		<td><strong>Issue Number:</strong>
	  <td colspan="3"><input type="text" name="issueNumber" value="" size="3" maxlength="3" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>{LANG_SECURITY_CODE}</strong>
	  <td colspan="3"><input type="text" name="cvc2" value="" size="3" maxlength="3" class="textbox" /></td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr align="left">
		<td colspan="4" class="tdcartTitle"><strong>{LANG_CUST_INFO_TITLE}</strong></td>
	</tr>				
	<tr align="left">
		<td><strong>{LANG_EMAIL}</strong>
	  <td colspan="3"><input type="text" name="emailAddress" value="{VAL_EMAIL_ADDRESS}" size="50" class="textbox" /></td>
	</tr>
    <tr align="left">
		<td><strong>House Number:</strong></td>
	  <td colspan="3"><input type="text" name="houseNumber" value="" size="4" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td><strong>{LANG_ADDRESS}</strong></td>
	  <td colspan="3"><input type="text" name="addr1" value="{VAL_ADD_1}" size="50" class="textbox" /></td>
	</tr>
	<tr align="left">
		<td>&nbsp;</td>
	  <td colspan="3"><input type="text" name="addr2" value="{VAL_ADD_2}" size="50" class="textbox" /> 
	  {LANG_OPTIONAL}</td>
	</tr>
	<tr align="left">
		<td>
		<strong>{LANG_CITY}</strong> 
		</td>
		<td colspan="3">
		<input type="text" name="city" value="{VAL_CITY}" class="textbox" />
	  </td>
  </tr>
		<tr align="left">
		<td>
		<strong>County:</strong>
		</td>
		<td colspan="3">
		<input type="text" name="state" value="{VAL_COUNTY}" size="2" class="textbox" />
		</td>
		</tr>
		<tr align="left">
		<td>
		<strong>{LANG_ZIPCODE}</strong>
		</td>
		<td colspan="3">
		<input type="text" name="postalCode" value="{VAL_POST_CODE}" size="10" maxlength="10" class="textbox" />
	  </td>
	</tr>
	<tr align="left">
		<td><strong>{LANG_COUNTRY}</strong></td>
		<td colspan="3">
			<select name="country" class="textbox">
				<!-- BEGIN: repeat_countries -->
				<option value="{VAL_COUNTRY_ISO}" {COUNTRY_SELECTED}>{VAL_COUNTRY_NAME}</option>
				<!-- END: repeat_countries -->
			</select>
	  </td>
	</tr>
</table>
<input type="hidden" name="gateway" value="VelocityPay" />
<!-- END: form -->
