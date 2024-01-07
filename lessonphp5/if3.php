<?php
$matn = "Bugun ob havo yaxshi";

if (strlen($matn) >= 3) {
    $str = substr($matn,-3);
    echo strtoupper($str) . "\n";
}
if (strlen($matn) < 3) {
    echo strtoupper($matn) . "\n";
}