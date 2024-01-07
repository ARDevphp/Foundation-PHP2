<?php
declare(strict_types=1);

$str =  "Ushbu matn  26.11.2019 16:59 da yozildi. 1minut kam 5";
function matn($str)
{
    $str1 = $str;
    $str2 = strlen($str);
    $i = 0;

    while ($i <= $str2) {
        if ($str1[$i] == '0' || $str1[$i] == '1' || $str1[$i] == '2' ||
            $str1[$i] == '3' || $str1[$i] == '4' || $str1[$i] == '5' ||
            $str1[$i] == '6' || $str1[$i] == '7'  || $str1[$i] == '8' || $str1[$i] == '9'){
            echo $str1[$i];
        }
        $i++;
    }
}
matn($str);