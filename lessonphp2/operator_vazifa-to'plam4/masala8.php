<?php
$x1 = 1;
$y1 = 4;
echo "shoxning daslabki xolati " . $x1 . " " . $y1 . "\n";
$x2 = 3;
$y2 = 4;
$resultX = $x1 - $x2 == 1 || $x1 - $x2 == 0 || $x1 - $x2 == -1;
$resultY = $y1 - $y2 == 1 || $y1 - $y2 == 0 || $y1 - $y2 == -1;
echo $resultX && $resultY  ? "shox yura oladi ": "shox bu katakka yura olmaydi";