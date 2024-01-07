<?php
//1-masala
$m = 4;
$n = 4;
$min = 2;
$max = 50;

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = rand($min, $max);
        echo $arr[$i][$j] . "\t";
    }
    echo "\n";
}