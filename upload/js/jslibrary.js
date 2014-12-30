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

function getImage(imageName)
{
		findObj('img').src = imageName;
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