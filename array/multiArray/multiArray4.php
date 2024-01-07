<?php
//4-masala
$m = 4;
$n = 4;
$multi = [[]];

for ($i = 0; $i < $m; $i++) {
    $sumElementRow = 0;
    for ($j = 0; $j < $n; $j++) {
        $multi[$i][$j] = rand(1, 100);
        echo $multi[$i][$j] . "\t";
        $sumElementRow += $multi[$i][$j];
    }
    echo $sumElementRow . "\n";
}

$sumArray = [];
$maxRow = [];
$minRow = 0;
$row = 0;

for ($k = 0; $k < $m; $k++) {
    $sumElementRow1 = 0;

    for ($l = 0; $l < $n; $l++) {
        $sumElementRow1 += $multi[$k][$l];//11
    }

    if ($minRow < $sumElementRow1) {
        $row = $multi[$k];
    }

    $sumArray[$k] = $sumElementRow1;
    $maxRow[$k] = $row;
    $minRow = $sumElementRow1;
}

$maxElementRow = $sumArray[0];

for ($a = 1; $a < count($sumArray); $a++) {
    if ($maxElementRow < $sumArray[$a]) {
        $maxElementRow = $sumArray[$a];
    }
}

$sumRow = [];

for ($s = 0; $s < count($maxRow); $s++) {
    $sumMaxRow = 0;
    for ($c = 0; $c < count($maxRow); $c++) {
        $sumMaxRow += $maxRow[$s][$c];
        if ($sumMaxRow == $maxElementRow){
            $sumRow = $maxRow[$s];
        }
    }
}

$minElement = $sumRow[0];
for ($t = 1; $t < count($sumRow); $t++) {
    if ($minElement > $sumRow[$t]){
        $minElement = $sumRow[$t];
    }
}


echo "Satrni eng katta yig'indisi " . $maxElementRow . "\n";
echo "eng kichik element " . $minElement;
