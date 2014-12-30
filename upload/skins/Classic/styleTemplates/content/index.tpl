<!-- BEGIN: index -->
<div class="boxContent">
<span class="txtContentTitle">{HOME_TITLE}</span>
<br />
{HOME_CONTENT}
</div>
<!-- BEGIN: latest_prods -->
	<div class="boxContent">
	<span class="txtContentTitle">{LANG_LATEST_PRODUCTS}</span>
		<div style="margin-top: 10px;">
		<!-- BEGIN: repeat_prods -->
			<div class="latestProds">
				<a href="index.php?act=viewProd&amp;productId={VAL_PRODUCT_ID}"><img src="{VAL_IMG_SRC}" alt="{VAL_PRODUCT_NAME}" border="0" title="{VAL_PRODUCT_NAME}" /></a>
				<br />
				<a href="index.php?act=viewProd&amp;productId={VAL_PRODUCT_ID}" class="txtDefault">{VAL_PRODUCT_NAME}</a>
				<br /> 
				{TXT_PRICE} <span class="txtSale">{TXT_SALE_PRICE}</span>
			</div>
		<!-- END: repeat_prods -->
		<br clear="all" />
		</div>
		<br clear="all" />
		
		
	</div>
<!-- END: latest_prods -->
<!-- END: index -->