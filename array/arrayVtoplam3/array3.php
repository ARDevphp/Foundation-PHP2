<?php
//3-masala
$arr = array(1,3,2,3,2,3,5,2,4,2,6);
function topqir($array): void
{
    $max = 0;
    $index = 0;

    for ($i = 0; $i < count($array); $i++) {
        $element = $array[$i];
        $counter = 0;

        for ($j = 0; $j < count($array); $j++) {
            if ($element == $array[$j]) {
                $counter++;

                if ($max < $counter) {
                    $max = $counter;
                    $index = $array[$i];
                }
            }
        }
    }

    echo $index . " soni " . $max . " marta topildi";
}

topqir($arr);