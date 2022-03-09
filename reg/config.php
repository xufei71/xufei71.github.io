<?php
error_reporting(E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR);
date_default_timezone_set('Asia/Shanghai') or die('时区设置失败，请联系管理员！');


$db_connstr="114.67.140.69:3306,xufei,woainixufei,wm";//分区检测

$zonestr='<option value="1">131复古六职公益服</option>';//一区名称

$s=$_POST['select'];
if($s==1)
{
//数据库设置	
$hostname_conn = "114.67.140.69:3306";//ip地址
$database_conn = "wm";//数据库名
$username_conn = "xufei";//用户，一般为root
$password_conn = "woainixufei";//数据库密码
$cash=0;/*这里是注册送元宝设置,单位为元宝.*/
}
/*这里是注册间隔设置,单位为分钟.*/
$uer_times=10;
/*这里的是logo的链接地址*/
$logo_url='http://www.wmsj06.com/';
/*这里的是首页的链接地址*/
$index_url='http://www.wmsj06.com/';
/*这里的是充值的链接地址*/
$cz_url='http://www.libaopay.com/buy/?wid=72702';
/*这里的是页面底部的备案信息或其它注释*/
$version='Copyright &#169;  2012-2013 Perfect World Co.,Ltd.All rights reserved.';


	$DBHost = "114.67.140.69:3306";  	// 主机IP
	$DBUser = "xufei";  				// 数据库用户
	$DBPassword = "woainixufei";  		// 数据库密码
	$DBName1 = "wm";  				// 1区数据库名字
	$DBName2 = "";  				// 2区数据库名字
	$DBName3 = "";  				// 3区数据库名字
	$point = "";			//赠送元宝，单位银 100银=1黄金	
?>
