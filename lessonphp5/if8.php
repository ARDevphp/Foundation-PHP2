<?php
/**
 * 8-masala.
 * Eshmat instutga kirish uchun imtihon topshirdi.
 * - Matematika - 3.1 ball.
 * - Fizika - 2.1 ball.
 * - Ona tili - 1.1 ball.
 * Grantga kirish uchun eng past ball 160.4 ball. Kontraktning eng past bali 100 ball. Superkontraktning eng past bali 56 ball.
 * Eshmat: - Matematikadan N ta to’g’ri ishladi - Fizikadan M ta to’g’ri ishladi - Ona tilidan K ta to’g’ri ishladi
 * Eshmat o’qishga grantga kirdimi yoki kontraktgami? Yoki superkonrtaktgami? Yoki umuman kira olmadimi? Shuni aniqlang.
 */
$nBall = 94;
$grant = 160.4;
$kontrakt = 100;
$sKontrakt = 56;

$n = 20;
$matem = 3.1;
$m = 30;
$fizika = 2.1;
$k = 40;
$ona_tili = 1.1;

if ($nBall >= $grant) {
    echo "Eshmat " . $n ." ta matematka savoldan 20 to'g'ri ishladi " . $m ." ta fizika savoldan 30 to'g'ri ishladi ". $k . " ta Onatili savoldan 35 to'g'ri ishladi " . $nBall . " Ball bilan grant asosida o'qishga kirdi";
}else if ($nBall >= $kontrakt) {
    echo "Eshmat " . $n ." ta matematka savoldan 14 to'g'ri ishladi " . $m ." ta fizika savoldan 20 to'g'ri ishladi ". $k . " ta Onatili savoldan 25 to'g'ri ishladi " . $nBall . " Ball bilan kantrakt asosida o'qishga kirdi";
}else if ($nBall >= $sKontrakt) {
    echo "Eshmat " . $n ." ta matematka savoldan 10 to'g'ri ishladi " . $m ." ta fizika savoldan 12 to'g'ri ishladi ". $k . " ta Onatili savoldan 15 to'g'ri ishladi " . $nBall . " Ball bilan grant asosida o'qishga kirdi";
}