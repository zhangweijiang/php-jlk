<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$smarty=new mysmarty();
$id=$_GET['id'];
if(!isset($id)){
	$model=new LanmuModel();
	$model->table('news_cat');
	$result=$model->select();
	$id=$result[0]['cat_id'];
}
if(!$smarty->isCached('newsinfo.html',$id)){
	$model=new LanmuModel();
	$model->table('about');
	$about_result=$model->select();
	$model->table('cases_cat');
	$cases_result=$model->select();
	$model->table('product_cat');
	$product_result=$model->select();
	$model->table('culture');
	$culture_result=$model->select();
	$model->table('news_cat');
	$news_result=$model->select();
	$model->id='cat_id';
	$news_sub_result=$model->find($_GET['cat_id']);
	$model->table('joins');
	$joins_result=$model->select();
	$model->table('contact');
	$contact_result=$model->select();
	$smarty->assign('about_result',$about_result);
	$smarty->assign('cases_result',$cases_result);
	$smarty->assign('product_result',$product_result);
	$smarty->assign('culture_result',$culture_result);
	$smarty->assign('news_result',$news_result);
	$smarty->assign('joins_result',$joins_result);
	$smarty->assign('contact_result',$contact_result);
	$smarty->assign('news_sub_result',$news_sub_result);
	$model->table('news');
	$model->id='id';
	$news_content=$model->find($id);
	$smarty->assign('news_content',$news_content);
	$result_up=$model->select_up($_GET['time'],$_GET['cat_id']);
	$result_down=$model->select_down($_GET['time'],$_GET['cat_id']);
	$smarty->assign('result_up',$result_up);
	$smarty->assign('result_down',$result_down);
	
	
}
$smarty->display('newsinfo.html',$id);


?>