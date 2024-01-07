<?php
//6-masala

$arr = array(2,3,4,5,6,7,1,3,4,5);

echo "juft index ";
for ($i = 0; $i < count($arr); $i+=2) {
    echo $arr[$i] . "\t";
}

echo "\n toq index ";
for ($j = 1; $j < count($arr); $j+=2) {
    echo $arr[$j] . " \t";
}
