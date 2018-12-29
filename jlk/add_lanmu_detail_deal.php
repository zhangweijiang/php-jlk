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
$data=$_POST;
if($table==='product'||$table==='cases'){
     $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
     $str=stripslashes($_POST['link_title']);
     preg_match_all($pattern,$str,$match); 
     if($match[1][0]===null){
          $match[1][0]='';
     }
     $data['img']=$match[1][0]; 
}
if($table==='news'){  
     $data['publish_time']=time();
   
}
$int=$model->add($data);
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
          include(ROOT.'success_add_lanmu_detail.html');
     }


?>