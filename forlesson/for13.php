<?php

$n = 10;

for ($i = 1; $i < $n; $i++) {
    echo "*";
    if ($i == 5) {
        echo "\n";
        for ($j = 0; $j < 5; $j++) {
            echo "  *" . "\n";
        }

    }

    if ($i == 6) {
        echo "*";
    }
}