<?php


for ($i = 1; $i <= 12; $i++) {

    for ($j = 1; $j <= 12; $j++) {

        if ($i == 1) {
            $sum  = $i * $j;
            echo $sum . "\t";
        } else {
            $sum = $i * $j ;
            echo $sum . "\t";
        }
    }
    echo "\n";
}
