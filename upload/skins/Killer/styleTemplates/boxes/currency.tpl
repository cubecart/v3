<!-- BEGIN: currency -->
<div class="boxTitleLeft">{LANG_CURRENCY_TITLE}</div>
<div class="boxContentLeft">
	
	<select name="lang" class="dropDown" onchange="jumpMenu('parent',this,0)">
		<!-- BEGIN: option -->
		<option value="switch.php?r={VAL_CURRENT_PAGE}&amp;currency={VAL_CURRENCY}" {CURRENCY_SELECTED}>{CURRENCY_NAME}</option>
		<!-- END: option -->
	</select>

</div>
<div class="boxFootLeft">&nbsp;</div>
<!-- END: currency -->	