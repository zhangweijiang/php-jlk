<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$table=$_GET['table'];
if($table==='news_cat'||$table==='product_cat'||$table==='cases_cat'){
	$cat_id=$_GET['cat_id'];
	if(empty($cat_id)){
		$cat_id=1;
	}
	$model=new LanmuModel();
	$model->table($table);
	$model->id='cat_id';
	$result_all=$model->select();
	$result=$model->find($cat_id);
	include(ROOT.'update_lanmu_link.html');
}else{
	$id=$_GET['id'];
	if(empty($id)){
		$id=1;
	}
	$model=new LanmuModel();
	$model->table($table);
	$result_all=$model->select();
	$result=$model->find($id);
	include(ROOT.'update_lanmu.html');
}
?>