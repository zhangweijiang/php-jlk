<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$model=new LanmuModel();
$table=$_GET['table'];
$model->table($table);
$result=$model->select();
if($table==='news_cat'||$table==='product_cat'||$table==='cases_cat'){
	include(ROOT.'lanmu_list_link.html');
}else{
	include(ROOT.'lanmu_list.html');

}




?>