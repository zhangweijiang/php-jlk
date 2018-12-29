<?php 
/****
author: zwj
url: http://www.qzjlk.com
****/
define('ACC',true);
require('./include/init.php');
echo $_POST['file'];
unlink(ROOT.'backup/'.$_POST['file']);
?>