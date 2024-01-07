<?php
$son1 = -32;
$son2 = -2;
$son3 = 3;
$son4 = 2;
$musbat = 0;
$manfiy = 0;

if ($son1 > 0) {
    $musbat++;
}else{
    $manfiy++;
}
if ($son2 > 0) {
    $musbat++;
}else{
    $manfiy++;
}
if ($son3 > 0) {
    $musbat++;
}else{
    $manfiy++;
}
if ($son4 > 0) {
    $musbat++;
}else{
    $manfiy++;
}
if ($musbat > 0) {
    echo "4 ta sondan " . $musbat . " tasi musbat \n";
}
if ($manfiy > 0) {
    echo "4 ta sondan " . $manfiy . " tasi manfiy \n";
}