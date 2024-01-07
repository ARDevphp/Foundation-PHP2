<?php
//4-masala

$n = 5;
$son = 2;
$sum = 1;
$array = [];

for ($i = 0; $i < $n; $i++) {
    $sum = $sum * $son;
    $array[$i] = $sum;
    echo $array[$i] . "\n";
}
