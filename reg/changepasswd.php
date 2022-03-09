<?php 
	//changePasswd.php
	include "config.php";

	$serverid=$_POST['serverid'];
	
	$username=$_POST['username'];		//用户名1
	//$newPasswd=$_POST['oldpasswd'];	//原密码2
	$newPasswd=$_POST['passwd'];		//新密码3
	$configPasswd=$_POST['repeatpasswd'];//确认密码4
	
	
	
	$email = $_POST['email'];			 //邮箱		
	//问题
	//答案	
	
	//QQ号	


	if($serverid==100)
	{
		echo "<script>alert('请选择服务器')</script>";
		echo "<script>document.location.href='changepwd.htm'</script>";
	}
	else
	{
		if($serverid==1)
		{
			$Link = MySQL_Connect($DBHost, $DBUser, $DBPassword) or die ("不能连接到 MySql");
			MySQL_Select_Db($DBName1, $Link) or die ("Database ".$DBName." do not exists.");
		}
		elseif($serverid==2)
		{
			$Link = MySQL_Connect($DBHost, $DBUser, $DBPassword) or die ("不能连接到 MySql");
			MySQL_Select_Db($DBName2, $Link) or die ("Database ".$DBName." do not exists.");
		}
		elseif($serverid==3)
		{
			$Link = MySQL_Connect($DBHost, $DBUser, $DBPassword) or die ("不能连接到 MySql");
			MySQL_Select_Db($DBName3, $Link) or die ("Database ".$DBName." do not exists.");		
		}			
		

		if ($newPasswd != $configPasswd)
		{
			echo "<script>alert('2次密码输入不一样，请重新输入')</script> ";
			echo "<script>document.location.href='changepassword.php'</script>";
		}
		else
		{
			$Salt1 = $username.$newPasswd;
			$Salt1 = md5($Salt1);
			$Salt1 = "0x".$Salt1;
			$sql = "SELECT email FROM users WHERE name = '$username' and email='$email'"; 
					
			$result=mysql_query($sql); 
			$row = mysql_fetch_array($result);
			
			if($email=$row["email"])
			{
				MySQL_Query("call changePasswd('$username',$Salt1)") or die ("Can't execute query.");
				echo "<script>alert('密码修改成功! 请用新密码进入游戏')</script>";
				echo "<script>document.location.href='changepassword.php'</script>";
			}
			else
			{
				echo "<script>alert('邮箱错误！')</script>";
				echo "<script>document.location.href='changepassword.php'</script>";
			}
/* 			elseif()
			{
			//问题
			
			}
			elseif()
			{
			//答案
			}
			elseif()
			{
			//邮箱

			}			
			elseif()
			{
			//QQ号
			}		 */		
		}
	}
?>