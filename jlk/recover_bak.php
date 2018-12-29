<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
date_default_timezone_set("Asia/Shanghai");
define('ACC',true);
require('./include/init.php');
$file=scandir('./backup');
unset($file[0]);
unset($file[1]);
var_dump($file);
include(ROOT.'recover_bak.html');
?>