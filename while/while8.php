<?php
declare(strict_types=1);

$kg = 4500;
$sum = 0;
$i = 0.1;

while ($i <= 1) {
    $sum = $kg * $i;
    $i += 0.1;
    echo $sum . "\n";
}
