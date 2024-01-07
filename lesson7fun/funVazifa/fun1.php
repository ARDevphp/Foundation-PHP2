<?php
//declare(strict_types=1);

function factorial(int $n)
{
    $nb = 1;
    function fac(int $son1, int $son2)
    {
        static $sum = 1;
        if ($son1 <= $son2) {
            $sum *= $son1;
            echo $sum ."\n";

            fac($son1+1,$son2);
        }
    }
    fac($nb,$n);
}

factorial(3);
