<?php
//2-masala
$m = 4;
$n = 4;
$arr = [[]];
for ($i = 0; $i < $m; $i++) {
    $sum = 0;
    for ($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = rand(1,100);
        $sum += $arr[$i][$j];
        echo $arr[$i][$j] . "\t";
    }
    echo " -> satr y " . $sum . "\n";
}