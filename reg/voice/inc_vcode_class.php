<?php
/**
* ��֤����
* ע:��ҪGD��֧��
*/
session_start();
class vcode{
 private $config;
 private $im;
 private $str;
 
 function __construct(){
  $this->config['width'] = 50;
  $this->config['height'] = 20;
  $this->config['vcode'] = "vcode";
  $this->config['type'] = "default";
  $this->config['length'] = 4;
  $this->config['interfere'] = 10;
  
  $this->str['default'] = "0123456789";
  $this->str['string'] = "0123456789";
  $this->str['int']  = "0123456789";
 }
 
 //����
 public function init($config=array()){
  if (!empty($config) && is_array($config)){
   foreach($config as $key=>$value){
    $this->config[$key] = $value;
   }
  }
 }
 
 //�����֤��
 public function create(){
  if (!function_exists("imagecreate")){
   return false;
  }
  $this->create_do();
 }
 
 //����
 private function create_do(){
  $this->im = imagecreate($this->config['width'],$this->config['height']);
  //���ñ���Ϊ��ɫ
  imagecolorallocate($this->im, 255, 255, 255);
  
  //Ϊ�˱����Ӹ��߿�
  $bordercolor= imagecolorallocate($this->im,37,37,37);
  imagerectangle($this->im,0,0,$this->config['width']-1,$this->config['height']-1,$bordercolor);
  
  //������֤��
  $this->create_str();
  $vcode = $_SESSION[$this->config['vcode']];
  
  //��������
  $fontcolor = imagecolorallocate($this->im,46,46,46);
  for($i=0;$i<$this->config['length'];$i++){
   imagestring($this->im,5,$i*10+6,rand(2,5),$vcode[$i],$fontcolor);
  }
  
  //���������
  $interfere = $this->config['interfere'];
  $interfere = $interfere>30?"30":$interfere;
  if (!empty($interfere) && $interfere>1){
   for($i=1;$i<$interfere;$i++){
    $linecolor = imagecolorallocate($this->im,rand(0,255),rand(0,255),rand(0,255));
    $x = rand(1,$this->config['width']);
    $y = rand(1,$this->config['height']);
    $x2 = rand($x-10,$x+10);
    $y2 = rand($y-10,$y+10);
    imageline($this->im,$x,$y,$x2,$y2,$linecolor);
   }
  }
  
  header("Pragma:no-cache\r\n");
  header("Cache-Control:no-cache\r\n");
  header("Expires:0\r\n");
  header("content-type:image/jpeg\r\n");
  imagejpeg($this->im);
  imagedestroy($this->im);
  exit;
 }
 
 //�õ���֤��
 private function create_str(){
  if ($this->config['type']=="int"){
   for($i=1;$i<=$this->config['length'];$i++){
    $vcode .= rand(0,9);
   }
   $_SESSION[$this->config['vcode']] = $vcode;
   return true;
  }
  $len = strlen($this->str[$this->config['type']]);
  if (!$len){
   $this->config['type'] = "default";
   $this->create_str();
  }
  for($i=1;$i<=$this->config['length'];$i++){
   $offset  = rand(0,$len-1);
   $vcode .= substr($this->str[$this->config['type']],$offset,1);
  }
  $_SESSION[$this->config['vcode']] = $vcode;
  return true;
 }
}
?>