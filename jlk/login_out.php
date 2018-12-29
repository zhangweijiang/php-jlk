<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
session_destroy();
header('location:/jlk/login.php');
?>