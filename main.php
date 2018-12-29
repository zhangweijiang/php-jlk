<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./jlk/include/init.php');
$smarty=new mysmarty();
if(!$smarty->isCached('main.html')){
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
	$model->table('news');
	$news=$model->select_desc_by_time(8);
	$smarty->assign('news',$news);
	$model->table('product');
	$product=$model->select_desc(5);
	$smarty->assign('product',$product);
	$model->table('cases');
	$cases=$model->select_desc(5);
	$smarty->assign('cases',$cases);
	$smarty->assign("json_arr", json_encode($product));
	
}
$smarty->display('main.html');


?>