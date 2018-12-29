<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/

define('ACC',true);
require('./include/init.php');
exec("dir d:",$log,$status);
var_dump($log);
var_dump($status);