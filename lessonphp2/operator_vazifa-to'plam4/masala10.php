<?php
/**
 * 10-masala.
 * Svetafor har soatning boshlanishida 3 minut yashil yonadi. Keyin 2 minut qizil
 * yonadi. Keyin 3 minut sariq yonadi. Soatning N - daqiqasida svetafor qanday rangda?
 * Misol: 44-daqiqada qizil, 56-daqiqada sariq.
 */
$n = 10;
$yashil = ($n > 0 && $n <= 3) || ($n > 8 && $n <= 11) || ($n > 16 && $n <= 19) || ($n > 24 && $n <= 27) || ($n > 32 && $n <= 35) || ($n > 40 && $n <= 43) || ($n > 48 && $n <= 51) || ($n > 56 && $n <= 59);
$qizil = ($n > 3 && $n <= 5) || ($n > 11 && $n <= 13) || ($n > 19 && $n <= 21) || ($n > 27 && $n <= 29) || ($n > 35 && $n <= 37) || ($n > 43 && $n <= 45) || ($n > 51 && $n <= 53);
$sariq = ($n > 5 && $n <= 8) || ($n > 13 && $n <= 16) || ($n > 21 && $n <= 24) || ($n > 29 && $n <= 32) || ($n > 37 && $n <= 40) || ($n > 45 && $n <= 48) || ($n > 53 && $n <= 56);

echo $yashil ? "yashil" : "";
echo $qizil ? "qizil" : "";
echo $sariq ? "sariq" : "";