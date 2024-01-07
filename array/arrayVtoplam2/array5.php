<?php
//5-masala

$array = array(4,1,3,2,5,6,8);
$k = 3;

for ($i = 0; $i < count($array); $i = $i + $k) {
    echo $array[$i] . "\n";
}