<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$model=new MessageModel();
$id=$_GET['id'];
$int=$model->delete($id);
if($int>0){

	 header('location:/jlk/message_list.php');
}


?>