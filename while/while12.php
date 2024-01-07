<?php

$n = 12345233356;
$sum = 0;
$sum1 = 0;
while ($n > 0){
    $n = $n % 10;
    $sum1 += $n;
    echo $sum1;
    $n--;
}
