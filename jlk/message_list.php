<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$model=new MessageModel();
$result=$model->select();
include(ROOT.'message_list.html');


?>