<?php
$m = 2;
$n = 22;
$count = 0;

for ($i = $m; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $count++;
    }
}
echo $count;