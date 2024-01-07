<?php
$sum = 45;
$sum++;
//echo $sum;
$a = 99;
$b = 9;
$c = 8;
$c = $a++ / $b-- + --$c;
//echo $c;

$d = 137.5;
$s = 10;
$f = 5;
$f = $d++ / $s++ * --$f;
echo $f;