<?php
// Set error reporting to all but notices
error_reporting(E_ALL ^ E_NOTICE);
// display errors
@ini_set("display_errors", false);
// ste argument separator to &amp; from & for XHTML validity
@ini_set("arg_separator.output","&amp;");

// Make sure variables are registered to cope with older php versions
if (PHP_VERSION < "4.1.0") 
{
	$_REQUEST = array_merge($_GET, $_POST, $_COOKIE);
	$_GET = &$HTTP_GET_VARS;
	$_POST = &$HTTP_POST_VARS;
	$_COOKIE = &$HTTP_COOKIE_VARS;
	$_SERVER = &$HTTP_SERVER_VARS;
	$_ENV = &$HTTP_ENV_VARS;
	$_FILES = &$HTTP_POST_FILES;
}

/* START INITIAL SECURITY CHECKS */

// Check for possible global overwrite and end script execution if detected
function unsetGlobals() 
{
	
	if (ini_get('register_globals'))
	{
	
		if (isset($_REQUEST['GLOBALS']) || isset($_FILES['GLOBALS']))
		{
			
			$die = "<h1 style='font-family: Arial, Helvetica, sans-serif; color: red;'>Security Warning</h1><p style='font-family: Arial, Helvetica, sans-serif; color: #000000;'>\nGLOBALS overwrite attempt detected! Script execution has been terminated.</p>\n";
			
			die($die);
		
		}
		
		// Variables that shouldn't be unset
		$skip = array('GLOBALS', '_GET', '_POST', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
			
		$input = array_merge($_GET, $_POST, $_COOKIE, $_SERVER, $_ENV, $_FILES, isset($_SESSION) && is_array($_SESSION) ? $_SESSION : array());
		
		foreach ($input as $key => $value) 
		{
			
			if (!in_array($key, $skip) && isset($GLOBALS[$key]))
			{
				
				unset($GLOBALS[$key]);
			
			}
		
		}
		
	}

}

// Run the function
unsetGlobals();

class clean_all
{
	
	function clean_all(&$data)
	{
		
		if (is_array($data))
		{
			foreach ($data as $key => $val)
			{
				// The keys should usually not contain
				// any meta characters in their names.
				// If so this is possibly an attack attempt. 
				if (preg_match('#([^a-z0-9\-\_\:\@\|])#i', urldecode($key)))
				{
					$die = "<h1 style='font-family: Arial, Helvetica, sans-serif; color: red;'>Security Warning</h1><p style='font-family: Arial, Helvetica, sans-serif; color: #000000;'>\nParsed array keys can not contain illegal characters! Script execution has been halted.</p><p style='font-family: Arial, Helvetica, sans-serif; color: #000000;'>It may be possible to fix this error by deleting your browsers cookies and refresh this page.</p>\n";
					die($die);
				}
				
				// keys to skip
				$skipKeys = array("FCKeditor","offLineContent");
				
				// Multi dimentional arrays.. dig deeper.
				if (is_array($val))
				{
					$this->clean_all($data[$key]);
				}
				elseif(!empty($val) && !in_array($key, $skipKeys))
				{
					$data[$key] = $this->saftey($val);
				}
			
			}
		
		}
		else
		{
			$data = $this->saftey($val);
		}
		
		return $data;
	
	}
	
	function saftey($val)
	{
		
		// strip null bytes
		$val = str_replace("\0", '', $val);
		
		// add slashes if magic quotes is off
		$val = (!get_magic_quotes_gpc ()) ? addslashes ($val) : $val;
		
		return $val;
	
	}

}

$clean = new clean_all($data);

$_GET = $clean->clean_all($_GET);
$_POST = $clean->clean_all($_POST);
$_COOKIE = $clean->clean_all($_COOKIE);
$_REQUEST = $clean->clean_all($_REQUEST);

/* END INITIAL SECURITY CHECKS */

// version info
$ini['ver'] = '3.0.20';
$ini['CCver'] = '30025';
// Brute Force Protection
$ini['bftime'] = 600; 	// seconds
$ini['bfattempts'] = 5;	// login attempts

// Pages that should be server under SSL (if enabled)
$sslPages = array("unsubscribe" => 1,"login" => 1,"logout" => 1,"forgotPass" => 1,"account" => 1,"profile" => 1,"changePass" => 1,"newsletter" => 1,"cart" => 1,"step1" => 1,"step2" => 1,"step3" => 1,"step4" => 1,"step5" => 1,"reg" => 1,"viewOrders" => 1,"viewOrder" => 1,"confirmed" => 1);
?>
