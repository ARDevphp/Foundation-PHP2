<?php
//4-masala
$arr = array(2, 3, 4, 5, 1, 2, 4, 8, 2, 8, 8);
function deleteElement($array): void
{
    $elementCount = 0;

    for ($i = 0; $i < count($array); $i++) {
        $element = $array[$i];
        $counter = 0;
        for ($j = 0; $j < count($array); $j++) {
            if ($element == $array[$j]) {
                $counter++;
            }
        }
        if ($counter <= 2) {
            $arr[$i] = $array[$i];
            $elementCount++;
            echo $arr[$i] . "\t";
        }

    }
    echo "\nElementlar soni " . $elementCount;
}

deleteElement($arr);