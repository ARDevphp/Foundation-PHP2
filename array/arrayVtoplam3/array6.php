<?php
//6-masala
$array = array(5, 7, 2, 9, 1, 3, 4, 2);

function selectionSort($sort): void
{
    for ($i = 0; $i < count($sort); $i++) {
        $elementMin = $sort[$i];
        for ($j = $i; $j < count($sort); $j++) {
            if ($elementMin > $sort[$j]) {
                $elementMin = $sort[$j];
                $sort[$j] = $sort[$i];
                $sort[$i] = $elementMin;
            }
        }
        echo $sort[$i] . "\t";
    }
}

selectionSort($array);