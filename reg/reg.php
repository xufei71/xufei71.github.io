<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php 
include("config.php");
?>
<title>�˺�ע��</title>
<link href="style/css.css" rel="stylesheet" type="text/css">
<script src="javascript.php" type="text/javascript"></script>
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
        <li class=""><a href="index.php" target="_blank">�˺�ע��</a></li>
        <li class=""><a href="changepasswd.php" target="_blank">�����޸�</a></li>
        <li class=""></li>
        <li class=""><a href="<?php echo $cz_url?>" target="_blank">��Ϸ��ֵ</a></li>
        <li class=""></li>
      </ul>
    </div>
  </div>
</div>
<div style="width:888px;margin:20px auto;clear:both">
<?php require_once('config.php'); ?>
<?php session_start();?>
<?php
//���Դ���
//$y=$_SESSION["vcode"];
//echo "$y";
//$ip=$_SERVER['REMOTE_ADDR'];
//echo "$ip";
//echo "$hostname_conn";
?>
<?php
$username=StrToLower(Trim($_POST["username"]));
$password=StrToLower(Trim($_POST["passwd"]));
$repeatpasswd=StrToLower(Trim($_POST["repeatpasswd"]));
$email=Trim($_POST["email"]);
$question=StrToLower(Trim($_POST["question"]));
$answer=StrToLower(Trim($_POST["answer"]));
$qq=StrToLower(Trim($_POST["qq"]));
if($_POST['yzm'] !== $_SESSION["vcode"])
	{
		//echo "��֤�����";	
		echo "<table width='100%'  >"; //�߿�
		echo"<tr>";
		echo "<td  style='color:red' align='center'>  <font size=4>��֤������������������룡 </font></td>";
		echo "</tr>";
	}
else
	{
		$GameSalt=$username.$password;
		$GameSalt = md5($GameSalt);
		$GameSalt = "0x".$GameSalt;
		$ip=$_SERVER['REMOTE_ADDR'];
		$Link = MySQL_Connect($hostname_conn, $username_conn, $password_conn) or die ("���������Ӵ���������GM");
		MySQL_Select_Db($database_conn, $Link) or die ("Database ".$username_conn." do not exists.");
		$Result = MySQL_Query("SELECT name FROM users WHERE name='$username'") or ("���ݿ�����ʧ�ܣ�.");
		if (MySQL_Num_Rows($Result))
		{
			//echo "�û��� <b>".$a."</b> �Ѿ�����,������ע�ᣡ";
			echo "<table width='100%'  >"; //�߿�
			echo"<tr>";
			echo "<td  style='color:red' align='center'>  <font size=4>�û����Ѿ����ڣ�������ѡ���û��� </font></td>";
			echo "</tr>";
		}
		else 
			{
				if($cash<=0)
					{
						$sql="call adduser('$username',$GameSalt , '$question', '$answer', '$ip', '0', '$email', '0', '0', '0',  '0', '0', '0', '0', '0', '$qq', $GameSalt)"	;
						mysql_query($sql)or die("�˺�ע��ʧ�ܣ�");
						echo "<table width='100%'  >"; //�߿�
						echo"<tr>";
						echo "<td  style='color:blue' align='center'>  <font size=4>��ϲ��ע��ɹ��� </font></td>";
						echo "</tr>";
					}
				else
					{
						$sql="call adduser('$username',$GameSalt , '$question', '$answer', '$ip', '0', '$email', '0', '0', '0',  '0', '0', '0', '0', '0', '$qq', $GameSalt)";
						mysql_query($sql)or die("�˺�ע��ʧ�ܣ�");
						$pt=$cash*10000;
						$ca=$cash*100;
						$sql="select ID from users where `name`='$username'";
						$res=mysql_query($sql);
						$row=mysql_fetch_row($res);
						mysql_free_result($res);
						$id = implode($row);
						$date=date("Y-m-d H:i:s"); 
						$sql = "insert into usecashnow(userid, zoneid, sn, aid, point, cash,status, creatime) values ('$id', '1', '0', '1', '$pt', '$ca', '1', '$date')";
						mysql_query($sql) or die("�˺�ע��ɹ�,����ϵͳ����Ԫ��ʧ�ܣ�");
//						echo '�˺�ע��ɹ�������10���Ӻ��յ�ϵͳ���͵�$cashԪ��!';
						echo "<table width='100%'  >"; //�߿�
						echo"<tr>";
						echo "<td  style='color:blue' align='center'>  <font size=4>�˺�ע��ɹ�!������10���Ӻ��յ�ϵͳ���͵�".$cash."Ԫ��! </font></td>";
						echo "</tr>";
					}
				
			}

	}
?>



</head>

<body>

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