<!-- BEGIN: mail_list -->
<div class="boxTitleRight">{LANG_MAIL_LIST_TITLE}</div>
<div class="boxContentRight txtCopy">

	{LANG_MAIL_LIST_DESC}
	<!-- BEGIN: form -->
	<form action="{FORM_METHOD}" method="post">
	<strong>{LANG_EMAIL}</strong> <input name="email" type="text" size="14" maxlength="255" class="textbox" /> 
	<input type="hidden" name="act" value="mailList" />
	<div style="padding-top: 5px; text-align: center;">
		<input name="submit" type="submit" value="{LANG_GO}" class="submit" />
	</div>
	</form>
	<!-- END: form -->

</div>
<div class="boxFootLeft">&nbsp;</div>
<!-- END: mail_list -->