<?php

function recursi($a)
{
    if ($a <= 10){
        echo $a;
        recursi($a+1);
    }
}
recursi(1);