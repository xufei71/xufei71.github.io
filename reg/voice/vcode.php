<?php
/**
* Ĭ����֤��sessionΪvcode.��:$_SESSION['vcode'];
* ע���ڸ�������ֵʱ��Ҫ�ѱ��������Ӻ�SESSION��ͻ
* ע:����֤ʱ���ִ�Сд
*/
include("inc_vcode_class.php");
$v = new vcode;


$config['width'] = 50;   //��֤���
$config['height'] = 20;   //��֤���
$config['vcode'] = "vcode"; //�����֤��ʱ�õ�SESSION
$config['type'] = "default"; //��֤��չʾ������default:��д��ĸ,string:Сд��ĸ,int:����
$config['length'] = 4;   //��֤�볤��
$config['interfere']= 10;   //������ǿ��,��ΧΪ1-30,0���Ϊ�����ø�����
$v->init($config); //����


$v->create();
?>