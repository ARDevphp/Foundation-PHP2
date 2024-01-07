<?php
//3-masala
$n = 4;

$array = [];
$sum = 1;

for ($i = 1; $i <= $n; $i++) {
    $array[$i] = $i;
    $sum *= $array[$i];
}
echo $sum . "\n";
