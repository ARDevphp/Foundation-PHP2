<?php
/*
 * = qiymat o'zlashtirish
 * += qo'shib o'zlashtirish
 * -= ayrib o'zlashtish
 * *= ko'paytirib o'zlashtirish
 * /= butun bo'lib o'zlashtirish
 * %= qoldiqli bo'lib o'zlashtirish
 * .= string larda ishlatiladi matnni qo'shish va ozlashtirish
 * $a = 20;
 * $b = &$a; link qilish o'zgaruvchilarni bir biriga link qilish bitsi o'zgarsa ikkalasixam o'zgaradi
 */
$x = 34;
$x .= 32;
echo $x;
$str = " Mirzayev ";
$str .= "Abdulaziz";
echo $str;
$y = &$str;
$str = ' salom';
$y = 'aziz';
echo $str;