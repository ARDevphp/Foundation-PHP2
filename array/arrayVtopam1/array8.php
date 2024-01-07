<?php
//8-masala
$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
$m = 5;

function topqirArray($n, $m)
{
    $topildi = 0;
    $topilmadi = 0;

    for ($i = 0; $i < count($n); $i++) {
        if ($n[$i] == $m) {
            $topildi++;
            $topilmadi = 0;
        } else {
            $topilmadi++;
        }
    }

    if ($topildi == 1){
        echo $m . " soni massiv ichida mavjud";
    }else if ($topilmadi >= 1) {
        echo $m  . " soni massiv ichida mavjud emas";
    }
}

topqirArray($n,$m);