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
 * upload.php: Basic file upload manager for the editor. You have
 *   to have set a directory called "userimages" in the root folder
 *   of your web site.
 *
 * Authors:
 *   Frederic TYNDIUK (http://www.ftls.org/ - tyndiuk[at]ftls.org)
 * Modded by:
 *	Alistair Brookbanks CubeCart Limited
 */

// Init var :
include("../../includes/global.inc.php");
require_once("../../classes/db.inc.php");
$db = new db();
include_once("../../includes/functions.inc.php");
$config = fetchDbConfig("config");
include_once("../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../includes/sslSwitch.inc.php");
include("../../classes/gd.inc.php");

include("../includes/auth.inc.php");
if(permission("filemanager","write")==FALSE){
	header("Location: ".$GLOBALS['rootRel']."admin/401.php");
	exit;
}

// End int var

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
	<head>
		<title><?php echo $lang['admin']['filemanager']['file_uploader']; ?></title>
		<link rel="stylesheet" type="text/css" href="../includes/rte/css/fck_dialog.css">
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
	</head>
	<body>
	<p class="pageTitle"><?php echo $lang['admin']['filemanager']['upload_image']; ?></p>
	<?php if($_GET["custom"]==1){ ?>
	
	<form action="<?php echo $GLOBALS['rootRel'];?>admin/filemanager/upload.php" method="post" enctype="multipart/form-data" target="_self">
	<table align="center" border="0" cellpadding="3" cellspacing="0" class="mainTable">
    <tr>
    <td class="tdTitle"><?php echo $lang['admin']['filemanager']['please_browse_img']; ?></td>
  </tr>
  <tr>
    <td><input name="FCKeditor_File" type="file" class="textbox" /></td>
  </tr>
  <tr>
    <td align="center"><input name="submit" type="submit" class="submit" value="<?php echo $lang['admin']['filemanager']['upload_image']; ?>" /></td>
  </tr>
</table>
	<?php if(isset($_GET['redir'])){ ?>
	<input type="hidden" value="0" name="redir" />
	<?php } ?>
	<input type="hidden" value="1" name="custom" />
	</form>
	<?php } else { ?>
	<form>
		<TABLE>
			<tr>
				<td>

<span class="copyText">
<?php
$uploadFileName = str_replace(array(" ","%20"),"_",$_FILES['FCKeditor_File']['name']);
 
if($_FILES['FCKeditor_File']['size'] > $config['maxImageUploadSize']) { 

	echo sprintf($lang['admin']['filemanager']['file_too_big'],$uploadFileName,format_size($config['maxImageUploadSize'])); 
	unlink($_FILES['FCKeditor_File']['tmp_name']);

} elseif (file_exists($GLOBALS['rootDir']."/images/uploads/".$uploadFileName)) {

	echo sprintf($lang['admin']['filemanager']['img_already_exists'],$uploadFileName);

} elseif (!is_uploaded_file($_FILES['FCKeditor_File']['tmp_name'])) { 

	echo $lang['admin']['filemanager']['upload_too_large'];

} elseif ($_FILES['FCKeditor_File']['type'] != "image/jpeg" AND $_FILES['FCKeditor_File']['type'] != "image/png"  AND $_FILES['FCKeditor_File']['type'] != "image/x-png" AND $_FILES['FCKeditor_File']['type'] != "image/pjpeg" AND $_FILES['FCKeditor_File']['type'] != "image/x-jpeg" AND $_FILES['FCKeditor_File']['type'] != "image/gif"){

	echo sprintf($lang['admin']['filemanager']['not_valid_mime'],$uploadFileName);
	unlink($_FILES['FCKeditor_File']['tmp_name']); 

} else {
	
	if (is_uploaded_file($_FILES['FCKeditor_File']['tmp_name'])) {
		$savefile = $GLOBALS['rootDir']."/images/uploads/".$uploadFileName;

	if (move_uploaded_file($_FILES['FCKeditor_File']['tmp_name'], $savefile)) {
		@chmod($savefile, 0644);
		
		// if image is a JPG check thumbnail doesn't exist and if not make one
	$imageFormat = strtoupper(ereg_replace(".*\.(.*)$","\\1",$uploadFileName));
	
	if($imageFormat == "JPG" || $imageFormat == "JPEG" || $imageFormat == "PNG" || ($imageFormat == "GIF" && $config['gdGifSupport']==1)){
		
		
		// check image is not too big
		$size = getimagesize($savefile);
		
		if(($size[0] > $config['gdmaxImgSize']) OR ($size[1] > $config['gdmaxImgSize'])){
		
		@chmod($savefile, 0775);
		
		$thumb=new thumbnail($savefile);
		$thumb->size_auto($config['gdmaxImgSize']);
		$thumb->jpeg_quality($config['gdquality']);
		$thumb->save($savefile);
		
		}
		
		
		if(file_exists($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$uploadFileName)){
			@chmod($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$uploadFileName, 0775);
			unlink($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$uploadFileName);
		}
		
		$thumb=new thumbnail($GLOBALS['rootDir']."/images/uploads/".$uploadFileName);
		// see if we need to resize 
		if(($size[0] > $config['gdthumbSize']) OR ($size[1] > $config['gdthumbSize'])){
			$thumb->size_auto($config['gdthumbSize']);
		} else {
			$thumb->size_auto($size[0]);
		}
		$thumb->jpeg_quality($config['gdquality']);
		$thumb->save($GLOBALS['rootDir']."/images/uploads/thumbs/thumb_".$uploadFileName);
	}
		
		
		echo sprintf($lang['admin']['filemanager']['image_upload_success'],$uploadFileName);
			
			if(!isset($_POST['redir'])){
?>
		<script language=javascript>
		<?php if($_POST["custom"]==1){ ?>
		window.opener.addImage('<?php echo $uploadFileName; ?>', '<?php echo $GLOBALS['rootRel']."images/uploads/".$uploadFileName; ?>') ;
		<?php } else { ?>
		window.opener.setImage('<?php echo $GLOBALS['rootRel']."images/uploads/".$uploadFileName; ?>') ;
		<?php } ?>
		window.close();
		</script>
		<?php
			} // end if not set redir
		
		}
	}

	
} ?></span>
				</td>
			</tr>
		</table>
	</form>
	<?php }  ?>
	<p align="center"><?php if(isset($_POST['submit'])){ ?><input type="button" class="submit" value="<?php echo $lang['admin']['filemanager']['back']; ?>" onClick="history.back()" /><?php } ?> 
	<input type="button" class="submit" value="<?php echo $lang['admin']['filemanager']['close_window']; ?>"  onclick="<?php if(isset($_POST['redir'])) { echo "window.opener.location.reload();"; } ?> javascript:window.close();" /></p>
	</body>
</html>
