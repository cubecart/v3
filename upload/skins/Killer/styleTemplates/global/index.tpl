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
			<div id="sessionBox">
				<div style="padding: 15px 8px 15px 15px; margin: 0px;">
				{SEARCH_FORM}
				{SESSION}
				</div>
			</div>
		</div>
		
		
		<div id="subSurround">
		
		{CATEGORIES}
		<table border="0" cellspacing="0" width="100%" cellpadding="0">
		  <tr valign="top">
			<td width="175">
			    {SHOPPING_CART}		
				{INFORMATION}	
				{CURRENCY}
				{LANGUAGE}</td>
			<td style="padding: 0px 5px 0px 5px;">{PAGE_CONTENT}</td>
			<td width="175">
					{RANDOM_PROD}
					{POPULAR_PRODUCTS}
					{SALE_ITEMS}
					{MAIL_LIST}
			</td>
		  </tr>
		</table>

	
	
	</div>
	{SITE_DOCS}
	
	
</div>

<div class='txtCopyright'>Powered by <a href='http://www.cubecart.com' class='txtCopyright' target='_blank'>CubeCart</a>&trade;<br />Copyright <a href='http://www.CubeCart.com' class='txtCopyright' target='_blank'>CubeCart Limited</a> 2014. All rights reserved.</div></body>
</html>
<!-- END: body -->