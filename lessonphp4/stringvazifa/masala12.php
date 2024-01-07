<?php
$time = "232343";

$soat = substr($time, 0, 2);
$minut = substr($time, 2, 2);
$sekun = substr($time, 4, 2);
$n = ":";

$result = $soat <= 23 && $minut <= 59 && $sekun <= 59;
$sum = $soat . $n . $minut . $n . $sekun;

echo $result ? $sum : "xatolik";