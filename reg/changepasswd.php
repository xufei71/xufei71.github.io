<?php 
	//changePasswd.php
	include "config.php";

	$serverid=$_POST['serverid'];
	
	$username=$_POST['username'];		//�û���1
	//$newPasswd=$_POST['oldpasswd'];	//ԭ����2
	$newPasswd=$_POST['passwd'];		//������3
	$configPasswd=$_POST['repeatpasswd'];//ȷ������4
	
	
	
	$email = $_POST['email'];			 //����		
	//����
	//��	
	
	//QQ��	


	if($serverid==100)
	{
		echo "<script>alert('��ѡ�������')</script>";
		echo "<script>document.location.href='changepwd.htm'</script>";
	}
	else
	{
		if($serverid==1)
		{
			$Link = MySQL_Connect($DBHost, $DBUser, $DBPassword) or die ("�������ӵ� MySql");
			MySQL_Select_Db($DBName1, $Link) or die ("Database ".$DBName." do not exists.");
		}
		elseif($serverid==2)
		{
			$Link = MySQL_Connect($DBHost, $DBUser, $DBPassword) or die ("�������ӵ� MySql");
			MySQL_Select_Db($DBName2, $Link) or die ("Database ".$DBName." do not exists.");
		}
		elseif($serverid==3)
		{
			$Link = MySQL_Connect($DBHost, $DBUser, $DBPassword) or die ("�������ӵ� MySql");
			MySQL_Select_Db($DBName3, $Link) or die ("Database ".$DBName." do not exists.");		
		}			
		

		if ($newPasswd != $configPasswd)
		{
			echo "<script>alert('2���������벻һ��������������')</script> ";
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
				echo "<script>alert('�����޸ĳɹ�! ���������������Ϸ')</script>";
				echo "<script>document.location.href='changepassword.php'</script>";
			}
			else
			{
				echo "<script>alert('�������')</script>";
				echo "<script>document.location.href='changepassword.php'</script>";
			}
/* 			elseif()
			{
			//����
			
			}
			elseif()
			{
			//��
			}
			elseif()
			{
			//����

			}			
			elseif()
			{
			//QQ��
			}		 */		
		}
	}
?>