<?php
//6-masala
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$sum = 0;

for ($i = 0; $i <= count($array); $i++) {
    if ($i % 4 == 0) {
        $sum += $array[$i];
    }
}
echo $sum . "\n";
