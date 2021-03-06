<!-- BEGIN: body -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={VAL_ISO}" />
<title>{META_TITLE}</title>
<meta name="description" content="{META_DESC}" />
<meta name="keywords" content="{META_KEYWORDS}" />

<link href="skins/{VAL_SKIN}/styleSheets/layout.css" rel="stylesheet" type="text/css" />
<link href="skins/{VAL_SKIN}/styleSheets/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/jslibrary.js" type="text/javascript"></script>
</head>

<body>
<div id="pageSurround">
	<div id="topHeader">
		<div>{SEARCH_FORM}</div>
		<div>{SESSION}</div>
	</div>
<div>
	
	<div class="colLeft">
	{CATEGORIES}
	{RANDOM_PROD}		
	{INFORMATION}	
	{CURRENCY}
	{LANGUAGE}
	</div>
	
	<div class="colMid">
	{PAGE_CONTENT}
	</div>
	
	<div class="colRight">
		{SHOPPING_CART}
		{POPULAR_PRODUCTS}
		{SALE_ITEMS}
		{MAIL_LIST}
	</div>

</div>

<br clear="all" />

{SITE_DOCS}

</div>
<div class='txtCopyright'>Powered by <a href='http://www.cubecart.com' class='txtCopyright' target='_blank'>CubeCart</a>&trade;<br />Copyright <a href='http://www.CubeCart.com' class='txtCopyright' target='_blank'>CubeCart Limited</a> 2014. All rights reserved.</div></body>
</html>
<!-- END: body -->