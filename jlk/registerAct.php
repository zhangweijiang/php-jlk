<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$user=new UserModel();
$_POST['password']=md5($_POST['password']);
$result=$user->select();
$name_bool=false;
$telephone_bool=false;
foreach($result as $v){
	if($v['username']==$_POST['username']){
		$name_bool=true;
	}
	if($v['telephone']==$_POST['telephone']){
		$telephone_bool=true;
	}
}
$data=array();
$data=$user->_facade($_POST);
$data=$user->_autoFill($data);
$int=0;
if($name_bool==false&&$telephone_bool==false){
	$int=$user->add($data);
}
if($int>0){
	header('location:/jlk/login.php');
	exit;
}else{
	if($name_bool==true){
	echo '<script>window.location.href="/jlk/register.php";alert("该会员名已被注册！");</script>';
	exit;
	}else if($telephone_bool==true){
	echo '<script>window.location.href="/jlk/register.php";alert("该手机号已被注册！");</script>';
	exit;
	}
}