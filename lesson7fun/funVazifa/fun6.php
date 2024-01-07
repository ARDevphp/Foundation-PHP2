<?php
$n = 10;
$nStart = 1;
function acCountAnt($nStart, $n)
{
    static $sum = 0;
    if ($nStart <= $n) {
        if ($nStart % 2 == 1) {
            $sum += $nStart;
        }
        acCountAnt($nStart + 1, $n);
    }

    return $sum . "\n";
}

echo acCountAnt($nStart, $n);


