<?php
//8-masala
$arr = array(1,12,3,2,1,1,5,5,6,3);
$min = 0;

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i-1] == $arr[$i]) {
        $min = $i;
        break;
    }
}
echo $min;