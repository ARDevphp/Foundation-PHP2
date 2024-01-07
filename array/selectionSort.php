<?php

$array = [11,2,3,6,18,4,9,5];//1 2 3 4 5 6 8 9
function sort_a(array $array): array
{
    for ($i = 0; $i < count($array); $i++) {
        $min = $array[$i];//2
        for ($j = $i + 1; $j < count($array); $j++) {//1
            if ($min > $array[$j]) {
                $min = $array[$j];//1
                $array[$j]= $array[$i];//2
                $array[$i] = $min;//
            }
        }
    }
    return $array;
}

print_r(sort_a($array));

$nums = sort_a($array);

for ($i = 0; $i < count($nums); $i++) {
    print $nums[$i] . "\t";
}

