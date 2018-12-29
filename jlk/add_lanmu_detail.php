<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$table=$_GET['table'];
$table_cat=$table.'_cat';
$model=new LanmuModel();
$model->table($table_cat);
$result=$model->select();
include(ROOT.'add_lanmu_detail.html');



?>