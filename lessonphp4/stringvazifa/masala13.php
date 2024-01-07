<?php
$number = "+998999999999";
$str = strlen(trim($number, " "));
$result = $str == 13;

echo $result?"telefon nomer":"telefon nomer emas";