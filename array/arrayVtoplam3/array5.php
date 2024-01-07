<?php
//5-masala
$array = [4, 2, 3, 71, 5, 6, 8, 10, 9, 1];
function bubbleSort($sort): void
{
    for ($i = 0; $i < count($sort); $i++) {
        for ($j = 0; $j < count($sort) - 1; $j++) {
            if ($sort[$j] > $sort[$j + 1]) {
                $element = $sort[$j + 1];
                $sort[$j + 1] = $sort[$j];
                $sort[$j] = $element;
            }
        }
    }

    for ($k = 0; $k < count($sort); $k++) {
        echo $sort[$k] . "\t";
    }
}

bubbleSort($array);