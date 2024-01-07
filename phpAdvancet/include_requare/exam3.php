<?php

function show(int $n): array
{
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[$i] = rand(1,100);
    }
    return $array;
}