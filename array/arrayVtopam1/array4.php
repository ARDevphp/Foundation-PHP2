<?php
//4-masala
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 == 1) {
        $sum += $array[$i];
    }
}
echo $sum . "\n";
