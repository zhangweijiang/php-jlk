<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$model=new LanmuModel();
$model->table('user');
$id=$_GET['id'];
$int=$model->delete($id);
if($int>0){

	 header('location:/jlk/user_list.php');
}


?>