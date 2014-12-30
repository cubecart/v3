<!-- BEGIN: session -->
<div style="padding-top: 2px;">
<!-- BEGIN: session_false -->
	<span class="txtSessionGrey">{LANG_WELCOME_GUEST}</span> 
	<br />
	<span class="txtSession">[</span><a href="index.php?act=login&amp;redir={VAL_SELF}" class="txtSession">{LANG_LOGIN}</a> <span class="txtSession">|</span> <a href="cart.php?act=reg&amp;redir={VAL_SELF}" class="txtSession">{LANG_REGISTER}</a><span class="txtSession">]</span>
<!-- END: session_false -->

<!-- BEGIN: session_true -->
	<span class="txtSessionGrey">{LANG_WELCOME_BACK} {TXT_USERNAME}</span> 
	<br />
	<span class="txtSession">[</span><a href="index.php?act=logout" class="txtSession">{LANG_LOGOUT}</a> <span class="txtSession">|</span> <a href="index.php?act=account" class="txtSession">{LANG_YOUR_ACCOUNT}</a><span class="txtSession">]</span>
<!-- END: session_true -->
</div>
<!-- END: session -->