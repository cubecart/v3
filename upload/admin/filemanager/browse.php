<?php
/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2004 Frederico Caldeira Knabben
 *
 * Licensed under the terms of the GNU Lesser General Public License
 * (http://www.opensource.org/licenses/lgpl-license.php)
 *
 * For further information go to http://www.fredck.com/admin/includes/rte/ 
 * or contact fckeditor@fredck.com.
 *
 * browse.php: Browse function.
 *
 * Authors:
 *   Frederic TYNDIUK (http://www.ftls.org/ - tyndiuk[at]ftls.org)
 * Modded By:
 *   Alistair Brookbanks CubeCart Limited
 */

// Init var :
include("../../includes/ini.inc.php");
include("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../includes/sslSwitch.inc.php");
include("../includes/auth.inc.php");
if(permission("filemanager","read")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

// End int var

$dirArray = walk_dir("../../images/uploads", 0);

if(is_array($dirArray)){

foreach ($dirArray as $file) {
	$i++;
	$file = preg_replace("#//+#", '/', $file);
	$IMAGES_BASE_DIR = preg_replace("#//+#", '/', "../../images/uploads/");
	
	$file = preg_replace("#$IMAGES_BASE_DIR#", '', $file);
	
	if (CheckImgExt(strtolower($file))) {
	
		$files[$i]['name'] = str_replace("../../images/uploads/","",$file);	//adding filenames to array
		$files[$i]['size'] = filesize($IMAGES_BASE_DIR.$file);	//adding filenames to array
	
	}
}

if(is_array($files)){
sort($files);	//sorting array
}

// generating $html_img_lst
$html_img_lst = "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
for ($i = 0; $i < count($files); $i++) {
	$html_img_lst .= "<tr><td><a href=\"javascript:getImage('".$files[$i]['name']."');\">".$files[$i]['name']."</a></td><td align='right'>".format_size($files[$i]['size'])."</td></tr>\n";
}
$html_img_lst .= "</table>"; 
} else { // end if is array
	$empty = 1;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
	<head>
		<title><?php echo $lang['admin']['filemanager']['image_browser'];?></title>
		<link rel="stylesheet" type="text/css" href="../includes/rte/editor/css/fck_dialog.css">
		<script language="javascript">
var sImagesPath  = "<?php echo $GLOBALS['rootRel']."images/uploads/"; ?>";
var sActiveImage = "" ;
var fileName = "" ;

function getImage(imageName)
{
	if(imageName){
	sActiveImage = sImagesPath + imageName ;
	fileName = imageName;
	} else {
	sActiveImage = sImagesPath + 'noPreview.gif' ;
	}
	imgPreview.src = sActiveImage ;
}
<?php
if($_GET['custom']==1){
?>
function ok()
{	
	window.opener.addImage(fileName, sActiveImage) ;
	window.close() ;
}
<?php
} else {
// start standard code
?>
function ok()
{	
	window.setImage(sActiveImage);
	window.close() ;
}
<?php } ?>
		</script>
	</head>
	<body bottommargin="5" leftmargin="5" topmargin="5" rightmargin="5">
<TABLE cellspacing="1" cellpadding="1" border="0" class="dlg" height="100%">
	<tr height="100%">
		<td>
			<TABLE cellspacing="0" cellpadding="0" border="0" height="100%">
				<tr>
					<td valign="top">
						<table cellpadding="0" cellspacing="0" height="100%" width="220">
							<tr>
								<td><?php echo $lang['admin']['filemanager']['file']; ?></td>
							</tr>
							<tr height="100%">
								<td>
									<div class="ImagePreviewArea">
									<?php 
									if($empty==1){ 
										echo $lang['admin']['filemanager']['no_imgs']; 
									} else { 
										echo $html_img_lst; 
									} 
									?>
									</div>
								</td>
							</tr>
						</table>
				  </td>
					<td width="5">&nbsp;</td>
					<td>
						<table cellpadding="0" cellspacing="0" height="100%" width="220">
							<tr>
								<td><?php echo $lang['admin']['filemanager']['preview']; ?></td>
							</tr>
							<tr>
								<td height="100%" align="center" valign="middle">
									<?php if($empty==1){ ?>&nbsp;<?php } else { ?><div class="ImagePreviewArea"><IMG src="<?php echo $glob['rootRel'];?>images/general/px.gif" border="0" id="imgPreview" title="" alt="" /></div><?php } ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td align="center">
			<input style="width: 80px" type="button" value="<?php echo $lang['admin']['filemanager']['ok']; ?>" onClick="ok();" />  
			
			<input style="width: 80px" type="button" value="<?php echo $lang['admin']['filemanager']['cancel']; ?>" onClick="window.close();" />
		</td>
	</tr>
</table>
	</body>
</html>
