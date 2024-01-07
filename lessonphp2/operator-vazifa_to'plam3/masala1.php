<?php
/**
 * 1-masala.
 * Xonangizni oboyini almashtirmoqchisiz.
 * Xonaning balandligi 2.7m. Tomonlari 5m va 3 m.
 * 1 ta rulon oboy 10 m, eni 1.15. Bozordan faqat butun rulonli oboy olish mumkin.
 * Xonanin oboylash uchun:
 * - nechta rulon oboy kerak;
 * - eni 1.15 bo'lgan oboydan qancha metr oboy ketadi.
 */
$xonaB = 2.70;
$xonaE = 3;
$xonaU = 5;
$oboy = 1.15;
$sum = ($xonaE * $xonaU) * 2;
$sum *= $xonaB;
echo "xona kvadrati " . $sum . " ga ";
$sumOboy = $sum / $oboy;
$sumOboy /= 10;
echo $sumOboy . " rulon oboy ketadi";