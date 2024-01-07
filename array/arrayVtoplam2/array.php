<?php
//0-masala

$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);

for ($i = 0; $i < count($n); $i++) {
    $indexB = $n[$i];
    for ($j = $i + 1; $j < count($n); $j++) {
        if ($indexB > $n[$j]) {
            $indexB = $n[$j];
            $n[$j] = $n[$i];
            $n[$i] = $indexB;
        }
    }
    echo $n[$i] . "\n";
}

