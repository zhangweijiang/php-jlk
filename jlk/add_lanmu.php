<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
$table=$_GET['table'];
if($table==='news_cat'||$table==='product_cat'||$table==='cases_cat'){
	include(ROOT.'add_lanmu_link.html');
}else{
	include(ROOT.'add_lanmu.html');
}


?>