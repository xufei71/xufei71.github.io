// JavaScript Document

/*-- Òş²ØÏÔÊ¾²ã²¿·Ö --*/
function show(id){
	document.getElementById(id).style.display="block"; 
}
function hidd(id){
	document.getElementById(id).style.display="none"; 
}


function show_msg(n){
	var m = document.getElementById('m'+n);
	if(m){
		m.style.display = "none";
	}
	var z = document.getElementById('z'+n);
	if(z){
		z.style.display = "block";
	} 
}

function hidd_msg(n,msg){
	var m = document.getElementById('m'+n);
	if(m){
		m.style.display="block"; 
		m.className=msg; 
	}
	var z = document.getElementById('z'+n);
	if(z){
		z.style.display="none";
	} 
	 
	
}

/*-- headÏÂÀ­ --*/
function head_show(){
	document.getElementById('enter').style.display="block"; 
//	document.getElementById('select_head').style.visibility="hidden"; 
}
function head_hidd(){
	document.getElementById('enter').style.display="none";
//	document.getElementById('select_head').style.visibility="inherit"; 
}

/*-- ÇĞ»»²ã²¿·Ö --*/
function tab(num,befor,id){
	//var el=e.target?e.target.parentNode:e.srcElement.parentNode;
	//var pa=el.parentNode.getElementsByTagName("span");
	
	//var pa = document.getElementById("menu").getElementsByTagName("span");
	for(var i=1;i<=num;i++){
		if(i==befor)
		{
			document.getElementById("menu"+i).className = "current";
		}else{
			document.getElementById("menu"+i).className = "";
		}
	}
	//el.className="current";
	
	for(i=1;i<=num;i++){
		try{
			if(i==befor){
				document.getElementById(id+i).style.display="block";
			}else{
				document.getElementById(id+i).style.display="none";
			}
		}catch(e){ }
	}
	
	var m = document.getElementById("a7");
	if(m){
		m.style.display = "none";
	}
}

function cairead(){
	document.getElementById("a6").style.display="none";
	document.getElementById("a7").style.display="block";
}

/*-- ×¢²áÑ¡Ìî --*/
function choice (a,b){
			if(document.getElementById('sf'+a).style.display=="none"){
				document.getElementById('sf'+a).style.display="block";
				document.getElementById('sf'+b).style.display="none";
			}else{
				document.getElementById('sf'+a).style.display="none";
				document.getElementById('sf'+a).style.display="block";
			}
			if(a==2){
				$('.querensf').show();
			}else{
				$('.querensf').hide();
			}
}

	
/*-- regÑ¡Ìî --*/
function sel()
{
	var a =  document.getElementById('sel_box').value;
	
	for (s=0;s<=7;s++){
		if (s==a){document.getElementById('s'+s).style.display="block";}
		else {document.getElementById('s'+s).style.display="none";}
	}
}
function xuan(x)
{	
	for (s=0;s<=1;s++){
		if (s==x){document.getElementById('s'+s).style.display="block";}
		else {document.getElementById('s'+s).style.display="none";}
	}
}

function getElementPos(elementId) {
var ua = navigator.userAgent.toLowerCase();
var isOpera = (ua.indexOf('opera') != -1);
var isIE = (ua.indexOf('msie') != -1 && !isOpera); // not opera spoof
var el = document.getElementById(elementId);
if(el.parentNode === null || el.style.display == 'none') {
return false;
}      
var parent = null;
var pos = [];     
var box;     
if(el.getBoundingClientRect)    //IE
{         
box = el.getBoundingClientRect();
var scrollTop = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
var scrollLeft = Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
return {x:box.left + scrollLeft, y:box.top + scrollTop};
}else if(document.getBoxObjectFor)    // gecko    
{
box = document.getBoxObjectFor(el); 
var borderLeft = (el.style.borderLeftWidth)?parseInt(el.style.borderLeftWidth):0; 
var borderTop = (el.style.borderTopWidth)?parseInt(el.style.borderTopWidth):0; 
pos = [box.x - borderLeft, box.y - borderTop];
} else    // safari & opera    
{
pos = [el.offsetLeft, el.offsetTop]; 
parent = el.offsetParent;     
if (parent != el) { 
while (parent) { 
pos[0] += parent.offsetLeft; 
pos[1] += parent.offsetTop; 
parent = parent.offsetParent;
} 
}   
if (ua.indexOf('opera') != -1 || ( ua.indexOf('safari') != -1 && el.style.position == 'absolute' )) { 
pos[0] -= document.body.offsetLeft;
pos[1] -= document.body.offsetTop;         
}    
}              
if (el.parentNode) { 
parent = el.parentNode;
} else {
parent = null;
}
while (parent && parent.tagName != 'BODY' && parent.tagName != 'HTML') { // account for any scrolled ancestors
pos[0] -= parent.scrollLeft;
pos[1] -= parent.scrollTop;
if (parent.parentNode) {
parent = parent.parentNode;
} else {
parent = null;
}
}
return {x:pos[0], y:pos[1]};
}

function  thsop(el,op){
	var z = getElementPos(el);
//alert(z.x);
	var l = el.offsetLeft;
	var t = el.offsetTop;
	document.getElementById(op).style.display = 'block';
	document.getElementById(op).style.left = (z.x-15)+'px';
	document.getElementById(op).style.top = (z.y+18)+'px';
}

