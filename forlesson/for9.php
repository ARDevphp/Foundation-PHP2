<?php
$matn = "arra randa";
$count = 0;

for ($i = 0; $i <= strlen($matn); $i++) {
    if ($matn[$i] == 'r') {
        $count++;
    }
}
echo "matnda r xarfi " . $count . " marta ishlatigan";