<!-- BEGIN: reg -->
<div class="boxContent">
	<div style="padding-bottom: 3px;"><span class="txtContentTitle">{LANG_REGISTER}</span> 
	<!-- BEGIN: no_error -->
	<p>{LANG_REGISTER_DESC}</p>
	<!-- END: no_error -->
	<!-- BEGIN: error -->
	<p class="txtError">{VAL_ERROR}</p>
	<!-- END: error -->
	<form name="registerForm" method="post" action="{VAL_ACTION}">
	<table  border="0" cellspacing="0" cellpadding="3" width="100%">
	  <tr>
		<td colspan="2" class="tdcartTitle">{LANG_PERSONAL_DETAILS}</td>
		<td colspan="2" class="tdcartTitle">{LANG_ADDRESS}</td>
	  </tr>
	  <tr>
	    <td>{LANG_TITLE}</td>
	    <td><input name="title" type="text" class="textbox" id="title" size="5" value="{VAL_TITLE}" tabindex="1" /> 
	      {LANG_TITLE_DESC} </td>
	    <td>{LANG_ADDRESS_FORM}</td>
	    <td><input name="add_1" type="text" class="textbox" id="add_1" size="16" value="{VAL_ADD_1}" tabindex="7" />
*</td>
	    </tr>
	  <tr>
		<td>{LANG_FIRST_NAME}</td>
		<td><input name="firstName" type="text" class="textbox" id="firstName" size="16" value="{VAL_FIRST_NAME}" tabindex="2" /> 
		  *</td>
		<td>&nbsp;</td>
		<td><input name="add_2" type="text" class="textbox" id="add_2" size="16" value="{VAL_ADD_2}" tabindex="8" /></td>
	  </tr>
	  <tr>
		<td>{LANG_LAST_NAME}</td>
		<td><input name="lastName" type="text" class="textbox" id="lastName" size="16" value="{VAL_LAST_NAME}" tabindex="3" /> 
		  * </td>
		<td>{LANG_TOWN}</td>
		<td><input name="town" type="text" class="textbox" id="town" size="16" value="{VAL_TOWN}" tabindex="9" />
*</td>
	  </tr>
	  <tr>
		<td>{LANG_EMAIL_ADDRESS}</td>
		<td><input name="email" type="text" class="textbox" id="email" size="16" value="{VAL_EMAIL}" tabindex="4" /> 
		  * </td>
		<td>{LANG_COUNTY}</td>
		<td><input name="county" type="text" class="textbox" id="county" size="16" value="{VAL_COUNTY}" tabindex="10" />
*</td>
	  </tr>
	  <tr>
		<td>{LANG_TELEPHONE}</td>
		<td><input name="phone" type="text" class="textbox" id="phone" size="16" value="{VAL_PHONE}" tabindex="5" /> 
		  * </td>
		<td>{LANG_COUNTRY}</td>
	    <td nowrap='nowrap'><select name="country" class="textbox" tabindex="11">
          <!-- BEGIN: repeat_countries -->
          <option value="{VAL_COUNTRY_ID}" {VAL_COUNTRY_SELECTED}>{VAL_COUNTRY_NAME}</option>
          <!-- END: repeat_countries -->
        </select>
		  *</td>
	  </tr>
	  <tr>
		<td>{LANG_MOBILE}</td>
		<td><input name="mobile" type="text" class="textbox" id="mobile" size="16" value="{VAL_MOBILE}" tabindex="6" /></td>
	    <td>{LANG_POSTCODE}</td>
	    <td><input name="postcode" type="text" class="textbox" id="postcode" size="16" value="{VAL_POSTCODE}" tabindex="12" />
*</td>
	  </tr>
	  <tr>
		<td colspan="4" class="tdcartTitle">{LANG_SECURITY_DETAILS}</td>
	  </tr>
	  <tr>
		<td>{LANG_CHOOSE_PASSWORD}</td>
		<td><input name="password" type="password" class="textbox" id="password" size="16" value="{VAL_PASSWORD}" tabindex="13" /> 
		  * </td>
		<td>{LANG_CONFIRM_PASSWORD}</td>
		<td><input name="passwordConf" type="password" class="textbox" id="passwordConf" size="16" value="{VAL_PASSWORD_CONF}" tabindex="14" /> 
		  * </td>
	  </tr>
	  <tr>
		<td colspan="4" class="tdcartTitle">{LANG_PRIVACY_SETTINGS}</td>
	  </tr>
	  <tr>
		<td colspan="2">{LANG_RECIEVE_EMAILS}
		  <input type="checkbox" name="optIn1st" value="1" tabindex="15" {VAL_OPTIN1ST_CHECKED}/></td>
		<td>{LANG_EMAIL_FORMAT}</td>
		<td>
		<select name="htmlEmail" class="textbox" tabindex="16">
		<option value="1">{LANG_HTML_FORMAT}</option>
		<option value="0" {VAL_HTMLEMAIL_SELECTED}>{LANG_PLAIN_TEXT}</option>
		</select>
	    </td>
	  </tr>
	  <tr>
		<td colspan="4">{LANG_PLEASE_READ} {LANG_TANDCS}</td>
		</tr>
	  <tr>
		<td colspan="4">&nbsp;</td>
		</tr>
	  <tr>
		<td colspan="4" align="right"><a href="javascript:submitDoc('registerForm');" class="txtCheckout" tabindex="17">{LANG_REGISTER_SUBMIT}</a></td>
		</tr>
	</table>

	</form>
	</div>
</div>
<!-- END: reg -->