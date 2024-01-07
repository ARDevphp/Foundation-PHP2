<?php
//1-masala

$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);

for ($i = 0; $i < count($n); $i++) {
    $max = $n[$i];
    for ($j = $i + 1; $j < count($n); $j++) {
        if ($max < $n[$j]) {
            $max = $n[$j];
            $n[$j] = $n[$i];
            $n[$i] = $max;
        }
    }
    echo $n[$i] . "\n";
}