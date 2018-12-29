<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
if($_SESSION[md5('islogin')]===true){
	$message=new MessageModel();
	$message->table('message');
	$result=$message->select_by_is_read();
	$model=new LanmuModel();
	$model->table('notebook');
	$notebook=$model->find(1);
	include(ROOT.'admin.html');
}else{
	
	header('location:/jlk/login.php');
}

?>