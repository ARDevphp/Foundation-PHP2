<?php
/**
 * Eshmat ovqatlanmoqchi. Uning N so'm puli bor.
 * - Oshni narxi 17500 so`m.
 * - Nonni narxi 1500 so’m.
 * - Salatni narxi 4000 so’m.
 * Eshmatning puli yuqoridagilarning qaysi birilarini sotib olishiga yetishi aniqlang.
 */
$n = 4500;
$osh = 17500;
$non = 1500;
$salat = 4000;
$sum1 = $osh + $non + $salat;
$sum2 = $osh + $salat;
$sum3 = $osh + $non;
$sum4 = $salat + $non;

if ($n >= $sum1) echo "Eshmat barchasini xarid qila oladi \n";
else if ($n >= $sum2) echo "Eshmat Osh va salatni xarit qila oladi \n";
else if ($n >= $sum3) echo "Eshmat Osh va nonni xarit qila oladi \n";
else if ($n >= $sum4 && $n < 17500) echo "Eshmat Non va salatni xarit qila oladi \n";
else if ($n == $osh) echo "Eshmat faqat Oshni xarit qila oladi \n";
else if ($n >= $salat) echo "Eshmat faqat Salatni xarit qila oladi \n";
else if ($n >= $non) echo "Eshmat faqat Non xarit qila oladi \n";