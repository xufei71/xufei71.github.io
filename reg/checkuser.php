<?php
include("config.php");
$username=StrToLower(Trim($_GET["username"]));
session_start();
if($username<>""){
	$stra= explode("||",$db_connstr);
	$db_conn_num=count($stra);
	
	$sta="0";
	for ($Num=1; $Num<=$db_conn_num; $Num++) {
		$strb= explode(",",$stra[$Num-1]);
		$conn_addr=$strb[0];
		$conn_user=$strb[1];
		$conn_pawd=$strb[2];
		$conn_dbnm=$strb[3];
		
		$conn = mysql_connect($conn_addr,$conn_user,$conn_pawd) or die("0");
		
		$result = mysql_db_query($conn_dbnm,"select name from users where name='$username'",$conn);
		
		$row=mysql_fetch_row($result);
		if(empty($row)){
			$sta="13";//��ʾ�˺Ų��ظ�,����ʹ��
			$_SESSION['status']="true";
		}else{			
			$sta="14";//��ʾ�˺��ظ�,������ʹ��
			$_SESSION['status']="false";
			break;
		}
		mysql_close();
	}
	
		echo $sta;
}
?>

