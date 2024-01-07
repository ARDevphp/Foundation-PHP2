<?php

function sort_d(array $array):void
{
    for ($i = 0; $i < count($array); $i++) {
        $min = $array[$i];
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($min > $array[$j]) {
                $min = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $min;
            }
        }
        echo $array[$i] . "\t";
    }
}

