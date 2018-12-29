<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$table=$_GET['table'];
$id=$_GET['id'];
$model=new LanmuModel();
$model->table($table);
if($table==='news_cat'||$table==='product_cat'||$table==='cases_cat'){
	$model->id='cat_id';
}
$int=$model->update($_POST,$id);
$smarty=new mySmarty();
     $smarty->clearCache('main.html');
     $smarty->clearCache('about.html');
     $smarty->clearCache('cases.html');
     $smarty->clearCache('product.html');
     $smarty->clearCache('news.html');
     $smarty->clearCache('joins.html');
     $smarty->clearCache('culture.html');
     $smarty->clearCache('contact.html');
     $smarty->clearCache('message.html');
     $smarty->clearCache('newsinfo.html');
      $smarty->clearCache('productinfo.html');
      $smarty->clearCache('casesinfo.html');
include(ROOT.'success_update_lanmu.html');



?>