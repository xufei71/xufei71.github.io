<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>密码修改</title>
<link href="style/css.css" rel="stylesheet" type="text/css">
<script src="javascript.php" type="text/javascript"></script>
</head>
<body style="text-align: left; ">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<link href="style/wmol_menu.css" rel="stylesheet" type="text/css">
<div class="wm_com_menu menu_for_passport">
  <div class="wm_com_menu_main">
    <div class="wm_com_logo"><a href="<?php echo $logo_url?>"><img src="style/wm_member_logo.png" alt="会员中心"></a></div>    
    <div class="wm_com_nav"><span class="cor_l"></span><span class="cor_r"></span>
      <ul class="wm_com_mainnav">
        <li class=""><a href="http://www.wmsj06.com/" target=_blank">首页</a></li>
		<li class=""><a href="index.php">账号注册</a></li>
        <li class="on"><a href="changepassword.php">密码修改</a></li>		
      </ul>
    </div>
  </div>
</div>
<form action="changepasswd.php" method="post" name="register" onsubmit="return (checkForm('true'));">
<div class="w">
	<div class="reg"><dl>
		<dd>
		  <table style="width:560px;">
		    <tbody>
		      <tr>
			<td class="tit"><strong>游戏大区：</strong></td>
			<td class="select">
			<select name="serverid" style="font-size:Small; font-weight:normal; height:22px; width:124px;">
		            <option value="1" selected="selected">131复古六职业</option>
			</select>
		        </span></td>
		        <td width="250" class="txt"><div id="z20"> 需要修改密码的游戏区</div></td>
	          </tr>
	        </tbody>
	      </table>
		</dd>
		<dt>&nbsp;</dt>
		<dd>
		  <table style="width:560px;">
		    <tbody><tr>
		      <td class="tit"><strong>游戏账号：</strong></td>
		      <td class="input"><input name="username" maxlength="16" onfocus="show('r1'),show_msg(1);" onblur="hidd('r1'),checkPassportpw(1);" tabindex="1" type="text"></td>
		      <td class="txt">
		        <div style="display: none;" id="z1">由6-16位小写英文字母及数字组成，首位为字母</div>
		        <div class="no" style="display: block;" id="m1">账号不能为空</div>
		        </td>
		      </tr>
          </tbody></table>
		  <table style="width:560px;">
		    <tbody><tr>
		      <td colspan="3"><div style="display: none;" id="r1">提示：请输入注册时填写的游戏账号和以下验证资料，如不符则无法修改密码</div></td>
		      </tr>
          </tbody></table>
		  <table style="width:560px;"> 
		    <tbody><tr>
		      <td class="tit"><strong>邮箱：</strong></td>
		      <td class="input"><input name="email" onfocus="show_msg(4);" onblur="checkEmail(4);" tabindex="4" type="text"></td>
		      <td class="txt">
		        <div id="z4">注册时所填写的邮箱地址</div>
		        <div id="m4"></div>
		        </td>
		      </tr>
          </tbody></table>
		  
		 <!-- <table style="width:560px;"> 
		    <tbody><tr>
		      <td class="tit"><strong>密保问题：</strong></td>
			<td class="input"><input name="question" maxlength="18" onfocus="show_msg(5);" onblur="checkquestion(5);" tabindex="5" type="text"></td>
			<td class="txt">
			<div id="z5">长度为5-18位</div>
			<div id="m5"></div>
			</td>
		      </tr>
          </tbody></table>-->
		  <table style="width:560px;">
		    <tr class="bor_01">
		      <td class="tit"><strong>原密码：</strong></td>
		      <td class="input"><input name="oldpasswd" type="password" id="oldpasswd" size="20" maxlength="20" class="text" /></td>
		      <td class="txt"><div id="z2"> 
		        <p>目前使用的密码</p>
		        </div>
	          <div id="m2"></div></td>
	        </tr>
	      </table>
		 <!-- <table style="width:560px;"> 
		    <tbody><tr>
		      <td class="tit"><strong>密保答案：</strong></td>
	        <td class="input"><input name="answer" maxlength="18" onfocus="show_msg(6);" onblur="checkanswer(6);" tabindex="6" type="text"></td>
	        <td class="txt">
	          <div id="z6">长度为5-18位</div>
	          <div id="m6"></div>
	          </td>
		      </tr>
          </tbody></table>
		  <table style="width:560px;"> 
		    <tbody><tr>
		     <td class="tit"><strong>注册时的电话号码：</strong></td>
			<td class="input"><input name="qq" maxlength="14" onfocus="show_msg(7);" onblur="checkqq(7);" tabindex="7" type="text"></td>
			<td class="txt">
			<div id="z7">由11位数字组成</div>
			<div id="m7"></div>
			</td>
		      </tr>
	        </tbody></table>-->
			<table style="width:560px;"> 
	          <tbody>
	            <tr>
	              <td class="tit"><strong>新密码：</strong></td>
	              <td class="input"><input name="passwd" maxlength="16" onkeyup="checkPasswdonkeyup2(9),pwStrength(this.value);" onfocus="show('r2'),show_msg(9);" onblur="hidd('r2'),checkPasswdonkeyup2(9),pwStrength(this.value);" tabindex="9" type="password"></td>
	              <td class="txt">
	                <div id="z9">由6-16位英文字母及数字组成</div>
	                <div id="m9"></div>
                  </td>
                </tr> 
              </tbody></table>
		  <table style="width:560px;"> 
		    <tbody><tr>
		      <td colspan="3"><div id="r2">提示：请记牢你现在所填写的新密码并且不要告诉任何人，并妥善保管好以上的验证资料</div></td>
		      </tr>	  
           </tbody></table>
		  <table style="width:560px;">
		    <tbody><tr>
		      <td><i>安全级别：</i></td>
		      <td colspan="2" class="input" style="width:auto;"><em id="strength_L" class="ash">低</em><em id="strength_M" class="ash">中</em><em id="strength_H" class="ash">高</em></td>
		      </tr>
          </tbody></table>
		  <table style="width:560px;"> 
		    <tbody><tr>
		      <td class="tit"><b>确认密码：</b></td>
		      <td class="input"><input name="repeatpasswd" maxlength="16" onpaste="return false;" onfocus="show_msg(10);" onkeyup="checkrepeatPasswdonkeyup2(10);" tabindex="10" type="password"></td>
		      <td class="txt">
		        <div id="z10"></div>
		        <div id="m10"></div>
		        </td>
		      </tr>
          </tbody></table>
		  <table style="width:560px;"> 
		    <tbody><tr>
		      <!--<td class="tit"><strong>验证码：</strong></td>
			<td class="input"><input name="authcode" maxlength="4" onfocus="show_msg(11);" onkeyup="check_authcode(11)" onclick="this.value=''" tabindex="11" type="text"></td>
			<td class="txt">
			<div id="z11"></div>
			<div id="m11"></div>
			<img id="randimg" src="changepassword_files/authcode.png" alt="验证码"><a href="javascript:verifyImgRefresh()">换一张</a>
			</td>-->
		      </tr>
          </tbody></table>
		  <table height="65" width="547">
		    <tbody><tr class="bor_02">
		      <input name="action" value="submitted2" type="hidden">
		      <td colspan="3"><center><input name="Submit" value="确定" type="submit"></center></td>
		      </tr>
          </tbody></table>
	    </dd>
	</dl>
	</div>
</div>
</form>
<div style="width:888px;margin:20px auto;clear:both">
  <hr><table align="center">
    <tbody>
	
      <tr>
        <td style="padding-right:10px" align="center" valign="middle"></td>
        <td style="padding-right:10px" align="right" valign="middle"></td>
        <td align="center"><div style="text-align:center;"><strong></strong></div>
          Copyright & 2012-2014 ROMAN Co.,Ltd.All Rights Reserved. </td>
        <td style="padding-right:10px" align="right" valign="middle" width="20"></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td height="10"></td>
        <td class="foot_img" align="center" height="10">
        </td><td height="10"></td>
      </tr>
    </tbody>
  </table>
</div>
<div style="display: none; "></div>

 </body></html>