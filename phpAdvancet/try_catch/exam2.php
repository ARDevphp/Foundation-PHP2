<?php

function add($a)
{
    if ($a){
        throw new Exception();
    }
    return $a;
}

try {
    add(1);
    echo 'add';
}catch (Exception $b) {
    print 'xatolik';
    print_r($b);
}