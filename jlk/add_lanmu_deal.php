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
     $int=$model->add($_POST);
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
          include(ROOT.'success_add_lanmu.html');
     }


?>