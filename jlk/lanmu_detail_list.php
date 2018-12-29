<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$table=$_GET['table'];
$model=new LanmuModel();
$model->table($table);
$result=$model->select_join();
include(ROOT.'lanmu_detail_list.html');



?>