<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$id=$_GET['id'];
$status=$_GET['status'];
var_dump($_GET['id']);
var_dump($_GET['status']);
$user=new UserModel();
$result=$user->update_status($id,$status);
if($result>0){
	header('location:/jlk/user_list.php');
}
?>