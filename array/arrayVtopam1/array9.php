<?php
//9-masala

$arr = array(1, 2, 8, 4, 5, 7, 8, 9);

for ($i = 0; $i < count($arr); $i++) {
    if ($i == 2){
        $index2 = $arr[2];
        $arr[2] = $arr[5];
    }
    if ($i == 5){
        $arr[5] = $index2;
    }
    echo $arr[$i] . "\t";
}

