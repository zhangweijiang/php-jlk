<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$id=$_GET['id'];
$table=$_GET['table'];
$cat_title=$_GET['cat_title'];
$model=new LanmuModel();
$model->table($table);
$result=$model->find($id);
include(ROOT.'update_lanmu_detail.html');
?>