<?php
//5-masala
$m = 4;
$n = 4;
$multi = [[]];

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $multi[$i][$j] = rand(1, 100 );
        echo $multi[$i][$j] . "\t";
    }
    echo "\n";
}
$sumRowElement = [];

for ($k = 0; $k < count($multi); $k++) {
    $sumRow = 0;
    for ($l = 0; $l < count($multi); $l++) {
        $sumRow += $multi[$l][$k];
    }
    $sumRowElement[$k] = $sumRow;
}

$sumRowElement1 = [];
for ($o = 0; $o < count($sumRowElement); $o++) {
    $sum = 0;
    $sum = $sumRowElement[$o] / $n;
    $sum = floor($sum);
    $sumRowElement1[$o] = $sum;
}
for ($q = 0; $q < count($sumRowElement); $q++) {
    echo $sumRowElement[$q] . "\t";
}

$countArr = [];
echo "\n";
for ($r = 0; $r < count($multi); $r++) {
    $counter = 0;
    for ($s = 0; $s < count($multi); $s++) {
        if ($multi[$s][$r] > $sumRowElement1[$r]) {
            $counter++;

        }
    }
    $countArr[$r] = $counter;
}
for ($p = 0; $p < count($sumRowElement1); $p++) {
    echo $sumRowElement1[$p] . "\t";
}
echo "\n";
for ($t = 0; $t < count($countArr); $t++) {
    echo $countArr[$t] . "\t";
}