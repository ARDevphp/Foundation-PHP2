<?php
//7-masala
$arr = array(20,6,6,7,6,5,8,9,1);
$k = 3;
$min = abs($arr[0] - $k);//20 - 3 = 17
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if (abs($arr[$i] - $k) < $min) {//6-3=3
        $min = abs($arr[$i] - $k);
        $sum = $i;
    }
}
echo 'K ga eng yaqin son ' . $arr[$sum];
