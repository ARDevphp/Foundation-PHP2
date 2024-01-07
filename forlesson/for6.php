<?php
$n = 1;
$m = 22;
$sum = 0;

for ($i = $n; $i <= $m; $i++) {
    if ($i % 4 == 0) {
        $sum += $i;
    }
}
echo $sum . "\n";

