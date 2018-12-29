<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$id=$_GET['id'];
$table=$_GET['table'];
$model=new LanmuModel();
if($table==='news_cat'||$table==='product_cat'||$table==='cases_cat'){
     $table_sub=str_replace('_cat', '', $table);
     $model->table($table_sub);
     $model->deleteAll($id);
     $model->id='cat_id';
     $model->table($table);
     $int=$model->delete($id);
     if($int>0){
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
          header("location:/jlk/lanmu_list.php?table=".$table);
     }
}else if($table==='news'||$table==='product'||$table==='cases'){
     $model->table($table);
      $int=$model->delete($id);
     if($int>0){
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
          header("location:/jlk/lanmu_detail_list.php?table=".$table);
     }
}else{
      $model->table($table);
      $int=$model->delete($id);
     if($int>0){
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
          header("location:/jlk/lanmu_list.php?table=".$table);
     }
}




?>