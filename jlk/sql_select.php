<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
if($_SESSION[md5('islogin')]===true){
	include(ROOT.'sql_select.html');
}else{
	header('location:/jlk/login.php');
}
?>