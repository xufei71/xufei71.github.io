<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php 
include("config.php");
?>
<title>�˺�ע��</title>
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
    <div class="wm_com_logo"><a href="<?php echo $logo_url?>"><img src="style/wm_member_logo.png" alt="��Ա����"></a></div>    
    <div class="wm_com_nav"><span class="cor_l"></span><span class="cor_r"></span>
      <ul class="wm_com_mainnav">
        <li class=""><a href="<?php echo $index_url?>" target="_blank">��ҳ</a></li>
        <li class="on"><a href="index.php">�˺�ע��</a></li>
        <li class=""><a href="changepassword.php">�����޸�</a></li>
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
			<td class="tit"><strong>��Ϸ������</strong></td>
			<td class="select">
			<select name="select" style="font-size:Small; font-weight:normal; height:22px; width:124px;">
			<?php echo $zonestr?>
            <?php echo $zonestr2?>
            <?php echo $zonestr3?>
			</select>
		    <span class="HHHHH">��ѡ��Ҫע��ķ���</span></td>
		  </tr>
		  </tbody></table>
		<table style="width:560px;">
		  <tbody><tr>
			<td class="tit"><strong>��Ϸ�˺ţ�</strong></td>
			<td class="input"><input type="text" name="username" onfocus="show(&#39;r1&#39;),show_msg(1);" onblur="hidd(&#39;r1&#39;),checkPassport(1);" value="" tabindex="1"></td>
			<td class="txt">
				<div id="z1">��6-16λСдӢ����ĸ��������ɣ���λΪ��ĸ</div>
				<div id="m1"></div>
			</td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;">
		  <tbody><tr>
			<td colspan="3"><div id="r1">��ʾ����ע�Ᵽ�ܺ��Լ����˺ź�����.</div></td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;"> 
		  <tbody><tr class="bor_01">
			<td class="tit"><strong>��Ϸ���룺</strong></td>
			<td class="input"><input type="password" name="passwd" maxlength="16" onkeyup="checkPasswdonkeyup2(2),pwStrength(this.value);" onfocus="show(&#39;r2&#39;),show_msg(2);" onblur="hidd(&#39;r2&#39;),checkPasswdonkeyup2(2),pwStrength(this.value);" tabindex="2"></td>
			<td class="txt">
			<div id="z2">��6-16λӢ����ĸ���������</div>
			<div id="m2"></div>
			</td>
		  </tr>
		  
		  </tbody></table>
		  
		  <table style="width:560px;"> 
		   <tbody><tr>
			<td colspan="3"><div id="r2">��ʾ����Զ��Ҫ�ڼ�ʱ��Ϣ��й¶����������߽�����߱��ˣ�������Ա����Ҫ�����ṩ���롣</div></td>
		  </tr>
		  
		   </tbody></table>
		  <table style="width:560px;"> 
		  <tbody><tr>
			<td><i>��ȫ����</i></td>
			<td colspan="2" class="input" style="width:auto;"><em id="strength_L" class="ash">��</em><em id="strength_M" class="ash">��</em><em id="strength_H" class="ash">��</em></td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><b>ȷ�����룺</b></td>
			<td class="input"><input type="password" name="repeatpasswd" maxlength="16" onpaste="return false;" onfocus="show_msg(3);" onblur="checkrepeatPasswdonkeyup2(3);" tabindex="3"></td>
			<td class="txt">
			<div id="z3"></div>
			<div id="m3"></div>
			</td>
		  </tr>
		  </tbody></table>
		  <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>�������䣺</strong></td>
			<td class="input"><input type="text" name="email" onfocus="show_msg(4);" onblur="checkEmail(4);" value="" tabindex="4"></td>
			<td class="txt">
			<div id="z4">��Ҫ����������д</div>
			<div id="m4"></div>
			</td>
		  </tr>
		  </tbody></table>
<!--		    <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>�ܱ����⣺</strong></td>
			<td class="input"><input type="text" name="question" onfocus="show_msg(5);" onblur="checkquestion(5);" value="" tabindex="5"></td>
			<td class="txt">
			<div id="z5">����Ϊ5-18λ</div>
			<div id="m5"></div>
			</td>
		  </tr>
		  </tbody></table>
		    <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>�ܱ��𰸣�</strong></td>
			<td class="input"><input type="text" name="answer" onfocus="show_msg(6);" onblur="checkanswer(6);" value="" tabindex="6"></td>
			<td class="txt">
			<div id="z6">����Ϊ5-18λ</div>
			<div id="m6"></div>
			</td>
		  </tr>
		  </tbody></table>-->
		    <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>�绰���룺</strong></td>
			<td class="input"><input type="text" name="qq" onfocus="show_msg(7);" onblur="checkqq(7);" value="" tabindex="7"></td>
			<td class="txt">
			<div id="z7">����ȷ��д����������һ�����ʱ��Ҫ</div>
			<div id="m7"></div>
			</td>
		  </tr>
          <table style="width:560px;"> 
		  <tbody><tr>
			<td class="tit"><strong>��֤�룺</strong></td>
			<td class="input"><input type="text" name="yzm" onfocus="show_msg(8);" onblur="checkyzm(8);" value="" tabindex="8">
		    <img src="voice/vcode.php" width="121" height="37" align="absbottom" /></td>
			<td class="txt">
			<div id="z8">��4λ�������</div>
			<div id="m8"></div>
			</td>
		  </tr>
		  <table width="547" height="65">
		    <tbody><tr class="bor_02">
		      <td colspan="3"><center><input type="submit" name="Submit" value="����ע��"></center></td>
		      </tr>
		  </tbody></table>
		
		</dd>
	</dl></div>
</div>
</form>
<!--���Ľ���-->
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

<!--�ײ�����-->
<div style="display: none; "><img src="style/wanmei.gif"></div>
</body>
</html>