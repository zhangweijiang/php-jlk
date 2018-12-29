<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$username=$_POST['username'];
$password=md5($_POST['password']);
$ph_reg = "/^[1][345789]\\d{9}$/";
$name_reg="/^([a-zA-Z]|[\\x80-\\xff]){1}([a-zA-Z0-9]|[\\x80-\xff]|[_]){1,20}$/";
$flag=0;
$bool="false";
if(preg_match($ph_reg,$username)){
	//flag=1代表username的值是手机号
	$flag=1;
}else if(preg_match($name_reg,$username)){
	//flag=2代表username的值是用户名
	$flag=2;
}else{
	$flag=0;
}
$user=new UserModel();
if($flag===1){
	$result=$user->selectbyphone($username,$password);
}else if($flag===2){
	$result=$user->selectbyname($username,$password);
}
if(empty($result)){
	$bool="false";
}else{
	$bool="true";
	$_SESSION[md5("islogin")]=true;
}
echo $bool;

