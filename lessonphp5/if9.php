<?php

$str = "Python";
$str1 = substr($str,-2,1);
$str2 = substr($str,-1,1);

if (strlen($str) >= 2) {
    $sum = strlen($str)-2;
    echo substr($str,0,$sum) . $str2 . $str1 . "\n";
}else {
    echo $str . "\n";
}
