/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2004 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * File Name: fckbrowserinfo.js
 * 	Defines the FCKBrowserInfo object that hold some browser informations.
 * 
 * Version:  2.0 FC (Preview)
 * Modified: 2005-03-13 12:38:13
 * 
 * File Authors:
 * 		Frederico Caldeira Knabben (fredck@fckeditor.net)
 */

var FCKBrowserInfo ;

if ( !( FCKBrowserInfo = NS.FCKBrowserInfo ) )
{
	FCKBrowserInfo = NS.FCKBrowserInfo = new Object() ;

	var sAgent = navigator.userAgent.toLowerCase() ;

	FCKBrowserInfo.IsIE			= sAgent.indexOf("msie") != -1 ;
	FCKBrowserInfo.IsGecko		= !FCKBrowserInfo.IsIE ;
	FCKBrowserInfo.IsNetscape	= sAgent.indexOf("netscape") != -1 ;
}