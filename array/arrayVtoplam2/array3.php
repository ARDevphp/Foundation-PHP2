<?php
//3-masala

$array = array(0 => 'blue', 1 => 'red', 2 => 'green string', 3 => 'red');
$suz = 'blue';

//if (in_array($suz,$array)){
//    echo 'bor';
//}else{
//    echo "yo'q";
//}
$bor = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $suz) $bor++;
}
if ($bor >= 1) {
    echo "bor";
} else {
    echo "yo'q";
}