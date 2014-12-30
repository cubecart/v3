// display decision alert box
function decision(message, url){
	if(confirm(message)) location.href = url;
}

// open browser window
function openPopUp(url, windowName, w, h, scrollbar) {

           var winl = (screen.width - w) / 2;
           var wint = (screen.height - h) / 2;
           winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scrollbar ;
		   win = window.open(url, windowName, winprops);
           if (parseInt(navigator.appVersion) >= 4) { 
              	win.window.focus(); 
           } 
}

function MM_setTextOfLayer(objName,x,newText) { 
  if ((obj=findObj(objName))!=null) with (obj)
    if (document.layers) {document.write(unescape(newText)); document.close();}
    else innerHTML = unescape(newText);
}

function findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function addImage(fileName, sActiveImage){
	if (fileName != null){
		targetfield = 'imageName';
		targetdiv = 'selectedImage';
	} else {
		targetfield = 'imageName';
		targetdiv = 'selectedImage';
	}
	
	imagefield = findObj(targetfield);

	if (sActiveImage != ''){
		imagehtml = '<img src="'+sActiveImage+'" alt="'+fileName+'"><p><input type="button" class="submit" src="../images/remove.gif" name="remove" style="width: 220px;" value="Remove / Change Image" onclick="addImage(\'\',\'\')" /></p>';
		imagefield.value = fileName;
		MM_setTextOfLayer(targetdiv,'',imagehtml);
		MM_showHideLayers('imageControls','','hide');
	} else {
		imagefield.value = "";
		MM_setTextOfLayer(targetdiv,'','');
		MM_showHideLayers('imageControls','','show');
	}
}

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

function MM_displayStatusMsg(msgStr) { //v1.0
  status=msgStr;
  document.MM_returnValue = true;
}

function jumpMenu(target,object,restore){ 
  eval(target+".location='"+object.options[object.selectedIndex].value+"'");
  if (restore) object.selectedIndex=0;
}

function findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function submitDoc(formName) { 
  var obj;
 
	if (obj=findObj(formName)!=null) 
	{
		findObj(formName).submit(); 
	}
	else 
	{
		alert('The form you are attempting to submit called \'' + formName + '\' couldn\'t be found. Please make sure the submitDoc function has the correct id and name.');
	}

}