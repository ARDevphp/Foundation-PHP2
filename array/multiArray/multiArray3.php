<?php
//3-masala
$m = 4;
$n = 4;

function multi($m, $n): void
{

    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $multi[$i][$j] = rand(1, 100);
        }
    }

    $sumArr = [];
    for ($k = 0; $k < $m; $k++) {
        $sum = 0;
        for ($l = 0; $l < $n; $l++) {
            $sum += $multi[$l][$k];
            echo $multi[$k][$l] . "\t";
        }
        echo "\n";
        $sumArr[$k] = $sum;
    }

    for ($o = 0; $o < count($sumArr); $o++) {
        echo $sumArr[$o] . "\t";
    }
}

multi($m,$n);