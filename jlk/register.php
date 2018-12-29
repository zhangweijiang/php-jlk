<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
if($_SESSION[md5('islogin')]===true){
$id=(int)$_GET['id'];
$model=new UserModel();
$model->pk='id';
$result=$model->find($id);
include(ROOT.'register.html');
}else{
	header('location:/jlk/login.php');
}
