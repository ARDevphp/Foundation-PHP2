<?php

$n1 = 203322;
$yuzminlik = floor($n1/100000);
$onmilik = floor($n1%10000/10);
$minglik = floor($n1 % 1000/10);
$yuzlik = floor($n1 % 100/10);
$onlik = floor($n1 / 10);
$birlik = floor($n1 % 10);

echo $yuzminlik . "\n";
echo $onmilik . "\n";
echo $minglik . "\n";
echo $yuzlik . "\n";
echo $onlik . "\n";
echo $birlik . "\n";