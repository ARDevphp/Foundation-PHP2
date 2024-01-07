<?php
//2-masala
$n = 11;

$array = [];
$sum = 0;

for ($i = 0; $i <= $n; $i++) {
    $array[$i] = $i;
    $sum += $array[$i];
}
echo $sum . "\n";
