<?php
$n = 5;

function karra($n)
{
    $sum = $n;
    $i = 1;
    while ($i <= 10) {
        $sum = $sum * $i;
        echo $n . " * " . $i . " = " . $sum . "\n";
        $i++;
        $sum = $n;
    }
}

karra($n);