function thscl(op){ document.getElementById(op).style.display = 'none'; }

function isNull(name,str){//ï¿½Ç·ï¿½ï¿½Ö?by lyj

  if(trim(name.value)==""){
    alert(str);
    name.focus();
    return true;
  }
  return false;
}

function notPhonenumber(name,str){
	var patrn=/^(0[0-9]{2,3}\-)?[2-9][0-9]{6,7}$/;
	if(!patrn.exec(trim(name.value))){
		alert(str);
    	name.focus();
    	return true;
    }
    return false;
}

function notLength(name,length,str){//ï¿½ï¿½ï¿½ï¿½ï¿½Ç·ï¿½ï¿?by lyj
  if(trim(name.value).length!=length){
    alert(str);
    name.focus();
    return true;
  }
  return false;
}

function notNumber(name,str){//ï¿½Ç·ï¿½ï¿½ï¿½ï¿½ï¿½ by lyj ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ğ´
  if(trim(name.value)==""||isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  return false;
}

function notNumber0(name,str){//ï¿½Ç·ï¿½ï¿½ï¿½ï¿½ï¿½ by lyj Î´ï¿½ï¿½Ğ´Ä¬ï¿½ï¿½0
  if(trim(name.value)==""){
    name.value=0;
    return false;
  }
  else if(isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  return false;
}
function notNumber1(name,str){//ï¿½Ç·ï¿½ï¿½ï¿½ï¿½ï¿½ by lyj
  if(trim(name.value)!=""){
      if(isNaN(trim(name.value))){
        alert(str);
        name.focus();
       return true;
     }
  }
  return false;
}
function notLandN(name,length,str){//ï¿½Ì¶ï¿½ï¿½ï¿½ï¿½Èµï¿½ï¿½ï¿½ï¿½ï¿½
  if(trim(name.value).length!=length||isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  return false;
}

function notNY(name,str){//ï¿½Ç·ï¿½Ï·ï¿½ï¿½ï¿½ï¿½ï¿?by lyj
  if(trim(name.value)==""||trim(name.value).length!=6||isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  if(trim(name.value).substring(4,6)>12){
    alert("ï¿½Â·İ²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½12,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  return false;
}
function notNY1(name,str){//ï¿½Ç·ï¿½Ï·ï¿½ï¿½ï¿½ï¿½ï¿?by lyj
  if(trim(name.value).length!=6||isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  if(trim(name.value).substring(4,6)>12){
    alert("ï¿½Â·İ²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½12,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  return false;
}
function notNYR(name,str){//ï¿½Ç·ï¿½Ï·ï¿½ï¿½ï¿½ï¿½ï¿?ï¿½ï¿½ by wkh
  if(trim(name.value)==""||trim(name.value).length!=8||isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  if(trim(name.value).substring(4,6)>12){
    alert("ï¿½Â·İ²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½12,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  if(trim(name.value).substring(6,8)>31){
    alert("ï¿½ï¿½ï¿½Ú²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½31,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  return false;
}
function notNYR1(name,str){//ï¿½Ç·ï¿½Ï·ï¿½ï¿½ï¿½ï¿½ï¿?ï¿½ï¿½ by wkh
  if(trim(name.value).length!=8||isNaN(trim(name.value))){
    alert(str);
    name.focus();
    return true;
  }
  if(trim(name.value).substring(4,6)>12){
    alert("ï¿½Â·İ²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½12,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  if(trim(name.value).substring(6,8)>31){
    alert("ï¿½ï¿½ï¿½Ú²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½31,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  return false;
}
//2003-01-01
function notNYR2(name,str){//ï¿½Ç·ï¿½Ï·ï¿½ï¿½ï¿½ï¿½ï¿?ï¿½ï¿½ by wkh
  if(trim(name.value).length==0){
     return false;
  }
  if(trim(name.value).length!=10){
    alert(str+"ï¿½Ä¸ï¿½Ê½ï¿½ï¿½ï¿½Ô£ï¿½ï¿½ï¿½Ê½Ó¦ï¿½ï¿½ï¿½ï¿½Ë£ï¿?003-01-01");
    name.focus();
    return true;
  }
   if(trim(name.value).substring(4,5)!="-"){
     alert(str+"ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Â·ï¿½Ö®ï¿½ï¿½Ó¦ï¿½ï¿½ï¿½ï¿½lï¿½Óºï¿½,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  if(trim(name.value).substring(5,7)>12){
    alert(str+"ï¿½ï¿½ï¿½Â·İ²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½12,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  if(trim(name.value).substring(7,8)!="-"){
     alert(str+"ï¿½ï¿½ï¿½Â·ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ö®ï¿½ï¿½Ó¦ï¿½ï¿½ï¿½ï¿½lï¿½Óºï¿½,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  if(trim(name.value).substring(8,9)>31){
    alert(str+"ï¿½ï¿½ï¿½ï¿½ï¿½Ú²ï¿½ï¿½Ü´ï¿½ï¿½ï¿½31,ï¿½ï¿½Ë¶ï¿?");
     name.focus();
     return true;
  }
  return false;
}
function notPost(name){//ï¿½Ç·ï¿½ï¿½Ê±ï¿½ by lyj
  if(trim(name.value).length!=6||isNaN(trim(name.value))){
    alert("ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½È·ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½!");
    name.focus();
    return true;
  }
  return false;
}

function notEmail(name){//ï¿½Ç·ï¿½ï¿½ï¿½ï¿½ï¿½
  var str,re;
  re=/([\w|-]+@[\w|-]+\.[\w|-]+)(\.?[\w|-]*)(\.?[\w|-]*)/i;

  re.exec(trim(name.value));
  if (RegExp.$3!=""&&RegExp.$3!="."&&RegExp.$2!=".")
    str=RegExp.$1+RegExp.$2+RegExp.$3;
  else
    if (RegExp.$2!=""&&RegExp.$2!=".")
      str=RegExp.$1+RegExp.$2 ;
  else
    str=RegExp.$1 ;
  if (str!=trim(name.value))
  {
    alert("ï¿½ï¿½ï¿½ï¿½Ğ´ï¿½ï¿½È·ï¿½ï¿½ï¿½Ê¼ï¿½ï¿½ï¿½Ö·");
    name.focus();
    return true;
  }
  return false;
}


function notFloat(name,str){// ï¿½ï¿½Ğ¡ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿?
  var s = parseFloat(trim(name.value));
  if(isNaN(s)){
    alert(str);
    name.focus();
    return true;
  }
  else
    return false;
}
function isIntNumber(name,str){ //
    if( isNaN(trim(name.value))){
         alert(str);
        name.focus();
        return true;
    }
    var s = parseInt(trim(name.value));
    if(trim(name.value)!=s){
        alert(str);
       name.focus();
        return true;
    }
    else
        return false;
}

function notIntNumber(name,str){
    if( isNaN(trim(name.value))){
        alert(str);
        name.focus();
        return true;
    }

	if(name.value.indexOf('.')>=0){
		alert(str);
		name.focus();
		return true;
	}

    var s = parseInt(trim(name.value));
    if(trim(name.value)!=s){
       alert(str);
       name.focus();
       return true;
    }
    else
        return false;
}


function trim(str)
{
    var len;
    var i,j;
    len = str.length;
    i=0;
    j=0;
    while(j<len)
    {
        if(str.charAt(i) == " ")
            i++;
        else
            break;
        j++;
    }
    str = str.substr(i,len-i);
    len = str.length;
    i=len -1;
    j=len-1;
    while(j>0)
    {
        if(str.charAt(i) == " ")
            i--;
        else
            break;
        j--;
    }
    str = str.substr(0,j+1);
    return str;
}
//////////////////////////////////////////////////


function isStringEmputy(str)
{
	var s;
        s = trim(str);
	str = s;
	if(s.length<1)
		return true;
	return false;
}

function replace(str1,c1,c2)
{
	var len,i,c,str;
	str = "";
	len = str1.length;
	for(i=0;i<len;i++)
	{
		c = str1.charAt(i);
		if(c== c1)
			c = c2;
		str += c;
	}
	return str;
}


function toSafe(str)
{
	var re;
	re = /'/g;
	str = str.replace(re,"ï¿½ï¿½");
	re =/\)/g;
	str = str.replace(re,"ï¿½ï¿½");
	re = /\(/g;
	str = str.replace(re,"ï¿½ï¿½");
	re = /%/g;
	str = str.replace(re,"ï¿½ï¿½");
	re = /\[/;
	str = str.replace(re,"ï¿½ï¿½");
	re = /\]/;
	str = str.replace(re,"ï¿½ï¿½");
	return str;
}

function makeToSafe(formName)
{
	var i,form;
	form = eval(formName);
	for(i=0;i<form.elements.length;i++)
	{
		if(form.elements[i].type=="text" || form.elements[i].type=="textarea")
		{
			form.elements[i].value = toSafe(form.elements[i].value);
		}
	}
}

function notValidName(obj)
{
	var objValue = obj.value;
    for(var i=0;i<objValue.length;i++){
            var temtchar = objValue.charAt(i);
          // alert(temtchar+":"+temtchar.charCodeAt(0));
            var Digit = CheckDigit(temtchar);
            var Alphabet = CheckAlphabet(temtchar);
            var line=CheckLine(temtchar);
            if(!Digit&&!Alphabet&&!line){
                 alert("ï¿½ï¿½Â¼ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ä¸ï¿½ï¿½ï¿½ï¿½ï¿½Ö¡ï¿½ï¿½Â»ï¿½ï¿½ßµï¿½ï¿½ï¿½ï¿½!");
			     return true;
            }
           }
  	return false;
}
function notValidPassWord(obj)
{
	var objValue = obj.value;
    for(var i=0;i<objValue.length;i++){
            var temtchar = objValue.charAt(i);
          //  alert(temtchar+":"+temtchar.charCodeAt(0));
            var Digit = CheckDigit(temtchar);
            var Alphabet = CheckAlphabet(temtchar);
            var line=CheckLine(temtchar);
            if(!Digit&&!Alphabet&&!line){
                 alert("ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ä¸ï¿½ï¿½ï¿½ï¿½ï¿½Ö¡ï¿½ï¿½Â»ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½!");
			     return true;
            }
           }
  	return false;
}
function notChinese(obj,alertValue){
	var objValue = obj.value;
    for(var i=0;i<objValue.length;i++){
            var temtchar = objValue.charAt(i);
         //  alert(temtchar+":"+temtchar.charCodeAt(0));
            var Digit = CheckDigit(temtchar);
            var Alphabet = CheckAlphabet(temtchar);

            if(!Digit&&!Alphabet){
                 alert(alertValue+"ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ä¸ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿?");
			     return true;
            }
           }

	return false;
}
function CheckDigit(DigitStr){
        var flag = true;
        var Digitlength = DigitStr.length;
        for(var i=0;i<Digitlength;i++){
                if(DigitStr.charCodeAt(i)<48 || DigitStr.charCodeAt(i)>57){
                        flag = false;
                        break;
                }
        }

        return flag;
}
//ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ä?ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ä¸
function CheckAlphabet(Str){
        var flag = true;
        var Strlength = Str.length;
        for(var i=0;i<Strlength;i++){
                if(Str.charCodeAt(i)<65 ||(90<Str.charCodeAt(i) && Str.charCodeAt(i)<97) || Str.charCodeAt(i)>122){
                   flag = false;
                        break;
                }
        }

        return flag;
}
//ï¿½ï¿½ï¿½ï¿½Â»ï¿½ï¿½ï¿?_)
function CheckLine(Str){
          var flag = true;
        var Strlength = Str.length;
        for(var i=0;i<Strlength;i++){
               if(Str.charCodeAt(i)!=95 ){
                  flag = false;
                  break;
              }
        }
        return flag;
}
function convertToHtml(str)
{
	var re;
	re  = / /g;
	str = str.replace(re,"&nbsp;");
	re  = /\r\n/g;
	str = str.replace(re,"<br>");
	return str;
}

function makeToHtml(formName)
{
	var form;
	form = eval(formName);
	for(i=0;i<form.elements.length;i++)
		if(form.elements[i].type=="textarea")
			form.elements[i].value = convertToHtml(form.elements[i].value);
}


function printinfo(){

     form1.target="_blank";
  var action= form1.action;
  if(form1.printflag="undefine"){
    test=action;
    if(test.indexOf("BeanAddServlet") >0){
      alert("ï¿½ë±£ï¿½ï¿½ï¿½ï¿½Ï¢ï¿½ï¿½ï¿½ï¿½Ê¹ï¿½Ã´ï¿½Ó¡ï¿½ï¿½ï¿½ï¿½");
      form1.target="_self";
      return;
    }
    var a=test.indexOf("Update");
    if(a>0)  test = test.substring(0,a)+"DisplayServlet"+test.substring(a+13);
    //alert(test);
    if(test.indexOf("?")>0)
      form1.action=test+"&printflag=1";
    else
      form1.action=test+"?printflag=1";
  }else{
    form1.all.printflag.value="1";
  }
  form1.submit();
  form1.action=  action;
  form1.target="_self";
}

//ï¿½ï¿½ï¿½ï¿½Ç·ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿?
function checkInputValue(inputvalue){
     var i,len,str;
         str = inputvalue;
         len = str.length;
         str = str.toUpperCase();
         for(i=0;i<len;i++)
         {
               c = str.charAt(i);
               if (c>="0" && c<="9")
               {
                     return true;
               }
         }
	return false;
}


//ï¿½Ş¸Äºï¿½ï¿½ï¿½Ê¾ï¿½Ç·ñ·µ»ï¿½ï¿½Ğ±ï¿½
  function confirmPage(strurl){
      if(confirm("ï¿½ï¿½ï¿½ï¿½É¹ï¿½ï¿½ï¿½Ñ¡ï¿½ï¿?È·ï¿½ï¿½'ï¿½É·ï¿½ï¿½ï¿½ï¿½Ğ±ï¿½;")){
          window.open(strurl,'_self');
      }
    }
//ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Öµï¿½ï¿½Ğ¡ï¿½ï¿½ï¿½ï¿½ï¿½Î»ï¿½ï¿?
function checknumber(value,num,str){
  if(value!=""){
       if(value.indexOf(".")>0){
            var temp=value.length-(value.indexOf(".")+1);
            if(temp>num){
                 alert(str+"ï¿½ï¿½Ğ¡ï¿½ï¿½ï¿½ï¿½Ö»ï¿½ï¿½ï¿½ï¿½"+num+"Î»ï¿½ï¿½");
                 return true;
            }
       }
  }
  return false;
}

function isCharsInBag (s, bag)
{
  var i,c;
  for (i = 0; i < s.length; i++)
  {
        c = s.charAt(i);//ï¿½Ö·ï¿½sï¿½Ğµï¿½ï¿½Ö·ï¿½
    if (bag.indexOf(c) > -1)
        return c;
  }
  return "";
}
//ï¿½ï¿½éº¯ï¿½ï¿?
function ischinese(name)
{

var errorChar;
var badChar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789><,[]{}?/+=|\\'\":;~!#$%()`";
     errorChar = isCharsInBag(name.value, badChar)
        if (errorChar != "" )
    {
    alert("ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½\n");
     name.focus();
        return true;
    }

    return false;
}
 //ï¿½ï¿½éº¯ï¿½ï¿?
function ischineseordata(name)
{

var errorChar;
var badChar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz><,[]{}?/+=|\\'\":;~!#$%()`";
     errorChar = isCharsInBag(name.value, badChar)
        if (errorChar != "" )
    {
    alert("ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½Ä»ï¿½ï¿½ï¿½ï¿½ï¿½\n");
     name.focus();
        return true;
    }

    return false;
}

//
//²Î¿¼µ÷ÓÃjs·½·¨¼°ËµÃ÷

//Ê¹ÓÃ×¢ÒâÊÂÏî£ºÈ«Ñ¡±íµ¥Ãû±ØĞëÎªcheckAll

//¹¦ÄÜ£º¸Ä±äÑ¡Ôñ¼ÇÂ¼µÄ±³¾°É«
//±äÁ¿ËµÃ÷£ºµ±Ç°±íµ¥¶ÔÏó£¬µ±Ç°µã»÷µÄ¸´Ñ¡¿ò¶ÔÏó,µ±Ç°ËùÔÚĞĞµÄ¶ÔÏó

function changeBgColor(form,objCheck,objTr){
	if(objCheck.checked==true)
	   objTr.style.backgroundColor = '#FDFCDA';
	else{
            objTr.style.backgroundColor = '';
            form.checkAll.checked = false;
	}
}

//¹¦ÄÜ£º±íµ¥È«Ñ¡£¬²¢¸Ä±äÑ¡ÔñµÄ±³¾°É«
//±äÁ¿ËµÃ÷£ºµ±Ç°±íµ¥¶ÔÏó,Ñ¡Ôñ¿òÃû³Æ,Ñ¡Ôñ¿òµÄ¸öÊı
function CheckAll(form,checkboxName,checklength)
{
	for (var i=0;i<form.elements.length;i++)
	{
		var e = form.elements[i];
		if (e.name == checkboxName)
		e.checked = form.checkAll.checked;
	}
	if(form.checkAll.checked==true){
		for(var j=1;j<checklength+1;j++){
		  eval("trObj"+j+".style.backgroundColor = '#FDFCDA'");
		}
	}
	else{
		for(var j=1;j<checklength+1;j++){
		  eval("trObj"+j+".style.backgroundColor = ''");
		}
	}
}

//¹¦ÄÜ£º²Ù×÷Ç°ÅĞ¶ÏÊÇ·ñÑ¡ÔñÈ·ÈÏ
//±äÁ¿ËµÃ÷£ºµ±Ç°±íµ¥£¬¶¯×÷ÃèÊöÎÄ×Ö
function CheckInfo(form,Str){
	if(isTrueInfo(form,Str)){
		if(confirm("È·¶¨"+Str+"Âğ?")){
     	 		form.submit();
		}
	return false;
	}
}
function isTrueInfo(form,Str){
	var flag = false;
	for (var i=0;i<form.elements.length;i++){
   		var e = form.elements[i];
       		if(e.name != "checkAll"&&e.checked == true) flag=true;
      	}
	if(flag == false) alert("ÇëÑ¡ÔñÒª"+Str+"µÄÊı¾İ¼ÇÂ¼!");
	return flag;
}

function verifyImgRefresh() {
	document.getElementById("randimg").src="./checknumber.php?r=" + Math.random();
}

function verifyImgRefresh2() {
	document.getElementById("randimg").src="./checknumber.php?r=" + Math.random();
}


function CharMode(iN) {
   if (iN>=48 && iN <=57) 
    return 1;
   if (iN>=65 && iN <=90) 
    return 2;
   if (iN>=97 && iN <=122) 
    return 4;
   else
    return 0; 
}

function bitTotal(num) {
   modes=0;
   for (i=0;i<3;i++) {
    if (num & 1) modes++;
     num>>>=1;
    }
   return modes;
}

function checkStrong(sPW) {
	spwlength = sPW.length;
   if (spwlength<6||spwlength>16)
    return 0; 
    Modes=0;
    for (i=0;i<spwlength;i++) {
     chmod = CharMode(sPW.charCodeAt(i));
     if(chmod==0)
     return 0;
     Modes|=CharMode(sPW.charCodeAt(i));
   }
   chspan = bitTotal(Modes);
   if(chspan==1)
   {
   return 1;
   }
   if(chspan==2)
   {
   		if(spwlength>=6&&spwlength<=8)
   		return 1;
   		if(spwlength>=9&&spwlength<=12)
   		return 2;
   		if(spwlength>=13&&spwlength<=16)
   		return 3;
   }
   if(chspan==3)
   {
   		if(spwlength>=6&&spwlength<=8)
   		return 2;
   		if(spwlength>=9&&spwlength<=12)
   		return 3;
   		if(spwlength>=13&&spwlength<=16)
   		return 4;
   }
}

function GEId(sID){
	return document.getElementById(sID);
}

function Disp(k){
	for(i=1;i<=4;i++)
	{
		if(i==k)
		GEId("idSMT"+i).style.display="inline";
		else
		GEId("idSMT"+i).style.display="none";
	}
}
function checkUserName(s){
	//alert("s£º"+s);
	var patrn=/^[a-z]{1}[a-z0-9]{5,15}$/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}

function checknum(s){
	var patrn=/^[0-9]{14}$/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}
function checkformat(t){
    szMsg="[#%&'\",;:=!^@]";
     //alertStr="";
    for(i=1;i<szMsg.length+1;i++){
     if(t.indexOf(szMsg.substring(i-1,i))>-1){
      //alertStr="ÇëÎğ°üº¬·Ç·¨×Ö·ûÈç[#_%&'\",;:=!^]";
      return true;
     }
    }
    return false;
   }
function checkIdNumber1(s){
	//alert("s£º"+s);
	var patrn=/^[a-z0-9A-Z]{18}|^[a-z0-9A-Z]{15}$/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}

function checkIdNumber2(s){
	//alert("s£º"+s);
	var patrn=/^[a-z0-9A-Z]{6,28}$/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}

function checkRealName(s){
	var patrn = /[0-9]{1,}/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}

function checkIsChinese(str)
{
	
    var pattern = /^[\u4E00-\u9FA5]+$/i;
    if (pattern.test(str))
    {        
        return true;
    }
    else
        return false;
}

function checkPasswd2(s){
	var patrn=/^[a-zA-Z0-9]{8,16}$/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}

function checkPasswd(s){
	//alert("s£º"+s);
	var patrn=/^[a-zA-Z0-9]{6,16}$/;
	if (patrn.exec(s)){
		return true
	}else{
		return false
	}
}


function pwStrength(pwd) {
   O_color="ash";
   L_color="red";
   M_color="blue";
   H_color="green";
   if (pwd==null||pwd==''){
    Lcolor=Mcolor=Hcolor=O_color;
   }
   else {
    S_level=checkStrong(pwd);
    switch(S_level) {
    case 0:
     Lcolor=Mcolor=Hcolor=O_color;
     break;
    case 1:
     Lcolor=L_color;
     Mcolor=Hcolor=O_color;
    break;
    case 2:
     Mcolor=M_color;
     Lcolor=Hcolor=O_color;
    break;
    case 3:
     Hcolor=H_color;
     Lcolor=Mcolor=O_color;
    break;
    case 4:
    Hcolor=H_color;
    Lcolor=Mcolor=O_color;
    break;
    }
   }
   document.getElementById("strength_L").className=Lcolor;
   document.getElementById("strength_M").className=Mcolor;
   document.getElementById("strength_H").className=Hcolor;
return;
}

function newnotEmail(name){//
  var str,re;
  re=/([\w|-]+[\.?\w|-]*@[\w|-]+\.[\w|-]+)(\.?[\w|-]*)(\.?[\w|-]*)/i;

  re.exec(name.value.replace(/(^\s*)|(\s*$)/g,""));
  if (RegExp.$3!=""&&RegExp.$3!="."&&RegExp.$2!=".")
    str=RegExp.$1+RegExp.$2+RegExp.$3;
  else
    if (RegExp.$2!=""&&RegExp.$2!=".")
      str=RegExp.$1+RegExp.$2 ;
  else
    str=RegExp.$1 ;
  if (str!=name.value.replace(/(^\s*)|(\s*$)/g,""))
  {
    return true;
  }
  return false;
}

function checkForm(randflag){
	var FStr = document.forms["register"];
	if(isNull(FStr.username,"ÇëÊäÈëÕËºÅ!")) return false;
        if(FStr.username.value.length>=6&&FStr.username.value.substring(0,6)=="wltest"){
		alert("ÊäÈëÕËºÅÒÑ±»×¢²á!");
		FStr.username.focus();
		return false;
	}
	if(!checkUserName(FStr.username.value)){
		alert("ÊäÈëÕËºÅ²»·ûºÏÃüÃû¹æÔò!");
		FStr.username.focus();
		return false;
	}
	if(isNull(FStr.passwd,"ÇëÊäÈëÃÜÂë!")) return false;
	if(!checkPasswd(FStr.passwd.value)){
		alert("ÊäÈëÃÜÂë²»·ûºÏÃüÃû¹æÔò!");
		FStr.passwd.focus();
		return false;
	}
	if(isNull(FStr.repeatpasswd,"ÇëÊäÈëÈ·ÈÏÃÜÂë!")) return false;
	if(FStr.passwd.value!=FStr.repeatpasswd.value){
		alert("Á½´ÎÊäÈëÃÜÂë²»Ò»ÖÂ!");
		FStr.repeatpasswd.focus();
		return false;
	}

	if(isNull(FStr.email,"ÇëÊäÈëµç×ÓÓÊÏä!")) return false;
	if(newnotEmail(FStr.email)){
		alert("EmailµØÖ·¸ñÊ½²»ÕıÈ·£¡");
		FStr.email.focus();
		return false;
	}
	if(isNull(FStr.question,"ÇëÊäÈëÃÜ±£ÎÊÌâ!")) return false;
	if(isNull(FStr.answer,"ÇëÊäÈëÃÜ±£ÎÊÌâ!")) return false;
	if(isNull(FStr.qq,"ÇëÊäÈëQQºÅÂë!")) return false;

	if(FStr.passwd.value==FStr.username.value){
		alert("ÕËºÅÃÜÂë²»ÄÜÏàÍ¬£¡");
		FStr.passwd.focus();
		return false;
	}
		return true;
}

function InitAjax() {
    var http_request = false;

    if (window.XMLHttpRequest) {
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/xml');
        }
    } else if (window.ActiveXObject) {
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    } if (!http_request) {
        alert('Cannot create an XMLHTTP instance');
        return false;
    }
    return http_request;
}

function checkPassport(a) {
		var FStr = document.register;
		var username = FStr.username.value;
		var msg = document.getElementById('m'+a);
		if(trim(username)==""){
    		msg.innerHTML =  "ÕËºÅ²»ÄÜÎª¿Õ";
    		hidd_msg(a,"no");
    		return;
  		}
  		
  		if(!checkUserName(FStr.username.value)){
  			msg.innerHTML = "ÕËºÅÇëÒÔ×ÖÄ¸¿ªÍ·£¬³¤¶È6~16Î»¡£¿ÉÒÔ°üº¬Êı×Ö¡¢×ÖÄ¸¡£";
  			hidd_msg(a,"no");
  			return;
		}
        
		var status = InitAjax();
		status.open("POST", "checkuser.php?username="+username); 
		status.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
		status.send("");
		var info = "<img src='style/loading.gif' width='16' height='16' border='0' align='absmiddle'>ÕıÔÚ¼ì²âÕËºÅÊÇ·ñ¿ÉÓÃ...";
        msg.innerHTML = info;
        hidd_msg(a,"yes"); 
		if (status) { 
			status.onreadystatechange = function() 
			{ 
				if (status.readyState == 4 && status.status == 200) 
				{ 
					var st = parseInt(status.responseText); 
					if (!isNaN(st)) 
					{
					  switch (st) 
					  {
						case 13:
							var info = "´ËÕËºÅ¿ÉÓÃ";
                            msg.innerHTML = info;
							hidd_msg(a,"yes");
							break;
						case 14:
							var info = "´ËÕËºÅÒÑ¾­±»×¢²á";  
							msg.innerHTML = info;
							hidd_msg(a,"no");
							break;                                           
						case 15:
							show_msg(1);
							break;
						case 0:
                        	var info = "ÆäËü´íÎó";  
							msg.innerHTML = info;
							hidd_msg(a,"no");
							break;
						default:
							var info = "ÆäËü´íÎó";  
							msg.innerHTML = info;
							hidd_msg(a,"no");
							break; 
						}
				    } 
				}	
			} 
		  
		} 
	
} 

function checkPassportpw(a) {
		var FStr = document.register;
		var username = FStr.username.value;
		var msg = document.getElementById('m'+a);
		if(trim(username)==""){
    		msg.innerHTML =  "ÕËºÅ²»ÄÜÎª¿Õ";
    		hidd_msg(a,"no");
    		return;
  		}
  		
  		if(!checkUserName(FStr.username.value)){
  			msg.innerHTML = "ÕËºÅÇëÒÔ×ÖÄ¸¿ªÍ·£¬³¤¶È6~16Î»¡£¿ÉÒÔ°üº¬Êı×Ö¡¢×ÖÄ¸¡£";
  			hidd_msg(a,"no");
  			return;
		}else{
			msg.innerHTML = "ÕËºÅ¸ñÊ½ÕıÈ·";
			hidd_msg(a,"yes");}
} 

function checkPasswdonkeyup2(a) {
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	b = a+1;
	var msg2 = document.getElementById('m'+b);
	
	if(form1.passwd.value==""){
		msg.innerHTML = "ÃÜÂë²»ÄÜÎª¿Õ";
		hidd_msg(a,"no");
		return;
	}
	if(form1.passwd.value==form1.username.value){
		msg.innerHTML = "ÕËºÅÃÜÂë²»ÄÜÏàÍ¬";
		hidd_msg(a,"no");
		return;
	}
	
	if (!checkPasswd(form1.passwd.value)) {
		msg.innerHTML = "ÃÜÂë²»·ûºÏ¹æÔò";
		hidd_msg(a,"no");
	} else {
		msg.innerHTML = "ÃÜÂë¿ÉÒÔÊ¹ÓÃ";
		hidd_msg(a,"yes");
		if (form1.repeatpasswd.value.length > 0
			&(form1.passwd.value!=form1.repeatpasswd.value)) {
			msg2.innerHTML = "Á½´ÎÊäÈëÃÜÂë²»ÏàÍ¬";
			hidd_msg(b,"no");
		}
	}
}

function checkrepeatPasswdonkeyup2(a) {
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	if(form1.passwd.value.length>0){
		if (form1.passwd.value!=form1.repeatpasswd.value) {
		msg.innerHTML = "Á½´ÎÊäÈëÃÜÂë²»ÏàÍ¬";
		hidd_msg(a,"no");
	} else {
		msg.innerHTML = "Á½´ÎÊäÈëÃÜÂëÏàÍ¬";
		hidd_msg(a,"yes");
	}
	}
	
}

function checkEmail(a){
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	
	if(form1.email.value==""){
		msg.innerHTML = "EmailµØÖ·²»ÄÜÎª¿Õ";
		hidd_msg(a,"no");
		return;
	}
	if(form1.email.value.length>60){
		msg.innerHTML = "EmailµØÖ·¹ı³¤£¬Ö§³Ö60Î»";
		hidd_msg(a,"no");
		return;
	}
	if(newnotEmail(form1.email)){
			msg.innerHTML = "EmailµØÖ·¸ñÊ½²»ÕıÈ·";
			hidd_msg(a,"no");
	}else{
		msg.innerHTML = "Email¿ÉÒÔÊ¹ÓÃ";
		hidd_msg(a,"yes");
	}
}
function checkqq(a){
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	
	if(form1.qq.value==""){
		msg.innerHTML = "QQºÅÂë²»ÄÜÎª¿Õ";
		hidd_msg(a,"no");
		return;
	}
	if(form1.qq.value.length>18){
		msg.innerHTML = "QQºÅÂë³¤¶È²»ÄÜ³¬¹ı18Î»";
		hidd_msg(a,"no");
		return;
	}
	if(form1.qq.value.length<5){
		msg.innerHTML = "QQºÅÂë³¤¶È²»ÄÜÉÙÓÚ5Î»";
		hidd_msg(a,"no");
		return;
	}
	if(checknum(form1.qq.value)){
			msg.innerHTML = "QQºÅÂë¸ñÊ½²»ÕıÈ·";
			hidd_msg(a,"no");
	}else{
		msg.innerHTML = "QQºÅÂë¿ÉÒÔÊ¹ÓÃ";
		hidd_msg(a,"yes");
	}
}

//$_POST['yzm'] !== $_SESSION["vcode"]
function checkyzm(a){
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	
	if(form1.yzm.value==""){
		msg.innerHTML = "ÑéÖ¤Âë²»ÄÜÎª¿Õ";
		hidd_msg(a,"no");
		return;
	}
	if(form1.yzm.value.length>4){
		msg.innerHTML = "ÑéÖ¤Âë³¤¶È²»ÄÜ³¬¹ı4Î»";
		hidd_msg(a,"no");
		return;
	}
	if(form1.yzm.value.length<4){
		msg.innerHTML = "ÑéÖ¤Âë³¤¶È²»ÄÜÉÙÓÚ4Î»";
		hidd_msg(a,"no");
		return;
	}
	if(checknum(form1.yzm.value)!==$_SESSION["vcode"]){
			msg.innerHTML = "ÑéÖ¤Âë¸ñÊ½²»ÕıÈ·";
			hidd_msg(a,"no");
	}else{
		msg.innerHTML = "ÑéÖ¤Âë¿ÉÒÔÊ¹ÓÃ";
		hidd_msg(a,"yes");
	}
}

function checkquestion(a){
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	
	if(form1.question.value==""){
		msg.innerHTML = "ÃÜ±£ÎÊÌâ²»ÄÜÎª¿Õ";
		hidd_msg(a,"no");
		return;
	}
	if(form1.question.value.length>18){
		msg.innerHTML = "ÃÜ±£ÎÊÌâ³¤¶È²»ÄÜ³¬¹ı18Î»";
		hidd_msg(a,"no");
		return;
	}
	if(form1.question.value.length<5){
		msg.innerHTML = "ÃÜ±£ÎÊÌâ³¤¶È²»ÄÜÉÙÓÚ5Î»";
		hidd_msg(a,"no");
		return;
	}
	if(checkformat(form1.question.value)){
			msg.innerHTML = "ÃÜ±£ÎÊÌâ¸ñÊ½²»ÕıÈ·";
			hidd_msg(a,"no");
	}else{
		msg.innerHTML = "ÃÜ±£ÎÊÌâ¿ÉÒÔÊ¹ÓÃ";
		hidd_msg(a,"yes");
	}
}
function checkanswer(a){
	var form1 = document.register;
	var msg = document.getElementById('m'+a);
	
	if(form1.answer.value==""){
		msg.innerHTML = "ÃÜ±£´ğ°¸²»ÄÜÎª¿Õ";
		hidd_msg(a,"no");
		return;
	}
	if(form1.answer.value.length>14){
		msg.innerHTML = "ÃÜ±£´ğ°¸³¤¶È²»ÄÜ³¬¹ı14Î»";
		hidd_msg(a,"no");
		return;
	}
	if(form1.answer.value.length<5){
		msg.innerHTML = "ÃÜ±£´ğ°¸³¤¶È²»ÄÜÉÙÓÚ5Î»";
		hidd_msg(a,"no");
		return;
	}
	if(checkformat(form1.answer.value)){
			msg.innerHTML = "ÃÜ±£´ğ°¸¸ñÊ½²»ÕıÈ·";
			hidd_msg(a,"no");
	}else{
		msg.innerHTML = "ÃÜ±£´ğ°¸¸ñÊ½ÕıÈ·";
		hidd_msg(a,"yes");
	}
}

function charlength(str){
    var byteLen=0,len=str.length;
    if(str){
        for(var i=0; i<len; i++){
            if(str.charCodeAt(i)>255){
                byteLen += 2;
            }
            else{
                byteLen++;
            }
        }
        return byteLen;
    }
    else{
        return 0;
    }
}

