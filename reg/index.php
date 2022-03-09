<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php 
include("config.php");
?>
<title>账号注册</title>
<link href="style/css.css" rel="stylesheet" type="text/css">
<script src="javascript.php" type="text/javascript"></script>
<style type="text/css">
<!--
.HHHHH {
	color: #F00;
}
-->
</style>
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
        <li class=""><a href="<?php echo $index_url?>" target="_blank">首页</a></li>
        <li class="on"><a href="index.php">账号注册</a></li>
        <li class=""><a href="changepassword.php">密码修改</a></li>
        <li class=""></li>
      </ul>
    </div>
  </div>
</div>
<form action="reg.php" method="post" name="register" onsubmit="return (checkForm(&#39;true&#39;));">
<div class="w">
	<div class="reg"><dl>
		<dd>
		<table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>游戏大区：</strong></td>
			<td class="select">
			<select name="select" style="font-size:Small; font-weight:normal; height:22px; width:124px;">
			<?php echo $zonestr?>
            <?php echo $zonestr2?>
            <?php echo $zonestr3?>
			</select>
		    <span class="HHHHH">请选择要注册的分区</span></td>
		  </tr>
		  </tbody></table>
		<table style="width:560px;">
		  <tbody><tr>
			<td class="tit"><strong>游戏账号：</strong></td>
			<td class="input"><input type="text" name="username" onfocus="show(&#39;r1&#39;),show_msg(1);" onblur="hidd(&#39;r1&#39;),checkPassport(1);" value="" tabindex="1"></td>
			<td class="txt">
				<div id="z1">由6-16位小写英文字母及数字组成，首位为字母</div>
				<div id="m1"></div>
			</td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;">
		  <tbody><tr>
			<td colspan="3"><div id="r1">提示：请注意保管好自己的账号和密码.</div></td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;"> 
		  <tbody><tr class="bor_01">
			<td class="tit"><strong>游戏密码：</strong></td>
			<td class="input"><input type="password" name="passwd" maxlength="16" onkeyup="checkPasswdonkeyup2(2),pwStrength(this.value);" onfocus="show(&#39;r2&#39;),show_msg(2);" onblur="hidd(&#39;r2&#39;),checkPasswdonkeyup2(2),pwStrength(this.value);" tabindex="2"></td>
			<td class="txt">
			<div id="z2">由6-16位英文字母及数字组成</div>
			<div id="m2"></div>
			</td>
		  </tr>
		  
		  </tbody></table>
		  
		  <table style="width:560px;"> 
		   <tbody><tr>
			<td colspan="3"><div id="r2">提示：永远不要在即时消息中泄露您的密码或者将其告诉别人，工作人员不会要求您提供密码。</div></td>
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
			<td class="input"><input type="password" name="repeatpasswd" maxlength="16" onpaste="return false;" onfocus="show_msg(3);" onblur="checkrepeatPasswdonkeyup2(3);" tabindex="3"></td>
			<td class="txt">
			<div id="z3"></div>
			<div id="m3"></div>
			</td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>电子邮箱：</strong></td>
			<td class="input"><input type="text" name="email" onfocus="show_msg(4);" onblur="checkEmail(4);" value="" tabindex="4"></td>
			<td class="txt">
			<div id="z4">重要，请认真填写</div>
			<div id="m4"></div>
			</td>
		  </tr>
		  </tbody></table>
<!--		    <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>密保问题：</strong></td>
			<td class="input"><input type="text" name="question" onfocus="show_msg(5);" onblur="checkquestion(5);" value="" tabindex="5"></td>
			<td class="txt">
			<div id="z5">长度为5-18位</div>
			<div id="m5"></div>
			</td>
		  </tr>
		  </tbody></table>
		    <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>密保答案：</strong></td>
			<td class="input"><input type="text" name="answer" onfocus="show_msg(6);" onblur="checkanswer(6);" value="" tabindex="6"></td>
			<td class="txt">
			<div id="z6">长度为5-18位</div>
			<div id="m6"></div>
			</td>
		  </tr>
		  </tbody></table>-->
		    <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>电话号码：</strong></td>
			<td class="input"><input type="text" name="qq" onfocus="show_msg(7);" onblur="checkqq(7);" value="" tabindex="7"></td>
			<td class="txt">
			<div id="z7">请正确填写忘记密码后找回密码时需要</div>
			<div id="m7"></div>
			</td>
		  </tr>
          <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>验证码：</strong></td>
			<td class="input"><input type="text" name="yzm" onfocus="show_msg(8);" onblur="checkyzm(8);" value="" tabindex="8">
		    <img src="voice/vcode.php" width="121" height="37" align="absbottom" /></td>
			<td class="txt">
			<div id="z8">由4位数字组成</div>
			<div id="m8"></div>
			</td>
		  </tr>
		  <table width="547" height="65">
		    <tbody><tr class="bor_02">
		      <td colspan="3"><center><input type="submit" name="Submit" value="立即注册"></center></td>
		      </tr>
		  </tbody></table>
		
		</dd>
	</dl></div>
</div>
</form>
<!--正文结束-->
<div style="width:888px;margin:20px auto;clear:both">
  <table align="center">
    <tbody>
      <tr>
        <td align="center" valign="middle" style="padding-right:10px"></td>
        <td align="right" valign="middle" style="padding-right:10px"></td>
        <td align="center"><br />
          <div style="text-align:center;"><strong></strong></div>
          <span class="font03"><?php echo $version ?></span><br /></td>
        <td width="20" align="right" valign="middle" style="padding-right:10px"></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td height="10"></td>
        <td height="10" align="center" class="foot_img">
        <td height="10"></td>
      </tr>
    </tbody>
  </table>
</div>

<!--底部结束-->
<div style="display: none; "><img src="style/wanmei.gif"></div>
</body>
</html>