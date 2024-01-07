<?php
$byte = 10560000000;
$kb = $byte/1024;
$mb = $kb / 1024;
$gb = $mb / 1024;

if ($byte >= 1024) {
    echo $byte . " B => KB " . floor($kb) . "\n";
    if ($kb >= 1024) {
        echo $byte . " B => MB " . floor($mb) . "\n";
        if ($mb >= 1024) echo $byte . " B => GB " . floor($gb) . "\n";
    }
}else {
    echo $byte . "=>" .$byte . "\n";
}