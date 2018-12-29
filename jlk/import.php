<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
include(ROOT.'include/config.inc.php');
$root=$_CFG['user'];
$pwd=$_CFG['pwd'];
$db=$_CFG['db'];
$model=new Model();
$sql_file=ROOT."backup/".$_POST['file'];
$sql="select @@basedir as basePath from dual";
$sql_basePath=$model->select_sql($sql);
$sql_basePath=$sql_basePath[0]['basePath']."/bin/";
$rec=$sql_basePath."mysql -u$root -p$pwd jlk<$sql_file";
exec($rec,$log,$status);
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

?>
