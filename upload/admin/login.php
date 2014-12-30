<?php 
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.18
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	login.php
|   ========================================
|	Admin Session Start	
+--------------------------------------------------------------------------
*/
include("../includes/ini.inc.php");
include("../includes/global.inc.php");
include_once("../classes/db.inc.php");
$db = new db();
include_once("../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../includes/sslSwitch.inc.php");

if($glob['rootRel']=="/"){
    $sessionName = "ccSID";
} else {
    $sessionName = "ccSID".md5($glob['rootRel']);
}

session_name($sessionName);
$sessionDomain = substr($GLOBALS['rootRel'],0, strlen($GLOBALS['rootRel'])-1);
@ini_set("session.cookie_path",$sessionDomain);
session_start();
$_SESSION['ccAdminPath'] = $GLOBALS['rootRel'];

if (isset($_POST['username']) && isset($_POST['password'])){

	$query = sprintf("SELECT adminId FROM ".$glob['dbprefix']."CubeCart_admin_users WHERE username = %s AND password = %s AND failLevel < %s AND blockTime < %s", $db->mySQLSafe($_POST['username']), $db->mySQLSafe(md5($_POST['password'])),$ini['bfattempts'],time());
 
	$result = $db->select($query);
	
	// data for admin session log
	$data["username"] = $db->mySQLSafe($_POST['username']);
	$data["time"] = time();
	$data["ipAddress"] = $db->mySQLSafe($_SERVER['REMOTE_ADDR']);		
		
	if($result == TRUE) 
	{
		// First level of brute force attack prevention
		if($db->blocker($_POST['username'],$ini['bfattempts'],$ini['bftime'],TRUE,"b")==TRUE)
		{
			$blocked = TRUE; 
		}
		else
		{
		
			$data["success"] = 1;
			// Reset fail level
			$newdata['failLevel'] = 0;
			$newdata['blockTime'] = 0;
			$newdata['noLogins'] = "noLogins+1";
			
			$db->update($glob['dbprefix']."CubeCart_admin_users", $newdata, "adminId=".$result[0]['adminId'],$stripQuotes="");
		
		}
	
	} 
	else
	{
		// First level of brute force attack prevention
		$blocked = $db->blocker($_POST['username'],$ini['bfattempts'],$ini['bftime'],FALSE,"b");

		if($blocked==FALSE)
		{
		
			$data["success"] = 0;
			
			// check user exists
			$query = sprintf("SELECT adminId, failLevel, blockTime, username, lastTime FROM ".$glob['dbprefix']."CubeCart_admin_users WHERE username = %s", 
			$db->mySQLSafe($_POST['username']));
	 
			$user = $db->select($query);
			
			// Second level of brute force attack prevention
			if($user==TRUE)
			{
				
				if($user[0]['blockTime']>0 && $user[0]['blockTime']<time())
				{
					// reset fail level and time
					$newdata['failLevel'] = 1;
					$newdata['blockTime'] = 0;
				}
				elseif($user[0]['failLevel']==($ini['bfattempts']-1))
				{
					
					$timeAgo = time() - $ini['bftime'];
					
					if($user[0]['lastTime']<$timeAgo)
					{
						$newdata['failLevel'] = 1;
						$newdata['blockTime'] = 0;
					}
					else
					{
					
						// block the account
						$newdata['failLevel'] = $ini['bfattempts'];
						$newdata['blockTime'] = time()+$ini['bftime'];
					
					}
				
				}
				elseif($user[0]['blockTime']<time())
				{
					
					$timeAgo = time() - $ini['bftime'];
					if($user[0]['lastTime']<$timeAgo)
					{
						$newdata['failLevel'] = 1;
					}
					else
					{
						// set fail level + 1
						$newdata['failLevel'] = $user[0]['failLevel']+1;
					}
					
					$newdata['blockTime'] = 0;
				}
				else
				{
					$msg = "<p class='warnText'>".sprintf($lang['admin']['other']['blocked'],($ini['bftime']/60))."</p>";
					$blocked = TRUE;
				}
				
				if(is_array($newdata))
				{
					$newdata['lastTime'] = time();
					$db->update($glob['dbprefix']."CubeCart_admin_users", $newdata, "adminId=".$user[0]['adminId'],$stripQuotes="");
				}
			
			} 
		
		}
		else
		{
			// login failed message
			$msg = "<p class='warnText'>".$lang['admin']['other']['login_failed']."</p>";

		}
		
	}	
	
	if($blocked==TRUE)
	{
		$msg = "<p class='warnText'>".sprintf($lang['admin']['other']['blocked'],sprintf("%.0f",($ini['bftime']/60)))."</p>";
	}
	else
	{
		
		$insert = $db->insert($glob['dbprefix']."CubeCart_admin_sessions", $data);
			
		// if there is over max amount of login records delete last one
		// this prevents database attacks of bloating
		if($db->numrows("SELECT loginId FROM ".$glob['dbprefix']."CubeCart_admin_sessions")>250)
		{
			$loginId = $db->select("SELECT min(loginId) as id FROM ".$glob['dbprefix']."CubeCart_admin_sessions");
			$db->delete($glob['dbprefix']."CubeCart_admin_sessions","loginId='".$loginId[0]['id']."'");
		}
	
	}
	
	
	if($result == TRUE && $blocked==FALSE) {
		
		$_SESSION['ccAdmin'] = $result[0]['adminId'];
		
		if(isset($_GET['goto']) && !empty($_GET['goto'])){
			header("Location: ".treatGet(urldecode($_GET['goto'])));
			exit;
		} else {
			header("Location: ".$GLOBALS['rootRel']."admin/index.php");
			exit;
		}
		
	}

}
if(isset($_GET['email'])){
	$msg = "<p class='infoText'>".$lang['admin']['other']['new_pass_sent']." ".treatGet(urldecode($_GET['email']))."</p>";
}
?>
<?php include("includes/header.inc.php"); ?>
<?php if(isset($msg)){ ?>
<?php echo stripslashes($msg); ?>
<?php
} elseif(!isset($_SESSION['ccAdmin']) && !isset($_POST['username']) && !isset($_POST['password'])){ ?>
<p class="infoText"><?php echo $lang['admin']['other']['no_admin_sess'];?></p>
<?php } elseif (isset($_POST['username']) && isset($_POST['password'])){ ?>
<p class="warnText"><?php echo $lang['admin']['other']['login_fail_2'];?></p>
<?php } ?>
<!--<p class="warnText"><?php echo $lang['admin']['other']['login_failed'];?></p>-->
<form action="<?php echo $GLOBALS['rootRel'];?>admin/login.php?goto=<?php echo treatGet($_GET['goto']); ?>" method="post" enctype="multipart/form-data" name="ccAdminLogin" target="_self">
<div style="margin: auto; width: 285px; padding-bottom: 10px;"><a href="index.php"><img src="<?php echo $GLOBALS['rootRel']; 
?>admin/images/ccAdminLogoLrg.gif" alt="" width="280" height="55" border="0" title="" /></a></div>
<table border="0" align="center" width="285" cellpadding="4" cellspacing="0" class="mainTable">
  <tr>
    <td colspan="2" class="tdTitle"><?php echo $lang['admin']['other']['login_below'];?></td>
    </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['other']['username'];?></td>
    <td><input name="username" type="text" id="username" class="textbox" value="<?php if(isset($_POST['username'])) echo treatGet($_POST['username']); ?>" /></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['other']['password'];?></td>
    <td><input name="password" type="password" id="password" class="textbox" /></td>
  </tr>
  <tr>
    <td class="tdText"><?php echo $lang['admin']['other']['ip'];?></td>
    <td class="tdText"><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="requestPass.php" class="txtLink"><?php echo $lang['admin']['other']['request_pass'];?></a> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<input name="login" type="submit" id="login" value="<?php echo $lang['admin']['other']['login'];?>" class="submit" />	</td>
  </tr>
</table>
</form>
<div style="margin: auto; width: 285px; padding-top: 10px; text-align: right;" class="copyText">Copyright <a href="http://www.CubeCart.com" target="_blank" class="txtLink">CubeCart Limited</a> 2005.<br />All 
rights reserved.</div>
<?php include("includes/footer.inc.php"); ?>
