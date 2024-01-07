<?php

$n = 3666;

function converter($n)
{
    $soat = $n / 60 / 60;
    $daqiqa = $soat % 10;
    $cekund = $daqiqa%60;
    echo $soat . "\n";
    echo $daqiqa . "\n";
    echo $cekund . "\n";
}

converter($n);