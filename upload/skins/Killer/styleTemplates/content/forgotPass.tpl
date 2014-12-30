<!-- BEGIN: forgot_pass -->
<div class="boxContent">

	<span class="txtContentTitle">{LANG_FORGOT_PASS_TITLE}</span>
	
	<p>{FORGOT_PASS_STATUS}</p>
	
	<!-- BEGIN: form -->
	<form action="index.php?act=forgotPass" target="_self" method="post">
		<table border="0" cellspacing="0" cellpadding="3" align="center">
			<tr>
				<td align="right"><strong>{LANG_EMAIL}</strong></td>
				<td><input type="text" name="email" class="textbox" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input name="submit" type="submit" value="{TXT_SUBMIT}" class="submit" /></td>
			</tr>
	  </table>
	</form>
	<!-- END: form -->

</div>
<!-- END: forgot_pass -->