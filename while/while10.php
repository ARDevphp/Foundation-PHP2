<?php

$n = 12345;
$sum = 0;
$sum1 = 0;
while ($n > 0){
    $n = $n % 10;
    $sum1 += $n;
    $n--;
}
echo $sum1;