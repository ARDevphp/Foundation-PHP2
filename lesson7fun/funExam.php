<?php

function dump()
{
    static $a = 10;
    $a += 15;
    echo $a;
}
dump();
dump();
dump();
dump();
