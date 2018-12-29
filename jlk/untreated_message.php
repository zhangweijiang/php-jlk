<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$model=new MessageModel();
$result=$model->select_by_is_read();
include(ROOT.'untreated_message_list.html');


?>