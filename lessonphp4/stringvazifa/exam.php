<?php

$s = "HollE";

function toLowerCase($s)
{
    for ($i = 0; $i < strlen($s); $i++) {
        $str = ord($s[$i]);
        if ($str >= 65 && $str <= 96) {
            $str += 32;
            $s[$i] = chr($str);
        }
    }
    return $s;
}
echo toLowerCase($s);