<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$model=new LanmuModel();
$model->table('user');
$result=$model->select();
include(ROOT.'user_list.html');



?>