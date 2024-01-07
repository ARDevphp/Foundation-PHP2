<?php

$n = 0;

function son($son)
{
    if ($son <= 0) {
        throw new Exception();
    } else {
        return $son/1;
    }
}

//$a = son(0);

try {
    echo son($n);
} catch (Exception $e) {
    echo 'Xatolik';
}

