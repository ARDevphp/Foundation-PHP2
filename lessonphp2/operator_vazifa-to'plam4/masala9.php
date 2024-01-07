<?php
$x1 = 4;
$y1 = 4;
echo "OTni daslabki xolati " . $x1 . " " . $y1 . "\n";
$x2 = 5;
$y2 = 2;
$result = ($x1 - $x2 == 2) && ($y1 - $y2 == 1 || $y1 - $y2 == -1);
$result1 = ($y1 - $y2 == -2) && ($x1 - $x2 == 1 || $x1 - $x2 == -1);
$result2 = ($x1 - $x2 == -2) && ($y1 - $y2 == 1 || $y1 - $y2 == -1);
$result3 = ($y1 - $y2 == 2) && ($x1 - $x2 == 1 || $x1 - $x2 == -1);
echo ($result || $result1) || ($result2 || $result3) ? "Ot yurdi" : "Ot yura olmaydi";