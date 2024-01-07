<?php
/**
 * 90, 91 - beeline
 * 93, 94 - ucell
 * 97 - mobiuz
 * 99 - uzmobile
 */
$number = "+998929999999";
$str = strlen(trim($number, " "));
$str1 = substr($number, 4, 2);

$result = $str == 13;
$beeline = ($str1 == 90 || $str1 == 91);
$ucell = ($str1 == 93 || $str1 == 94);
$mobiuz = ($str1 == 97);
$uzmobile = ($str1 == 99);

echo $result && $beeline ? "beeline" : "";
echo $result && $ucell ? "ucell" : "";
echo $result && $mobiuz ? "mobiuz" : "";
echo $result && $uzmobile ? "uzmobile" : "";
echo !$result ? "bunday nomer mavjud emas" : "";
