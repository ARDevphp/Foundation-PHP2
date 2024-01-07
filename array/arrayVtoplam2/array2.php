<?php
//2-masala

$web = array('Yii2', 'PHP','MySQL','jQuery','PostgerSQL');
$backend = array('(Backend) |');
shuffle($web);
$array = array_merge($backend,$web);
array_push($array,'va ho kazo');

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "\t";
}