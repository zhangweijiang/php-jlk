<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$user=new UserModel();
$_POST['password']=md5($_POST['password']);
$data=$user-> _facade($_POST);
$int=$user->update($data,$_GET['id']);
header('location:/jlk/user_list.php');
?>