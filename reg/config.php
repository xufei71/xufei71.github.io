<?php
error_reporting(E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR);
date_default_timezone_set('Asia/Shanghai') or die('ʱ������ʧ�ܣ�����ϵ����Ա��');


$db_connstr="114.67.140.69:3306,xufei,woainixufei,wm";//�������

$zonestr='<option value="1">131������ְ�����</option>';//һ������

$s=$_POST['select'];
if($s==1)
{
//���ݿ�����	
$hostname_conn = "114.67.140.69:3306";//ip��ַ
$database_conn = "wm";//���ݿ���
$username_conn = "xufei";//�û���һ��Ϊroot
$password_conn = "woainixufei";//���ݿ�����
$cash=0;/*������ע����Ԫ������,��λΪԪ��.*/
}
/*������ע��������,��λΪ����.*/
$uer_times=10;
/*�������logo�����ӵ�ַ*/
$logo_url='http://www.wmsj06.com/';
/*���������ҳ�����ӵ�ַ*/
$index_url='http://www.wmsj06.com/';
/*������ǳ�ֵ�����ӵ�ַ*/
$cz_url='http://www.libaopay.com/buy/?wid=72702';
/*�������ҳ��ײ��ı�����Ϣ������ע��*/
$version='Copyright &#169;  2012-2013 Perfect World Co.,Ltd.All rights reserved.';


	$DBHost = "114.67.140.69:3306";  	// ����IP
	$DBUser = "xufei";  				// ���ݿ��û�
	$DBPassword = "woainixufei";  		// ���ݿ�����
	$DBName1 = "wm";  				// 1�����ݿ�����
	$DBName2 = "";  				// 2�����ݿ�����
	$DBName3 = "";  				// 3�����ݿ�����
	$point = "";			//����Ԫ������λ�� 100��=1�ƽ�	
?>
